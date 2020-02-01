<?php

namespace App\Repository;

use App\Entity\UnterThema;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method UnterThema|null find($id, $lockMode = null, $lockVersion = null)
 * @method UnterThema|null findOneBy(array $criteria, array $orderBy = null)
 * @method UnterThema[]    findAll()
 * @method UnterThema[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnterThemaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, UnterThema::class);
    }

    // /**
    //  * @return UnterThema[] Returns an array of UnterThema objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?UnterThema
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
