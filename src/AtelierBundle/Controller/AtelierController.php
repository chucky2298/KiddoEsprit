<?php

namespace AtelierBundle\Controller;
use AtelierBundle\Form\InscriptionType;
use GererEnfantBundle\Entity\Enfant;
use AtelierBundle\Repository\AtelierRepository;
use AtelierBundle\Entity\Atelier;
use AtelierBundle\Entity\Inscription;
use AtelierBundle\Form\AtelierType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class AtelierController extends Controller
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

        $atelier=new Atelier();
        $enfant=new Enfant();
        $inscription= new Inscription();


        # $atelier=$this->getDoctrine()->getRepository("AtelierBundle:Atelier")->find($id);
        # $enfant = $this->getDoctrine()->getRepository("GererEnfantBundle:Enfant")->findAll();
        $form = $this->createForm(InscriptionType::class,$inscription);



        $form=$form->handleRequest($request);



        if ($form->isSubmitted()) {
            $m = $this->getDoctrine()->getManager();
            var_dump($inscription);
            $inscription->setAtelier($id);
            $inscription->setEnfantid(5);
            $m->persist($inscription);
            $m->flush();

            return $this->redirect($this->generateUrl('atelier_affiche'));
        }


        return $this->render('@Atelier/Atelier/final.html.twig', array('form' => $form->createView()
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
            var_dump($atelier);
            $m->persist($atelier);
            $m->flush();

            return $this->redirect($this->generateUrl('atelier_affiche'));
        }
        return $this->render('@Atelier/Atelier/ajout.html.twig', array('form' => $form->createView()
            // ...
        ));
    }

public function calendrierAction(): Response
{
        return $this->render('@Atelier/Atelier/calendar.html.twig');

}




}




