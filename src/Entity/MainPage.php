<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MainPageRepository")
 */
class MainPage
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
    private $Opis;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOpis(): ?string
    {
        return $this->Opis;
    }

    public function setOpis(?string $Opis): self
    {
        $this->Opis = $Opis;

        return $this;
    }
}
