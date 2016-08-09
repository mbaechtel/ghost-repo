<?php

namespace Ghost\BlogBundle\Entity;

use Ghost\BlogBundle\Model\Traits\TimeStampableBehavior;
use Ghost\BlogBundle\Model\User as BaseUser;

/**
 * Class User
 * @package Ghost\BlogBundle\Entity
 */
class User extends BaseUser
{
    use TimeStampableBehavior;
    
    /**
     * @var integer
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
