<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\GruppeRepository")
 */
class Gruppe
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
     * @ORM\OneToOne(targetEntity="App\Entity\User", inversedBy="gruppe", cascade={"persist", "remove"})
     */
    private $gruppenLeiter;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\User", mappedBy="gruppe")
     */
    private $leiter;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Stufe", inversedBy="gruppen")
     */
    private $stufe;

    public function __construct()
    {
        $this->leiter = new ArrayCollection();
    }

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

    public function getGruppenLeiter(): ?User
    {
        return $this->gruppenLeiter;
    }

    public function setGruppenLeiter(?User $gruppenLeiter): self
    {
        $this->gruppenLeiter = $gruppenLeiter;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getLeiter(): Collection
    {
        return $this->leiter;
    }

    public function addLeiter(User $leiter): self
    {
        if (!$this->leiter->contains($leiter)) {
            $this->leiter[] = $leiter;
            $leiter->setGruppe($this);
        }

        return $this;
    }

    public function removeLeiter(User $leiter): self
    {
        if ($this->leiter->contains($leiter)) {
            $this->leiter->removeElement($leiter);
            // set the owning side to null (unless already changed)
            if ($leiter->getGruppe() === $this) {
                $leiter->setGruppe(null);
            }
        }

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
