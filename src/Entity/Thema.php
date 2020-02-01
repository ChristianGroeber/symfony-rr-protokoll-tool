<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ThemaRepository")
 */
class Thema
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Abzeichen", inversedBy="themen")
     */
    private $abzeichen;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UnterThema", mappedBy="thema")
     */
    private $unterThemen;

    public function __construct()
    {
        $this->unterThemen = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAbzeichen(): ?Abzeichen
    {
        return $this->abzeichen;
    }

    public function setAbzeichen(?Abzeichen $abzeichen): self
    {
        $this->abzeichen = $abzeichen;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|UnterThema[]
     */
    public function getUnterThemen(): Collection
    {
        return $this->unterThemen;
    }

    public function addUnterTheman(UnterThema $unterTheman): self
    {
        if (!$this->unterThemen->contains($unterTheman)) {
            $this->unterThemen[] = $unterTheman;
            $unterTheman->setThema($this);
        }

        return $this;
    }

    public function removeUnterTheman(UnterThema $unterTheman): self
    {
        if ($this->unterThemen->contains($unterTheman)) {
            $this->unterThemen->removeElement($unterTheman);
            // set the owning side to null (unless already changed)
            if ($unterTheman->getThema() === $this) {
                $unterTheman->setThema(null);
            }
        }

        return $this;
    }
}
