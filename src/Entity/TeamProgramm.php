<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TeamProgrammRepository")
 */
class TeamProgramm extends Programm
{
    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Nachmittag", inversedBy="teamProgramme")
     */
    private $nachmittag;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Gruppe", cascade={"persist", "remove"})
     */
    private $gruppe;

    public function getNachmittag(): ?Nachmittag
    {
        return $this->nachmittag;
    }

    public function setNachmittag(?Nachmittag $nachmittag): self
    {
        $this->nachmittag = $nachmittag;

        return $this;
    }

    public function getGruppe(): ?Gruppe
    {
        return $this->gruppe;
    }

    public function setGruppe(?Gruppe $gruppe): self
    {
        $this->gruppe = $gruppe;

        return $this;
    }
}
