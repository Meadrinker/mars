<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = array(
            '/admin' => array(array(array('_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::admin'), null, null, null, false, false, null)),
            '/admin/data' => array(array(array('_route' => 'admin_data', '_controller' => 'App\\Controller\\AjaxController::addData'), null, null, null, false, false, null)),
            '/game/data' => array(array(array('_route' => 'game_data', '_controller' => 'App\\Controller\\AjaxGameController::getAction'), null, null, null, false, false, null)),
            '/' => array(array(array('_route' => 'index', '_controller' => 'App\\Controller\\DefaultController::index'), null, null, null, false, false, null)),
            '/game' => array(array(array('_route' => 'game', '_controller' => 'App\\Controller\\GameController::game'), null, null, null, false, false, null)),
            '/game/era' => array(array(array('_route' => 'game_era', '_controller' => 'App\\Controller\\GameController::era'), null, null, null, false, false, null)),
            '/newgame' => array(array(array('_route' => 'newgame', '_controller' => 'App\\Controller\\NewGameController::newgame'), null, null, null, false, false, null)),
        );
        $this->regexpList = array(
            0 => '{^(?'
                    .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .')/?$}sDu',
        );
        $this->dynamicRoutes = array(
            35 => array(array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null, false, true, null)),
        );
    }
}
