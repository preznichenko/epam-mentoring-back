<?php

namespace App\Repository;

use App\Entity\PageSlotWitgets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PageSlotWitgets|null find($id, $lockMode = null, $lockVersion = null)
 * @method PageSlotWitgets|null findOneBy(array $criteria, array $orderBy = null)
 * @method PageSlotWitgets[]    findAll()
 * @method PageSlotWitgets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageSlotWitgetsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PageSlotWitgets::class);
    }

    // /**
    //  * @return PageSlotWitgets[] Returns an array of PageSlotWitgets objects
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
    public function findOneBySomeField($value): ?PageSlotWitgets
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
