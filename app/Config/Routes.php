<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('about-us', 'Home::about');

$routes->get('careers', 'Home::careers');
$routes->get('quote', 'Home::quote');
$routes->post('contact', 'Home::sendContact');

$routes->post('quote/calculate', 'Home::calculate');
$routes->post('quote/validate-tourists', 'Home::validateTourists');
$routes->post('quote/applications', 'Home::saveApplication');
