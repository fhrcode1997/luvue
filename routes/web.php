<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// $router->group(['prefix' => 'admin'], function() use ($router){
	$router->get('/admin/{route:.*}/', function ()  {
    	return view('layouts.app');
	});
// });
// $router->get('/key', function () use ($router) {
//     return \Illuminate\Support\Str::random(32);
// });