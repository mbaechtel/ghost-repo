<?php
/**
 * Created by PhpStorm.
 * User: mbaechtel
 * Date: 28/03/15
 * Time: 16:21
 */

namespace Ghost\BlogBundle\Controller\Console;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function dashboardAction()
    {
        return $this->render('GhostBlogBundle:Console/Default:dashboard.html.twig');
    }
}
