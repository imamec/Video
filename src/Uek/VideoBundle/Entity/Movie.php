<?php

namespace Uek\VideoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * movie
 * @ORM\Table(name="movie")
 * @ORM\Entity
 */
class Movie
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
     * @var string
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;
    
    /**
     * @var integer
     * @ORM\Column(name="price", type="integer", length=10)
     */
    private $price;
    
    /**
     * @var string
     * @ORM\Column(name="picture", type="string", length=255)
     */
    private $picture;
    
    /**
     * @var string
     * @ORM\Column(name="genere", type="string", length=120)
     */
    private $genre;
    
    /**
     * @ORM\OneToMany(targetEntity="Review", mappedBy="movie")
     **/
    private $reviews;
    
    /**
     * @ORM\OneToMany(targetEntity="Order", mappedBy="movie")
     **/
    private $orders;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reviews = new \Doctrine\Common\Collections\ArrayCollection();
        $this->orders = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set title
     *
     * @param string $title
     * @return Movie
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Movie
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return Movie
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Movie
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Add reviews
     *
     * @param \Uek\VideoBundle\Entity\Review $reviews
     * @return Movie
     */
    public function addReview(\Uek\VideoBundle\Entity\Review $reviews)
    {
        $this->reviews[] = $reviews;

        return $this;
    }

    /**
     * Remove reviews
     *
     * @param \Uek\VideoBundle\Entity\Review $reviews
     */
    public function removeReview(\Uek\VideoBundle\Entity\Review $reviews)
    {
        $this->reviews->removeElement($reviews);
    }

    /**
     * Get reviews
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Add orders
     *
     * @param \Uek\VideoBundle\Entity\Order $orders
     * @return Movie
     */
    public function addOrder(\Uek\VideoBundle\Entity\Order $orders)
    {
        $this->orders[] = $orders;

        return $this;
    }

    /**
     * Remove orders
     *
     * @param \Uek\VideoBundle\Entity\Order $orders
     */
    public function removeOrder(\Uek\VideoBundle\Entity\Order $orders)
    {
        $this->orders->removeElement($orders);
    }

    /**
     * Get orders
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getOrders()
    {
        return $this->orders;
    }
    
}
