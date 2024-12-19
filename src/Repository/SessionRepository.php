<?php

namespace App\Repository;

use App\Entity\Session;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Session|null find($id, $lockMode = null, $lockVersion = null)
 * @method Session|null findOneBy(array $criteria, array $orderBy = null)
 * @method Session[]    findAll()
 * @method Session[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SessionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Session::class);
    }

    /**
     * Trouver toutes les sessions d’un cours donné.
     */
    public function findSessionsByCours(int $coursId): array
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.cours = :coursId')
            ->setParameter('coursId', $coursId)
            ->getQuery()
            ->getResult();
    }
}
