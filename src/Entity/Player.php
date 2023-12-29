<?php

namespace App\Entity;

use App\Repository\PlayerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlayerRepository::class)]
class Player
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $surname = null;

    #[ORM\Column(type: "boolean")]
    private ?bool $onMarket = null;

    #[ORM\Column(type: "decimal", precision: 10, scale: 2, nullable: true)]
    private $marketPrice;

    #[ORM\ManyToOne(inversedBy: 'players')]
    private ?Team $team = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): static
    {
        $this->surname = $surname;

        return $this;
    }

    public function getTeam(): ?Team
    {
        return $this->team;
    }

    public function setTeam(?Team $team): static
    {
        $this->team = $team;

        return $this;
    }

    public function isOnMarket(): ?bool
    {
        return $this->onMarket;
    }

    public function setOnMarket(bool $onMarket): static
    {
        $this->onMarket = $onMarket;

        return $this;
    }

    public function getMarketPrice()
    {
        return $this->marketPrice;
    }

    public function setMarketPrice($marketPrice): static
    {
        $this->marketPrice = $marketPrice;

        return $this;
    }
}
