<?php

namespace App\Repository;

use App\Entity\RemboursementDetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method RemboursementDetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method RemboursementDetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method RemboursementDetail[]    findAll()
 * @method RemboursementDetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RemboursementDetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RemboursementDetail::class);
    }

    // /**
    //  * @return RemboursementDetail[] Returns an array of RemboursementDetail objects
    //  */
    
    public function findByRefReglement($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.refReglement = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    

    /*
    public function findOneBySomeField($value): ?RemboursementDetail
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
