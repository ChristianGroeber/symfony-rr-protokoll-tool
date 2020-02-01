<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Gruppe", mappedBy="gruppenLeiter", cascade={"persist", "remove"})
     */
    private $gruppe;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Nachmittag", mappedBy="tagesLeiter", cascade={"persist", "remove"})
     */
    private $nachmittage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vorname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nachname;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $mobile;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Programm", mappedBy="responsiblePerson", cascade={"persist", "remove"})
     */
    private $verantwortlichFuer;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    public function getGruppe(): ?Gruppe
    {
        return $this->gruppe;
    }

    public function setGruppe(?Gruppe $gruppe): self
    {
        $this->gruppe = $gruppe;

        // set (or unset) the owning side of the relation if necessary
        $newGruppenLeiter = null === $gruppe ? null : $this;
        if ($gruppe->getGruppenLeiter() !== $newGruppenLeiter) {
            $gruppe->setGruppenLeiter($newGruppenLeiter);
        }

        return $this;
    }

    public function getNachmittage(): ?Nachmittag
    {
        return $this->nachmittage;
    }

    public function setNachmittage(?Nachmittag $nachmittage): self
    {
        $this->nachmittage = $nachmittage;

        // set (or unset) the owning side of the relation if necessary
        $newTagesLeiter = null === $nachmittage ? null : $this;
        if ($nachmittage->getTagesLeiter() !== $newTagesLeiter) {
            $nachmittage->setTagesLeiter($newTagesLeiter);
        }

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

    public function getNachname(): ?string
    {
        return $this->nachname;
    }

    public function setNachname(?string $nachname): self
    {
        $this->nachname = $nachname;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getVerantwortlichFuer(): ?Programm
    {
        return $this->verantwortlichFuer;
    }

    public function setVerantwortlichFuer(?Programm $verantwortlichFuer): self
    {
        $this->verantwortlichFuer = $verantwortlichFuer;

        // set (or unset) the owning side of the relation if necessary
        $newResponsiblePerson = null === $verantwortlichFuer ? null : $this;
        if ($verantwortlichFuer->getVerantwortlichePerson() !== $newResponsiblePerson) {
            $verantwortlichFuer->setVerantwortlichePerson($newResponsiblePerson);
        }

        return $this;
    }
}
