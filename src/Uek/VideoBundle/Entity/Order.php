<?php

namespace Uek\VideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * order
 * @ORM\Table(name="order")
 * @ORM\Entity
 */
class Order
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
     * @var datetime
     * 
     * @ORM\Column(type="datetime", name="date")
     */ 
    private $date;
    
    
    /**
     * @var boolean
     * @ORM\Column(type="boolean", name="paid", options={"default": false})
     */
    private $paid;
    
    /**
     * @ORM\ManyToOne(targetEntity="Movie", inversedBy="orders")
     * @ORM\JoinColumn(name="id_movie", referencedColumnName="id")
     **/
    private $movie;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="orders")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     **/
    private $fos_user;

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
     * @return Order
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
     * @return Order
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
     * Set date
     *
     * @param \DateTime $date
     * @return Order
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set paid
     *
     * @param boolean $paid
     * @return Order
     */
    public function setPaid($paid)
    {
        $this->paid = $paid;

        return $this;
    }

    /**
     * Get paid
     *
     * @return boolean 
     */
    public function getPaid()
    {
        return $this->paid;
    }

    /**
     * Set movie
     *
     * @param \Uek\VideoBundle\Entity\Movie $movie
     * @return Order
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

    /**
     * Set fos_user
     *
     * @param \Uek\VideoBundle\Entity\User $fosUser
     * @return Order
     */
    public function setFosUser(\Uek\VideoBundle\Entity\User $fosUser = null)
    {
        $this->fos_user = $fosUser;

        return $this;
    }

    /**
     * Get fos_user
     *
     * @return \Uek\VideoBundle\Entity\User 
     */
    public function getFosUser()
    {
        return $this->fos_user;
    }
}
