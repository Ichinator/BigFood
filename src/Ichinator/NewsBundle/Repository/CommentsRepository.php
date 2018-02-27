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
    public function findNewsComments($id)

    {

        $query = $this->_em->createQuery('SELECT a FROM IchinatorNewsBundle:Comments a WHERE a.news = :id');

        $query->setParameter('id', $id);



        // Utilisation de getSingleResult car la requête ne doit retourner qu'un seul résultat

        return $query->getResult();

    }

    public function findBurgerComments($id)

    {

        $query = $this->_em->createQuery('SELECT a FROM IchinatorNewsBundle:Comments a WHERE a.burger = :id');

        $query->setParameter('id', $id);



        // Utilisation de getSingleResult car la requête ne doit retourner qu'un seul résultat

        return $query->getResult();

    }

    public function findPlatComments($id)

    {

        $query = $this->_em->createQuery('SELECT a FROM IchinatorNewsBundle:Comments a WHERE a.plat = :id');

        $query->setParameter('id', $id);



        // Utilisation de getSingleResult car la requête ne doit retourner qu'un seul résultat

        return $query->getResult();

    }
}
