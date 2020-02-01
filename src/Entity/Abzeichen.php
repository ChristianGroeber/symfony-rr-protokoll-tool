<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AbzeichenRepository")
 */
class Abzeichen
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Stufe", inversedBy="abzeichen")
     */
    private $stufe;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Aufgabe", mappedBy="abzeichen")
     */
    private $aufgaben;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Thema", mappedBy="abzeichen")
     */
    private $themen;

    public function __construct()
    {
        $this->aufgaben = new ArrayCollection();
        $this->themen = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStufe(): ?Stufe
    {
        return $this->stufe;
    }

    public function setStufe(?Stufe $stufe): self
    {
        $this->stufe = $stufe;

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
            $aufgaben->setAbzeichen($this);
        }

        return $this;
    }

    public function removeAufgaben(Aufgabe $aufgaben): self
    {
        if ($this->aufgaben->contains($aufgaben)) {
            $this->aufgaben->removeElement($aufgaben);
            // set the owning side to null (unless already changed)
            if ($aufgaben->getAbzeichen() === $this) {
                $aufgaben->setAbzeichen(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Thema[]
     */
    public function getThemen(): Collection
    {
        return $this->themen;
    }

    public function addTheman(Thema $theman): self
    {
        if (!$this->themen->contains($theman)) {
            $this->themen[] = $theman;
            $theman->setAbzeichen($this);
        }

        return $this;
    }

    public function removeTheman(Thema $theman): self
    {
        if ($this->themen->contains($theman)) {
            $this->themen->removeElement($theman);
            // set the owning side to null (unless already changed)
            if ($theman->getAbzeichen() === $this) {
                $theman->setAbzeichen(null);
            }
        }

        return $this;
    }
}
