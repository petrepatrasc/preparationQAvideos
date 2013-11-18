<?php

namespace Petre\CalculatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PetreCalculatorBundle:Default:index.html.twig', array('name' => $name));
    }
}
