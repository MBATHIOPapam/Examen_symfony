<?php

namespace App\Repository;

use App\Entity\Classe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Classe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Classe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Classe[]    findAll()
 * @method Classe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClasseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Classe::class);
    }

    /**
     * Trouver toutes les classes d’un niveau donné.
     */
    public function findClassesByNiveau(int $niveauId): array
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.niveau = :niveauId')
            ->setParameter('niveauId', $niveauId)
            ->getQuery()
            ->getResult();
    }
}
