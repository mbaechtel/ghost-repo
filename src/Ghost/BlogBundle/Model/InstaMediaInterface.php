<?php
/**
 * Created by PhpStorm.
 * User: mbaechtel
 * Date: 06/08/2016
 * Time: 11:47
 */
namespace Ghost\BlogBundle\Model;

/**
 * Class InstaMedia
 * @package Ghost\BlogBundle\Model
 */
interface InstaMediaInterface
{
    /**
     * Get external id
     *
     * @return int
     */
    public function getExternalId();

    /**
     * Set external id
     *
     * @param int $externalId
     * @return $this
     */
    public function setExternalId($externalId);

    /**
     * Get comments count
     *
     * @return int
     */
    public function getComments();

    /**
     * Set comments
     *
     * @param int $comments
     * @return $this
     */
    public function setComments($comments);

    /**
     * Get likes count
     *
     * @return int
     */
    public function getLikes();

    /**
     * Set likes
     *
     * @param int $likes
     * @return $this
     */
    public function setLikes($likes);

    /**
     * Get link
     *
     * @return string
     */
    public function getLink();

    /**
     * Set link
     *
     * @param string $link
     * @return $this
     */
    public function setLink($link);

    /**
     * Get standard resolution
     *
     * @return string
     */
    public function getStandardResolution();

    /**
     * Set standard resolution
     *
     * @param string $standardResolution
     * @return $this
     */
    public function setStandardResolution($standardResolution);

    /**
     * Is published
     *
     * @return boolean
     */
    public function isPublished();

    /**
     * Set published
     *
     * @param boolean $published
     * @return $this
     */
    public function setPublished($published);

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated();

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return $this
     */
    public function setCreated($created);

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated();

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return $this
     */
    public function setUpdated($updated);
}
