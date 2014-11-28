<?php

namespace Dev\Theo\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 */
class Post
{


    /**
    * @ORM\ManyToOne(targetEntity="Category", inversedBy="posts")
    * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
    */
    protected $category;


    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var boolean
     */
    private $is_published;

    /**
     * @var string
     */
    private $body;


    /**
    * @var string 
    *
    * @Gedmo\Slug(fields={"title"}, updatable=false, separator="-")
    * @ORM\Column(name="slug", type="string", length=255)
    */
    private $slug;


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
     * Set body
     *
     * @param string $body
     * @return Post
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string 
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set is_published
     *
     * @param boolean $isPublished
     * @return Post
     */
    public function setIsPublished($isPublished)
    {
        $this->is_published = $isPublished;

        return $this;
    }

    /**
     * Get is_published
     *
     * @return boolean 
     */
    public function getIsPublished()
    {
        return $this->is_published;
    }

    /**
     * Set slug
     *
     * @param slug $slug
     * @return Post
     */
    public function setslug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    
}
