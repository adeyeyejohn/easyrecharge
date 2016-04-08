<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@index');
Route::post('/registerUser', 'Auth\AuthController@registerUser');
Route::post('/loginUser', 'Auth\AuthController@loginUser');

Route::get('/logoutUser', 'PagesController@logOut');
Route::get('/newuser', 'PagesController@regPage');
Route::get('/dashboard', 'PagesController@dashboard');
Route::get('/profile', 'PagesController@profile');
Route::post('/updateuser', 'PagesController@updateUser');
Route::post('/order', 'OrderController@initOrder');
Route::get('/order/{id}', 'OrderController@showorder');
Route::post('/confirm-pay', 'OrderController@confirmPay');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
