<?php

namespace Ichinator\NewsBundle\Repository;

/**
 * CommentsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentsRepository extends \Doctrine\ORM\EntityRepository
{
    public function findComments($id)

    {

        $query = $this->_em->createQuery('SELECT a FROM IchinatorNewsBundle:Comments a WHERE a.news = :id');

        $query->setParameter('id', $id);



        // Utilisation de getSingleResult car la requête ne doit retourner qu'un seul résultat

        return $query->getResult();

    }
}
