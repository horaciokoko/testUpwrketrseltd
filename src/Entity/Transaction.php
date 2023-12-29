<?php

// src/Entity/Transaction.php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "transactions")]
class Transaction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id;

    #[ORM\ManyToOne(targetEntity: Player::class)]
    private $player;

    #[ORM\ManyToOne(targetEntity: Team::class)]
    private $sellerTeam;

    #[ORM\ManyToOne(targetEntity: Team::class)]
    private $buyerTeam;

    #[ORM\Column(type: "float")]
    private $amount;

    private $teams;

    // Getters and setters for the fields

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlayer(): ?Player
    {
        return $this->player;
    }

    public function setPlayer(?Player $player): static
    {
        $this->player = $player;

        return $this;
    }

    public function getSellerTeam(): ?Team
    {
        return $this->sellerTeam;
    }

    public function setSellerTeam(?Team $sellerTeam): static
    {
        $this->sellerTeam = $sellerTeam;

        return $this;
    }

    public function getBuyerTeam(): ?Team
    {
        return $this->buyerTeam;
    }

    public function setBuyerTeam(?Team $buyerTeam): static
    {
        $this->buyerTeam = $buyerTeam;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmount(float $amount): static
    {
        $this->amount = $amount;

        return $this;
    }

    public function getTeams(): ?array
    {
        return $this->teams;
    }

    public function setTeams(array $teams): static
    {
        $this->teams = $teams;

        return $this;
    }
}
