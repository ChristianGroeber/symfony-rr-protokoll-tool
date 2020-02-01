<?php

namespace App\Repository;

use App\Entity\GemeinschaftsProgramm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method GemeinschaftsProgramm|null find($id, $lockMode = null, $lockVersion = null)
 * @method GemeinschaftsProgramm|null findOneBy(array $criteria, array $orderBy = null)
 * @method GemeinschaftsProgramm[]    findAll()
 * @method GemeinschaftsProgramm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GemeinschaftsProgrammRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GemeinschaftsProgramm::class);
    }

    // /**
    //  * @return GemeinschaftsProgramm[] Returns an array of GemeinschaftsProgramm objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GemeinschaftsProgramm
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
