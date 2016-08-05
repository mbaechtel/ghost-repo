<?php

namespace Ghost\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GuzzleHttp\Client;

/**
 * Class DefaultController
 * @package Ghost\BlogBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * Index action
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
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

    /**
     * Test action
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function testAction()
    {
        $instagram = $this->get('api.instagram');

        //$result = $instagram->getUserInfos();
        //$result = $instagram->getUserRecentMedias();
        $result = $instagram->getMediaInfos('1097296370082201329_2238676230');

        return $this->render('GhostBlogBundle:Default:test.html.twig', [
           'result' => $result
        ]);
    }
}
