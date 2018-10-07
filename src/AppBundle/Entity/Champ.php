<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\Tests\StringableObject;

/**
 * Champ
 *
 * @ORM\Table(name="champ")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChampRepository")
 */
class Champ
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
     * @var image
     *
     * @ORM\Column(name="image", type="text")
     */
    private $image;

    /**
     * @var type
     *
     * @ORM\Column(name="type", type="string")
     */
    private $type;

    /**
     * @var Exemple
     *
     *@ORM\OneToMany(targetEntity="AppBundle\Entity\Exemple",mappedBy="champs")
     */
    private $exemple;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->exemple = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Champ
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
     * Set image
     *
     * @param string $image
     *
     * @return Champ
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
     * Set type
     *
     * @param string $type
     *
     * @return Champ
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add exemple
     *
     * @param \AppBundle\Entity\Exemple $exemple
     *
     * @return Champ
     */
    public function addExemple(\AppBundle\Entity\Exemple $exemple)
    {
        $this->exemple[] = $exemple;

        return $this;
    }

    /**
     * Remove exemple
     *
     * @param \AppBundle\Entity\Exemple $exemple
     */
    public function removeExemple(\AppBundle\Entity\Exemple $exemple)
    {
        $this->exemple->removeElement($exemple);
    }

    /**
     * Get exemple
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExemple()
    {
        return $this->exemple;
    }
}
