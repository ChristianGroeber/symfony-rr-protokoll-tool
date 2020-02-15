<?php

namespace App\Entity;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Abzeichen", mappedBy="stufe", cascade={"persist", "remove"})
     */
    private $abzeichen;

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

    public function getAbzeichen(): ?Abzeichen
    {
        return $this->abzeichen;
    }

    public function setAbzeichen(?Abzeichen $abzeichen): self
    {
        $this->abzeichen = $abzeichen;

        // set (or unset) the owning side of the relation if necessary
        $newStufe = null === $abzeichen ? null : $this;
        if ($abzeichen->getStufe() !== $newStufe) {
            $abzeichen->setStufe($newStufe);
        }

        return $this;
    }
}
