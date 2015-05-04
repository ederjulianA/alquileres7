@extends('plantilla.admin')



@section('menu-left')
		@include('includes.admin.menuLeft')
@stop

@section('titulo1')
 Parametriazión de empresa
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
  @if(!$empresa)
    <div class="jumbotron">
      <div class="row">
      <h1>Parametrización inicial</h1>
      <div class="col-md-5">
        
      
      <p>

              <!-- FORMULARIO CREACION NUEVA EMPRESA-->
              {{ Form::open(['route'=>'newEmpresa','method'=>'POST','role'=>'form','files'=>true]) }}
                    <div class="form-group">
                      {{ Form::label('title',' Title for the new Article') }}
                      {{ Form::text('title',null,['class'=>'form-control']) }}
                      {{ $errors->first('title','<p class="alert alert-danger">:message</p>') }}
                    </div>

                    <div class="form-group">
                      {{ Form::label('slug',' Seo slug URL') }}
                      {{ Form::text('slug',null,['class'=>'form-control']) }}
                      {{ $errors->first('slug','<p class="alert alert-danger">:message</p>') }}
                    </div>


                    <p>
                      <input type="submit" class="btn btn-info" value="Created New Article">
                    </p>

                    {{ Form::close() }}
      </p>
      <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
      </div>
    </div>
  @endif
@stop