<?php

namespace GM\UtilisateurBundle\Entity;
 
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
 
class UserRepository extends EntityRepository
{


    public function statsByCollaborateur()
    {
        return  $this->fetch('select montant as label, count(*) as data from Frais p group by montant');
    }


    private function fetch($query)
    {
        $stmt = $this->getEntityManager()->getConnection()->prepare($query);
        $stmt->execute();
        return  $stmt->fetchAll();
    }
}