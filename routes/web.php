<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return "<h1>Hi</h1><div>I'm in the homepage</div>";
});

$router->get('/folder1', function () use ($router) {
    return "<h1>Hi</h1><div>I'm in folder1</div>";
});

$router->get('/folder2', function () use ($router) {
    return "<h1>Hi</h1><div>I'm in folder2</div>";
});
