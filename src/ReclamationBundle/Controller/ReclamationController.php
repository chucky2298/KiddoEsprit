<?php

namespace ReclamationBundle\Controller;

use ReclamationBundle\Entity\Reclamation;
use ReclamationBundle\Form\ReclamationType;
use ReclamationBundle\ReclamationBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ReclamationController extends Controller
{

    public function AjoutAction(Request $request)
    {   $usr= $this->get('security.token_storage')->getToken()->getUser();
        $user_id = $usr->getId();



        $reclamation=new Reclamation();
        $form=$this->createForm(ReclamationType::class,$reclamation);
        $form->handleRequest($request);
        $reclamation->setEtat(0);
        $reclamation->setIdUser($user_id);

        if($form->isSubmitted()) {
            $m=$this->getDoctrine()->getManager();
            $m->persist($reclamation);
            $m->flush();
           return $this->redirect($this->generateUrl('reclamation_affiche'));
        }



        return $this->render("@Reclamation/Reclamation/ajout.html.twig",array('form'=>$form->createView()));
    }


    public function updateAction(Request $request,$id)
    {

        $usr= $this->get('security.token_storage')->getToken()->getUser();
        $target=$usr->getEmail();
        $username='atef.hafdhi@esprit.tn';
        $contenu="";
        if ($request->isMethod('GET')) {
            $contenu = $request->get('contenu');
        }

            $message = \Swift_Message::newInstance()
                ->setSubject('Concernant votre réclamtion')
                ->setFrom($username)
                ->setTo($target)
                ->setBody($contenu);
            $this->get('mailer')->send($message);
        #{        var_dump($contenu).die();  #}


            $entityManager = $this->getDoctrine()->getManager();
            $product = $entityManager->getRepository(Reclamation::class)->find($id);
            $product->setEtat(1);

            $entityManager->flush();


        return $this->redirectToRoute("reclamation_affiche");


    }






    /**
     * @Route("/delete")
     */
    public function deleteAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $reclamation= $em->getRepository("ReclamationBundle:Reclamation")->find($id);
        $em->remove($reclamation);
        $em->flush();
        return $this->redirectToRoute("reclamation_affiche");
    }

    /**
     * @Route("/afficher")
     */
    public function afficherAction()
    {
        $em= $this->getDoctrine()->getManager();
        $reclamation= $em->getRepository("ReclamationBundle:Reclamation")->findAll();
        return $this->render("@Reclamation/Reclamation/afficher.html.twig",array('reclamations'=>$reclamation));

    }



}
