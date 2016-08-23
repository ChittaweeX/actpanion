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
	return Redirect::to('/home');
});

Route::get('fbauth/{auth?}', array('as'=>'facebookAuth','uses'=>'AuthController@getFacebookLogin'));
Route::get('logoutfb', array('as'=>'logoutfb','uses'=>'AuthController@getLoggedOut'));

Route::get('admin', function()
{
	return Redirect::to('admin/dashboard');
});


Route::group(array('before'=>'auth'),function()
{
	Route::controller('admin','back_PageController');
	Route::controller('function','back_ManageController');
});


Route::controller('member','front_ManageController');
Route::controller('login', 'LoginController');
Route::controller('/', 'front_PageController');
