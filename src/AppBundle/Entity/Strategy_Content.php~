<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Strategy_Content
 *
 * @ORM\Table(name="strategy__content")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Strategy_ContentRepository")
 */
class Strategy_Content
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
     * @var description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var Exemple
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Exemple", mappedBy="strategy_content", cascade={"persist"})
     */
    private $exemples;

    /**
     * @var counterstrat
     *
     * @ORM\Column(name="counterstrat", type="text")
     */
    private $counterstrat;

    /**
     * @var settings
     *
     * @ORM\Column(name="settings", type="text")
     */
    private $settings;

    /**
     * @var Team
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Team", inversedBy="strategy_content")
     */
    private $teams;

    /**
     * @var Strategy
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Strategy", inversedBy="strategycontent")
     */
    private $strategy;

    /**
     * @var Comment
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Comment", mappedBy="strategy_content")
     */
    private $comments;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->teams = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set description
     *
     * @param string $description
     *
     * @return Strategy_Content
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set counterstrat
     *
     * @param string $counterstrat
     *
     * @return Strategy_Content
     */
    public function setCounterstrat($counterstrat)
    {
        $this->counterstrat = $counterstrat;

        return $this;
    }

    /**
     * Get counterstrat
     *
     * @return string
     */
    public function getCounterstrat()
    {
        return $this->counterstrat;
    }

    /**
     * Set settings
     *
     * @param string $settings
     *
     * @return Strategy_Content
     */
    public function setSettings($settings)
    {
        $this->settings = $settings;

        return $this;
    }

    /**
     * Get settings
     *
     * @return string
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Set exemples
     *
     * @param \AppBundle\Entity\Exemple $exemples
     *
     * @return Strategy_Content
     */
    public function setExemples(\AppBundle\Entity\Exemple $exemples )
    {
        $this->exemples = $exemples;

        return $this;
    }

    /**
     * Get exemples
     *
     * @return \AppBundle\Entity\Exemple
     */
    public function getExemples()
    {
        return $this->exemples;
    }

    /**
     * Add team
     *
     * @param \AppBundle\Entity\Team $team
     *
     * @return Strategy_Content
     */
    public function addTeam(\AppBundle\Entity\Team $team)
    {
        $this->teams[] = $team;

        return $this;
    }

    /**
     * Remove team
     *
     * @param \AppBundle\Entity\Team $team
     */
    public function removeTeam(\AppBundle\Entity\Team $team)
    {
        $this->teams->removeElement($team);
    }

    /**
     * Get teams
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTeams()
    {
        return $this->teams;
    }

    /**
     * Set strategy
     *
     * @param \AppBundle\Entity\Strategy $strategy
     *
     * @return Strategy_Content
     */
    public function setStrategy(\AppBundle\Entity\Strategy $strategy = null)
    {
        $this->strategy = $strategy;

        return $this;
    }

    /**
     * Get strategy
     *
     * @return \AppBundle\Entity\Strategy
     */
    public function getStrategy()
    {
        return $this->strategy;
    }

    /**
     * Add comment
     *
     * @param \AppBundle\Entity\Comment $comment
     *
     * @return Strategy_Content
     */
    public function addComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \AppBundle\Entity\Comment $comment
     */
    public function removeComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add exemple
     *
     * @param \AppBundle\Entity\Exemple $exemple
     *
     * @return Strategy_Content
     */
    public function addExemple(\AppBundle\Entity\Exemple $exemple)
    {
        $this->exemples[] = $exemple;

        return $this;
    }

    /**
     * Remove exemple
     *
     * @param \AppBundle\Entity\Exemple $exemple
     */
    public function removeExemple(\AppBundle\Entity\Exemple $exemple)
    {
        $this->exemples->removeElement($exemple);
    }
}
