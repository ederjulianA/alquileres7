@extends('plantilla.co')

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
</style>
<section id="content">

<div class="container">
<div class="row-fluid">
<div class="span12">
<!-- intro -->
<div class="intro"> 
    <header>
        <h1>{{$item->ItemName}}</h1>
    </header>
   <!-- <div class="book-table">
        <form action="form/table.php" method="post" class="contactForm">
            <fieldset>
                <div class="row-fluid">
                    <div class="span10">
                        <div class="row-fluid">
                            <div class="span2">
                                <label for="book-name">Name</label>
                                <input type="text" value="" name="name" required class="input-text" id="book-name">
                            </div>
                            <div class="span2">
                                <label for="book-email">E-mail</label>
                                <input type="text" value="" class="input-text" name="email" required id="book-email">
                            </div>
                            <div class="span2">
                                <label for="book-phone">Phone</label>
                                <input type="text" value="" class="input-text" name="phone" required id="book-phone">
                            </div>
                            <div class="span2">
                                <label for="book-guests">Guests</label>
                                <input type="text" value="" class="input-text" name="guests" required id="book-guests">
                            </div>
                            <div class="span2">
                                <label for="book-date">Date</label>
                                <input type="text" value="" class="input-text" name="date" required id="book-date">
                            </div>
                            <div class="span2">
                                <label for="book-time">Time</label>
                                <select name="time" required id="book-time">
                                    <option>7:00 AM</option>
                                    <option selected="selected">8:00 AM</option>
                                    <option>9:00 AM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="span2">
                        <input type="submit" value="Place booking" class="btn btn-primary input-submit">
                    </div>
                </div>
            </fieldset>
        </form>
    </div>-->
    <div class="separator"></div>
    
</div>
<!-- intro -->

<section id="menucard">

<div class="filter">
    <ul id="menucard-tabs">
    	@foreach($categorias as $cat)
        		<li class=""><a href="#tab-{{$cat->CategoryId}}" data-toggle="tab">{{$cat->CategoryName}} </a></li>
        @endforeach
     
    </ul>
</div>

<div class="tab-content">
	@foreach($categorias as $cat)
		<div class="tab-pane " id="tab-{{$cat->CategoryId}}">
			

			<div class="row-fluid"> <!-- menucards -->
				@foreach($cat->productos as $pro)
			    <div class="span6">
			        <article class="menucard">
			            <header>
			                <h3><span class="price2">${{number_format($pro->ProPre, 0, '', '.')}}</span>	</h3> 

			            </header>
			            <ul>
			                <li>
			                    <div class="image">
			                        <figure class="rounded">
			                            <img src="data:image/jpeg;base64,<?php echo base64_encode($pro->ProImg); ?>" alt="">
			                        </figure>
			                    </div>
			                    <div class="data">
			                        <h4>{{$pro->ProNom}}</h4>

			                        <p class="DesP">
			                            {{$pro->ProDes}}
			                        </p>
			                        <p>
			                        	<form method="post" action="{{URL::route('addToCart')}}">
			 		<input type="hidden" name="ProId" value="{{$pro->ProId}}">
			 		<input type="number" name="cantidad" class="cantidad">
			 			<button type="submit" class="btnAdd" title="">Agregar</button>
			 		</form>
			                        </p>
			                        
			                    </div>
			                </li>
			                <!--<li>
			                    <div class="image">
			                        <figure class="rounded">
			                            <img src="images/content-demo/img44.jpg" alt="">
			                        </figure>
			                    </div>
			                    <div class="data">
			                        <h4>Ejemplo No. 1</h4>

			                        <p>
			                            Pellentesque habitant morbi tristique senectus et netus et male.
			                        </p>
			                        <span class="price">7.99$</span>
			                    </div>
			                </li>
			                <li>
			                    <div class="image">
			                        <figure class="rounded">
			                            <img src="images/content-demo/img45.jpg" alt="">
			                        </figure>
			                    </div>
			                    <div class="data">
			                        <h4>Ejemplo No. 1</h4>

			                        <p>
			                            Pellentesque habitant morbi tristique senectus et netus et male.
			                        </p>
			                        <span class="price">7.99$</span>
			                    </div>
			                </li>-->
			            </ul>
			        </article>
			    </div>
			    @endforeach
			    <!--<div class="span6">
			        <article class="menucard">
			            <header>
			                <h3>Ensaladas</h3>
			            </header>
			            <ul>
			                <li>
			                    <div class="image">
			                        <figure class="rounded">
			                            <img src="images/content-demo/img43.jpg" alt="">
			                        </figure>
			                    </div>
			                    <div class="data">
			                        <h4>Ejemplo No. 1</h4>

			                        <p>
			                            Pellentesque habitant morbi tristique senectus et netus et male.
			                        </p>
			                        <span class="price">7.99$</span>
			                    </div>
			                </li>
			                <li>
			                    <div class="image">
			                        <figure class="rounded">
			                            <img src="images/content-demo/img44.jpg" alt="">
			                        </figure>
			                    </div>
			                    <div class="data">
			                        <h4>Ejemplo No. 1</h4>

			                        <p>
			                            Pellentesque habitant morbi tristique senectus et netus et male.
			                        </p>
			                        <span class="price">7.99$</span>
			                    </div>
			                </li>
			                <li>
			                    <div class="image">
			                        <figure class="rounded">
			                            <img src="images/content-demo/img45.jpg" alt="">
			                        </figure>
			                    </div>
			                    <div class="data">
			                        <h4>Ejemplo No. 1</h4>

			                        <p>
			                            Pellentesque habitant morbi tristique senectus et netus et male.
			                        </p>
			                        <span class="price">7.99$</span>
			                    </div>
			                </li>
			            </ul>
			        </article>
			    </div>-->
			</div>
			
			<!-- //menucards -->
		</div>
	@endforeach		



<!-- //menucards -->

<div class="separator"></div>

</div>
<!-- //span -->
</div>
<!-- //row -->
</div>
<!-- //container -->

</section>
@stop

@section('css')
	<link rel="stylesheet" type="text/css" href="{{asset('co/css/estilo.css')}}">
@stop