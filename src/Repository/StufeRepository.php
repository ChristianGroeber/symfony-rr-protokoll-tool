<?php

namespace App\Repository;

use App\Entity\Stufe;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Stufe|null find($id, $lockMode = null, $lockVersion = null)
 * @method Stufe|null findOneBy(array $criteria, array $orderBy = null)
 * @method Stufe[]    findAll()
 * @method Stufe[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StufeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Stufe::class);
    }

    // /**
    //  * @return Stufe[] Returns an array of Stufe objects
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
    public function findOneBySomeField($value): ?Stufe
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
