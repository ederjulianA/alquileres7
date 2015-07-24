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
	.price2{
		/*position: absolute;*/
		font-weight: bold;
		font-size: 25px;
		color: #95b44b;
		
		
	}	
	.cantidad{
		margin-top: 0;
		font-size: 17px;
		height: 20px;
		width: 50%;
	}
	.cont-p{
		border-bottom: 1px solid #ccc;
		margin:  1em auto;

	}
	.cont-p .pro-item {
		display: inline-block;
		vertical-align: top;
		position: relative;
		margin: 5px 15px;
		border: 1px solid #95b44b;
		width: 29%;
		 -webkit-box-sizing: border-box;
     		-moz-box-sizing: border-box;
          box-sizing: border-box;
	}
	.pro-item:hover {
		border-left: 3px solid #95b44b;
		cursor: pointer;
		box-shadow: 2px 2px 2px rgba(0,0,0,.5);


	}
	.imgItem{
		  object-fit: cover;
		  height: 250px;
		  width: 100%;
	}
	.precio{
		font-size: 20px;
		font-weight: bold;
		letter-spacing: 1px;
		color: #95b44b;
	}
	.pro-des{
		
		text-align: center;
		width: 95%;
		height: 150px;
		padding: 10px;
	}
	.pro-bottom{
		text-align: center;
	}

	.btn-add{
		background-color: #95b44b;
		border-bottom: 1px solid #578648;
		color: #fff;
	}
	.btn-add:hover{
		background-color: #95b44b;
		border-bottom: 1px solid #578648;
		color: #fff;
		text-shadow: 1px 1px 1px rgba(0,0,0,.5);
	}
	.proCat{
		position: absolute;
		left: 5px;
		top: 5px;
		background-color: #95b44b;
		color: #fff;
		border-radius: 50%;
		padding: 10px;
	}
</style>

	
<div class="row cont-p">
	<h3> <a href="{{URL::route('item',array('id'=>$it->ItemId))}}">{{$it->ItemName}}</a>--{{$cat->CategoryName}}</h3>
		@if($pros)
			@foreach($pros as $pro)					
			 <div class=" col-md-4 pro-item">

			 	<span class="proCat">{{$pro->categoria->CategoryName}}</span>
	            <div class="thumbnail">

	              <img src="data:image/jpeg;base64,<?php echo base64_encode($pro['ProImg']); ?>" alt=""  class="imgItem">
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
	                		<p><button type="submit" class="btn btn-add" role="button">Agregar</button> <!--<a href="{{URL::route('categoryList',array('id'=>$pro['ProCatId']))}}" class="btn btn-default" role="button">Ver Mas</a>--></form> </p>
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