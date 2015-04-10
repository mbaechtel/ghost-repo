<?php

namespace Ghost\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DefaultController
 * @package Ghost\BlogBundle\Controller
 */
class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $infos = $em->getRepository('GhostBlogBundle:Infos')->find(1);

        if (!$infos) {
            throw $this->createNotFoundException('Unable to find Infos.');
        }

        return $this->render('GhostBlogBundle:Default:index.html.twig', [
            'content' => $infos->getContent()
        ]);
    }
}
