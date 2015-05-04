<?php
	
	Route::get('admin', array('as' => 'adminIndex', 'uses' => 'EmpresaController@getIndex'));
	Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);


	//RUTAS PARAMETRIZACION


	Route::get('admin/generales/parempresa', array('as' => 'adminParEmpresa', 'uses' => 'EmpresaController@getParEmp'));

	//RUTAS POST
	Route::get('newEmpresa', array('as' => 'newEmpresa', 'uses' => 'EmpresaController@newEmpresa'));	
	
?>