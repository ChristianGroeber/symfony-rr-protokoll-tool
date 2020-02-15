<?php

namespace App\Entity;

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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $bild;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Stufe", inversedBy="abzeichen", cascade={"persist", "remove"})
     */
    private $stufe;

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

    public function getBild(): ?string
    {
        return $this->bild;
    }

    public function setBild(?string $bild): self
    {
        $this->bild = $bild;

        return $this;
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
}
