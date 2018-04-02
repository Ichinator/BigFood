<?php

namespace Ichinator\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ForbiddenWords
 *
 * @ORM\Table(name="forbidden_words")
 * @ORM\Entity(repositoryClass="Ichinator\NewsBundle\Repository\ForbiddenWordsRepository")
 */
class ForbiddenWords
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
     * @ORM\Column(name="Word", type="string", length=255, unique=true)
     */
    private $word;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set word.
     *
     * @param string $word
     *
     * @return ForbiddenWords
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word.
     *
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }
}
