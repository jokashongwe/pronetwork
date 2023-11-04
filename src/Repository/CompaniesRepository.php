<?php

namespace App\Repository;

use App\Entity\Companies;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Companies|null find($id, $lockMode = null, $lockVersion = null)
 * @method Companies|null findOneBy(array $criteria, array $orderBy = null)
 * @method Companies[]    findAll()
 * @method Companies[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompaniesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Companies::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Companies $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(Companies $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return Companies[] Returns an array of Companies objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Companies
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function recherche($value, $province=null, $offset=0, $is_count=false)
    {
        $conn = $this->getEntityManager()->getConnection();
        $value = strtolower($value);
        $result = $is_count ? 'count(c.company_legal_name)' : '*';
        $last_part = $is_count ? '' : "ORDER BY c.company_legal_name LIMIT 50 OFFSET $offset";
        $province = strtolower($province) == "all" ? null : strtolower($province);
        if(empty($province)){
            $sql = "
                SELECT $result 
                FROM companies c
                WHERE 
                    c.company_legal_name ilike '$value' OR 
                    lower(company_sectors::text) ilike '$value'
                $last_part
            ";
        }else {
            $sql = "
                SELECT $result 
                FROM companies c
                WHERE 
                    (c.company_legal_name ilike '$value' OR 
                    lower(company_sectors::text) ilike '$value') AND
                    lower(company_state) = lower('$province') 
                $last_part
            ";
        }
        
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();

        // returns an array of arrays (i.e. a raw data set)
        return $resultSet->fetchAllAssociative();
    }

    public function rechercheParCategorie($value, $province=null, $offset=0, $is_count=false)
    {
        $conn = $this->getEntityManager()->getConnection();
        $value = strtolower($value);
        $result = $is_count ? 'count(c.company_legal_name)' : '*';
        $last_part = $is_count ? '' : "ORDER BY c.company_legal_name LIMIT 50 OFFSET $offset";
        $province = strtolower($province) == "all" ? null : strtolower($province);
        
        if(empty($province)){
            $sql = "
                SELECT $result
                FROM companies c
                WHERE lower(company_category) = '$value'
                $last_part
            ";
        }else {
            $sql = "
                SELECT $result 
                FROM companies c
                WHERE 
                    lower(company_category) = '$value' AND
                    lower(company_state) = '$province'
                $last_part
            ";
        }
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();

        // returns an array of arrays (i.e. a raw data set)
        return $resultSet->fetchAllAssociative();
    }
}
