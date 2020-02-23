<?php

namespace AtelierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AtelierBundle:Default:index.html.twig');
    }
}
