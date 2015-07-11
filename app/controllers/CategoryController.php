<?php
class CategoryController extends Controller {

		protected $empresa;
	//protected $pro;
	public function __construct(Empresa $empresa)
	{
		$this->empresa = $empresa;
		//$this->pro 	   = $pro;	
	}

	public function getCatList($id)
	{

		 $emp   = $this->empresa->getInfo();
		 $cat = Categoria::where('CategoryId','=',$id)->first();
		 $it = Item::where('ItemId','=',$cat->ItemId)->first();
		 $pros = Producto::where('CategoryId','=',$id)->get();
		 $items = Item::all();

		 //dd($productos);

		 return View::make('categoryList',compact('emp','cat','it','pros','items'));
	}

}

?>	