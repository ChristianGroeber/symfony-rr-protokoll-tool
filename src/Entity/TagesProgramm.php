<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TagesProgrammRepository")
 */
class TagesProgramm extends Programm
{
    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Nachmittag", inversedBy="tagesProgramm", cascade={"persist", "remove"})
     */
    private $nachmittag;

    public function getNachmittag(): ?Nachmittag
    {
        return $this->nachmittag;
    }

    public function setNachmittag(?Nachmittag $nachmittag): self
    {
        $this->nachmittag = $nachmittag;

        return $this;
    }
}
