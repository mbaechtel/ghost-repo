<?php

namespace Ghost\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class AboutController
 * @package Ghost\BlogBundle\Controller
 */
class AboutController extends Controller
{
    public function indexAction()
    {
        return $this->render('GhostBlogBundle:About:index.html.twig');
    }
}
