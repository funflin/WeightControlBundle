<?php

namespace Facebes\WeightControlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facebes\WeightControlBundle\Entity\Weight
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Facebes\WeightControlBundle\Entity\WeightRepository")
 */
class Weight
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     *
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $User;

    /**
     * @var date $date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var float $weight
     *
     * @ORM\Column(name="weight", type="float")
     */
    private $weight;


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
     * Set date
     *
     * @param date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set weight
     *
     * @param float $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * Get weight
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set User
     *
     * @param Facebes\WeightControlBundle\Entity\User $user
     */
    public function setUser(\Facebes\WeightControlBundle\Entity\User $user)
    {
        $this->User = $user;
    }

    /**
     * Get User
     *
     * @return Facebes\WeightControlBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->User;
    }
}