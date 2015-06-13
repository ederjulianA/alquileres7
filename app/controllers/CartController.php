<?php

class CartController extends Controller {


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
		return View::make('cart',compact('products'));
	}


		public function postPedido()
	{
		//dd(Input::all());

		$compra = new Pedido;
		$compra->UsuIde 	=	Auth::user()->UsuIde;
		$compra->TotalCot  =   Input::get('totalCart');
		$compra->CotEstId  =1;
		/*$compra->total_compra  =   Input::get('total_compra');
		$compra->num_items  =   Input::get('totalItems');
		$compra->tipo_compra = 	Input::get('tipo_compra');
		$compra->vlr_envio   =  Input::get('vlr_envio_a');*/

			if($compra->save())
			{
				//dd($compra->id);
				foreach (Cart::contents() as $item) {
					$citem = new PedidoDetalle;
					$citem->CotId 			=	$compra->id;

	   			 	$citem->ProId				=	$item->id;
	   			 	$citem->CotProCan 			=	$item->quantity;
	   			 	$citem->TotalPro			=	$item->price;
	   			 	/*$citem->image               =   $item->image;
	   			 	$citem->iva 				=	$item->tax;
	   			 	$citem->cantidad 			= 	$item->quantity;
	   			 	$citem->valor_total			=	$item->total();*/

	   			 	$citem->save();

				}
				Cart::destroy();
					//$usuEmail = Auth::user()->email;
					//$usuName  = Auth::user()->UsuNom;
					$prod   = PedidoDetalle::where('CotId','=',$compra->id)->get();

					Mail::send('emails.cotizacion', array('compra' =>$compra,'prod'=>$prod ), function($message) use ($compra){
						$message->to(Auth::user()->email, Auth::user()->UsuNom)->subject('Cotización coordieventos');
					});

				return Redirect::to('/')->with('message-alert','Se ha hecho la solicitud de tu pedido exitosamente');
				

			}

		dd($compra);

	}


}	

?>