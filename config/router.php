<?php

use Illuminate\Events\Dispatcher;

$request = \Illuminate\Http\Request::createFromGlobals();

function request()
{
    global $request;
    return $request;
}

$dispatcher=new Dispatcher();
$container=new \Illuminate\Container\Container();
$router=new \Illuminate\Routing\Router($dispatcher,$container);

function router(){
    global $router;
    return $router;
}

$router->get('/','\App\Controller\ProductController@index');

$router->get('/product/{id}','\App\Controller\ProductController@show');
$router->post('/product/{id}/comment','\App\Controller\ProductController@comment');
$router->get('/create','\App\Controller\ProductController@create');
$router->post('/create','\App\Controller\ProductController@store');