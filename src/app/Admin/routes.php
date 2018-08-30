<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('/category', 'CategoryController', ['except' => ['show']]);
    $router->resource('/products', 'ProductController', ['except' => ['show']]);
    $router->get('/products/get-dia', 'ProductController@getDia')->name('admin.get-dia');
    $router->get('/products/get-type', 'ProductController@getType')->name('admin.get-type');
    $router->resource('/dia', 'DiaController', ['except' => ['show']]);
    $router->resource('/sizes', 'SizeController', ['except' => ['show']]);
    $router->resource('/wears', 'WearController', ['except' => ['show']]);
    $router->resource('/brands', 'BrandController', ['except' => ['show']]);
    $router->resource('/models', 'TypeController', ['except' => ['show']]);

});
