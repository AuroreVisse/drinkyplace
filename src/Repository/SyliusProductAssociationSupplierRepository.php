<?php

namespace App\Repository;

use App\Entity\SyliusProductAssociationSupplier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SyliusProductAssociationSupplier|null find($id, $lockMode = null, $lockVersion = null)
 * @method SyliusProductAssociationSupplier|null findOneBy(array $criteria, array $orderBy = null)
 * @method SyliusProductAssociationSupplier[]    findAll()
 * @method SyliusProductAssociationSupplier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SyliusProductAssociationSupplierRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SyliusProductAssociationSupplier::class);
    }

    // /**
    //  * @return SyliusProductAssociationSupplier[] Returns an array of SyliusProductAssociationSupplier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SyliusProductAssociationSupplier
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
