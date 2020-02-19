<?php

namespace EventsBundle\Controller;

use EventsBundle\Entity\Evenements;
use EventsBundle\Form\ParticipationsType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use EventsBundle\Entity\Participations;
use EventsBundle\Form\EvenementsType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;

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
    public function participerAction(Request $request,$id)
    {
        $usr= $this->get('security.token_storage')->getToken()->getUser();
        $user_id = $usr->getId();
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository('EventsBundle:Evenements')->find($id);
        $participations = new Participations();
        $form = $this->createForm(ParticipationsType::class, $participations);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $participations->setEvent($events);
            $participations->setUserId($user_id);
            $nbr=$events->getQuantite()-$participations->getNbPersonnes();
            if($nbr>=0){
            $events->setQuantite($nbr);
            $em = $this->getDoctrine()->getManager();
            $em->persist($participations);
            $em->flush();
            $em = $this->getDoctrine()->getManager();
            $em->persist($events);
            $em->flush();
            $html = $this->renderView('@Events/Events/pdfPass.html.twig', array(
                'part'  => $participations
            ));
            return new PdfResponse(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
                'file.pdf'
            );}
            else{echo "<script>alert(\"Plus de disponibilité\")</script>";}
        }

        return $this->render('@Events/Events/participer.html.twig', array('form' => $form->createView(),'events' => $events));


    }
    public function supprimerEventAction($id)
    {

        $em= $this->getDoctrine()->getManager();
        $event =$em->getRepository('EventsBundle:Evenements')->find($id);
        $em->remove($event);
        $em->flush();
        return $this->redirectToRoute('afficher_event');
    }
    public function supprimerPassAction($id)
    {

        $em= $this->getDoctrine()->getManager();
        $pass =$em->getRepository('EventsBundle:Participations')->find($id);
        $event = $pass->getEvent();
        $nbr= $event->getQuantite()+$pass->getNbPersonnes();
        $event->setQuantite($nbr);
        $em->remove($pass);
        $em->flush();
        $em = $this->getDoctrine()->getManager();
        $em->persist($event);
        $em->flush();
        return $this->redirectToRoute('liste_participations');
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
    public function listerEventAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository('EventsBundle:Evenements')->findAll();

        return $this->render('@Events/Events/affichageFront.html.twig', array(
            'events' => $events));


    }
    public function listerParticipationsAction(Request $request)
    {
        $usr= $this->get('security.token_storage')->getToken()->getUser();
        $id = $usr->getId();
        $em = $this->getDoctrine()->getManager();
        $participations = $em->getRepository('EventsBundle:Participations')->findByUserId($id);

        return $this->render('@Events/Events/affichageParticipations.html.twig', array(
            'participations' => $participations));


    }
}

//mayhebech yaffichi template fel fonction hedhi
//badel fel json, create bundle yml, create controller yml, create database, create entity annotation, schema create
