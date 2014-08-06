<?php

namespace Company\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EmployeesController extends Controller
{
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
        
        $employees = $em->getRepository('DatabaseBundle:Employee')->findAll();

        return $this->render('BackendBundle:Employees:index.html.twig', array("employees" => $employees));
    }
}
