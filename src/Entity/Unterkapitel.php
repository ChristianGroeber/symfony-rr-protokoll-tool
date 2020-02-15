<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UnterkapitelRepository")
 */
class Unterkapitel extends Kapitel
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Kapitel", inversedBy="unterKapitel")
     * @ORM\JoinColumn(nullable=false)
     */
    private $elternKapitel;

    public function getElternKapitel(): ?Kapitel
    {
        return $this->elternKapitel;
    }

    public function setElternKapitel(?Kapitel $elternKapitel): self
    {
        $this->elternKapitel = $elternKapitel;

        return $this;
    }
}
