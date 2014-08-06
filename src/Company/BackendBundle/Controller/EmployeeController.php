<?php

namespace Company\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmployeeController extends Controller
{
    public function indexAction()
    {
        return $this->render('BackendBundle:Employee:index.html.twig', array());
    }
}
