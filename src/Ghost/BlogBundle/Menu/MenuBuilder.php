<?php

namespace Ghost\BlogBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Class MenuBuilder
 * @package Ghost\BlogBundle\Menu
 */
class MenuBuilder
{
    /**
     * @var FactoryInterface $factory
     */
    private $factory;

    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(RequestStack $requestStack)
    {
        $menu = $this->factory->createItem('root', [
            'childrenAttributes' => [
                'class' => 'nav navbar-nav'
            ]
        ]);

        $menu->addChild('Home', ['route' => 'ghost_blog_homepage']);
        $menu->addChild('About', ['route' => 'ghost_blog_aboutpage']);
        $menu->addChild('Contact', ['route' => 'ghost_blog_contactpage']);

        return $menu;
    }
}
