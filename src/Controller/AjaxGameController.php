<?php

namespace App\Controller;

use App\Entity\Game;
use App\Entity\Message;
use App\Entity\Player;
use App\Entity\Production;
use App\Entity\Resource;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AjaxGameController extends AbstractController
{

    /**
     * @Route("/game/data", name="game_data")
     */
    public function getAction(Request $request){
        $id = $request->get('id');
        $data = $this->getData($id);
        return new JsonResponse($data);
    }

    private function getData($id) {
        if ($id == 0) {
            $data = $this->firstMessageData($id);
        } else {
            $data = $this->messageData($id);
        }
        return $data;
    }

    private function firstMessageData($id) {
        $lastId = 0;
        $timeStart = time();
        $timeLeft = 0;
        while ($lastId === 0 && $timeLeft <= 30) {
            $lastId = $this->getDoctrine()->getRepository(Message::class)->findLastId();
            if ($lastId === null) {
                $lastId = $id;
                sleep(2);
            }
            $timeLeft = time() - $timeStart;
        }

        $data = [
            'id' => $lastId,
            'messages' => [
            ],
            'users' => [
            ],
            'game' => [
            ]
        ];

        return $data;
    }

    private function messageData($id) {
        $selectedMessages = [];
        $timeStart = time();
        $timeLeft = 0;
        while (count($selectedMessages) === 0 && $timeLeft <= 30) {
            $selectedMessages = $this->getDoctrine()->getRepository(Message::class)->selectFromLastId($id);
            if (count($selectedMessages) === 0) {
                sleep(2);
            }
            $timeLeft = time() - $timeStart;
        }

        $messages = [];
        foreach ($selectedMessages as $message) {
            $messages[] = [
              'text' => $message->getText()
            ];
        }

        $users = [];
        $eras = [];
        if (count($selectedMessages) > 0) {
            $message = end($selectedMessages);
            $id = $message->getId();
            $players = $this->getDoctrine()->getRepository(Player::class)->findAll();
            foreach ($players as $player) {
                $playerId = $player->getId();
                $resource = $this->getDoctrine()->getRepository(Resource::class)->findOneBy(['player' => $playerId]);
                $production = $this->getDoctrine()->getRepository(Production::class)->findOneBy(['player' => $playerId]);
                $users[] = [
                  'id' => $playerId,
                  'mr' => $resource->getMegacredit(),
                  'ir' => $resource->getIron(),
                  'tr' => $resource->getTitan(),
                  'pr' => $resource->getPlant(),
                  'er' => $resource->getEnergy(),
                  'hr' => $resource->getHeat(),
                  'mp' => $production->getMegacredit(),
                  'ip' => $production->getIron(),
                  'tp' => $production->getTitan(),
                  'pp' => $production->getPlant(),
                  'ep' => $production->getEnergy(),
                  'hp' => $production->getHeat()
                ];
            }
            $games = $this->getDoctrine()->getRepository(Game::class)->findAll();
            foreach ($games as $game) {
                $eras[] = [
                    'era' => $game->getEra()
                ];
            }
        }

        $data = [
            'id' => $id,
            'messages' => $messages,
            'users' => $users,
            'games' => $eras
        ];

        return $data;
    }

}