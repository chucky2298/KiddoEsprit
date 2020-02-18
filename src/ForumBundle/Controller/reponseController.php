<?php

namespace ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class reponseController extends Controller
{
    public function index1Action(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $reponse = $em->getRepository('ForumBundle:reponse')->findAll();

        return $this->render('@Forum/reponse/back/affiche.html.twig', array(
            'reponse' => $reponse));


    }
    public function deleteAction(Request $request, $ref)
    {
        $em = $this->getDoctrine()->getManager();
        $reponse = $em->getRepository('ForumBundle:reponse')->findOneBy($ref);

        $em->remove($reponse);
        $em->flush();
        return $this->redirectToRoute('afficher_reponse');
    }

}

