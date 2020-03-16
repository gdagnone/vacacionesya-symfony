<?php

namespace App\Repository;

use App\Entity\Llaves;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Llaves|null find($id, $lockMode = null, $lockVersion = null)
 * @method Llaves|null findOneBy(array $criteria, array $orderBy = null)
 * @method Llaves[]    findAll()
 * @method Llaves[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LlavesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Llaves::class);
    }

    // /**
    //  * @return Llaves[] Returns an array of Llaves objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Llaves
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
