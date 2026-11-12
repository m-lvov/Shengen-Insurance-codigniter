<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('about-us', 'Pages::about');

$routes->get('careers', 'Pages::careers');
$routes->get('quote', 'Quote::index');
$routes->post('contact', 'Contact::send');

$routes->post('quote/calculate', 'Quote::calculate');
$routes->post('quote/validate-tourists', 'Quote::validateTourists');
$routes->post('quote/applications', 'Quote::saveApplication');
