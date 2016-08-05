<?php

namespace Ghost\BlogBundle\Model\Traits;

/**
 * Class TimeStampableBehavior
 * @package Ghost\BlogBundle\Model\Traits
 */
trait TimeStampableBehavior
{
    /**
     * @var \DateTime $created
     */
    private $created;

    /**
     * @var \DateTime $updated
     */
    private $updated;

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
     * Get updated
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set created time.
     *
     * @param \DateTime $created
     *
     * @return $this
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Set the time of last update.
     *
     * @param \DateTime $updated
     *
     * @return $this
     */
    public function setUpdated(\DateTime $updated)
    {
        $this->updated = $updated;

        return $this;
    }
}
