<?php

namespace App\Repository;

use App\Entity\Programmpunkt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Programmpunkt|null find($id, $lockMode = null, $lockVersion = null)
 * @method Programmpunkt|null findOneBy(array $criteria, array $orderBy = null)
 * @method Programmpunkt[]    findAll()
 * @method Programmpunkt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgrammpunktRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Programmpunkt::class);
    }

    // /**
    //  * @return Programmpunkt[] Returns an array of Programmpunkt objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Programmpunkt
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
