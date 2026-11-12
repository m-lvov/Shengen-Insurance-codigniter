<?php

use App\Controllers\SiteController;
use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'SiteController::index');

$routes->get('about-us', 'SiteController::about');

$routes->get('careers', 'SiteController::careers');
$routes->get('quote', 'SiteController::quote');
$routes->post('contact', 'SiteController::sendContact');

$routes->post('quote/calculate', 'SiteController::calculate');
$routes->post('quote/validate-tourists', 'SiteController::validateTourists');
$routes->post('quote/applications', 'SiteController::saveApplication');
