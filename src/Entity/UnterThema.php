<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UnterThemaRepository")
 */
class UnterThema
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Thema", inversedBy="unterThemen")
     */
    private $thema;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Aufgabe", mappedBy="unterThema")
     */
    private $aufgaben;

    public function __construct()
    {
        $this->aufgaben = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getThema(): ?Thema
    {
        return $this->thema;
    }

    public function setThema(?Thema $thema): self
    {
        $this->thema = $thema;

        return $this;
    }

    /**
     * @return Collection|Aufgabe[]
     */
    public function getAufgaben(): Collection
    {
        return $this->aufgaben;
    }

    public function addAufgaben(Aufgabe $aufgaben): self
    {
        if (!$this->aufgaben->contains($aufgaben)) {
            $this->aufgaben[] = $aufgaben;
            $aufgaben->setUnterThema($this);
        }

        return $this;
    }

    public function removeAufgaben(Aufgabe $aufgaben): self
    {
        if ($this->aufgaben->contains($aufgaben)) {
            $this->aufgaben->removeElement($aufgaben);
            // set the owning side to null (unless already changed)
            if ($aufgaben->getUnterThema() === $this) {
                $aufgaben->setUnterThema(null);
            }
        }

        return $this;
    }
}
