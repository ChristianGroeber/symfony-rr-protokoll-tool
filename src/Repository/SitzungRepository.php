<?php

namespace App\Repository;

use App\Entity\Sitzung;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Sitzung|null find($id, $lockMode = null, $lockVersion = null)
 * @method Sitzung|null findOneBy(array $criteria, array $orderBy = null)
 * @method Sitzung[]    findAll()
 * @method Sitzung[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SitzungRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Sitzung::class);
    }
}
