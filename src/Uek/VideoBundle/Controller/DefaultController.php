<?php

namespace Uek\VideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UekVideoBundle:Default:index.html.twig', array());
    }
}
