@extends('plantilla.co')

@section('content')
		
		@if(!Auth::check())
		<div class="login">
			<h3>Para finalizar tu pedido Inicia Sesion con tu cuenta</h3>
<form method="post" action="{{URL::route('postLogin')}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"name="password" id="exampleInputPassword1" placeholder="Password">
  </div>

 
  <button type="submit" class="btn btn-default">Iniciar Sesion</button>
</form>
			
		</div>
		@else
		{{Auth::user()->email}}
		@endif		

		<table class="table table-bordered">
					<thead>
						<tr>
							<td class="text-center">
								Imagen
							</td>
							<td class="text-center">
								Detalle Producto
							</td>							
							<td class="text-center">
								Cantidad
							</td>
							<td class="text-center">
								Precio
							</td>
							<td class="text-center">
								% IVA
							</td>
							<td class="text-center">
								Total
							</td>
							<td class="text-center">
								Acción
							</td>
						</tr>
					</thead>
					<tbody>
						@if($products)
							@foreach($products as $pro)
								<tr>
									<td class="text-center">
										<a href="product.html">
											<img src="data:image/jpeg;base64,<?php echo base64_encode($pro->image); ?>" alt="Product Name" title="Product Name" class="" height="120px" width="auto" />
										</a>
									</td>
									<td class="text-center">
										<a href="#">{{$pro->name}}</a>
									</td>	
								<form method="post" action="">						
									<td class="text-center">
										<div class="input-group btn-block">
											<input type="number" name="cantidad" width="10%" class="cant input-quantity" togle="{{$pro->identifier}}" id="cant-{{$pro->id}}" data="{{$pro->id}}" value="{{$pro->quantity}}" size="1" class="form-control" />
											<input type="hidden" name="id_producto" value="{{$pro->id}}">
											<input type="hidden" name="identifier" value="{{$pro->identifier}}">
										</div>								
									</td>
									<td class="text-center">
										$<span id="precio-{{$pro->id}}">{{number_format($pro->price, 0, '', '.')}}</span>
									</td>
									<td class="text-center">
										{{$pro->tax}} %
									</td>
									<td class="text-center">
										$ <span class="itemTotal-{{$pro->id}}">{{number_format($pro->total(), 0, '', '.')}}</span>
									</td>
									<td class="text-center">
										<button type="submit" title="Actualizar" class="btn btn-default tool-tip">
											<i class="fa fa-refresh"></i>
										</button>
								</form>
									<form action="{{URL::route('removeItem', array('identifier'=>$pro->identifier))}}">		
										<button type="submit" title="Remove" class="btn btn-default tool-tip">
											<i class="fa fa-times-circle"></i>
										</button>
									</form>	
									</td>
								</tr>
							@endforeach	
						@endif		
												
					</tbody>
					<tfoot>
						<tr>
						  <td colspan="4" class="text-right">
							<strong>Sub-total :</strong>
						  </td>
						  <td colspan="2" class="text-left">
							$<span class="totalCart">{{number_format(Cart::total(false), 0, '', '.')}}</span>
						  </td>
						</tr>
						
							<tr>
						  <td colspan="4" class="text-right">
							<strong>Total :</strong>
						  </td>
						  <td colspan="2" class="text-left">
							$<span class="totalCart">{{number_format(Cart::total(), 0, '', '.')}}</span>
						  </td>
						</tr>
						<tr>
							<td colspan="4">
								
							</td>
							<td colspan="2">
								@if(Auth::check())
									<form method="post" action="{{URL::route('postPedido')}}">
										<input type="hidden" name="totalCart" value="{{Cart::total()}}">
										<button class="btn btn-warning btn-lg text-right" href=""> FINALIZAR MI PEDIDO!</button>
									</form>
								@endif	
							</td>
						</tr>
					</tfoot>
				</table>
@stop