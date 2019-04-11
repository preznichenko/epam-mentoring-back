<?php

namespace App\Repository;

use App\Entity\PageSlot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PageSlot|null find($id, $lockMode = null, $lockVersion = null)
 * @method PageSlot|null findOneBy(array $criteria, array $orderBy = null)
 * @method PageSlot[]    findAll()
 * @method PageSlot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageSlotRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PageSlot::class);
    }

    // /**
    //  * @return PageSlot[] Returns an array of PageSlot objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PageSlot
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
