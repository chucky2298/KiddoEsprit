<?php

namespace AtelierBundle\Controller;


use AtelierBundle\Form\InscriptionType;
use Doctrine\ORM\Mapping\Entity;
use GererEnfantBundle\Entity\Enfant;
use AtelierBundle\Repository\AtelierRepository;
use AtelierBundle\Entity\Atelier;
use AtelierBundle\Entity\Inscription;
use AtelierBundle\Form\AtelierType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class AtelierController extends AbstractController
{


    /**
     * @Route("/Afficher")
     */
    public function AfficherAction()
    {
        $em = $this->getDoctrine()->getManager();
        $atelier = $em->getRepository("AtelierBundle:Atelier")->findAll();
        return $this->render("@Atelier/Atelier/afficher.html.twig", array('ateliers' => $atelier));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $reclamation = $em->getRepository("AtelierBundle:Atelier")->find($id);
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute("atelier_affiche");

    }

    public function afficheratelierAction()
    {
        $em = $this->getDoctrine()->getManager();
        $atelier = $em->getRepository("AtelierBundle:Atelier")->findAll();

        return $this->render("@Atelier/Atelier/afficheratelier.html.twig", array('ateliers' => $atelier));


    }

    /**
     * @Route("/update")
     */
    public function updateAction()
    {

    }


    /**
     * @Route("/Ajout")
     */


    public function inscrireatelierAction(Request $request,$id)
    {



        # $atelier=$this->getDoctrine()->getRepository("AtelierBundle:Atelier")->find($id);
        # $enfant = $this->getDoctrine()->getRepository("GererEnfantBundle:Enfant")->findAll();
        //$form = $this->createForm(InscriptionType::class,$inscription);
        $form = $this->createFormBuilder()
            ->add('enfant', EntityType::class,['class'=>Enfant::class])
            ->add('save', SubmitType::class, ['label' => 'S inscrire'])
            ->getForm();


        $form=$form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $atelier = $em->getRepository(Atelier::class)->find($id);

          dump($atelier);

        if ($form->isSubmitted()) {

            $inscription = new Inscription();
            $enfant = ($form->getData()['enfant']);
            dump($enfant->getId());
            $inscription->setEnfantid($enfant->getId());
            $inscription->setAtelier($em->getRepository(Atelier::class)->find($id)->getId());
            /*$inscription->setAtelier($id);
            $inscription->setEnfantid(5);*/
            $em->persist($inscription);
            $em->flush();
            //return $this->redirect($this->generateUrl('atelier_affiche'));
        }


        return $this->render('@Atelier/Atelier/final.html.twig', array('form' => $form->createView(),'atelier'=>$atelier
            // ...
        ));

    }
    public function AjoutAction(Request $request)
    {
        $atelier = new Atelier();
        $form = $this->createForm(AtelierType::class, $atelier);

        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $m = $this->getDoctrine()->getManager();
            //var_dump($atelier);
            $m->persist($atelier);
            $m->flush();

            return $this->redirect($this->generateUrl('atelier_affiche'));
        }
        return $this->render('@Atelier/Atelier/ajout.html.twig', array('form' => $form->createView()
            // ...
        ));
    }

public function calendrierAction()
{
        return $this->render('@Atelier/Atelier/calendar.html.twig');

}




}




