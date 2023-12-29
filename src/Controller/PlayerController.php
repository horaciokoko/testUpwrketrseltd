<?php
// src/Controller/PlayerController.php

namespace App\Controller;

use App\Entity\Player;
use App\Form\PlayerType;
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

    #[Route('/retire-from-market/{id}', name: 'retire_from_market', methods: ['GET'])]
    public function retireFromMarket(Player $player, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Set the player on the market with the specified market price
        $player->setOnMarket(false);
        $entityManager->persist($player);
        $entityManager->flush();

        $this->addFlash('success', 'Player is now retired from the market.');

        return $this->redirectToRoute('team_show', ['id' => $player->getTeam()->getId()]);
    }

    #[Route('/delete-player/{id}', name: 'delete_player', methods: ['POST'])]
    public function delete(Player $player, Request $request, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $player->getId(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($player);
                $entityManager->flush();
                $this->addFlash('success', "The player " . $player->getName() . " was deleted successfully");
            } catch (\Throwable $th) {
                $this->addFlash('error', $th->getMessage());
            }
        }
        return $this->redirectToRoute('team_show', ['id' => $player->getTeam()->getId()]);
    }

    #[Route('/edit-player/{id}', name: 'edit_player', methods: ['GET', 'POST'])]
    public function edit(Player $player, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PlayerType::class, $player);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', "The player " . $player->getName() . " was updated successfully");
            return $this->redirectToRoute('team_show', ['id' => $player->getTeam()->getId()]);
        }

        return $this->render('player/edit.html.twig', [
            'player' => $player,
            'form' => $form,
        ]);
    }
    // ... (other actions)
}
