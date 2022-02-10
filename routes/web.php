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
$router->post('/register','UserController@register');
$router->post('/login','UserController@login');


$router->get('/admin/rangking', 'RangkingController@index');
$router->get('/admin/rangking/{id}', 'RangkingController@show');
$router->post('/admin/rangking', 'RangkingController@store');
$router->put('/admin/rangking/{id}', 'RangkingController@update');
$router->delete('/admin/rangking/{id}', 'RangkingController@delete');  

$router->get('/admin/streaming', 'StreamingController@index');
$router->get('/admin/streaming/{id}', 'StreamingController@show');
$router->post('/admin/streaming', 'StreamingController@store');
$router->put('/admin/streaming/{id}', 'StreamingController@update');
$router->delete('/admin/streaming/{id}', 'StreamingController@delete');  

$router->get('/admin/tournaments', 'TournamentController@index');
$router->get('/admin/tournament/{id}', 'TournamentController@show');
$router->post('/admin/tournaments', 'TournamentController@store');
$router->put('/admin/tournament/{id}', 'TournamentController@update');
$router->delete('/admin/tournament/{id}', 'TournamentController@delete');
