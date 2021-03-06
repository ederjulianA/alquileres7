<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Admin - Alquileres</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">


  <!-- Stylesheets -->
  <link href="{{asset('admin2/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('tat/cleditor/jquery.cleditor.css')}}" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="{{asset('admin2/css/font-awesome.min.css')}}"> 
  <link rel="stylesheet" href="{{asset('admin2/css/font-awesome.min2.css')}}"> 
  <!-- jQuery UI -->
  <link rel="stylesheet" href="{{asset('admin2/css/jquery-ui.css')}}"> 
  <!-- Calendar -->
  <link rel="stylesheet" href="{{asset('admin2/css/fullcalendar.css')}}">
  <!-- prettyPhoto -->
  <link rel="stylesheet" href="{{asset('admin2/css/prettyPhoto.css')}}">  
  <!-- Star rating -->
  <link rel="stylesheet" href="{{asset('admin2/css/rateit.css')}}">
  <!-- Date picker -->
  <link rel="stylesheet" href="{{asset('admin2/css/bootstrap-datetimepicker.min.css')}}">
  <!-- CLEditor -->
  <link rel="stylesheet" href="{{asset('admin2/css/jquery.cleditor.css')}}"> 
  <!-- Data tables -->
  <link rel="stylesheet" href="{{asset('admin2/css/jquery.dataTables.css')}}"> 
  <!-- Bootstrap toggle -->
  <link rel="stylesheet" href="{{asset('admin2/css/jquery.onoff.css')}}">

  @yield('estilos')
  <!-- Main stylesheet -->
  <link href="{{asset('admin2/css/style.css')}}" rel="stylesheet">
  <!-- Widgets stylesheet -->
  <link href="{{asset('admin2/css/widgets.css')}}" rel="stylesheet">   
  
  <script src="{{asset('admin2/js/respond.min.js')}}"></script>
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
</head>

<body>

<div class="navbar navbar-fixed-top bs-docs-nav" role="banner">
  
    <div class="conjtainer">
      <!-- Menu button for smallar screens -->
      <div class="navbar-header">
		  <button class="navbar-toggle btn-navbar" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			<span>Menu</span>
		  </button>
		  <!-- Site name for smallar screens -->
		  <a href="/admin" class="navbar-brand hidden-lg">TAT</a>
		</div>
      
      

      <!-- Navigation starts -->
      <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">         

        <ul class="nav navbar-nav">  

          <!-- Upload to server link. Class "dropdown-big" creates big dropdown -->
 

          <!-- Sync to server link -->
          <!--<li class="dropdown dropdown-big">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-danger"><i class="fa fa-refresh"></i></span> Sync with Server</a>
            
            <ul class="dropdown-menu">
              <li>
                
                <p><span class="label label-info"><i class="fa fa-cloud"></i></span> Syncing Members Lists to Server</p>
                <hr />
                <p><span class="label label-warning"><i class="fa fa-cloud"></i></span> Syncing Bookmarks Lists to Cloud</p>

                <hr />

                
                <div class="drop-foot">
                  <a href="#">View All</a>
                </div>

              </li>
            </ul>
          </li>-->

        </ul>

        <!-- Search form -->
        <form class="navbar-form navbar-left" role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
        <!-- Links -->
        <ul class="nav navbar-nav pull-right">
          <li class="dropdown pull-right">            
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-user"></i> {{ Auth::user()->email}} <b class="caret"></b>              
            </a>
            
            <!-- Dropdown menu -->
            <ul class="dropdown-menu">
              <!--<li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
              <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>-->
              <li><a href="{{URL::route('logout')}}"><i class="fa fa-sign-out"></i> Logout</a></li>
            </ul>
          </li>
          
        </ul>
      </nav>

    </div>
  </div>


