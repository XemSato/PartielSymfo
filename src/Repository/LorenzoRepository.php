<?php

namespace App\Repository;

use App\Entity\Lorenzo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Lorenzo>
 *
 * @method Lorenzo|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lorenzo|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lorenzo[]    findAll()
 * @method Lorenzo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LorenzoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lorenzo::class);
    }

//    /**
//     * @return Lorenzo[] Returns an array of Lorenzo objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Lorenzo
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
