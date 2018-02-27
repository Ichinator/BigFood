<?php

namespace Ichinator\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table(name="comments")
 * @ORM\Entity(repositoryClass="Ichinator\NewsBundle\Repository\CommentsRepository")
 */
class Comments
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="News", inversedBy="comments")
     * @ORM\JoinColumn(name="news_id", referencedColumnName="id")
     */
    private $news;

    /**
     * @ORM\ManyToOne(targetEntity="Ichinator\CommandBundle\Entity\Burger", inversedBy="comments")
     * @ORM\JoinColumn(name="burger_id", referencedColumnName="id")
     */
    private $burger;

    /**
     * @ORM\ManyToOne(targetEntity="Ichinator\CommandBundle\Entity\Plat", inversedBy="comments")
     * @ORM\JoinColumn(name="plat_id", referencedColumnName="id")
     */
    private $plat;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="comments")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Comments
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    public function __toString()
    {
        return $this->getContent();
    }


    /**
     * Set user
     *
     * @param \AppBundle\Entity\User $user
     *
     * @return Comments
     */
    public function setUser(\AppBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \AppBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set burger
     *
     * @param \Ichinator\CommandBundle\Entity\Burger $burger
     *
     * @return Comments
     */
    public function setBurger(\Ichinator\CommandBundle\Entity\Burger $burger = null)
    {
        $this->burger = $burger;

        return $this;
    }

    /**
     * Get burger
     *
     * @return \Ichinator\CommandBundle\Entity\Burger
     */
    public function getBurger()
    {
        return $this->burger;
    }

    /**
     * Set news
     *
     * @param \Ichinator\NewsBundle\Entity\News $news
     *
     * @return Comments
     */
    public function setNews(\Ichinator\NewsBundle\Entity\News $news = null)
    {
        $this->news = $news;

        return $this;
    }

    /**
     * Get news
     *
     * @return \Ichinator\NewsBundle\Entity\News
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Set plat
     *
     * @param \Ichinator\CommandBundle\Entity\Plat $plat
     *
     * @return Comments
     */
    public function setPlat(\Ichinator\CommandBundle\Entity\Plat $plat = null)
    {
        $this->plat = $plat;

        return $this;
    }

    /**
     * Get plat
     *
     * @return \Ichinator\CommandBundle\Entity\Plat
     */
    public function getPlat()
    {
        return $this->plat;
    }
}
