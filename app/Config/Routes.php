<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');  //Home Controller Index Method
$routes->get('/students', 'Student::index');
