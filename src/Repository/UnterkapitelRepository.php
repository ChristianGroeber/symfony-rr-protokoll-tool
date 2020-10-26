<?php

namespace App\Repository;

use App\Entity\Unterkapitel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

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
}
