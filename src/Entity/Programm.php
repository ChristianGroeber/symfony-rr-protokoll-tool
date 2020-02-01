<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProgrammRepository")
 */
class Programm
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $start;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $end;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\User", inversedBy="verantwortlichFuer", cascade={"persist", "remove"})
     */
    private $verantwortlichePerson;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(\DateTimeInterface $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(?\DateTimeInterface $end): self
    {
        $this->end = $end;

        return $this;
    }

    public function getVerantwortlichePerson(): ?User
    {
        return $this->verantwortlichePerson;
    }

    public function setVerantwortlichePerson(?User $verantwortlichePerson): self
    {
        $this->verantwortlichePerson = $verantwortlichePerson;

        return $this;
    }
}
