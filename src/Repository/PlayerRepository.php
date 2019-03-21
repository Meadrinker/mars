<?php

namespace App\Repository;

use App\Entity\Player;
use Doctrine\ORM\EntityRepository;

class PlayerRepository extends EntityRepository {

    public function deletePlayer($id) {
        $results = $this
            ->getEntityManager()
            ->createQueryBuilder()
            ->delete(Player::class, 'p')
            ->where('p.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();

        return $results;
    }

}