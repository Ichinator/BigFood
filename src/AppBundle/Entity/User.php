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
     * Add comment
     *
     * @param \Ichinator\NewsBundle\Comments $comment
     *
     * @return User
     */
    public function addComment(\Ichinator\NewsBundle\Comments $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \Ichinator\NewsBundle\Comments $comment
     */
    public function removeComment(\Ichinator\NewsBundle\Comments $comment)
    {
        $this->comments->removeElement($comment);
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
