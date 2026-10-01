<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'TaskController::index');
$routes->get('tasks', 'TaskController::taskList');
$routes->get('profile', 'TaskController::profile');
$routes->get('about', 'TaskController::about');

// Existing pages
$routes->get('customers', 'Customers::index');
$routes->get('users', 'Users::index');
$routes->get('hello', 'Hello::index');