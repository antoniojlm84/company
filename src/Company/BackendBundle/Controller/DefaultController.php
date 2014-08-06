<?php

namespace Company\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackendBundle:Default:index.html.twig', array());
    }

    public function menuAction()
    {
        return $this->render('BackendBundle:Default:menu.html.twig', array());
    }
}
