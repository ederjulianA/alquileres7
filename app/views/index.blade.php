@extends('plantilla.co')

@section('info-empresa')
  {{$emp->EmpDir}}---{{$emp->EmpTel}}
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
  .item{
       -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
          box-sizing: border-box;
          position: relative;
    width: 90%;

    margin: 20px auto;
    box-shadow: 1.5px 2px 1.5px rgba(50,50,103,.8);
    border-left: 3px solid blue;
  }

  .item:hover {
    border-left: 5px solid #f90;
    cursor: pointer;
   
     box-shadow: 2.5px 2px 2.5px rgba(0,0,0,.2);
  }
  .item:hover h2 {
    color: #95b44b;
  }

  .item .img-item, .item .info-item {
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
  background-color: #95b44b;
  color: #fff;
  font-weight: bold;
  border: 2.1px solid #576E52;
  border-radius: 30%;
  letter-spacing: 1.2px;
  padding: 10px;
  top: 35%;
}
</style>



@section('content')
   <section id="home">
     @foreach($items as $item)
        <div class="item">
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
@stop

