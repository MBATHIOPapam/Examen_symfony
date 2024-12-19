<?php

namespace App\Repository;

use App\Entity\Cours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cours|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cours|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cours[]    findAll()
 * @method Cours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cours::class);
    }

    /**
     * Trouver tous les cours d'une classe donnée.
     */
    public function findCoursByClasse(int $classeId): array
    {
        return $this->createQueryBuilder('c')
            ->innerJoin('c.classes', 'cl')
            ->andWhere('cl.id = :classeId')
            ->setParameter('classeId', $classeId)
            ->getQuery()
            ->getResult();
    }
}
