<?php
/**
 * Created by PhpStorm.
 * User: mbaechtel
 * Date: 06/08/2016
 * Time: 11:26
 */

namespace Ghost\BlogBundle\Model;

/**
 * Class InstaMedia
 * @package Ghost\BlogBundle\Model
 */
abstract class InstaMedia implements InstaMediaInterface
{
    /**
     * @var integer
     */
    protected $externalId;

    /**
     * @var integer
     */
    protected $comments;

    /**
     * @var integer
     */
    protected $likes;

    /**
     * @var string
     */
    protected $link;

    /**
     * @var string
     */
    protected $standardResolution;

    /**
     * @var bool
     */
    protected $published;

    /**
     * @var \DateTime
     */
    protected $created;

    /**
     * @var \DateTime
     */
    protected $updated;

    /**
     * Get external id
     *
     * @return int
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Set external id
     *
     * @param int $externalId
     * @return $this
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * Get comments count
     *
     * @return int
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set comments
     *
     * @param int $comments
     * @return $this
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get likes count
     *
     * @return int
     */
    public function getLikes()
    {
        return $this->likes;
    }

    /**
     * Set likes
     *
     * @param int $likes
     * @return $this
     */
    public function setLikes($likes)
    {
        $this->likes = $likes;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set link
     *
     * @param string $link
     * @return $this
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get standard resolution
     *
     * @return string
     */
    public function getStandardResolution()
    {
        return $this->standardResolution;
    }

    /**
     * Set standard resolution
     *
     * @param string $standardResolution
     * @return $this
     */
    public function setStandardResolution($standardResolution)
    {
        $this->standardResolution = $standardResolution;

        return $this;
    }

    /**
     * Is published
     *
     * @return boolean
     */
    public function isPublished()
    {
        return $this->published;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return $this
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }
}
