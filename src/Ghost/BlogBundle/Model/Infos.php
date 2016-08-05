<?php
/**
 * Created by PhpStorm.
 * User: mbaechtel
 * Date: 05/08/2016
 * Time: 12:51
 */

namespace Ghost\BlogBundle\Model;

/**
 * Class Infos
 * @package Ghost\BlogBundle\Model
 */
abstract class Infos implements InfosInterface
{
    /**
     * Content of the info
     *
     * @var string
     */
    protected $content;

    /**
     * Set content
     *
     * @param string $content
     * @return Infos
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}