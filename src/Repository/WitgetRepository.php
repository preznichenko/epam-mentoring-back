<?php

namespace App\Repository;

use App\Entity\Witget;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Witget|null find($id, $lockMode = null, $lockVersion = null)
 * @method Witget|null findOneBy(array $criteria, array $orderBy = null)
 * @method Witget[]    findAll()
 * @method Witget[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WitgetRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Witget::class);
    }

    // /**
    //  * @return Witget[] Returns an array of Witget objects
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
    public function findOneBySomeField($value): ?Witget
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
