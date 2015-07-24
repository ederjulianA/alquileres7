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


@section('content')

 <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
      <link href='{{asset("co/css/jquery.lighter.css")}}' rel='stylesheet' type='text/css'>
      <link href='{{asset("co/css/sample.css")}}' rel='stylesheet' type='text/css'>

      
      <script src="{{asset('co/libs/jquery.lighter.js')}}" type="text/javascript"></script>
      <script src="{{asset('co/libs/sample.js')}}" type="text/javascript"></script>
      <script src="{{asset('co/libs/rainbow.js')}}" type="text/javascript"></script>
      
<style type="text/css" media="screen">
	
</style>

	
<div class="row cont-p">
	<h3>{{$it->ItemName}}</h3>
		@if($pros)
			@foreach($pros as $pro)					
			 <div class=" col-md-4 pro-item">

			 	<!--<span class="proCat">{{$pro['ProCat']}}</span>-->
	            <div class="thumbnail">

					<a href="{{$pro['ProImgLar']}}" data-lighter>
					  <img src="{{$pro['ProImgLar']}}" class="imgItem"/>
					</a>

	              <!--<img src="{{$pro['ProImgLar']}}" alt=""  class="imgItem">-->
	              <div class="caption ">
	              		<div class="pro-des">
			                <h3>{{{$pro['ProNom']}}}</h3>
			                <p>{{$pro['ProDes']}}</p>
			               <span class="precio"> ${{number_format($pro['ProPre'], 0, '', '.')}}</span>
			                
			               
		                </div>
		                <div class="pro-bottom">
		                	<form method="post" action="{{URL::route('addToCart')}}">
						 		<input type="hidden" name="ProId" value="{{$pro['ProId']}}">
						 		<input type="hidden" name="cantidad" class="" value="1">
	                		<p><button type="submit" class="btn btn-add" role="button">Agregar</button> <a href="{{URL::route('categoryList',array('id'=>$pro['ProCatId']))}}" class="btn btn-default" role="button">Ver Mas</a></form> </p>
	               		 </div>
	              </div>
	            </div>
	          </div>

			 @endforeach
		@else
			NO HAY PRODUCTOS :(
		@endif	 
</div>

@stop

@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('co/css/estilo.css')}}">
@stop