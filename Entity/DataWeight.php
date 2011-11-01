<?php

namespace Facebes\WeightControlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facebes\WeightControlBundle\Entity\DataWeight
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Facebes\WeightControlBundle\Entity\DataWeightRepository")
 */
class DataWeight
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
     * @var date $initDate
     *
     * @ORM\Column(name="initDate", type="date")
     */
    private $initDate;

    /**
     * @var date $finishDate
     *
     * @ORM\Column(name="finishDate", type="date")
     */
    private $finishDate;

    /**
     * @var float $initWeight
     *
     * @ORM\Column(name="initWeight", type="float")
     */
    private $initWeight;

    /**
     * @var float $finishWeight
     *
     * @ORM\Column(name="finishWeight", type="float")
     */
    private $finishWeight;

    /**
     *
     * @ORM\OneToOne(targetEntity="User")
     */
    private $User;


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
     * Set initDate
     *
     * @param date $initDate
     */
    public function setInitDate($initDate)
    {
        $this->initDate = $initDate;
    }

    /**
     * Get initDate
     *
     * @return date
     */
    public function getInitDate()
    {
        return $this->initDate;
    }

    /**
     * Set finishDate
     *
     * @param date $finishDate
     */
    public function setFinishDate($finishDate)
    {
        $this->finishDate = $finishDate;
    }

    /**
     * Get finishDate
     *
     * @return date
     */
    public function getFinishDate()
    {
        return $this->finishDate;
    }

    /**
     * Set initWeight
     *
     * @param float $initWeight
     */
    public function setInitWeight($initWeight)
    {
        $this->initWeight = $initWeight;
    }

    /**
     * Get initWeight
     *
     * @return float
     */
    public function getInitWeight()
    {
        return $this->initWeight;
    }

    /**
     * Set finishWeight
     *
     * @param float $finishWeight
     */
    public function setFinishWeight($finishWeight)
    {
        $this->finishWeight = $finishWeight;
    }

    /**
     * Get finishWeight
     *
     * @return float
     */
    public function getFinishWeight()
    {
        return $this->finishWeight;
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