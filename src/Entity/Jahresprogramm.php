<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JahresprogrammRepository")
 */
class Jahresprogramm
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $jahr;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getJahr(): ?int
    {
        return $this->jahr;
    }

    public function setJahr(?int $jahr): self
    {
        $this->jahr = $jahr;

        return $this;
    }
}
