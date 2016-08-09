<?php

namespace Ghost\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\EntityManager;

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
        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        $medias = $em->getRepository('GhostBlogBundle:InstaMedia')->findBy([
            'published' => true
        ], ['created' => 'DESC']);

        return $this->render('GhostBlogBundle:Default:index.html.twig', [
            'medias' => $medias
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

        $result = null;
        //$result = $instagram->getUserInfos();
        //$result = $instagram->getUserRecentMedias();
        //$result = $instagram->getMediaInfos('1097296370082201329_2238676230');

        return $this->render('GhostBlogBundle:Default:test.html.twig', [
           'result' => $result
        ]);
    }
}
