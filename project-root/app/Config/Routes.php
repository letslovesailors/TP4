<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Login::index');
$routes->post('/login', 'Login::attemptLogin');
$routes->get('/abonne', 'Page_abonne::index');
$routes->get('/admin', 'page_admin::index');
