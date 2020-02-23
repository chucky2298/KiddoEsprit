<?php

namespace GererEnfantBundle\Controller;

use GererEnfantBundle\Entity\Enfant;
use GererEnfantBundle\Form\EnfantType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EnfantController extends Controller
{
    public function ajoutEnfantAction(Request $request)
    {
        $usr= $this->get('security.token_storage')->getToken()->getUser();
        $user_id = $usr->getId();
        $enfant = new enfant();
        $form = $this->createForm(EnfantType::class, $enfant);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $enfant->setParentId($user_id);
            $em = $this->getDoctrine()->getManager();
            $em->persist($enfant);
            $em->flush();
            return $this->redirectToRoute('message');
        }
        return $this->render("@GererEnfant/Enfant/addEnfant.html.twig", array('form' => $form->createView()));
    }

    public function messageAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $enfant = $em->getRepository("GererEnfantBundle:Enfant")->findAll();
        return $this->render("@GererEnfant/Enfant/message.html.twig", array('Enfant' => $enfant));

    }

    public function afficheEnfantBackAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $enfant = $em->getRepository("GererEnfantBundle:Enfant")->findAll();
        /*
                /**
                 * @ var $paginator \Knp\Component\Pager\Paginator
                 */
        /*$paginator=$this->get('knp_paginator');
        $paginator->paginate(
            $enfant,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',2)
        );*/


        return $this->render("@GererEnfant/Enfant/afficheEnfantBack.html.twig", array('Enfant' => $enfant));

    }

    public function updateEnfantAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $enfant = $em->getRepository("GererEnfantBundle:Enfant")->find($id);
        $form = $this->createForm(EnfantType::class, $enfant);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {


            $em = $this->getDoctrine()->getManager();
            $em->persist($enfant);
            $em->flush();
            return $this->redirectToRoute('message');
        }
        return $this->render("@GererEnfant/Enfant/updateEnfant.html.twig", array('form' => $form->createView()));
    }

    public function deleteEnfantAction(Request $request, $id)
    {
        $em= $this->getDoctrine()->getManager();
        $enfant=$em->getRepository('GererEnfantBundle:Enfant')->find($id);
        $em->remove($enfant);
        $em->flush();
        return $this->redirectToRoute('message');
    }
}