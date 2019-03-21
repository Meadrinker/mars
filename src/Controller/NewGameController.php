<?php

namespace App\Controller;

use App\Entity\Game;
use App\Entity\Message;
use App\Entity\Player;
use App\Entity\Production;
use App\Entity\Resource;
use App\Form\NewGameType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class NewGameController extends AbstractController {

    /**
     * @Route("/newgame", name="newgame")
     */
    public function newgame(Request $request) {

        $form = $this->createForm(NewGameType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->createNewGame();
            $this->deleteCurrentPlayer();
            $this->deleteCurrentMessage();
            $number = $form->get('numberPlayers')->getData();
            for ($i = 1; $i <= $number; $i++) {
                $player = $form->get('name' . $i)->getData();
                $playerEntity = $this->createNewPlayer($player);
                $this->createNewResource($playerEntity);
                $this->createNewProduction($playerEntity);
            }
            return $this->redirectToRoute('game');
        }

        return $this->render('default/newgame.html.twig', [
            'form' => $form->createView(),
        ]);

    }

    private function createNewGame() {
        $currentGame = $this->getDoctrine()->getRepository(Game::class)->findAll();
        foreach ($currentGame as $oneGame) {
            $gameId = $oneGame->getId();
            $this->getDoctrine()->getRepository(Game::class)->deleteGame($gameId);
        }
        $game = new Game();
        $game->setEra(1);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($game);
        $entityManager->flush();
    }

    private function deleteCurrentPlayer() {
        $allPlayers = $this->getDoctrine()->getRepository(Player::class)->findAll();
        foreach ($allPlayers as $onePlayer) {
            $playerId = $onePlayer->getId();
            $this->getDoctrine()->getRepository(Player::class)->deletePlayer($playerId);
        }
    }

    private function createNewPlayer($player) {
        $playerEntity = new Player();
        $playerEntity->setName($player);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($playerEntity);
        $entityManager->flush();
        return $playerEntity;
    }

    private function createNewResource(Player $playerEntity) {
        $resourceEntity = new Resource();
        $resourceEntity->setPlayer($playerEntity);
        $resourceEntity->setMegacredit(0);
        $resourceEntity->setIron(0);
        $resourceEntity->setTitan(0);
        $resourceEntity->setPlant(0);
        $resourceEntity->setEnergy(0);
        $resourceEntity->setHeat(0);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($resourceEntity);
        $entityManager->flush();
    }

    private function createNewProduction(Player $playerEntity) {
        $productionEntity = new Production();
        $productionEntity->setPlayer($playerEntity);
        $productionEntity->setMegacredit(0);
        $productionEntity->setIron(0);
        $productionEntity->setTitan(0);
        $productionEntity->setPlant(0);
        $productionEntity->setEnergy(0);
        $productionEntity->setHeat(0);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($productionEntity);
        $entityManager->flush();
    }

    private function deleteCurrentMessage() {
        $allMessages = $this->getDoctrine()->getRepository(Message::class)->findAll();
        foreach ($allMessages as $oneMessage) {
            $messageId = $oneMessage->getId();
            $this->getDoctrine()->getRepository(Message::class)->deleteMessage($messageId);
        }
    }

}