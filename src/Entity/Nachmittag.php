<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\NachmittagRepository")
 */
class Nachmittag
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
    private $date;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\TagesProgramm", mappedBy="nachmittag", cascade={"persist", "remove"})
     */
    private $tagesProgramm;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getTagesProgramm(): ?TagesProgramm
    {
        return $this->tagesProgramm;
    }

    public function setTagesProgramm(?TagesProgramm $tagesProgramm): self
    {
        $this->tagesProgramm = $tagesProgramm;

        // set (or unset) the owning side of the relation if necessary
        $newNachmittag = null === $tagesProgramm ? null : $this;
        if ($tagesProgramm->getNachmittag() !== $newNachmittag) {
            $tagesProgramm->setNachmittag($newNachmittag);
        }

        return $this;
    }
}
