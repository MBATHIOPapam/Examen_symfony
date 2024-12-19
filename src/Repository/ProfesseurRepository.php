<?php

namespace App\Repository;

use App\Entity\Professeur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Professeur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Professeur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Professeur[]    findAll()
 * @method Professeur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProfesseurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Professeur::class);
    }

    /**
     * Trouver tous les cours d’un professeur donné.
     */
    public function findCoursByProfesseur(int $professeurId): array
    {
        return $this->createQueryBuilder('p')
            ->innerJoin('p.cours', 'c')
            ->andWhere('p.id = :professeurId')
            ->setParameter('professeurId', $professeurId)
            ->getQuery()
            ->getResult();
    }
}
