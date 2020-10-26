<?php

namespace App\Repository;

use App\Entity\Lager;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Lager|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lager|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lager[]    findAll()
 * @method Lager[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LagerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lager::class);
    }
}
