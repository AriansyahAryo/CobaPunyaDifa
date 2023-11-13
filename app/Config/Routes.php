<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Login::index');
$routes->get('/', 'Home::index');
$routes->get('/tableadm', 'TableAdm::index');
$routes->get('/makananadm', 'MakananAdm::index');
$routes->get('/minumanadm', 'MinumanAdm::index');
$routes->get('/teamadm', 'TeamAdm::index'); 
$routes->get('/chart', 'Chart::index');
$routes->get('/fuindex', 'FuIndex::index');
$routes->get('/add_data_makanan', 'MakananAdm::add_data_makanan');
$routes->post('/proses_add_makanan', 'MakananAdm::proses_add_makanan');
$routes->get('/edit_data_makanan/(:any)', 'MakananAdm::edit_data_makanan/$1');
$routes->delete('makananadm/(:num)', 'MakananAdm::delete/$1');