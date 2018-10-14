<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Season
 *
 * @ORM\Table(name="season")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SeasonRepository")
 */
class Season
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var name
     *
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var Strategy
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Strategy", mappedBy="season", cascade={"persist"})
     */
    private $Strategy;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Strategy = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     *
     * @return Season
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add strategy
     *
     * @param \AppBundle\Entity\Strategy $strategy
     *
     * @return Season
     */
    public function addStrategy(\AppBundle\Entity\Strategy $strategy)
    {
        $this->Strategy[] = $strategy;

        return $this;
    }

    /**
     * Remove strategy
     *
     * @param \AppBundle\Entity\Strategy $strategy
     */
    public function removeStrategy(\AppBundle\Entity\Strategy $strategy)
    {
        $this->Strategy->removeElement($strategy);
    }

    /**
     * Get strategy
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStrategy()
    {
        return $this->Strategy;
    }
}
