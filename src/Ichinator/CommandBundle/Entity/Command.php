<?php
/**
 * Created by PhpStorm.
 * User: ichinator
 * Date: 13/02/18
 * Time: 15:02
 */

namespace Ichinator\CommandBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Command
 * @ORM\Table(name="command")
 * @ORM\Entity(repositoryClass="Ichinator\CommandBundle\Repository\CommandRepository")
 */

class Command
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
     * @ORM\Column ( type="string", length=255, nullable=true)
     */

    private $burger;
    /**
     * @ORM\Column ( type="string", length=255, nullable=true)
     */

    private $plat;
    /**
     * @ORM\Column ( type="string", length=255, nullable= true)
     */
    
    private $dessert;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set burger
     *
     * @param string $burger
     *
     * @return Command
     */
    public function setBurger($burger)
    {
        $this->burger = $burger;

        return $this;
    }

    /**
     * Get burger
     *
     * @return string
     */
    public function getBurger()
    {
        return $this->burger;
    }

    /**
     * Set plat
     *
     * @param string $plat
     *
     * @return Command
     */
    public function setPlat($plat)
    {
        $this->plat = $plat;

        return $this;
    }

    /**
     * Get plat
     *
     * @return string
     */
    public function getPlat()
    {
        return $this->plat;
    }

    /**
     * Set dessert
     *
     * @param string $dessert
     *
     * @return Command
     */
    public function setDessert($dessert)
    {
        $this->dessert = $dessert;

        return $this;
    }

    /**
     * Get dessert
     *
     * @return string
     */
    public function getDessert()
    {
        return $this->dessert;
    }
}
