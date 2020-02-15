<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TeamzeitRepository")
 */
class Teamzeit extends Programmpunkt
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Team", inversedBy="teamzeiten")
     */
    private $team;

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
