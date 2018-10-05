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
     * @var string
     */
    private $description;

    /**
     * @var
     */
    private $exemple;

    /**
     * @var string
     */
    private $counterstrat;

    /**
     * @var string
     *
     */
    private $settings;

    /**
     * @var
     */
    private $teams;

    /**
     * @var
     */
    private $comments;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

