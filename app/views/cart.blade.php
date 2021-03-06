@extends('plantilla.co')

@section('info-empresa')
  @if(Auth::check())
		HOLA : {{Auth::user()->email}}---<a href="{{URL::route('logout')}}" title="">Cerrar Sesion</a>
	@else

	@endif
 <!-- {{$emp->EmpDir}}-{{$emp->EmpTel}}-->
@stop




@section('alquilar')
	@foreach($items as $item)
	 	<li><a href="{{URL::route('item', array('id'=>$item->ItemId))}}">{{$item->ItemName}}</a></li>
	 @endforeach
@stop
<style type="text/css" media="screen">

	.input-quantity{
		/*border: 1px solid red !important;*/
		padding: 5px !important;
	}
	.form-container {
		   border: 5px solid #3fad13;
		   background: #ffffff;
		   background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#ffffff));
		   background: -webkit-linear-gradient(top, #ffffff, #ffffff);
		   background: -moz-linear-gradient(top, #ffffff, #ffffff);
		   background: -ms-linear-gradient(top, #ffffff, #ffffff);
		   background: -o-linear-gradient(top, #ffffff, #ffffff);
		   background-image: -ms-linear-gradient(top, #ffffff 0%, #ffffff 100%);
		   -webkit-border-radius: 21px;
		   -moz-border-radius: 21px;
		   border-radius: 21px;
		   -webkit-box-shadow: rgba(000,000,000,0.9) 0 1px 2px, inset rgba(255,255,255,0.4) 0 0px 0;
		   -moz-box-shadow: rgba(000,000,000,0.9) 0 1px 2px, inset rgba(255,255,255,0.4) 0 0px 0;
		   box-shadow: rgba(000,000,000,0.9) 0 1px 2px, inset rgba(255,255,255,0.4) 0 0px 0;
		   font-family: 'Helvetica Neue',Helvetica,sans-serif;
		   text-decoration: none;
		   vertical-align: middle;
		   min-width:300px;
		   padding:20px !important;
		   width:300px;
		   margin : 0 auto;
		   }
		.form-field {
		   border: 4px solid #dea96d;
		   background: #e4d5c3;
		   -webkit-border-radius: 15px;
		   -moz-border-radius: 15px;
		   border-radius: 15px;
		   color: #694c2c;
		   -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 0px 0px;
		   -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 0px 0px;
		   box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(000,000,000,0.7) 0 0px 0px;
		   padding:8px !important;
		   margin-bottom:20px !important;
		   height: 20px !important;
		   width:280px;
		   }
		.form-field:focus {
		   background: #fff;
		   color: #725129;
		   }
		.form-container h2 {
		   text-shadow: #fdf2e4 0 1px 0;
		   font-size:18px;
		   margin: 0 0 10px 0;
		   font-weight:bold;
		   text-align:center;
		    }
		.form-title {
		   margin-bottom:10px;
		   color: #3f9e42;
		   text-shadow: #fdf2e4 0 1px 0;
		   }
		.submit-container {
		   margin:8px 0;
		   text-align:right;
		   }
		.submit-button {
		   border: 3px solid #447314;
		   background: #6aa436;
		   background: -webkit-gradient(linear, left top, left bottom, from(#8dc059), to(#6aa436));
		   background: -webkit-linear-gradient(top, #8dc059, #6aa436);
		   background: -moz-linear-gradient(top, #8dc059, #6aa436);
		   background: -ms-linear-gradient(top, #8dc059, #6aa436);
		   background: -o-linear-gradient(top, #8dc059, #6aa436);
		   background-image: -ms-linear-gradient(top, #8dc059 0%, #6aa436 100%);
		   -webkit-border-radius: 25px;
		   -moz-border-radius: 25px;
		   border-radius: 25px;
		   -webkit-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
		   -moz-box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
		   box-shadow: rgba(255,255,255,0.4) 0 1px 0, inset rgba(255,255,255,0.4) 0 1px 0;
		   text-shadow: #addc7e 0 1px 0;
		   color: #f6ffed;
		   font-family: helvetica, serif;
		   padding: 8.5px 18px;
		   font-size: 14px;
		   text-decoration: none;
		   vertical-align: middle;
		   }
		.submit-button:hover {
		   border: 3px solid #447314;
		   text-shadow: #31540c 0 1px 0;
		   background: #6aa436;
		   background: -webkit-gradient(linear, left top, left bottom, from(#8dc059), to(#6aa436));
		   background: -webkit-linear-gradient(top, #8dc059, #6aa436);
		   background: -moz-linear-gradient(top, #8dc059, #6aa436);
		   background: -ms-linear-gradient(top, #8dc059, #6aa436);
		   background: -o-linear-gradient(top, #8dc059, #6aa436);
		   background-image: -ms-linear-gradient(top, #8dc059 0%, #6aa436 100%);
		   color: #fff;
		   }
		.submit-button:active {
		   text-shadow: #31540c 0 1px 0;
		   border: 3px solid #447314;
		   background: #8dc059;
		   background: -webkit-gradient(linear, left top, left bottom, from(#6aa436), to(#6aa436));
		   background: -webkit-linear-gradient(top, #6aa436, #8dc059);
		   background: -moz-linear-gradient(top, #6aa436, #8dc059);
		   background: -ms-linear-gradient(top, #6aa436, #8dc059);
		   background: -o-linear-gradient(top, #6aa436, #8dc059);
		   background-image: -ms-linear-gradient(top, #6aa436 0%, #8dc059 100%);
		   color: #fff;
		   }
		   .cont-login{
		   	
		   
		   }
		   .cont-login form{
		   	display:  inline-block;

		   	margin: 5px 15px !important;
		   }

		   .imgCart{
		   	width: 120px;
		   	height: auto;
		   }
</style>
@section('content')
		
		@if(!Auth::check())
		<div class="cont-login">
			<h3>Para finalizar tu pedido Inicia Sesion con tu cuenta</h3>
<!--   FORM LOGIN-->
		@include('includes.forms.login')
<!--   END FORM LOGIN-->


<!--   FORM REGISTER-->
		@include('includes.forms.register')
<!--   END FORM REGISTER-->
<!--<form method="post" action="{{URL::route('postLogin')}}">
  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control"name="password" id="exampleInputPassword1" placeholder="Password">
  </div>

 
  <button type="submit" class="btn btn-default">Iniciar Sesion</button>
</form>-->
			
		</div>
		@else
		<!--{{Auth::user()->email}}-->
		@endif		
			<h2>TU COTIZACIÓN</h2>

			<div class="info-cot">
				<div class="bloque-info">
					<label>FECHA EVENTO</label>
					<input type="date" id="fecha" value="{{ Session::get('Fecha')}}">
					
				</div>
				<div class="bloque-per">
					<label> NÚMERO DE PERSONAS</label>
					<input type="number" id="numPer" value="{{ Session::get('cantidad')}}">
					<p>
						 Actualizar cantidades en la cotización
						 <a href="#" class="btn" title="" id="btn-numPer">ACTUALIZAR</a>
						 <input type="hidden" id="UrlAct" value="{{URL::route('AjaxActualizar')}}">
						 <input type="hidden" id="UrlFec" value="{{URL::route('AjaxFecha')}}">
					</p>
					
				</div>
				
			</div>
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
											<!--<img src="data:image/jpeg;base64,<?php echo base64_encode($pro->image); ?>" alt="Product Name" title="Product Name" class="" height="100px" width="auto" />
											-->
											<img src="{{$pro->img}}" alt="Product Name" title="Product Name" class="imgCart" height="100px" width="auto" />
										</a>
									</td>
									<td class="text-center">
										<a href="#">{{$pro->name}}</a>
									</td>	
								<form method="post"action="{{URL::route('updateItem')}}">						
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
											<i class="icon icon-refresh"></i>
										</button>
								</form>
									<form action="{{URL::route('removeItem')}}" method="post">	
									<input type="hidden" name="identifier" value="{{$pro->identifier}}">	
										<button type="submit" title="Remove" class="btn btn-default tool-tip">
											<i class="icon icon-remove"></i>
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
							<!--3008465628-->
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
									@if($products)
									<form method="post" action="{{URL::route('postPedido')}}" id="formCot">
										<input type="hidden" name="totalCart" value="{{Cart::total()}}">
										<input type="hidden" name="fecEve" id="FecEve">
										<input type="hidden" name="CanPer" id="CanPer">
										<button class="btn btn-warning btn-lg text-right" type="submit"> FINALIZAR MI PEDIDO!</button>
									</form>
									@else
										<button class="btn btn-warning btn-lg text-right" type="submit"> FINALIZAR MI PEDIDO!</button>
									@endif
								@endif	
							</td>
						</tr>
					</tfoot>
				</table>
@stop

@section('js')
	<script src="{{asset('co/js/functions.js')}}"></script>
@stop