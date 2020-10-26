<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProgrammpunktRepository")
 */
class Programmpunkt extends Event
{

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titel;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $beschreibung;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $material;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Event", inversedBy="programmpunkte")
     */
    private $event;

    /**
     * @ORM\ManyToMany(targetEntity=Leiter::class, inversedBy="programmpunkts")
     */
    private $verantwortlichePersonen;

    public function __construct()
    {
        parent::__construct();
        $this->verantwortlichePersonen = new ArrayCollection();
    }

    public function getTitel(): ?string
    {
        return $this->titel;
    }

    public function setTitel(?string $titel): self
    {
        $this->titel = $titel;

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

    public function getMaterial(): ?string
    {
        return $this->material;
    }

    public function setMaterial(?string $material): self
    {
        $this->material = $material;

        return $this;
    }

    public function getEvent(): ?Event
    {
        return $this->event;
    }

    public function setEvent(?Event $event): self
    {
        $this->event = $event;

        return $this;
    }

    /**
     * @return Collection|Leiter[]
     */
    public function getVerantwortlichePersonen(): Collection
    {
        return $this->verantwortlichePersonen;
    }

    public function addVerantwortlichePersonen(Leiter $verantwortlichePersonen): self
    {
        if (!$this->verantwortlichePersonen->contains($verantwortlichePersonen)) {
            $this->verantwortlichePersonen[] = $verantwortlichePersonen;
        }

        return $this;
    }

    public function removeVerantwortlichePersonen(Leiter $verantwortlichePersonen): self
    {
        if ($this->verantwortlichePersonen->contains($verantwortlichePersonen)) {
            $this->verantwortlichePersonen->removeElement($verantwortlichePersonen);
        }

        return $this;
    }
}
