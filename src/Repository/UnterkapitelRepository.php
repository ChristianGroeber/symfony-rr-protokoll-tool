<?php

namespace App\Repository;

use App\Entity\Unterkapitel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Unterkapitel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Unterkapitel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Unterkapitel[]    findAll()
 * @method Unterkapitel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnterkapitelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Unterkapitel::class);
    }

    // /**
    //  * @return Unterkapitel[] Returns an array of Unterkapitel objects
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
    public function findOneBySomeField($value): ?Unterkapitel
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
