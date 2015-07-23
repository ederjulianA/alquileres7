<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Alquilleres</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <link rel="stylesheet" type="text/css" href="{{asset('co/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('co/css/estilo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('co/css/jquery.lighter.css')}}">
    @yield('css')
    <style type="text/css" media="screen">
      .cont-eder{
        z-index: -9999;
      }  
    </style>
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie8.css">
    <![endif]-->
  
    <script src="{{asset('co/libs/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('co/libs/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('co/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>

    <script src="{{asset('co/libs/less-1.3.3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('co/libs/contact-form.js')}}"></script>
    <script src="{{asset('co/libs/jquery.scrollto-1.4.3.1-min.js')}}"></script>
    <script src="{{asset('co/libs/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('co/libs/jquery.tweet.js')}}"></script>
    <script src="{{asset('co/js/moment.js')}}"></script>
    <script src="{{asset('co/js/jquery.lighter.js')}}"></script>
    <script src="{{asset('co/libs/custom.js')}}"></script>
    @yield('js')

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="libs/html5shiv.js"></script>
    <![endif]-->

  </head>

  <body>



  <div id="boxedWrapper">
  
  <header id="top">
    @yield('pendiente')
     @if(Session::has('message-alert'))
        <div class="row">
          <div class="col-md-5">
                   

                  <div class="alert alert-warning alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Mensaje</strong> {{Session::get('message-alert')}}
                  </div>

                  <!--<p class="mensajes-flash" style="" data-dismiss="alert"id="mensaje-flash"> {{Session::get('message-alert')}}
                      
                  </p>-->
              
            
          </div>
          
        </div>
      @endif
    <div class="container">
      <div class="row-fluid">
        <div class="span12">
           <img src="{{asset('co/logo-coordieventos.jpg')}}" alt="" class="imgLogo">
            
            <nav class="short-contact pull-right">
              <ul class="wheel-group">
                <li><p>@yield('info-empresa')</p></li>
                <li><a href="#"><i class="wheel wheel-social icon-facebook"></i></a></li>
                <li><a href="#"><i class="wheel wheel-social icon-twitter"></i></a></li>
                <!--<li><a href="#"><i class="wheel wheel-social icon-google-plus"></i></a></li>
                <li><a href="#"><i class="wheel wheel-social icon-rss"></i></a></li>-->
              </ul>
              <div class="line"></div>
            </nav>

            <div class="clearfix"></div>

            <div class="navbar">
              <div class="navbar-inner">
              
                  <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>

                  <a class="brand" href="/">Dish</a>

                  <div class="nav-collapse collapse">
                    <ul class="nav pull-right">
                      <li class="active"><a href="/">Home</a></li>
                        <li class="dropdown">
                          <a href="02_aboutus.html" class="dropdown-toggle" data-toggle="dropdown">Qué alquilar</a>
                          <ul class="dropdown-menu">
                              @yield('alquilar')
                             
                           
                          </ul>
                        </li>
                      <li><a href="{{URL::route('cart')}}">Mi cotización</a></li>
                      <!--<li><a href="04_gallery.html">Gallery</a></li>
                        <li class="dropdown">
                          <a href="02_aboutus.html" class="dropdown-toggle" data-toggle="dropdown">Blog</a>
                          <ul class="dropdown-menu">
                            <li><a href="05_blog.html">Blog List</a></li>
                            <li><a href="06_single.html">Single Post</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                            <a href="09_all_sections.html" class="dropdown-toggle" data-toggle="dropdown">Elements</a>
                            <ul class="dropdown-menu">
                                <li><a href="09_all_sections.html">All sections</a></li>
                                <li><a href="12_posttypes.html">Post types</a></li>
                                <li><a href="13_faq.html">FAQ</a></li>
                                <li><a href="14_shortcode_boxes.html">Boxes</a></li>
                                <li><a href="15_shortcode_buttons_typo.html">Typography</a></li>
                                <li><a href="16_shortcode_elements.html">Toggleable</a></li>
                                <li><a href="17_shortcode_pricing_tables.html">Pricing Tables</a></li>
                                <li><a href="18_single_product.html">Single Product</a></li>
                            </ul>
                        </li>
                        <li><a href="{{URL::route('cart')}}">Carrito</a></li>-->
                    </ul>
                  </div>
                
              </div>
            </div>

        </div>
      </div>
    </div>

  </header>
  
  <!--CONTAINER1################################################ -->

  <!-- FIN CONTAINER1########################################-->

  <section id="content  cont-eder">
    
    <div class="container">
      <div class="row-fluid">
        <div class="span12">


          @yield('content')

          <div class="separator"></div>

        </div> <!-- //span -->
      </div> <!-- //row -->
    </div> <!-- //container -->

  </section>

  <section id="prefooter">
    <div class="container">
      <div class="row-fluid">
        <div class="span3">
          <article>
            <header>
              <h3>Sobre Coordieventos</h3>
            </header>
            <p>
           COORDIEVENTOS S.A.S, es una empresa dedicada a asesorar, coordinar y realizar eventos sociales y empresariales; tiene la capacidad, talento humano, infraestructura y experiencia de más de 17 años; para satisfacer los deseos y necesidades de sus clientes, con un alto grado de eficiencia, eficacia y responsabilidad social.

            </p>
            
            <div class="special">Coordieventos.</div>
            <ul class="icons-group">
              <li><p><i><img src="{{asset('co/images/icon-map-marker.png')}}" alt=""></i>331 W 4th St, New York, NY,</p></li>
              
            </ul>
          </article>
        </div>
        <div class="span3">
          <article>
            <header>
              <h3>Mantente informado</h3>
            </header>
            <ul class="icons-group">
              <li><p><i><img src="{{asset('co/images/icon-phone.png')}}" alt=""></i>Phone1 +1 212-242-9502<br>Phone2 +1 212-242-9503</p></li>
              <li><p><i><img src="{{asset('co/images/icon-map-marker.png')}}" alt=""></i>331 W 4th St, New York, NY<br>Phone +1 212-242-9502</p></li>
              <li><p><i><img src="{{asset('co/images/icon-email.png')}}" alt=""></i>hello@dish-restaurant.com<br>www.dish-restaurant.com</p></li>
            </ul>
            <div class="map">
              <img src="{{asset('co/images/content-demo/gmap.png')}}" alt="">
            </div>
          </article>
        </div>
        <div class="span3">
          <article>
            <header>
              <h3> Tweets</h3>
            </header>
              <div class="tweets"></div>
          </article>
        </div>
        <div class="span3">
          <article class="book-table">
            <header>
              <h3>info</h3>
            </header>
            <!--<form class="contactForm" action="form/table.php" method="post">
              <fieldset>
                <ul>
                  <li>
                    <label for="form-name">Name</label>
                    <input type="text" value="" class="input-text" name="name" required id="form-name">
                  </li>
                  <li>
                    <label for="form-email">E-Mail Address</label>
                    <input type="text" value="" class="input-text" name="email" required id="form-email">
                  </li>
                  <li>
                    <label for="form-phone">Phone number</label>
                    <input type="text" value="" class="input-text" name="phone" required id="form-phone">
                  </li>
                  <li>
                    <label for="form-guests">Guests (Amount)</label>
                    <input type="text" value="" class="input-text" name="guests" required id="form-guests">
                  </li>
                  <li>
                    <label for="form-date">Date</label>
                    <input type="text" value="" class="input-text" name="date" required id="form-date">
                  </li>
                  <li>
                    <label for="form-time">Time</label>
                    <select name="time" id="form-time"><option>9:00 AM</option><option>10:00 AM</option><option>11:00 AM</option></select>
                  </li>
                </ul>
                <input type="submit" value="Book a Table" class="btn btn-primary btn-block" />
              </fieldset>
            </form>-->
          </article>
        </div>
      </div>
    </div>
  </section>


  <footer id="footer">
    <div class="container">
      <div class="row-fluid">
        <div class="span3">
          <p>
              &copy; Copyright 2015 <strong>Coordieventos</strong>/ <span>Coded by <a href=""><strong>Megalópolis</strong></a></span>
          </p>
          <p>
            PSD Template by <a href="#">templaterockers</a>
          </p>
        </div>
        <div class="span9">
          <nav class="short-menu">
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Pages</a></li>
              <li><a href="#">Features</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">Gallerie</a></li>
              <li><a href="#">Shortcodes</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
          <nav class="social-list">
            <ul class="wheel-group">
              <li><a href="#"><i class="random"><img src="{{asset('co/images/icon-random.png')}}" alt=""></i></a></li>
              <li><a href="#"><i class="wheel wheel-social icon-facebook"></i></a></li>
              <li><a href="#"><i class="wheel wheel-social icon-twitter"></i></a></li>
              <li><a href="#"><i class="wheel wheel-social icon-google-plus"></i></a></li>
              <li><a href="#"><i class="wheel wheel-social icon-rss"></i></a></li>
              <li><a href="#top" class="btn gotop">Top</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </footer>

  </div>
  <!-- //boxedWrapper -->

  <!-- frame -->


<link href="http://frame.themeforest.createit.pl/assets/createit/css/style.css" media="all" rel="stylesheet" type="text/css">
<script src="http://frame.themeforest.createit.pl/assets/js/switcher.js"></script>

<!-- end frame -->
<!-- switcher -->
<!-- switcher -->
<script src="{{asset('co/demo/js/demo.js')}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('co/demo/css/demo.css')}}">

<!-- end switcher -->
<!-- end switcher -->
</body>

</html>