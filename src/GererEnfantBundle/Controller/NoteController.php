<?php

namespace GererEnfantBundle\Controller;

use GererEnfantBundle\Entity\Note;
use GererEnfantBundle\Entity\Enfant;
use GererEnfantBundle\Form\NoteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class NoteController extends Controller
{
    public function ajoutNoteAction(Request $request, $id)
    {

        $note = new note();
        $form = $this->createForm(NoteType::class, $note);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $enfant = $em->getRepository("GererEnfantBundle:Enfant")->find($id);
            $note->setEnfant($enfant);
            $em->persist($note);
            $em->flush();
            return $this->redirectToRoute('afficheNote');
        }
        return $this->render("@GererEnfant/Note/addNote.html.twig", array('form' => $form->createView()));
    }

    public function afficheNoteAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $note = $em->getRepository("GererEnfantBundle:Note")->findAll();
        return $this->render("@GererEnfant/Note/afficheNote.html.twig", array('Note' => $note));

    }

    public function updateNoteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $note = $em->getRepository("GererEnfantBundle:Note")->find($id);
        $form = $this->createForm(NoteType::class, $note);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {


            $em = $this->getDoctrine()->getManager();
            $em->persist($note);
            $em->flush();
            return $this->redirectToRoute('afficheNote');
        }
        return $this->render("@GererEnfant/Note/updateNote.html.twig", array('form' => $form->createView()));
    }

    public function deleteNoteAction(Request $request, $id)
    {
        $em= $this->getDoctrine()->getManager();
        $note=$em->getRepository('GererEnfantBundle:Note')->find($id);
        $em->remove($note);
        $em->flush();
        return $this->redirectToRoute('afficheNote');
    }
}