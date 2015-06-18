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