<?php

namespace App\Repository;

use App\Entity\Teamzeit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Teamzeit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Teamzeit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Teamzeit[]    findAll()
 * @method Teamzeit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TeamzeitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Teamzeit::class);
    }

    // /**
    //  * @return Teamzeit[] Returns an array of Teamzeit objects
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
    public function findOneBySomeField($value): ?Teamzeit
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
