<?php

namespace App\Repository;

use App\Entity\Abzeichen;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Abzeichen|null find($id, $lockMode = null, $lockVersion = null)
 * @method Abzeichen|null findOneBy(array $criteria, array $orderBy = null)
 * @method Abzeichen[]    findAll()
 * @method Abzeichen[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AbzeichenRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Abzeichen::class);
    }
}
