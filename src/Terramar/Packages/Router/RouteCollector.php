<?php

namespace Terramar\Packages\Router;

use Nice\Router\RouteCollector as BaseCollector;

class RouteCollector extends BaseCollector
{
    /**
     * Perform any collection
     *
     * @return void
     */
    protected function collectRoutes()
    {
        $this->addRoute('GET', '/', 'Terramar\Packages\Controller\DefaultController::indexAction');
        $this->addRoute('GET', '/login', 'Terramar\Packages\Controller\DefaultController::loginAction');

        $this->addRoute('GET', '/manage', 'Terramar\Packages\Controller\ManageController::indexAction');
    }
}
