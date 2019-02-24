<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="subtitle", type="string", length=255, unique=true)
     */
    private $subtitle;

    /**
     * @var string
     *
     * @ORM\Column(name="corpus", type="string", length=255)
     */
    private $corpus;

    /**
     * @var  datetime
     *
     * @ORM\Column(name="createdAt", type="datetime", length=255)
     */
    private $createdAt;




    /**
     * Set name
     *
     * @param string $name
     *
     * @return Article
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
     * Set title
     *
     * @param string $title
     *
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }


    /**
     * Set subtitle
     *
     * @param string $subtitle
     *
     * @return Article
     */

    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
    }


    /**
     * Set corpus
     *
     * @param string $corpus
     *
     * @return datetime
     */
    public function setCorpus($corpus)
    {
        $this->corpus = $corpus;

        return $this;
    }

    /**
     * Get corpus
     *
     * @return datetime
     */
    public function getCorpus()
    {
        return $this->corpus;
    }


    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     *
     * @return DateTime
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

}
