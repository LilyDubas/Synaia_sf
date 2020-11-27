<?php

namespace App\Repository;

use App\Entity\IllustrationsDigitales;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method IllustrationsDigitales|null find($id, $lockMode = null, $lockVersion = null)
 * @method IllustrationsDigitales|null findOneBy(array $criteria, array $orderBy = null)
 * @method IllustrationsDigitales[]    findAll()
 * @method IllustrationsDigitales[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IllustrationsDigitalesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IllustrationsDigitales::class);
    }

    // /**
    //  * @return IllustrationsDigitales[] Returns an array of IllustrationsDigitales objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?IllustrationsDigitales
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
