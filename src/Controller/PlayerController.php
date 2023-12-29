<?php
// src/Controller/PlayerController.php

namespace App\Controller;

use App\Entity\Player;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PlayerController extends AbstractController
{
    #[Route('/put-on-market/{id}', name: 'put_on_market', methods: ['GET', 'POST'])]
    public function putOnMarket(Player $player, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            $marketPrice = $request->request->get('market_price');

            // Set the player on the market with the specified market price
            $player->setOnMarket(true);
            $player->setMarketPrice($marketPrice);

            $entityManager->persist($player);
            $entityManager->flush();

            $this->addFlash('success', 'Player is now on the market.');

            return $this->redirectToRoute('market');
        }

        return $this->render('player/put_on_market.html.twig', [
            'player' => $player,
        ]);
    }

    // ... (other actions)
}
