<?php

namespace App\Repository;

use App\Entity\Abzeichen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Abzeichen|null find($id, $lockMode = null, $lockVersion = null)
 * @method Abzeichen|null findOneBy(array $criteria, array $orderBy = null)
 * @method Abzeichen[]    findAll()
 * @method Abzeichen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbzeichenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Abzeichen::class);
    }

    // /**
    //  * @return Abzeichen[] Returns an array of Abzeichen objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Abzeichen
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
