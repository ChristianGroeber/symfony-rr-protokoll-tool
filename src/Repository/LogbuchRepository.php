<?php

namespace App\Repository;

use App\Entity\Logbuch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Logbuch|null find($id, $lockMode = null, $lockVersion = null)
 * @method Logbuch|null findOneBy(array $criteria, array $orderBy = null)
 * @method Logbuch[]    findAll()
 * @method Logbuch[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LogbuchRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Logbuch::class);
    }

    // /**
    //  * @return Logbuch[] Returns an array of Logbuch objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Logbuch
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
