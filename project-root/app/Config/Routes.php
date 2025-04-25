<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/login', 'Login::index');
$routes->POST('/login', 'Login::attemptLogin');
$routes->get('/admin', 'page_admin::index');
$routes->post('/login', 'Login::attemptLogin'); // Corrigé : "POST" devient "post"



$routes->get('/admin', 'page_admin::index'); // Ajout de la route pour l'interface admin

?>