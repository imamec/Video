<?php

namespace Uek\VideoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Uek\VideoBundle\Entity\Movie;
use Symfony\Component\HttpFoundation\Response;

class UploadContentController extends Controller
{
    public function movie1Action()
    {
    	$movie = new Movie();
    	$movie->setGenre('Komedia');
    	$movie->setPicture('forrestGumpS');
    	$movie->setTitle('Forrest Gump');
    	$movie->setPrice(5);
    	
    	$em = $this->getDoctrine()->getManager();
    	$em->persist($movie);
    	$em->flush();
    	
    	return new Response('Created product id '.$movie->getId());
    }

	public function movie2Action()
	{
		$movie = new Movie();
		$movie->setGenre('Komedia');
		$movie->setPicture('intouchablesS');
		$movie->setTitle('Nietykalni');
		$movie->setPrice(5);
		 
		$em = $this->getDoctrine()->getManager();
		$em->persist($movie);
		$em->flush();
		 
		return new Response('Created product id '.$movie->getId());
	}
	
	public function movie3Action()
	{
		$movie = new Movie();
		$movie->setGenre('Gangsterski');
		$movie->setPicture('pulpFictionS');
		$movie->setTitle('Pulp Fiction');
		$movie->setPrice(7);
			
		$em = $this->getDoctrine()->getManager();
		$em->persist($movie);
		$em->flush();
			
		return new Response('Created product id '.$movie->getId());
	}
	
	public function movie4Action()
	{
		$movie = new Movie();
		$movie->setGenre('Anime');
		$movie->setPicture('spiritedAwayS');
		$movie->setTitle('W krainie Bogów');
		$movie->setPrice(6);
			
		$em = $this->getDoctrine()->getManager();
		$em->persist($movie);
		$em->flush();
			
		return new Response('Created product id '.$movie->getId());
	}
	
	public function movie5Action()
	{
		$movie = new Movie();
		$movie->setGenre('Gangsterski');
		$movie->setPicture('theGodfatherS');
		$movie->setTitle('Ociec Chrzestny');
		$movie->setPrice(6);
			
		$em = $this->getDoctrine()->getManager();
		$em->persist($movie);
		$em->flush();
			
		return new Response('Created product id '.$movie->getId());
	}
	
	public function movie6Action()
	{
		$movie = new Movie();
		$movie->setGenre('Dokumentalny');
		$movie->setPicture('theInternetsOwnBoyS');
		$movie->setTitle('The internet Own Boy');
		$movie->setPrice(6);
			
		$em = $this->getDoctrine()->getManager();
		$em->persist($movie);
		$em->flush();
			
		return new Response('Created product id '.$movie->getId());
	}
	
	public function movie7Action()
	{
		$movie = new Movie();
		$movie->setGenre('Dramat');
		$movie->setPicture('theShawshankRedemptionS');
		$movie->setTitle('Skazani na Shawshank');
		$movie->setPrice(5);
			
		$em = $this->getDoctrine()->getManager();
		$em->persist($movie);
		$em->flush();
			
		return new Response('Created product id '.$movie->getId());
	}
}
