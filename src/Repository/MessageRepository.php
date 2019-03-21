<?php

namespace App\Repository;

use App\Entity\Message;
use Doctrine\ORM\EntityRepository;

class MessageRepository extends EntityRepository {

    public function deleteMessage($id) {
        $results = $this
            ->getEntityManager()
            ->createQueryBuilder()
            ->delete(Message::class, 'm')
            ->where('m.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();

        return $results;
    }

    public function selectMessagesDesc() {
        $results = $this
            ->getEntityManager()
            ->createQueryBuilder()
            ->select('m')
            ->from(Message::class, 'm')
            ->orderBy('m.id', 'DESC')
            ->getQuery()
            ->getResult();

        return $results;
    }

    public function findLastId() {
        $result =  $this
            ->getEntityManager()
            ->createQueryBuilder()
            ->select('m.id')
            ->setMaxResults(1)
            ->from(Message::class, 'm')
            ->orderBy('m.id', 'DESC')
            ->getQuery()
            ->getOneOrNullResult();

        if ($result !== null) {
            return $result['id'];
        }

        return null;
    }

    public function selectFromLastId($lastId) {
        $results = $this
            ->getEntityManager()
            ->createQueryBuilder()
            ->select('m')
            ->from(Message::class, 'm')
            ->where('m.id > :lastId')
            ->setParameter('lastId', $lastId)
            ->orderBy('m.id', 'ASC')
            ->getQuery()
            ->getResult();

        return $results;
    }

}