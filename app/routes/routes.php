<?php

//  PAGES
$router->get('/', 'controllers/pages/index');
$router->get('/shop', 'controllers/pages/shop');

//  APP
$router->get('/products', 'controllers/products/index');