<?php

namespace Ghost\BlogBundle\Menu;

use Knp\Menu\FactoryInterface;

/**
 * Class Builder
 * @package Ghost\BlogBundle\Menu
 */
class Builder
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root', [
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