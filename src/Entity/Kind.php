<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KindRepository")
 */
class Kind
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vorname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $elternEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $elternMobile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $elternName;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $geburtsdatum;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Team", inversedBy="kinder")
     */
    private $team;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getVorname(): ?string
    {
        return $this->vorname;
    }

    public function setVorname(?string $vorname): self
    {
        $this->vorname = $vorname;

        return $this;
    }

    public function getElternEmail(): ?string
    {
        return $this->elternEmail;
    }

    public function setElternEmail(?string $elternEmail): self
    {
        $this->elternEmail = $elternEmail;

        return $this;
    }

    public function getElternMobile(): ?string
    {
        return $this->elternMobile;
    }

    public function setElternMobile(?string $elternMobile): self
    {
        $this->elternMobile = $elternMobile;

        return $this;
    }

    public function getElternName(): ?string
    {
        return $this->elternName;
    }

    public function setElternName(?string $elternName): self
    {
        $this->elternName = $elternName;

        return $this;
    }

    public function getGeburtsdatum(): ?\DateTimeInterface
    {
        return $this->geburtsdatum;
    }

    public function setGeburtsdatum(?\DateTimeInterface $geburtsdatum): self
    {
        $this->geburtsdatum = $geburtsdatum;

        return $this;
    }

    public function getTeam(): ?Team
    {
        return $this->team;
    }

    public function setTeam(?Team $team): self
    {
        $this->team = $team;

        return $this;
    }
}
