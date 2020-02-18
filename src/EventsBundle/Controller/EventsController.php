<?php

namespace EventsBundle\Controller;

use EventsBundle\Entity\Evenements;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use EventsBundle\Entity\Participations;
use EventsBundle\Form\EvenementsType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class EventsController extends Controller
{
    public function ajoutEventAction(Request $request)
    {

        $event = new Evenements();
        $form = $this->createForm(EvenementsType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $brochureFile */
            $brochureFile = $form->get('brochure')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $event->setBrochure($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute('afficher_event');
        }

        return $this->render('@Events/Events/ajout.html.twig', array('form' => $form->createView()));
    }
    public function afficherEventAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository('EventsBundle:Evenements')->findAll();

        return $this->render('@Events/Events/affiche.html.twig', array(
            'events' => $events));


    }
    public function supprimerEventAction($id)
    {

        $em= $this->getDoctrine()->getManager();
        $event =$em->getRepository('EventsBundle:Evenements')->find($id);
        $em->remove($event);
        $em->flush();
        return $this->redirectToRoute('afficher_event');


    }
    public function modifierEventAction(Request $request,$id)
    {

        $em=$this->getDoctrine()->getManager();
        $event= $em->getRepository('EventsBundle:Evenements')->find($id);
        $form=$this->createForm(EvenementsType::class,$event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $brochureFile */
            $brochureFile = $form->get('brochure')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$brochureFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $brochureFile->move(
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $event->setBrochure($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute('afficher_event');
        }


        return $this->render('@Events/Events/modifier.html.twig', array('form' => $form->createView()));




    }

}
//mayhebech yaffichi template fel fonction hedhi
//badel fel json, create bundle yml, create controller yml, create database, create entity annotation, schema create