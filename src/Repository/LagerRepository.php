<?php

namespace App\Repository;

use App\Entity\Lager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Lager|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lager|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lager[]    findAll()
 * @method Lager[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LagerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lager::class);
    }

    // /**
    //  * @return Lager[] Returns an array of Lager objects
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
    public function findOneBySomeField($value): ?Lager
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
