<?php

namespace App\Controller;

use App\Entity\Team;
use App\Entity\Transaction;
use App\Form\PlayerType;
use App\Form\TeamType;
use App\Form\TransferPlayerType;
use App\Repository\PlayerRepository;
use App\Repository\TeamRepository;
use App\Service\PlayerCreationService;
use App\Service\TransferService;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/team')]
class TeamController extends AbstractController
{
    #[Route('/', name: 'app_team_index', methods: ['GET'])]
    public function index(TeamRepository $teamRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $teams  = $teamRepository->findAll();
        krsort($teams);
        $teams = $paginator->paginate(
            $teams, // Requête Doctrine
            $request->query->getInt('page', 1), // Numéro de page
            6, // Nombre d'éléments par page
            ['pageParameterName' => 'page', 'sortFieldParameterName' => 'id']
        );
        return $this->render('team/index.html.twig', [
            'teams' => $teams
        ]);
    }

    #[Route('/new', name: 'app_team_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $team = new Team();
        $form = $this->createForm(TeamType::class, $team);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($team);
            $entityManager->flush();
            $this->addFlash('success', "the team " . $team->getName() . " was successfully created");
            return $this->redirectToRoute('app_team_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('team/new.html.twig', [
            'team' => $team,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'team_show', methods: ['GET', 'POST'])]
    public function show(Team $team, Request $request, PlayerCreationService $playerCreationService, TransferService $transferService, TeamRepository $teamRepository, PlayerRepository $playerRepository, EntityManagerInterface $entityManager): Response
    {
        // dd($request->request->all());

        $players    = $team->getPlayers();
        $otherTeams = $teamRepository->findAllExcept($team);
        $transferForm = $this->createForm(TransferPlayerType::class, null, [
            'team'          => ['team' => $team, 'teams'    => $otherTeams]
        ]);

        $transferForm->handleRequest($request);
        // die;
        if ($transferForm->isSubmitted() && $transferForm->isValid()) {
            // Fetch the target team and transfer amount from the request
            // $targetTeamId = $request->request->get('transfer_player')['team'];
            // $amount     = (int)$request->request->get('transfer_player')['amount'];
            $transfer = $request->request->all('transfer_player');
            // Fetch the target team entity based on $targetTeamId
            $targetTeam = $teamRepository->find($transfer['targetTeam']);
            $player     = $playerRepository->find($transfer['player']);
            if ($targetTeam->getMoneyBalance() >= $transfer['amount']) {
                $transaction = new Transaction();
                $transaction->setPlayer($player);
                $currentTeam = $player->getTeam();
                $transaction->setSellerTeam($currentTeam);
                // Use the TransferService to perform the player transfer
                $transaction->setBuyerTeam($targetTeam);
                $transaction->setAmount($transactionAmount = $transfer['amount']);

                $entityManager->persist($transaction);
                $entityManager->flush();
                $transferService->transferPlayer(
                    $player,
                    $targetTeam,
                    $transactionAmount
                );
                // $transferService->transferPlayer($player, $targetTeam, $transfer['amount']);
                $this->addFlash('success', "The player " . $player->getName() . " was transfered to " . $targetTeam->getName());
                return $this->redirectToRoute('team_show', ['id' => $team->getId()]);
            }

            $this->addFlash('error', "the team " . $targetTeam->getName() . " doesn't have enougth money to buy the player");
        }

        $playerForm = $this->createForm(PlayerType::class);

        $playerForm->handleRequest($request);

        if ($playerForm->isSubmitted() && $playerForm->isValid()) {
            // d    d($request->request->all());

            $data                       = $request->request->all();
            $data['player']['team']     = $team;
            $data['player']['onMarket'] = false;
            // Utilise le service pour créer The player
            $player = $playerCreationService->createPlayer($data['player']);
            $this->addFlash('success', "The player " . $player->getName() . " was created successfully");
            return $this->redirectToRoute('team_show', ['id' => $team->getId()]);
        }
        return $this->render('team/show.html.twig', [
            'team'          => $team,
            'players'       => $players,
            'transferForm'  => $transferForm->createView(),
            'playerForm'    => $playerForm->createView()
        ]);
    }

    #[Route('/{id}/edit', name: 'app_team_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Team $team, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TeamType::class, $team);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', "the team " . $team->getName() . " was updated successfully");
            return $this->redirectToRoute('app_team_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('team/edit.html.twig', [
            'team' => $team,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/delete', name: 'app_team_delete', methods: ['POST'])]
    public function delete(Request $request, Team $team, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $team->getId(), $request->request->get('_token'))) {
            if ($team->getPlayers()->count() > 0) {
                $this->addFlash('error', "The team is has players associated. Can't delete");
                return $this->redirectToRoute('team_show', ['id' => $team->getId()], Response::HTTP_SEE_OTHER);
            }
            try {
                $entityManager->remove($team);
                $entityManager->flush();
                $this->addFlash('success', "the team " . $team->getName() . " was deleted successfully");
            } catch (\Throwable $th) {
                $this->addFlash('error', $th->getMessage());
            }
        }

        return $this->redirectToRoute('app_team_index', [], Response::HTTP_SEE_OTHER);
    }
}
