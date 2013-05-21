<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() {
  return View::make('singlepage');
});

Route::post('/auth/login', 'AuthController@login');
Route::get('/auth/logout','AuthController@logout');
Route::get('/expiry', function() {
  return Response::json(array('flash' => 'all is good'));
  // return Response::json(array('flash' => 'Your session has expired, please log in.'), 401);
});
