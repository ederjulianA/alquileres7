<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function getTest()
	{
		return View::make('test');
	}

	public function getIndex()
	{
		
      $items = Item::all();	
      
      return View::make('index', compact('items'));
	}

	public function getItem($id)
	{
		$item = Item::where('ItemId','=',$id)->first();
		$categorias = Categoria::where('ItemId','=',$id)->get();
		$pro = Producto::where('CategoryId','=',1)->get();
		
		

		return View::make('items', compact('categorias','pro','item'));
	}


	

}
