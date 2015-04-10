<?php

namespace Ghost\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class ContactController
 * @package Ghost\BlogBundle\Controller
 */
class ContactController extends Controller
{
    public function indexAction()
    {
        return $this->render('GhostBlogBundle:Contact:index.html.twig');
    }
}
