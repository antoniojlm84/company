<?php

namespace Company\DatabaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DatabaseBundle:Default:index.html.twig', array('name' => $name));
    }
}
