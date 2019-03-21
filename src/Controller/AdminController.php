<?php

namespace App\Controller;

use App\Entity\Game;
use App\Entity\Player;
use App\Entity\Production;
use App\Entity\Resource;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController {

    /**
     * @Route("/admin", name="admin")
     */
    public function admin() {
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


        return $this->render('admin/admin.html.twig', [
            'users' => $users,
            'game' => $game
        ]);
    }
}