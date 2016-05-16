<?php

namespace MainBundle\Repository;

/**
 * DistributoreRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DistributoreRepository extends \Doctrine\ORM\EntityRepository
{
    public function filtra($sigarette, $tabacco, $kitcartine, $accendini, $condom, $restomax){
        return $this->getEntityManager()->createQuery(
                'SELECT d FROM MainBundle:Distributore d
                WHERE isSigarette = $sigarette
                AND isTabacco = $tabacco
                AND isKitcartine = $kitcartine
                AND isAccendini = $accendini
                AND isCondom = $condom
                AND restomax <= $restomax'
            )->getResult();
    }
}
