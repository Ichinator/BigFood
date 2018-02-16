<?php

namespace Ichinator\ContactBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * contactMessage
 *
 * @ORM\Table(name="contact_message")
 * @ORM\Entity(repositoryClass="Ichinator\ContactBundle\Repository\contactMessageRepository")
 */
class contactMessage
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="mailAdress", type="string", length=255)
     */
    private $mailAdress;

    /**
     * @var int
     *
     * @ORM\Column(name="telephoneNumber", type="integer", nullable=true)
     */
    private $telephoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;


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
     * Set name
     *
     * @param string $name
     *
     * @return contactMessage
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set mailAdress
     *
     * @param string $mailAdress
     *
     * @return contactMessage
     */
    public function setMailAdress($mailAdress)
    {
        $this->mailAdress = $mailAdress;

        return $this;
    }

    /**
     * Get mailAdress
     *
     * @return string
     */
    public function getMailAdress()
    {
        return $this->mailAdress;
    }

    /**
     * Set telephoneNumber
     *
     * @param integer $telephoneNumber
     *
     * @return contactMessage
     */
    public function setTelephoneNumber($telephoneNumber)
    {
        $this->telephoneNumber = $telephoneNumber;

        return $this;
    }

    /**
     * Get telephoneNumber
     *
     * @return int
     */
    public function getTelephoneNumber()
    {
        return $this->telephoneNumber;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return contactMessage
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}
