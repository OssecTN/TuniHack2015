<?php

namespace AppBundle\Repository;

/**
 * ObjectRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ObjectRepository extends \Doctrine\ORM\EntityRepository
{
    function getAll(){
        return $this->createQueryBuilder('o')
            ->select('o')
            ->where('o.deadline > :date')
            ->setParameter('date', new \Datetime())
            ->getQuery()->getResult();
    }
    function getObjectByPrivateKey($privateKey){
        return $this->createQueryBuilder('o')
            ->select('o')
            ->where('o.privateKey = :key')
            ->setParameter('key', $privateKey)
            ->getQuery()->getSingleResult();
    }
}