<!-- Header starts -->
  <header>
    <div class="container">
      <div class="row">

        <!-- Logo section -->
        <div class="col-md-4">
          <!-- Logo. -->
          <div class="logo">
            <h1><a href="#"><span class="bold">Admin TAT</span></a></h1>
            <p class="meta">Tienda online</p>
          </div>
          <!-- Logo ends -->
        </div>

        <!-- Button section -->
        <div class="col-md-4">

          <!-- Buttons ########################## BOTONES DE CHAT Y MENSAJES -->
          

        </div>

        <!-- Data section -->

        <div class="col-md-4">
          <div class="header-data">

            <!-- Traffic data -->
           <!-- <div class="hdata">
              <div class="mcol-left">
                
                <i class="fa fa-signal bred"></i> 
              </div>
              <div class="mcol-right">
               
                <p><a href="#">7000</a> <em>visits</em></p>
              </div>
              <div class="clearfix"></div>
            </div>-->

            <!-- Members data -->
            <div class="hdata">
              <div class="mcol-left">
                <!-- Icon with blue background -->
                <i class="fa fa-user bblue"></i> 
              </div>
              <div class="mcol-right">
                <!-- Number of visitors -->
                <p><a href="#">0</a> <em>usuarios</em></p>
              </div>
              <div class="clearfix"></div>
            </div>

            <!-- revenue data -->
            <div class="hdata">
              <div class="mcol-left">
                <!-- Icon with green background -->
                <i class="fa fa-money bgreen"></i> 
              </div>
              <div class="mcol-right">
                <!-- Number of visitors -->
                <p><a href="#">5000</a><em>orders</em></p>
              </div>
              <div class="clearfix"></div>
            </div>                        

          </div>
        </div>

      </div>
    </div>
  </header>

<!-- Header ends -->

<!-- Main content starts -->

<div class="content">

  @yield('menu-left')

  	  	<!-- Main bar -->
  	<div class="mainbar">
      
	    <!-- Page heading -->
	    <div class="page-head">
	      <h2 class="pull-left"><i class="fa fa-home"></i> @yield('titulo1')</h2>

        <!-- Breadcrumb -->
        <div class="bread-crumb pull-right">
          <a href="/admin"><i class="fa fa-home"></i> Home</a> 
          <!-- Divider -->
          <span class="divider">/</span> 
          <a href="/admin/pedidos" class="bread-current">Pedidos</a>
        </div>

        <div class="clearfix"></div>

	    </div>
	    <!-- Page heading ends -->



	    <!-- Matter ##########################################################################-->

	     @yield('content')

		<!-- Matter ends #########################################################################-->

    </div>

   <!-- Mainbar ends -->
   <div class="clearfix"></div>

</div>
<!-- Content ends -->

<!-- Footer starts -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            <!-- Copyright info -->
            <p class="copy">Copyright &copy; 2015 | <a href="#">TAT Express</a> </p>
      </div>
    </div>
  </div>
</footer> 	

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 

<!-- JS -->
<script src="{{asset('admin2/js/jquery.js')}}"></script> <!-- jQuery -->
<script src="{{asset('admin2/js/bootstrap.min.js')}}"></script> <!-- Bootstrap -->
<script src="{{asset('admin2/js/jquery-ui.min.js')}}"></script> <!-- jQuery UI -->
<script src="{{asset('admin2/js/fullcalendar.min.js')}}"></script> <!-- Full Google Calendar - Calendar -->
<script src="{{asset('admin2/js/jquery.rateit.min.js')}}"></script> <!-- RateIt - Star rating -->
<script src="{{asset('admin2/js/jquery.prettyPhoto.js')}}"></script> <!-- prettyPhoto -->
<script src="{{asset('admin2/js/jquery.slimscroll.min.js')}}"></script> <!-- jQuery Slim Scroll -->
<script src="{{asset('admin2/js/jquery.dataTables.min.js')}}"></script> <!-- Data tables -->

<!-- jQuery Flot -->
<script src="{{asset('admin2/js/excanvas.min.js')}}"></script>
<script src="{{asset('admin2/js/jquery.flot.js')}}"></script>
<script src="{{asset('admin2/js/jquery.flot.resize.js')}}"></script>
<script src="{{asset('admin2/js/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin2/js/jquery.flot.stack.js')}}"></script>

<!-- jQuery Notification - Noty -->

<!-- jQuery Notification ends -->

<script src="{{asset('admin2/js/sparklines.js')}}"></script> <!-- Sparklines -->
<script src="{{asset('admin2/js/jquery.cleditor.min.js')}}"></script> <!-- CLEditor -->
<script src="{{asset('admin2/js/bootstrap-datetimepicker.min.js')}}"></script> <!-- Date picker -->
<script src="{{asset('admin2/js/jquery.onoff.min.js')}}"></script> <!-- Bootstrap Toggle -->
<script src="{{asset('admin2/js/filter.js')}}"></script> <!-- Filter for support page -->
<script src="{{asset('admin2/js/custom.js')}}"></script> <!-- Custom codes -->
<script src="{{asset('admin2/js/charts.js')}}"></script> <!-- Charts & Graphs -->
<script src="{{asset('tat/js/Estados.js')}}"></script> <!-- Charts & Graphs -->
<!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<script src="{{asset('tat/js/app.js')}}"></script>--> <!-- Charts & Graphs -->


@yield('scripts')



</body>
</html>