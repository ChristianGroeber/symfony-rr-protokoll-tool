<?php

namespace App\Repository;

use App\Entity\Kapitel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Kapitel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kapitel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kapitel[]    findAll()
 * @method Kapitel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KapitelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Kapitel::class);
    }

    // /**
    //  * @return Kapitel[] Returns an array of Kapitel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Kapitel
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
