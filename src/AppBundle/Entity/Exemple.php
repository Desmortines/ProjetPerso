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
     * @var string
     */
    private $lane;

    /**
     * @
     *
     */
    private $champ;

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

