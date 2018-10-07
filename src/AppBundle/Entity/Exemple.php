<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Exemple
 *
 * @ORM\Table(name="exemple")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ExempleRepository")
 */
class Exemple
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
     * @var lane
     *
     * @ORM\Column(name="lane", type="string")
     */
    private $lane;

    /**
     * @var Champ
     *
     *@ORM\ManyToOne(targetEntity="AppBundle\Entity\Champ", inversedBy="exemple")
     */
    private $champs;

    /**
     * @var Strategy_Content
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Strategy_Content", inversedBy="exemples")
     */
    private $strategy_content;



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
     * Set lane
     *
     * @param string $lane
     *
     * @return Exemple
     */
    public function setLane($lane)
    {
        $this->lane = $lane;

        return $this;
    }

    /**
     * Get lane
     *
     * @return string
     */
    public function getLane()
    {
        return $this->lane;
    }

    /**
     * Set champs
     *
     * @param \AppBundle\Entity\Champ $champs
     *
     * @return Exemple
     */
    public function setChamps(\AppBundle\Entity\Champ $champs = null)
    {
        $this->champs = $champs;

        return $this;
    }

    /**
     * Get champs
     *
     * @return \AppBundle\Entity\Champ
     */
    public function getChamps()
    {
        return $this->champs;
    }

    /**
     * Set strategyContent
     *
     * @param \AppBundle\Entity\Strategy_Content $strategyContent
     *
     * @return Exemple
     */
    public function setStrategyContent(\AppBundle\Entity\Strategy_Content $strategyContent = null)
    {
        $this->strategy_content = $strategyContent;

        return $this;
    }

    /**
     * Get strategyContent
     *
     * @return \AppBundle\Entity\Strategy_Content
     */
    public function getStrategyContent()
    {
        return $this->strategy_content;
    }
}
