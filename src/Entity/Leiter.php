<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LeiterRepository")
 */
class Leiter implements UserInterface
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
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string", nullable=true)
     */
    private $password;

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
    private $mobile;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $geburtsdatum;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Team", mappedBy="gruppenLeiter", cascade={"persist", "remove"})
     */
    private $team;

    /**
     * @ORM\OneToMany(targetEntity=Event::class, mappedBy="verantwortlichePerson")
     */
    private $events;

    /**
     * @ORM\ManyToMany(targetEntity=Programmpunkt::class, mappedBy="verantwortlichePersonen")
     */
    private $programmpunkte;

    public function __construct()
    {
        $this->events = new ArrayCollection();
        $this->programmpunkte = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
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
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

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

        // set (or unset) the owning side of the relation if necessary
        $newGruppenLeiter = null === $team ? null : $this;
        if ($team->getGruppenLeiter() !== $newGruppenLeiter) {
            $team->setGruppenLeiter($newGruppenLeiter);
        }

        return $this;
    }

    /**
     * @return Collection|Event[]
     */
    public function getEvents(): Collection
    {
        return $this->events;
    }

    public function addEvent(Event $event): self
    {
        if (!$this->events->contains($event)) {
            $this->events[] = $event;
            $event->setVerantwortlichePerson($this);
        }

        return $this;
    }

    public function removeEvent(Event $event): self
    {
        if ($this->events->contains($event)) {
            $this->events->removeElement($event);
            // set the owning side to null (unless already changed)
            if ($event->getVerantwortlichePerson() === $this) {
                $event->setVerantwortlichePerson(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Programmpunkt[]
     */
    public function getProgrammpunkte(): Collection
    {
        return $this->programmpunkte;
    }

    public function addProgrammpunkt(Programmpunkt $programmpunkt): self
    {
        if (!$this->programmpunkte->contains($programmpunkt)) {
            $this->programmpunkte[] = $programmpunkt;
            $programmpunkt->addVerantwortlichePersonen($this);
        }

        return $this;
    }

    public function removeProgrammpunkt(Programmpunkt $programmpunkt): self
    {
        if ($this->programmpunkte->contains($programmpunkt)) {
            $this->programmpunkte->removeElement($programmpunkt);
            $programmpunkt->removeVerantwortlichePersonen($this);
        }

        return $this;
    }

    public function toArray() {
        $ret = [
            'id' => $this->id,
            'vorname' => $this->getVorname(),
            'nachname' => $this->getName(),
            'email' => $this->getEmail(),
            'mobile' => $this->getMobile(),
            'geburtsdatum' => '1970-01-01',
            'team' => 0,
        ];

        if ($this->getGeburtsdatum()) {
            $ret['geburtsdatum'] = $this->getGeburtsdatum()->format('Y-m-d');
        }
        if ($this->getTeam()) {
            $ret['team'] = $this->getTeam()->getId();
        }

        return $ret;
    }
}
