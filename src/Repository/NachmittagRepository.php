<?php

namespace App\Repository;

use App\Entity\Nachmittag;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Nachmittag|null find($id, $lockMode = null, $lockVersion = null)
 * @method Nachmittag|null findOneBy(array $criteria, array $orderBy = null)
 * @method Nachmittag[]    findAll()
 * @method Nachmittag[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NachmittagRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Nachmittag::class);
    }

    // /**
    //  * @return Nachmittag[] Returns an array of Nachmittag objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Nachmittag
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
