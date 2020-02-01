<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AufgabeRepository")
 */
class Aufgabe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\UnterThema", inversedBy="aufgaben")
     */
    private $unterThema;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUnterThema(): ?UnterThema
    {
        return $this->unterThema;
    }

    public function setUnterThema(?UnterThema $unterThema): self
    {
        $this->unterThema = $unterThema;

        return $this;
    }
}
