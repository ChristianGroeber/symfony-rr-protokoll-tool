<?php

namespace App\Repository;

use App\Entity\Kapitel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Kapitel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Kapitel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Kapitel[]    findAll()
 * @method Kapitel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KapitelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Kapitel::class);
    }
}
