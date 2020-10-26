<?php

namespace App\Repository;

use App\Entity\Programmpunkt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Programmpunkt|null find($id, $lockMode = null, $lockVersion = null)
 * @method Programmpunkt|null findOneBy(array $criteria, array $orderBy = null)
 * @method Programmpunkt[]    findAll()
 * @method Programmpunkt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProgrammpunktRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Programmpunkt::class);
    }
}
