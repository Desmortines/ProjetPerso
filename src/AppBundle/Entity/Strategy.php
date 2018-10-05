<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Strategy
 *
 * @ORM\Table(name="strategy")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StrategyRepository")
 */
class Strategy
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
     * @var
     */
    private $season;

    /**
     * @var string
     */
    private $name;

    /**
     * @var
     */
    private $strategycontent;

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

