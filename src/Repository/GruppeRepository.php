<?php

namespace App\Repository;

use App\Entity\Gruppe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Gruppe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Gruppe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Gruppe[]    findAll()
 * @method Gruppe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GruppeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Gruppe::class);
    }

    // /**
    //  * @return Gruppe[] Returns an array of Gruppe objects
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
    public function findOneBySomeField($value): ?Gruppe
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
