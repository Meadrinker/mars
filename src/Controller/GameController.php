<?php

namespace App\Controller;

use App\Entity\Game;
use App\Entity\Message;
use App\Entity\Player;
use App\Entity\Production;
use App\Entity\Resource;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GameController extends AbstractController {

    /**
     * @Route("/game", name="game")
     */
    public function game() {

        $users = [];
        $players = $this->getDoctrine()->getRepository(Player::class)->findAll();
        foreach ($players as $player) {
            $playerId = $player->getId();
            $resource = $this->getDoctrine()->getRepository(Resource::class)->findOneBy(['player' => $playerId]);
            $production = $this->getDoctrine()->getRepository(Production::class)->findOneBy(['player' => $playerId]);
            $users[$playerId]['resource'] = $resource;
            $users[$playerId]['production'] = $production;
        }
        $game = $this->getDoctrine()->getRepository(Game::class)->findAll();
        $messages = $this->getDoctrine()->getRepository(Message::class)->selectMessagesDesc();
//            echo '<pre>';
//            \Doctrine\Common\Util\Debug::dump($users);



        return $this->render('game/game.html.twig', [
            'users' => $users,
            'game' => $game,
            'messages' => $messages
        ]);
    }

    /**
     * @Route("/game/era", name="game_era")
     */
    public function era() {
        $players = $this->getDoctrine()->getRepository(Player::class)->findAll();
        foreach ($players as $player) {
            $playerId = $player->getId();
            $resource = $this->getDoctrine()->getRepository(Resource::class)->findOneBy(['player' => $playerId]);
            $production = $this->getDoctrine()->getRepository(Production::class)->findOneBy(['player' => $playerId]);
            $resource = $this->energyToHeat($resource);
            $this->newEra($resource, $production);
        }
        $games = $this->getDoctrine()->getRepository(Game::class)->findAll();
        foreach ($games as $game) {
            $currentEra = $game->getEra();
            $updateEra = $currentEra + 1;
            $game->setEra($updateEra);
            $this->eraMessage($updateEra);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($game);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin');
    }

    private function energyToHeat($resource) {
        $currentEnergy = $resource->getEnergy();
        $currentHeat = $resource->getHeat();
        $updateHeat = $currentHeat + $currentEnergy;
        $resource->setEnergy(0);
        $resource->setHeat($updateHeat);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($resource);
        $entityManager->flush();
        return $resource;
    }

    private function newEra($resource, $production) {
        $megacreditprod = $production->getMegacredit();
        $megacredit = $resource->getMegacredit();
        $updateMegacredit = $megacredit + $megacreditprod;
        $resource->setMegacredit($updateMegacredit);
        $ironprod = $production->getIron();
        $iron = $resource->getIron();
        $updateIron = $iron + $ironprod;
        $resource->setIron($updateIron);
        $titanprod = $production->getTitan();
        $titan = $resource->getTitan();
        $updateTitan = $titan + $titanprod;
        $resource->setTitan($updateTitan);
        $plantprod = $production->getPlant();
        $plant = $resource->getPlant();
        $updatePlant = $plant + $plantprod;
        $resource->setPlant($updatePlant);
        $energyprod = $production->getEnergy();
        $energy = $resource->getEnergy();
        $updateEnergy = $energy + $energyprod;
        $resource->setEnergy($updateEnergy);
        $heatprod = $production->getHeat();
        $heat = $resource->getHeat();
        $updateHeat = $heat + $heatprod;
        $resource->setHeat($updateHeat);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($resource);
        $entityManager->flush();
    }

    private function eraMessage($era) {
        $messageEntity = new Message();
        $message = 'Nowa era: '. $era . '.';
        $messageEntity->setText($message);
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($messageEntity);
        $entityManager->flush();
    }
}