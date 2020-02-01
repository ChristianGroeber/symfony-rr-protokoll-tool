<?php

namespace App\Repository;

use App\Entity\TeamProgramm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TeamProgramm|null find($id, $lockMode = null, $lockVersion = null)
 * @method TeamProgramm|null findOneBy(array $criteria, array $orderBy = null)
 * @method TeamProgramm[]    findAll()
 * @method TeamProgramm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeamProgrammRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TeamProgramm::class);
    }

    // /**
    //  * @return TeamProgramm[] Returns an array of TeamProgramm objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TeamProgramm
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
