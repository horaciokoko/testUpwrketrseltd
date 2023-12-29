<?php

namespace App\Controller;

use App\Entity\Player;
use App\Entity\Transaction;
use App\Form\TransactionType;
use App\Repository\PlayerRepository;
use App\Repository\TeamRepository;
use App\Repository\TransactionRepository;
use App\Service\TransferService;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarketController extends AbstractController
{
    #[Route('/', name: 'market')]
    public function market(PlayerRepository $playerRepository, TransactionRepository $transactionRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $players = $playerRepository->findBy(['onMarket' => true]);
        $transactions = $transactionRepository->findAll();

        $players = $paginator->paginate(
            $players, // Requête Doctrine
            $request->query->getInt('page_players', 1), // Numéro de page
            1, // Nombre d'éléments par page,
            ['pageParameterName' => 'page_players']
        );

        $transactions = $paginator->paginate(
            $transactions, // Requête Doctrine
            $request->query->getInt('page_transaction', 1), // Numéro de page
            1, // Nombre d'éléments par page
            ['pageParameterName' => 'page_transaction']
        );
        return $this->render('market/index.html.twig', [
            'players'       => $players,
            'transactions'  => $transactions
        ]);
    }

    #[Route('/buy/{id}', name: 'buy_player')]
    public function buyPlayer(\App\Entity\Player $player, Request $request, TeamRepository $teamRepository, EntityManagerInterface $entityManager, TransferService $transferService): Response
    {
        $transaction = new Transaction();
        $transaction->setPlayer($player);
        $currentTeam = $player->getTeam();
        $transaction->setSellerTeam($currentTeam);
        $otherTeams = $teamRepository->findAllExcept($currentTeam);
        $transaction->setTeams($otherTeams);
        $form       = $this->createForm(TransactionType::class, null, [
            'data'          => $transaction
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Perform the buying logic, update player ownership, etc.
            // You may want to add more validation and error handling in a real application
            $buyerTeam = $form->get('buyerTeam')->getData();
            $transaction->setBuyerTeam($buyerTeam);
            $transaction->setAmount($transactionAmount = $form->get('amount')->getData());

            $entityManager->persist($transaction);
            $entityManager->flush();
            $transferService->transferPlayer($player, $buyerTeam, $transactionAmount);
            $this->addFlash('success', 'Player bought successfully.');

            return $this->redirectToRoute('market');
        }

        return $this->render('market/buy_player.html.twig', [
            'form' => $form->createView(),
            'player' => $player,
        ]);
    }

    #[Route('/put-on-market/{id}', name: 'put_on_market')]
    public function putOnMarket(Player $player, EntityManagerInterface $entityManager): Response
    {
        // Set the player on the market
        $player->setOnMarket(true);

        $entityManager->persist($player);
        $entityManager->flush();

        $this->addFlash('success', 'Player is now on the market.');

        return $this->redirectToRoute('market');
    }
}
