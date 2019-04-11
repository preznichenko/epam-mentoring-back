<?php

namespace App\Repository;

use App\Entity\WitgetGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method WitgetGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method WitgetGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method WitgetGroup[]    findAll()
 * @method WitgetGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WitgetGroupRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, WitgetGroup::class);
    }

    // /**
    //  * @return WitgetGroup[] Returns an array of WitgetGroup objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?WitgetGroup
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
