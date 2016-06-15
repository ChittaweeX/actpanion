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


Route::get('/', function()
{
	return Redirect::to('page/home');
});
Route::get('admin', function()
{
	return Redirect::to('admin/dashboard');
});

Route::controller('login', 'LoginController');
Route::controller('page', 'front_PageController');


Route::group(array('before'=>'auth'),function()
{
	Route::controller('admin','back_PageController');
	Route::controller('function','back_ManageController');
});
