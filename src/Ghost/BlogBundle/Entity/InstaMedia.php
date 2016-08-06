<?php
/**
 * Created by PhpStorm.
 * User: mbaechtel
 * Date: 06/08/2016
 * Time: 11:22
 */

namespace Ghost\BlogBundle\Entity;

use Ghost\BlogBundle\Model\InstaMedia as BaseInstaMedia;

/**
 * Class InstaMedia
 * @package Ghost\BlogBundle\Entity
 */
class InstaMedia extends BaseInstaMedia
{
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
