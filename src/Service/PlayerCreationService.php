<?php
// src/Service/PlayerCreationService.php

namespace App\Service;

use App\Entity\Player;
use Doctrine\ORM\EntityManagerInterface;

class PlayerCreationService
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * PlayerCreationService constructor.
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * Crée un joueur en base de données.
     */
    public function createPlayer(array $data): Player
    {
        // Ajoutez votre logique de création de joueur ici
        $player = new Player();
        $player->setName($data['name']);
        $player->setSurname($data['surname']);
        $player->setTeam($data['team']);
        $player->setOnMarket($data['onMarket']);
        $player->setMarketPrice(0);

        // Persiste The player en base de données
        $this->entityManager->persist($player);
        $this->entityManager->flush();

        return $player;
    }
}
