<?php

namespace Acme\DemoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @ORM\ManyToOne(targetEntity="Author", inversedBy="posts")
     * @ORM\JoinColumn(name="author_id",referencedColumnName="id")
     */
    protected $author;

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
     * Set title
     *
     * @param string $title
     * @return Post
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
     * Set position
     *
     * @param integer $position
     * @return Post
     */
    public function setPosition($position)
    {
        $this->position = $position;
    
        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set author
     *
     * @param \Acme\DemoBundle\Entity\Author $author
     * @return Post
     */
    public function setAuthor(\Acme\DemoBundle\Entity\Author $author = null)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return \Acme\DemoBundle\Entity\Author 
     */
    public function getAuthor()
    {
        return $this->author;
    }
    public function __toString()
    {
        return $this->title;
    }
}