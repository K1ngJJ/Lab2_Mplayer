<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('music', 'MController::index');
$routes->post('music/upload', 'MController::upload');
$routes->get('music/play/(:num)', 'MController::play/$1');
$routes->get('music/delete/(:num)', 'MController::delete/$1');
$routes->get('music/delete_confirm/(:num)', 'MController::delete_confirm/$1');


$routes->get('upload', 'MController::uploadform');
$routes->get('music/add_playlist', 'MController::add_playlist');
$routes->post('music/add_playlist', 'MController::add_playlist');
$routes->get('music/delete_playlist/(:num)', 'MController::delete_playlist/$1');
