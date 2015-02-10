<?php

namespace Uek\VideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * review
 * @ORM\Table(name="review")
 * @ORM\Entity
 */
class Review
{
    /**
     * @var integer
     * 
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id_movie", type="integer")
     */
    private $id_movie;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    private $id_user;

    /**
     * @var text
     * 
     * @ORM\Column(name="content", type="text")
     */ 
    private $content; 
    
    /**
     * @ORM\ManyToOne(targetEntity="Movie", inversedBy="reviews")
     * @ORM\JoinColumn(name="id_movie", referencedColumnName="id")
     **/
    private $movie;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id_movie
     *
     * @param integer $idMovie
     * @return Review
     */
    public function setIdMovie($idMovie)
    {
        $this->id_movie = $idMovie;

        return $this;
    }

    /**
     * Get id_movie
     *
     * @return integer 
     */
    public function getIdMovie()
    {
        return $this->id_movie;
    }

    /**
     * Set id_user
     *
     * @param integer $idUser
     * @return Review
     */
    public function setIdUser($idUser)
    {
        $this->id_user = $idUser;

        return $this;
    }

    /**
     * Get id_user
     *
     * @return integer 
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Review
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set movie
     *
     * @param \Uek\VideoBundle\Entity\Movie $movie
     * @return Review
     */
    public function setMovie(\Uek\VideoBundle\Entity\Movie $movie = null)
    {
        $this->movie = $movie;

        return $this;
    }

    /**
     * Get movie
     *
     * @return \Uek\VideoBundle\Entity\Movie 
     */
    public function getMovie()
    {
        return $this->movie;
    }
}
