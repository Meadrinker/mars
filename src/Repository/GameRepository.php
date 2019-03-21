<?php

namespace App\Repository;

use App\Entity\Game;
use Doctrine\ORM\EntityRepository;

class GameRepository extends EntityRepository {

    public function deleteGame($id) {
        $results = $this
            ->getEntityManager()
            ->createQueryBuilder()
            ->delete(Game::class, 'g')
            ->where('g.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();

        return $results;
    }

}