<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\StufeRepository")
 */
class Stufe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Gruppe", mappedBy="stufe")
     */
    private $gruppen;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Abzeichen", mappedBy="stufe")
     */
    private $abzeichen;

    public function __construct()
    {
        $this->gruppen = new ArrayCollection();
        $this->abzeichen = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Gruppe[]
     */
    public function getGruppen(): Collection
    {
        return $this->gruppen;
    }

    public function addGruppen(Gruppe $gruppen): self
    {
        if (!$this->gruppen->contains($gruppen)) {
            $this->gruppen[] = $gruppen;
            $gruppen->setStufe($this);
        }

        return $this;
    }

    public function removeGruppen(Gruppe $gruppen): self
    {
        if ($this->gruppen->contains($gruppen)) {
            $this->gruppen->removeElement($gruppen);
            // set the owning side to null (unless already changed)
            if ($gruppen->getStufe() === $this) {
                $gruppen->setStufe(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Abzeichen[]
     */
    public function getAbzeichen(): Collection
    {
        return $this->abzeichen;
    }

    public function addAbzeichen(Abzeichen $abzeichen): self
    {
        if (!$this->abzeichen->contains($abzeichen)) {
            $this->abzeichen[] = $abzeichen;
            $abzeichen->setStufe($this);
        }

        return $this;
    }

    public function removeAbzeichen(Abzeichen $abzeichen): self
    {
        if ($this->abzeichen->contains($abzeichen)) {
            $this->abzeichen->removeElement($abzeichen);
            // set the owning side to null (unless already changed)
            if ($abzeichen->getStufe() === $this) {
                $abzeichen->setStufe(null);
            }
        }

        return $this;
    }
}
