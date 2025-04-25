<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Login::index');
$routes->POST('/login', 'Login::attemptLogin')
$routes->get('abonne/', 'page_abonne::index');
$routes->get('/admin', 'page_admin::index');
