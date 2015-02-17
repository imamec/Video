<?php

namespace Uek\VideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	
    	$cartItems = 2;
        return $this->render('UekVideoBundle:Default:index.html.twig', array(
        		'cartItems' => $cartItems,
        ));
        
    }
    
    public function moviesAction($movie)
    
    {
    	return $this->render('UekVideoBundle:Movies:m'.$movie.'.html.twig', array());
    }
    
}
