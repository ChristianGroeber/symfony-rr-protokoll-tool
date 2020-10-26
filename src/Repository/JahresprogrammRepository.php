<?php

namespace App\Repository;

use App\Entity\Jahresprogramm;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Jahresprogramm|null find($id, $lockMode = null, $lockVersion = null)
 * @method Jahresprogramm|null findOneBy(array $criteria, array $orderBy = null)
 * @method Jahresprogramm[]    findAll()
 * @method Jahresprogramm[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JahresprogrammRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Jahresprogramm::class);
    }
}
