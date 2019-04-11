<?php

namespace App\Repository;

use App\Entity\PageTemplate;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method PageTemplate|null find($id, $lockMode = null, $lockVersion = null)
 * @method PageTemplate|null findOneBy(array $criteria, array $orderBy = null)
 * @method PageTemplate[]    findAll()
 * @method PageTemplate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PageTemplateRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, PageTemplate::class);
    }

    // /**
    //  * @return PageTemplate[] Returns an array of PageTemplate objects
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
    public function findOneBySomeField($value): ?PageTemplate
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
