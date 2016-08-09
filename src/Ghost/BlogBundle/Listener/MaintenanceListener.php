<?php
/**
 * Created by PhpStorm.
 * User: mbaechtel
 * Date: 09/08/2016
 * Time: 10:56
 */

namespace Ghost\BlogBundle\Listener;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class MaintenanceListener
 * @package Ghost\BlogBundle\Listener
 */
class MaintenanceListener
{
    /**
     * @var bool
     */
    protected $maintenance;

    /**
     * @var TwigEngine
     */
    protected $engine;

    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * MaintenanceListener constructor.
     *
     * @param bool $maintenance
     * @param TwigEngine $twigEngine
     */
    public function __construct($maintenance, TwigEngine $twigEngine, EntityManager $entityManager)
    {
        $this->maintenance = $maintenance;
        $this->engine      = $twigEngine;
        $this->em          = $entityManager;
    }

    /**
     * OnKernelRequest
     *
     * @param GetResponseEvent $event
     * @throws \Twig_Error
     */
    public function onKernelRequest(GetResponseEvent $event)
    {
        if ($this->maintenance) {
            $infos = $this->em->getRepository('GhostBlogBundle:Infos')->find(1);

            $message = 'Ce site est en maintenance.';
            if (null !== $infos) {
                $message = $infos->getContent();
            }

            $content = $this->engine->render('GhostBlogBundle:Closed:index.html.twig', [
                'content' => $message
            ]);
            $event->setResponse(new Response($content));
            $event->stopPropagation();
        }
    }
}
