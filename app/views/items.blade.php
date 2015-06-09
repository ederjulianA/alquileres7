@extends('plantilla.co')

@section('content')
	
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
        <!--<li><a href="#tab-lunch" data-toggle="tab">Copas</a></li>
        <li><a href="#tab-dinner" data-toggle="tab">Platos</a></li>
        <li><a href="#tab-wine" data-toggle="tab">Cubiertos</a></li>-->
    </ul>
</div>

<div class="tab-content">
@foreach($categorias as $cat)
<div class="tab-pane cont-cate" id="tab-{{$cat->CategoryId}}">

<!--<h2>{{$cat->CategoryName}}</h2>-->
@foreach($cat->productos as $pro)
	<div class="proIte">
			<div class="imageP">
			     <img src="data:image/jpeg;base64,<?php echo base64_encode($pro->ProImg); ?>" alt="">
			 </div>
			 <div class="infoIte">
			 	<h2>{{$pro->ProNom}}</h2>
			 	<p><span class="priceP">${{number_format($pro->ProPre, 0, '', '.')}}</span></p>
			 	<p>
			 		<form method="post" action="{{URL::route('addToCart')}}">
			 		<input type="hidden" name="ProId" value="{{$pro->ProId}}">
			 		<input type="number" name="cantidad">
			 			<button type="submit" class="btnAdd" title="">Agregar</button>
			 		</form>
			 	</p>
			 </div>
	</div>
@endforeach
	


		


</div>
@endforeach







</div>


<div class="separator"></div>

<header class="text-center">
    <h3>Are you overwhelmed? Here are our reccomendations!</h3>
</header>

<div class="recommendations"> <!-- recommendations -->
    <div class="row-fluid">
        <div class="span6">
            <div class="media">
                <a class="pull-left" href="#">
                    <figure class="rounded"><img class="media-object" src="images/content-demo/img28.jpg" alt=""></figure>
                </a>

                <div class="media-body">
                    <h3><a href="#">Appetizer</a></h3>

                    <p><strong>Donec sed odio dui.</strong> Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat.</p>
                </div>
            </div>
        </div>
        <div class="span6">
            <div class="media">
                <a class="pull-left" href="#">
                    <figure class="rounded"><img class="media-object" src="images/content-demo/img29.jpg" alt=""></figure>
                </a>

                <div class="media-body">
                    <h3><a href="#">Main Dish</a></h3>

                    <p><strong>Donec sed odio dui.</strong> Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //recommendations -->

</section>

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