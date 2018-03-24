<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Ichinator\NewsBundle\Entity\Comments", mappedBy="user")
     */

    private $comments;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Add comments
     *
     * @param \Ichinator\NewsBundle\Entity\Comments $comments
     *
     * @return User
     */
    public function addComments(\Ichinator\NewsBundle\Entity\Comments $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \Ichinator\NewsBundle\Entity\Comments $comments
     */
    public function removeComments(\Ichinator\NewsBundle\Entity\Comments $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }
}
