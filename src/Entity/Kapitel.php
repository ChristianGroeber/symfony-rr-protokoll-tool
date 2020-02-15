<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KapitelRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap({"base" = "Kapitel", "unter-kapitel" = "Unterkapitel"})
 */
class Kapitel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $beschreibung;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Unterkapitel", mappedBy="elternKapitel", orphanRemoval=true)
     */
    private $unterKapitel;

    public function __construct()
    {
        $this->unterKapitel = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBeschreibung(): ?string
    {
        return $this->beschreibung;
    }

    public function setBeschreibung(?string $beschreibung): self
    {
        $this->beschreibung = $beschreibung;

        return $this;
    }

    /**
     * @return Collection|Unterkapitel[]
     */
    public function getUnterKapitel(): Collection
    {
        return $this->unterKapitel;
    }

    public function addUnterKapitel(Unterkapitel $unterKapitel): self
    {
        if (!$this->unterKapitel->contains($unterKapitel)) {
            $this->unterKapitel[] = $unterKapitel;
            $unterKapitel->setElternKapitel($this);
        }

        return $this;
    }

    public function removeUnterKapitel(Unterkapitel $unterKapitel): self
    {
        if ($this->unterKapitel->contains($unterKapitel)) {
            $this->unterKapitel->removeElement($unterKapitel);
            // set the owning side to null (unless already changed)
            if ($unterKapitel->getElternKapitel() === $this) {
                $unterKapitel->setElternKapitel(null);
            }
        }

        return $this;
    }
}
