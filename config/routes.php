<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'CakeDC/Mixer',
    ['path' => '/mixer'],
    function (RouteBuilder $routes) {
        $routes->extensions(['json']);

        $routes->connect('/install', ['controller' => 'Mixer', 'action' => 'install']);
        $routes->connect('/uninstall', ['controller' => 'Mixer', 'action' => 'uninstall']);
        $routes->connect('/*', ['controller' => 'Mixer', 'action' => 'index']);

        //$routes->fallbacks(DashedRoute::class);
    }
);
