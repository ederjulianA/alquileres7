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
        <div class="container">
          @if(!$empresa)
              <div class="col-md-4">
                  <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                 <strong>Por favor crea la parametrización de tu empresa.<br><a href="" title="" class="btn btn-info">Crear <i class="fa fa-pencil"></i></a> </strong> 
                 </div>              
              </div>
          @endif    
        </div> 

       
 	 </div>
   </div>  
@stop