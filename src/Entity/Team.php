<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TeamRepository")
 */
class Team
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Leiter", inversedBy="team", cascade={"persist", "remove"})
     */
    private $gruppenLeiter;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Leiter", mappedBy="team")
     */
    private $Leiter;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Kind", mappedBy="team")
     */
    private $kinder;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Teamzeit", mappedBy="team")
     */
    private $teamzeiten;

    public function __construct()
    {
        $this->Leiter = new ArrayCollection();
        $this->kinder = new ArrayCollection();
        $this->teamzeiten = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGruppenLeiter(): ?Leiter
    {
        return $this->gruppenLeiter;
    }

    public function setGruppenLeiter(?Leiter $gruppenLeiter): self
    {
        $this->gruppenLeiter = $gruppenLeiter;

        return $this;
    }

    /**
     * @return Collection|Leiter[]
     */
    public function getLeiter(): Collection
    {
        return $this->Leiter;
    }

    public function addLeiter(Leiter $leiter): self
    {
        if (!$this->Leiter->contains($leiter)) {
            $this->Leiter[] = $leiter;
            $leiter->setTeam($this);
        }

        return $this;
    }

    public function removeLeiter(Leiter $leiter): self
    {
        if ($this->Leiter->contains($leiter)) {
            $this->Leiter->removeElement($leiter);
            // set the owning side to null (unless already changed)
            if ($leiter->getTeam() === $this) {
                $leiter->setTeam(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Kind[]
     */
    public function getKinder(): Collection
    {
        return $this->kinder;
    }

    public function addKinder(Kind $kinder): self
    {
        if (!$this->kinder->contains($kinder)) {
            $this->kinder[] = $kinder;
            $kinder->setTeam($this);
        }

        return $this;
    }

    public function removeKinder(Kind $kinder): self
    {
        if ($this->kinder->contains($kinder)) {
            $this->kinder->removeElement($kinder);
            // set the owning side to null (unless already changed)
            if ($kinder->getTeam() === $this) {
                $kinder->setTeam(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Teamzeit[]
     */
    public function getTeamzeiten(): Collection
    {
        return $this->teamzeiten;
    }

    public function addTeamzeiten(Teamzeit $teamzeiten): self
    {
        if (!$this->teamzeiten->contains($teamzeiten)) {
            $this->teamzeiten[] = $teamzeiten;
            $teamzeiten->setTeam($this);
        }

        return $this;
    }

    public function removeTeamzeiten(Teamzeit $teamzeiten): self
    {
        if ($this->teamzeiten->contains($teamzeiten)) {
            $this->teamzeiten->removeElement($teamzeiten);
            // set the owning side to null (unless already changed)
            if ($teamzeiten->getTeam() === $this) {
                $teamzeiten->setTeam(null);
            }
        }

        return $this;
    }
}
