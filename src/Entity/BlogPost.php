<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* BlogPost
* @ORM\Table(name="blog_post")
* @ORM\Entity(repositoryClass="App\Repository\BlogPostRepository")
* @ORM\HasLifecycleCallbacks
*/
class BlogPost
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;


    /**
     * @var string
     *
     * @ORM\Column(name="subtitle", type="string", length=255)
     */
    private $subtitle;

    

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetimetz")
     */
    private $createdAt;


}
