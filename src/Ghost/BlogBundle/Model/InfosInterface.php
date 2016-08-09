<?php
/**
 * Created by PhpStorm.
 * User: mbaechtel
 * Date: 05/08/2016
 * Time: 12:59
 */

namespace Ghost\BlogBundle\Model;

/**
 * Class Infos
 * @package Ghost\BlogBundle\Model
 */
interface InfosInterface
{
    /**
     * Set content
     *
     * @param string $content
     * @return Infos
     */
    public function setContent($content);

    /**
     * Get content
     *
     * @return string
     */
    public function getContent();
}
