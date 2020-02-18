<?php

namespace ForumBundle\Controller;

use ForumBundle\Entity\commentaire;
use  ForumBundle\Form\commentaireType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class commentaireController extends Controller
{
    public function newAction(Request $request)
    {

        $commentaire = new commentaire();
        $form = $this->createForm('ForumBundle\Form\commentaireType', $commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();
            return $this->redirectToRoute('afficher_commentaire');
        }

        return $this->render('@Forum/commentaire/front/ajout.html.twig', array('form' => $form->createView()));
    }
    public function indexAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $commentaire = $em->getRepository('ForumBundle:commentaire')->findAll();

        return $this->render('@Forum/commentaire/front/affiche.html.twig', array(
            'commentaire' => $commentaire));


    }
    public function index1Action(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $commentaire = $em->getRepository('ForumBundle:commentaire')->findAll();

        return $this->render('@Forum/commentaire/back/affiche.html.twig', array(
            'commentaire' => $commentaire));


    }
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $commentaire = $em->getRepository('ForumBundle:commentaire')->findOneBy(array('pseudo'=> $id));
        if (!$commentaire) {
            throw $this->createNotFoundException('No comment found for id '.$id);
        }
        $em->remove($commentaire);
        $em->flush();

        return $this->redirectToRoute('afficherback_commentaire');
    }

}
