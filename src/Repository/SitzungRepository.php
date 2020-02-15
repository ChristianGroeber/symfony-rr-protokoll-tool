<?php

namespace App\Repository;

use App\Entity\Sitzung;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Sitzung|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sitzung|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sitzung[]    findAll()
 * @method Sitzung[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SitzungRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sitzung::class);
    }

    // /**
    //  * @return Sitzung[] Returns an array of Sitzung objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Sitzung
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
