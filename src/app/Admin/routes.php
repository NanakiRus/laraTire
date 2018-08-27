<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('/category', 'CategoryController');
    $router->resource('/products', 'ProductController');
    $router->resource('/dia', 'DiaController');
    $router->resource('/sizes', 'SizeController');
    $router->resource('/wears', 'WearController');
    $router->resource('/brands', 'BrandController');

});
