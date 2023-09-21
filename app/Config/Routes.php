<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'MainController::index');
$routes->get('table', 'MainController::table');
$routes->get('delete/(:any)', 'MainController::delete/$1');
$routes->get('edit/(:any)', 'MainController::edit/$1');
$routes->post('save', 'MainController::save');
$routes->get('section', 'MainController::section');
$routes->post('add', 'MainController::add');
$routes->get('deleteSection/(:any)', 'MainController::remove/$1');
$routes->get('editSection/(:any)', 'MainController::editSection/$1');