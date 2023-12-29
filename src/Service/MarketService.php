<?php

// src/Service/TransferService.php

namespace App\Service;

use App\Entity\Player;
use App\Entity\Team;
use Doctrine\ORM\EntityManagerInterface;

class MarketService
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function transferPlayer($transaction): void
    {
        $$this->entityManager->persist($transaction);
        $$this->entityManager->flush();
    }
}
