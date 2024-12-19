<?php

namespace App\Repository;

use App\Entity\Etudiant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Etudiant|null find($id, $lockMode = null, $lockVersion = null)
 * @method Etudiant|null findOneBy(array $criteria, array $orderBy = null)
 * @method Etudiant[]    findAll()
 * @method Etudiant[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtudiantRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Etudiant::class);
    }

    /**
     * Trouver la classe d’un étudiant donné.
     */
    public function findClasseByEtudiant(int $etudiantId): ?Classe
    {
        return $this->createQueryBuilder('e')
            ->select('c')
            ->innerJoin('e.classe', 'c')
            ->andWhere('e.id = :etudiantId')
            ->setParameter('etudiantId', $etudiantId)
            ->getQuery()
            ->getOneOrNullResult();
    }
}
