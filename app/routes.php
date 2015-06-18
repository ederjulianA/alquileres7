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

Route::get('/', array('as' => 'index', 'uses' => 'HomeController@getIndex'));
Route::get('/test', array('as' => 'test', 'uses' => 'HomeController@getTest'));
Route::get('/cart', array('as' => 'cart', 'uses' => 'CartController@getCart'));
Route::get('/item-{id}', array('as' => 'item', 'uses' => 'HomeController@getItem'));

Route::post('postPedido', array('as' => 'postPedido', 'uses' => 'CartController@postPedido'));
Route::post('removeItem', array('as' => 'removeItem', 'uses' => 'CartController@removeItem'));
Route::post('addToCart', array('as' => 'addToCart', 'uses' => 'CartController@addToCart'));


//USUARIOS ADMINISTRADORES
Route::group(['before' => 'auth'], function() {

	require (__DIR__ . '/routes/rut_admin.php');

});

Route::group(['before' => 'guest'], function () {
	

Route::get('login', array('as' => 'login', 'uses' => 'AuthController@getLogin'));
Route::post('postLogin', array('as' => 'postLogin', 'uses' => 'AuthController@postLogin'));


});


