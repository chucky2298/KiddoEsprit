<?php

namespace ActualiteBundle\Controller;

use ActualiteBundle\Entity\Actualite;
use ActualiteBundle\Entity\Commentaire;
use ActualiteBundle\Form\ActualiteType;
use ActualiteBundle\Form\CommentaireType;
use AtelierBundle\Form\AtelierType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

class mainController extends Controller
{
    public function ajoutActualiteAction(Request $request)
    {
        $Actualite=new Actualite();
        $form=$this->createForm(ActualiteType::class,$Actualite);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            /** @var UploadedFile $imageFile */
            $imageFile = $form->get('image')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $imageFile->move(
                        $this->getParameter('photos_actualite'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $Actualite->setImage($newFilename);
            }

            $em= $this->getDoctrine()->getManager();

            $em->persist($Actualite);
            $em->flush();
            //return $this->redirectToRoute('');
        }
        return $this->render("@Actualite/Actualite/addActualite.html.twig",array('form'=>$form->createView()));
    }

    public function afficheActualiteAction(Request $request)
    {
        $id=$request->get('id');
        $em= $this->getDoctrine()->getManager();
        $Actualite= $em->getRepository("ActualiteBundle:Actualite")->findAll();
        return $this->render("@Actualite/Actualite/afficheActualite.html.twig",array('Actualite'=>$Actualite));
    }

    public function updateActualiteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $Actualite = $em->getRepository("ActualiteBundle:Actualite")->find($id);
        $form = $this->createForm(ActualiteType::class, $Actualite);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {

            $file=$Actualite->getImage();
            $filename=md5(uniqid()) . '.' . $file->guessExtension();
            $file->move($this->getParameter('photos_directory'), $filename);
            $Actualite->setImage($filename);

            $em = $this->getDoctrine()->getManager();
            $em->persist($Actualite);
            $em->flush();
            return $this->redirectToRoute('actualite_afficheActualite');
        }
        return $this->render("@Actualite/Actualite/updateActualite.html.twig", array('form' => $form->createView()));
    }

    public function supprimeActualiteAction(Request $request, $id)
    {
        $id=$request->get('id');
        $em=$this->getDoctrine()->getManager();
        $Actualite= $em->getRepository("ActualiteBundle:Actualite")->find($id);
        $em->remove($Actualite);
        $em->flush();
        return $this->redirectToRoute("actualite_afficheActualite");
    }



    public function ajoutCommentaireAction(Request $request)
    {
        $Commentaire=new Commentaire();
        $form=$this->createForm(CommentaireType::class,$Commentaire);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em= $this->getDoctrine()->getManager();
            $Commentaire->setDate(new \DateTime('now'));
            $em->persist($Commentaire);
            $em->flush();
        }
        return $this->render("@Actualite/Commentaire/addCommentaire.html.twig",array('form'=>$form->createView()));
    }

    public function afficheCommentaireAction(Request $request)
    {
        $id=$request->get('id');
        $em= $this->getDoctrine()->getManager();
        $Commentaire= $em->getRepository("ActualiteBundle:Commentaire")->findAll();
        return $this->render("@Actualite/Commentaire/afficheCommentaire.html.twig",array('Commentaire'=>$Commentaire));
    }

    public function supprimeCommentaireAction(Request $request, $id)
    {
        $id=$request->get('id');
        $em=$this->getDoctrine()->getManager();
        $Commentaire= $em->getRepository("ActualiteBundle:Commentaire")->find($id);
        $em->remove($Commentaire);
        $em->flush();
        return $this->redirectToRoute("actualite_afficheCommentaire");
    }
}
