@extends('plantilla.admin')



@section('menu-left')
		@include('includes.admin.menuLeft')
@stop

@section('titulo1')
  HOME
@stop

@section('content')
@if(Session::has('message-alert'))
      <div class="row">
      <div class="col-md-12">
         

            <div class="alert alert-warning alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <strong>Mensaje</strong> {{Session::get('message-alert')}}
            </div>

            <!--<p class="mensajes-flash" style="" data-dismiss="alert"id="mensaje-flash"> {{Session::get('message-alert')}}
                
            </p>-->
        
        
      </div>
      
    </div>
    @endif
  <div class="contenedor">
    
  
    <div class="row">
       
 	 </div>  
@stop