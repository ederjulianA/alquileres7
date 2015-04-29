<?php
	
	Route::get('admin', array('as' => 'adminIndex', 'uses' => 'EmpresaController@getIndex'));
	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);

	
?>