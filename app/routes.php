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
Route::get('/cart', array('as' => 'cart', 'uses' => 'CartController@getCart'));
Route::get('/item-{id}', array('as' => 'item', 'uses' => 'HomeController@getItem'));



//USUARIOS ADMINISTRADORES
Route::group(['before' => 'auth'], function() {

	require (__DIR__ . '/routes/rut_admin.php');

});

Route::group(['before' => 'guest'], function () {
	

Route::post('removeItem', array('as' => 'removeItem', 'uses' => 'CartController@removeItem'));
Route::get('login', array('as' => 'login', 'uses' => 'AuthController@getLogin'));
Route::post('postLogin', array('as' => 'postLogin', 'uses' => 'AuthController@postLogin'));
Route::post('addToCart', array('as' => 'addToCart', 'uses' => 'CartController@addToCart'));
Route::post('postPedido', array('as' => 'postPedido', 'uses' => 'CartController@postPedido'));
});


