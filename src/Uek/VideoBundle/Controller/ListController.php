<?php

namespace Uek\VideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uek\VideoBundle\Entity\Movie;
use Symfony\Component\HttpFoundation\Request;

class ListController extends Controller
{
	
	public function listsAction($list)
	
	{
		if($list==all){
			
			$em = $this->getDoctrine()->getManager();
			$allRepository = $em->getRepository("UekVideoBundle:Movie");
			$all = $allRepository->findBy(
					array(),array('title'=>'ASC')
					);
			
			return $this->render('UekVideoBundle:Lists:'.$list.'.html.twig', array(
					'all' => $all
			));
		}

		 
	}
	
}