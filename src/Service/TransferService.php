<?php

// src/Service/TransferService.php

namespace App\Service;

use App\Entity\Player;
use App\Entity\Team;
use Doctrine\ORM\EntityManagerInterface;

class TransferService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function transferPlayer(Player $player, Team $targetTeam, float $amount): void
    {
        // Add your player transfer logic here
        // Example: Move the player to the target team

        // Example: Deduct the transfer amount from team balances
        $sourceTeam = $player->getTeam();
        $player->setTeam($targetTeam);
        $player->setOnMarket(false);
        $sourceTeam->setMoneyBalance($sourceTeam->getMoneyBalance() + $amount);
        $targetTeam->setMoneyBalance($targetTeam->getMoneyBalance() - $amount);
        // Persist the changes to the database
        $this->entityManager->flush();
    }
}
