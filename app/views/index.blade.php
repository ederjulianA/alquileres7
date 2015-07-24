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
  #home{
    
    
    padding: 10px;
  }  
  .item2{
       -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
          box-sizing: border-box;
          position: relative;
    width: 90%;

    margin: 20px auto;
    box-shadow: 1.5px 2px 1.5px rgba(0,0,0,.3);
    border-left: 3px solid #ccc;
  }

  .item2:hover {
    border-left: 5px solid #f90;
    cursor: pointer;
   
     box-shadow: 2.5px 2px 2.5px rgba(0,0,0,.2);
  }
  .item2:hover h2 {
    color: #95b44b;
  }

  .item2 .img-item, .item2 .info-item {
    display: inline-block;
    vertical-align: top;
  }
  .info-item{
    text-align: center;
    width: 60%;
   
  }
  .img-item{
     object-fit: cover;
    height: 100px;
    width: 30%;
}
.btn-ir{
  position: absolute;
  right: 10%;
  background-color:#FFCA28;
  color: #fff;
  font-weight: bold;
 /* border: 2.1px solid #576E52;*/
  border-radius: 30%;
  letter-spacing: 1.2px;
  padding: 10px;
  top: 35%;
}
</style>



@section('content')

    <div class="row-fluid">
      <div class="span12">

        <div class="slider"> <!-- slider -->
          <div class="carousel slide" id="main-carousel">
            <div class="carousel-inner">
            @foreach($slides as $s)
              <div class="item "> <!-- item -->

                <figure>
                  <img src="data:image/jpeg;base64,<?php echo base64_encode($s->SlideImg); ?>" alt="">
                </figure>

                <article class="span5">
                  <header>
                   <!-- <h2>{{$s->SlideCaption}}<br></h2>-->
                  </header>
                
                 <!-- <a href="#" class="btn btn-primary"></a>-->
                </article>
                
              </div> <!-- //item -->
             @endforeach 
              
             
            </div>
            
            <div class="carousel-nav pull-right">
              <a href="#main-carousel" class="carousel-control-left" data-slide="prev"><i class="icon-angle-left"></i></a>
              <a href="#main-carousel" class="carousel-control-right" data-slide="next"><i class="icon-angle-right"></i></a>
            </div>


          </div>
        </div> <!-- //slider -->

      </div>
    </div>



   <section id="home">
     @foreach($items as $item)
        <div class="item2 id" id="slide-{{$s->SlideId}}" >
          <a href="{{URL::route('item',array('id'=>$item->ItemId))}}" title="" class="btn-ir">VER</a>
            
          
          <img src="data:image/jpeg;base64,<?php echo base64_encode($item->ItemImg); ?>" height="" width="" class="img-item" alt="">
          <div class="info-item">
              <h2>{{$item->ItemName}}</h2>
              <p>{{$item->ItemDesc}}</p>
          </div>
          
        </div>
      @endforeach  
            

    </section><!--END HOME-->

          
 
@stop

@section('js')
    <script src="{{asset('co/js/functions.js')}}"></script>
    <script src="{{asset('co/js/functions2.js')}}"></script>
@stop

