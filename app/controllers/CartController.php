<?php

class CartController extends Controller {

		protected $empresa;
	//protected $pro;
	public function __construct(Empresa $empresa)
	{
		$this->empresa = $empresa;
		//$this->pro 	   = $pro;	
	}


			public function addToCart()
	{
		/*$validator = Validator::make(Input::all(),
				array(
						'cantidad' => 'required|integer',
						'id_producto' => 'required|integer'
					)
			);

		if($validator->fails())
		{
			return Redirect::back()->withInput()->with('message-alert','Ingresa Valores Validos')->withErrors($validator->messages());
		}*/

		$producto = Producto::where('ProId','=',Input::get('ProId'))->first();
		if($producto->count())
		{
			
			 	Cart::insert(array(
				'id'=>$producto->ProId,
				'name' => $producto->ProNom,
				'price' => $producto->ProPre,
				'quantity' => Input::get('cantidad'),
				//'tax'	=>$producto->por_iva,
				'image' => $producto->ProImg
			));
			 		
			return Redirect::back()->with('message-alert','Producto agregado');
		}
		return Redirect::back()->with('message-alert','Error');
	}


		public function getCart()
	{
		$products = Cart::contents();
		$emp   = $this->empresa->getInfo();
		$items = Item::all();
		return View::make('cart',compact('products','emp','items'));
	}


		public function postPedido()
	{
		//dd(Input::all());

		$compra = new Pedido;
		$compra->UsuIde 	=	Auth::user()->UsuIde;
		$compra->TotalCot  =   Input::get('totalCart');
		$compra->CotEstId  =1;
		$compra->CotNumPer = Session::get('cantidad');
		$compra->FecCotEve = Session::get('Fecha');
		/*$compra->total_compra  =   Input::get('total_compra');
		$compra->num_items  =   Input::get('totalItems');
		$compra->tipo_compra = 	Input::get('tipo_compra');
		$compra->vlr_envio   =  Input::get('vlr_envio_a');*/

			if($compra->save())
			{
				Session::forget('cantidad');
				Session::forget('Fecha');
				//dd($compra->id);
				foreach (Cart::contents() as $item) {
					$citem = new PedidoDetalle;
					$citem->CotId 			=	$compra->id;

	   			 	$citem->ProId				=	$item->id;
	   			 	$citem->CotProCan 			=	$item->quantity;
	   			 	$citem->TotalPro			=	($item->price)*($item->quantity);
	   			 	/*$citem->image               =   $item->image;
	   			 	$citem->iva 				=	$item->tax;
	   			 	$citem->cantidad 			= 	$item->quantity;
	   			 	$citem->valor_total			=	$item->total();*/

	   			 	$citem->save();

				}
				Cart::destroy();
					//$usuEmail = Auth::user()->email;
					//$usuName  = Auth::user()->UsuNom;
				
					//$prod   = PedidoDetalle::where('CotId','=',$compra->id)->get();
				$prod  = DB::table('cotizacioncotizaciondetalle as cd')->join('products as p','p.ProId','=','cd.ProId')
				->select(
						'p.ProId',
						'P.ProNom',
						'p.ProPre',
						'cd.CotId',
						'cd.CotProCan',
						'cd.TotalPro'						
					)->where('cd.CotId','=',$compra->id)->get();

					Mail::send('emails.cotizacion', array('compra' =>$compra,'prod'=>$prod ), function($message) use ($compra){
						$message->to(Auth::user()->email, Auth::user()->UsuNom)->subject('Cotización coordieventos');
					});

				return Redirect::to('/')->with('message-alert','Se ha hecho la solicitud de tu pedido exitosamente');
				

			}

		dd($compra);

	}



		public function updateItem()
	{
		$identifier = Input::get('identifier');
		$validator = Validator::make(Input::all(),
				array(
						'cantidad' => 'required|integer',
						'id_producto' => 'required|integer',
						'identifier'	=>	'required'
					)
			);

		if($validator->fails())
		{
			return Redirect::back()->withInput()->with('message-alert','Ingresa Valores Validos')->withErrors($validator->messages());
		}

		$producto = Producto::where('ProId','=',Input::get('id_producto'))->first();
		if($producto->count())
		{
			 /*if($producto->cantidad > 0 && Input::get('cantidad') <= $producto->cantidad && Input::get('cantidad') > 0)
			 {*/
			 			$item = Cart::item($identifier);
			 			$nuevaCantidad = Input::get('cantidad');
			 			$item->quantity = $nuevaCantidad;
			 			 return Redirect::back()->with('message-alert','Se ha actualizado el producto');
			 /*}
			 else
			 {
			 	return Redirect::back()->with('message-alert','La cantidad Solicitada no esta disponible');
			 }*/
		}
	}

	public function getRemoveitem()
	{
		$identifier = Input::get('identifier');
		$item = Cart::item($identifier);
		$item->remove();
		return Redirect::back()->with('message-alert','Se ha eliminado el producto de tu pedido');
	}


}	

?>