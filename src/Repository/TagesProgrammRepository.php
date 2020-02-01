<?php

namespace App\Repository;

use App\Entity\TagesProgramm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TagesProgramm|null find($id, $lockMode = null, $lockVersion = null)
 * @method TagesProgramm|null findOneBy(array $criteria, array $orderBy = null)
 * @method TagesProgramm[]    findAll()
 * @method TagesProgramm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TagesProgrammRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TagesProgramm::class);
    }

    // /**
    //  * @return TagesProgramm[] Returns an array of TagesProgramm objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TagesProgramm
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
