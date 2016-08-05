<?php

namespace Ghost\BlogBundle\Entity;

use Ghost\BlogBundle\Model\Infos as BaseInfos;
use Ghost\BlogBundle\Model\Traits\TimeStampableBehavior;

/**
 * Class Infos
 * @package Ghost\BlogBundle\Entity
 */
class Infos extends BaseInfos
{
    use TimeStampableBehavior;
    
    /**
     * @var integer
     */
    private $id;

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
