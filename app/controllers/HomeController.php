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

	protected $empresa;
	//protected $pro;
	public function __construct(Empresa $empresa)
	{
		$this->empresa = $empresa;
		//$this->pro 	   = $pro;	
	}

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
	  $products = Cart::contents();
	  $emp   = $this->empresa->getInfo();
      $items = Item::all();	
      
      return View::make('index', compact('items','emp','products'));
	}

	public function getItem($id)
	{
		 $emp   = $this->empresa->getInfo();
		$it = Item::where('ItemId','=',$id)->first();

		$categorias = Categoria::where('ItemId','=',$id)->distinct()->get();
		/*$pro = Producto::where('CategoryId','=',1)->get();
		$pro->toArray();
		$pro2[] = $pro; 
		dd($pro2);*/
		$books = [
    [
        'id'        => 1,
        'title'     => 'Tame of Groans',
        'author'    => 'George M'
    ],
    [
        'id'        => 2,
        'title'     => 'Rort of the Lings',
        'author'    => 'John T'
    ],
    [
        'id'        => 3,
        'title'     => 'Yvan Eht Nioj',
        'author'    => 'Bart S'
    ],
];
//dd($books);
		$pros = [];
		//dd($pros);
		foreach ($categorias as $cat) {
			$ids[] = $cat->CategoryId;
			
			$pro2 = DB::table('products as p')->join('category as c','c.CategoryId','=','p.CategoryId')
			->select(
					'p.ProId',
					'p.ProPre',
					'P.ProNom',
					'p.ProImg',
					'p.ProDes',
					'p.ProImgLar',
					'c.CategoryName',
					'p.CategoryId'
				)

			
			->where('p.CategoryId','=',$cat->CategoryId)->orderBy('p.ProPre','ASC')->take(1)->distinct('p.CategoryId')->get();
				//$pro3 = Producto::where('CategoryId','=',$cat->CategoryId)->distinct()->orderBy('ProPre', 'asc')->min('ProPre')->take(1)->get();
				//$pro4 = Producto::find($cat->CategoryId)->orderBy('ProPre', 'asc')->min('ProPre');
				foreach($pro2 as  $prom)
				{
					
					$pros [] =  array('ProId'=> $prom->ProId,'ProPre'=> $prom->ProPre,'ProNom'=>$prom->ProNom,'ProImg'=>$prom->ProImg,'ProCat'=>$prom->CategoryName,'ProCatId'=>$prom->CategoryId ,'ProDes'=>$prom->ProDes,'ProImgLar'=>$prom->ProImgLar);
					
				}
				
		}	
	
		
		$num = count($categorias);

		$products = Cart::contents();
		$items = Item::all();
		 
				# code...compact('categorias','prod','item')

				//$pro2 = DB::table('products as P')->whereIn('CategoryId',$ids)->distinct('p.ProId')->orderBy('ProPre', 'asc')->get();

               return View::make('items2',compact('categorias','pros','it','emp','products','items'));
	


	

}

}