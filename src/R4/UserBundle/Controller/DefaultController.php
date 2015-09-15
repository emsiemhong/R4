<?php

namespace R4\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('R4UserBundle:Default:index.html.twig', array('name' => $name));
    }
}
