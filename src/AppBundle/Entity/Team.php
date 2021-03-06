<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Team
 *
 * @ORM\Table(name="team")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TeamRepository")
 */
class Team
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
     * @var title
     *
     * @ORM\Column(name="title", type="string")
     */
    private $title;

    /**
     * @var image
     *
     * @ORM\Column(name="image", type="text")
     */
    private $image;

    /**
     * @var description
     *
     *@ORM\Column(name="description", type="string")
     */
    private $description;

    /**
     * @var region
     *
     * @ORM\Column(name="region", type="string")
     */
    private $region;

    /**
     * @var Strategy_Content
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Strategy_Content", mappedBy="teams")
     */
    private $strategy_content;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->strategy_content = new \Doctrine\Common\Collections\ArrayCollection();
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
     *
     * @return Team
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
     * Set image
     *
     * @param string $image
     *
     * @return Team
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Team
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
     * Set region
     *
     * @param string $region
     *
     * @return Team
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Add strategyContent
     *
     * @param \AppBundle\Entity\Strategy_Content $strategyContent
     *
     * @return Team
     */
    public function addStrategyContent(\AppBundle\Entity\Strategy_Content $strategyContent)
    {
        $this->strategy_content[] = $strategyContent;

        return $this;
    }

    /**
     * Remove strategyContent
     *
     * @param \AppBundle\Entity\Strategy_Content $strategyContent
     */
    public function removeStrategyContent(\AppBundle\Entity\Strategy_Content $strategyContent)
    {
        $this->strategy_content->removeElement($strategyContent);
    }

    /**
     * Get strategyContent
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStrategyContent()
    {
        return $this->strategy_content;
    }
}
