@extends('plantilla.co')

@section('info-empresa')
  {{$emp->EmpDir}}---{{$emp->EmpTel}}
@stop

@section('content')
   <section id="home">

            <div class="carousel slide" id="menu-carousel">
              <div class="carousel-inner"> <!-- carousel inner -->
             
                <div class="item active">
                  <div class="row-fluid">
                    @foreach($items as $item)
                    <div class="span4 dish-item">
                      <header>
                        <h3 class="text-center"></h3>
                      </header>
                      <figure class="border">
                        <img src="data:image/jpeg;base64,<?php echo base64_encode($item->ItemImg); ?>" height="200px" width="auto" alt="">
                      </figure>
                      <article class="text-item text-center">
                        <header>
                          <h3><i class="wheel icon-tablet"></i>{{$item->ItemName}}</h3>
                        </header>
                        <p>
                          {{$item->ItemDesc}}
                        </p>
                        <a href="{{URL::route('item',array('id'=>$item->ItemId))}}">ver</a>
                      </article>
                    </div>
                    @endforeach
                   <!-- <div class="span4 dish-item">
                      <header>
                        <h3 class="text-center">Cumpleaños</h3>
                      </header>
                      <figure class="border">
                        <img src="{{asset('co/images/eventos/cum.jpg')}}" alt="">
                      </figure>
                      <article class="text-item text-center">
                        <header>
                          <h3><i class="wheel icon-tablet"></i>Very tasty design</h3>
                        </header>
                        <p>
                          Pellentesque habitant morbi triique senectus et netus et malesuada es ac turpis egestas ersum labilia porc sablium
                        </p>
                        <a href="menu.html">Ver</a>
                      </article>
                    </div>
                    <div class="span4 dish-item">
                      <header>
                        <h3 class="text-center">Empresariales</h3>
                      </header>
                      <figure class="border">
                        <div class="ribbon special"><span>Special</span></div>
                        <img src="{{asset('co/images/eventos/emp.jpg')}}" alt="">
                      </figure>
                      <article class="text-item text-center">
                        <header>
                          <h3><i class="wheel icon-tablet"></i>Cool auto slider</h3>
                        </header>
                        <p>
                          Pellentesque habitant morbi triique senectus et netus et malesuada es ac turpis egestas ersum labilia porc sablium
                        </p>
                        <a href="menu.html">Ver</a>
                      </article>
                    </div>-->
                  </div>
                </div>

                <div class="item">
                  <div class="row-fluid">
                    <div class="span4 dish-item">
                      <header>
                        <h3 class="text-center">Dinner &amp; Dessert Menu</h3>
                      </header>
                      <figure class="border">
                        <img src="{{asset('co/images/content-demo/img5.jpg')}}" alt="">
                      </figure>
                      <article class="text-item text-center">
                        <header>
                          <h3><i class="wheel icon-tablet"></i>Very tasty design</h3>
                        </header>
                        <p>
                          Pellentesque habitant morbi triique senectus et netus et malesuada es ac turpis egestas ersum labilia porc sablium
                        </p>
                        <a href="#">Read more</a>
                      </article>
                    </div>
                    <div class="span4 dish-item">
                      <header>
                        <h3 class="text-center">Lunch Menu</h3>
                      </header>
                      <figure class="border">
                        <img src="{{asset('co/images/content-demo/img4.jpg')}}" alt="">
                      </figure>
                      <article class="text-item text-center">
                        <header>
                          <h3><i class="wheel icon-tablet"></i>Fully Responsive</h3>
                        </header>
                        <p>
                          Pellentesque habitant morbi triique senectus et netus et malesuada es ac turpis egestas ersum labilia porc sablium
                        </p>
                        <a href="#">Read more</a>
                      </article>
                    </div>
                    <div class="span4 dish-item">
                      <header>
                        <h3 class="text-center">Wine &amp; Beverages</h3>
                      </header>
                      <figure class="border">
                        <div class="ribbon special"><span>Special</span></div>
                        <img src="{{asset('co/images/content-demo/img6.jpg')}}" alt="">
                      </figure>
                      <article class="text-item text-center">
                        <header>
                          <h3><i class="wheel icon-tablet"></i>Cool auto slider</h3>
                        </header>
                        <p>
                          Pellentesque habitant morbi triique senectus et netus et malesuada es ac turpis egestas ersum labilia porc sablium
                        </p>
                        <a href="#">Read more</a>
                      </article>
                    </div>
                  </div>
                </div>

                <div class="item">
                  <div class="row-fluid">
                    <div class="span4 dish-item">
                      <header>
                        <h3 class="text-center">Dinner &amp; Dessert Menu</h3>
                      </header>
                      <figure class="border">
                        <img src="{{asset('co/images/content-demo/img5.jpg')}}" alt="">
                      </figure>
                      <article class="text-item text-center">
                        <header>
                          <h3><i class="wheel icon-tablet"></i>Very tasty design</h3>
                        </header>
                        <p>
                          Pellentesque habitant morbi triique senectus et netus et malesuada es ac turpis egestas ersum labilia porc sablium
                        </p>
                        <a href="#">Read more</a>
                      </article>
                    </div>
                    <div class="span4 dish-item">
                      <header>
                        <h3 class="text-center">Lunch Menu</h3>
                      </header>
                      <figure class="border">
                        <img src="{{asset('co/images/content-demo/img4.jpg')}}" alt="">
                      </figure>
                      <article class="text-item text-center">
                        <header>
                          <h3><i class="wheel icon-tablet"></i>Fully Responsive</h3>
                        </header>
                        <p>
                          Pellentesque habitant morbi triique senectus et netus et malesuada es ac turpis egestas ersum labilia porc sablium
                        </p>
                        <a href="#">Read more</a>
                      </article>
                    </div>
                    <div class="span4 dish-item">
                      <header>
                        <h3 class="text-center">Wine &amp; Beverages</h3>
                      </header>
                      <figure class="border">
                        <div class="ribbon special"><span>Special</span></div>
                        <img src="{{asset('co/images/content-demo/img6.jpg')}}" alt="">
                      </figure>
                      <article class="text-item text-center">
                        <header>
                          <h3><i class="wheel icon-tablet"></i>Cool auto slider</h3>
                        </header>
                        <p>
                          Pellentesque habitant morbi triique senectus et netus et malesuada es ac turpis egestas ersum labilia porc sablium
                        </p>
                        <a href="#">Read more</a>
                      </article>
                    </div>
                  </div>
                </div>

              </div> <!-- //carousel inner -->

              <ul class="carousel-nav">
                <li><a class="carousel-control left" href="#menu-carousel" data-position="37" data-slide="prev"><i class="icon-angle-left"></i></a></li>
                <li><a class="carousel-control right" href="#menu-carousel" data-position="37" data-slide="next"><i class="icon-angle-right"></i></a></li>
              </ul>
            </div>


            <header class="combo separator">
              <h3>Latest News</h3>
            </header>

            <div class="latest-blog-posts"> <!-- //latest blog posts -->
              <div class="row-fluid">
                <div class="span3">
                  <article class="item">
                    <header>
                      <h3>Fresh from the blog</h3>
                    </header>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                    </p>
                    <p>
                      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                    </p>
                    <a href="#" class="btn">Read more +</a>
                  </article>
                </div>
                <div class="span3">
                  <article class="item">
                    <figure class="rounded">
                      <img src="{{asset('co/images/content-demo/img20.jpg')}}" alt="">
                    </figure>
                    <header>
                      <h5><a href="#">We have a new chiefcook on board! Say hello to Bob!</a></h5>
                    </header>
                    <p>
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas vestibulum tortor quam ...
                    </p>
                  </article>
                </div>
                <div class="span3">
                  <article class="item">
                    <figure class="rounded">
                      <img src="{{asset('co/images/content-demo/img21.jpg')}}" alt="">
                    </figure>
                    <header>
                      <h5><a href="#">We have a new chiefcook on board! Say hello to Bob!</a></h5>
                    </header>
                    <p>
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas vestibulum tortor quam ...
                    </p>
                  </article>
                </div>
                <div class="span3">
                  <article class="item">
                    <figure class="rounded">
                      <img src="{{asset('co/images/content-demo/img22.jpg')}}" alt="">
                    </figure>
                    <header>
                      <h5><a href="#">We have a new chiefcook on board! Say hello to Bob!</a></h5>
                    </header>
                    <p>
                      Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas vestibulum tortor quam ...
                    </p>
                  </article>
                </div>
              </div>
            </div> <!-- //latest blog posts -->
            
            <div class="separator"></div>

            <header class="combo">
              <h3>Menu of the day</h3>
              <span>13. February, Wednesday</span>
            </header>

            <div class="tab">
              
              <div class="row-fluid">
                <div class="span3">
                  <ul class="nav nav-tabs" id="menu-of-the-day">
                    <li><a href="#tab-monday" data-toggle="tab">Monday</a></li>
                    <li><a href="#tab-tuesday" data-toggle="tab">Tuesday</a></li>
                    <li class="active"><a href="#tab-wednesday" data-toggle="tab">Wednesday</a></li>
                    <li><a href="#tab-thursday" data-toggle="tab">Thursday</a></li>
                    <li><a href="#tab-friday" data-toggle="tab">Friday</a></li>
                    <li><a href="#tab-thursday" data-toggle="tab">Saturday</a></li>
                    <li><a href="#tab-friday" data-toggle="tab">Sunday</a></li>
                  </ul>
                </div>
                  
                <!-- span9 -->
                <div class="span9">

                  <div class="tab-content"> <!-- tab-content -->
                    
                    <div class="tab-pane" id="tab-monday"> <!-- tab -->
                      <div class="row-fluid">
                        <div class="span9">
                          <article>
                            <header>
                              <h4>Starters</h4>
                              <h5>Greek salad with tasty olives</h5>
                            </header>
                            <p class="description">
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                            </p>
                            <footer>
                              <p class="price">only 4,99€</p>
                            </footer>
                          </article>
                        </div>
                        <div class="span3">
                          <figure class="rounded">
                            <img src="{{asset('co/images/content-demo/img7.jpg')}}" alt="">
                          </figure>
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="span9">
                          <article>
                            <header>
                              <h4>Lunch</h4>
                              <h5>Fryed halibut with mustard sauce</h5>
                            </header>
                            <p class="description">
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                            </p>
                            <footer>
                              <p class="price">only 4,99€</p>
                            </footer>
                          </article>
                        </div>
                        <div class="span3">
                          <figure class="rounded">
                            <img src="{{asset('co/images/content-demo/img8.jpg')}}" alt="">
                          </figure>
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="span9">
                          <article>
                            <header>
                              <h4>Dessert</h4>
                              <h5>Creme brullee with cacao powdered figues</h5>
                            </header>
                            <p class="description">
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                            </p>
                            <footer>
                              <p class="price">only 4,99€</p>
                            </footer>
                          </article>
                        </div>
                        <div class="span3">
                          <figure class="rounded">
                            <img src="{{asset('co/images/content-demo/img9.jpg')}}" alt="">
                          </figure>
                        </div>
                      </div>
                    </div> <!-- //tab -->

                    <div class="tab-pane" id="tab-tuesday"> <!-- tab -->
                      <div class="row-fluid">
                        <div class="span9">
                          <article>
                            <header>
                              <h4>Lunch</h4>
                              <h5>Fryed halibut with mustard sauce</h5>
                            </header>
                            <p class="description">
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                            </p>
                            <footer>
                              <p class="price">only 4,99€</p>
                            </footer>
                          </article>
                        </div>
                        <div class="span3">
                          <figure class="rounded">
                            <img src="{{asset('co/images/content-demo/img8.jpg')}}" alt="">
                          </figure>
                        </div>
                      </div>
                        <div class="row-fluid">
                          <div class="span9">
                            <article>
                              <header>
                                <h4>Starters</h4>
                                <h5>Greek salad with tasty olives</h5>
                              </header>
                              <p class="description">
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                              </p>
                              <footer>
                                <p class="price">only 4,99€</p>
                              </footer>
                            </article>
                          </div>
                          <div class="span3">
                            <figure class="rounded">
                              <img src="{{asset('co/images/content-demo/img7.jpg')}}" alt="">
                            </figure>
                          </div>
                        </div>
                      <div class="row-fluid">
                        <div class="span9">
                          <article>
                            <header>
                              <h4>Dessert</h4>
                              <h5>Creme brullee with cacao powdered figues</h5>
                            </header>
                            <p class="description">
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                            </p>
                            <footer>
                              <p class="price">only 4,99€</p>
                            </footer>
                          </article>
                        </div>
                        <div class="span3">
                          <figure class="rounded">
                            <img src="{{asset('co/images/content-demo/img9.jpg')}}" alt="">
                          </figure>
                        </div>
                      </div>
                    </div> <!-- //tab -->

                    <div class="tab-pane active" id="tab-wednesday"> <!-- tab -->
                      <div class="row-fluid">
                        <div class="span9">
                          <article>
                            <header>
                              <h4>Lunch</h4>
                              <h5>Fryed halibut with mustard sauce</h5>
                            </header>
                            <p class="description">
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                            </p>
                            <footer>
                              <p class="price">only 4,99€</p>
                            </footer>
                          </article>
                        </div>
                        <div class="span3">
                          <figure class="rounded">
                            <img src="{{asset('co/images/content-demo/img8.jpg')}}" alt="">
                          </figure>
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="span9">
                          <article>
                            <header>
                              <h4>Dessert</h4>
                              <h5>Creme brullee with cacao powdered figues</h5>
                            </header>
                            <p class="description">
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                            </p>
                            <footer>
                              <p class="price">only 4,99€</p>
                            </footer>
                          </article>
                        </div>
                        <div class="span3">
                          <figure class="rounded">
                            <img src="{{asset('images/content-demo/img9.jpg')}}" alt="">
                          </figure>
                        </div>
                      </div>
                        <div class="row-fluid">
                          <div class="span9">
                            <article>
                              <header>
                                <h4>Starters</h4>
                                <h5>Greek salad with tasty olives</h5>
                              </header>
                              <p class="description">
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                              </p>
                              <footer>
                                <p class="price">only 4,99€</p>
                              </footer>
                            </article>
                          </div>
                          <div class="span3">
                            <figure class="rounded">
                              <img src="{{asset('images/content-demo/img7.jpg')}}" alt="">
                            </figure>
                          </div>
                        </div>
                    </div> <!-- //tab -->

                    <div class="tab-pane" id="tab-thursday"> <!-- tab -->
                        <div class="row-fluid">
                          <div class="span9">
                            <article>
                              <header>
                                <h4>Lunch</h4>
                                <h5>Fryed halibut with mustard sauce</h5>
                              </header>
                              <p class="description">
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                              </p>
                              <footer>
                                <p class="price">only 4,99€</p>
                              </footer>
                            </article>
                          </div>
                          <div class="span3">
                            <figure class="rounded">
                              <img src="{{asset('co/images/content-demo/img8.jpg')}}" alt="">
                            </figure>
                          </div>
                        </div>
                      <div class="row-fluid">
                        <div class="span9">
                          <article>
                            <header>
                              <h4>Starters</h4>
                              <h5>Greek salad with tasty olives</h5>
                            </header>
                            <p class="description">
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                            </p>
                            <footer>
                              <p class="price">only 4,99€</p>
                            </footer>
                          </article>
                        </div>
                        <div class="span3">
                          <figure class="rounded">
                            <img src="{{asset('co/images/content-demo/img7.jpg')}}" alt="">
                          </figure>
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="span9">
                          <article>
                            <header>
                              <h4>Dessert</h4>
                              <h5>Creme brullee with cacao powdered figues</h5>
                            </header>
                            <p class="description">
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                            </p>
                            <footer>
                              <p class="price">only 4,99€</p>
                            </footer>
                          </article>
                        </div>
                        <div class="span3">
                          <figure class="rounded">
                            <img src="{{asset('co/images/content-demo/img9.jpg')}}" alt="">
                          </figure>
                        </div>
                      </div>
                    </div> <!-- //tab -->

                    <div class="tab-pane" id="tab-friday"> <!-- tab -->
                      <div class="row-fluid">
                        <div class="span9">
                          <article>
                            <header>
                              <h4>Starters</h4>
                              <h5>Greek salad with tasty olives</h5>
                            </header>
                            <p class="description">
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                            </p>
                            <footer>
                              <p class="price">only 4,99€</p>
                            </footer>
                          </article>
                        </div>
                        <div class="span3">
                          <figure class="rounded">
                            <img src="{{asset('co/images/content-demo/img8.jpg')}}" alt="">
                          </figure>
                        </div>
                      </div>
                        <div class="row-fluid">
                          <div class="span9">
                            <article>
                              <header>
                                <h4>Dessert</h4>
                                <h5>Creme brullee with cacao powdered figues</h5>
                              </header>
                              <p class="description">
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                              </p>
                              <footer>
                                <p class="price">only 4,99€</p>
                              </footer>
                            </article>
                          </div>
                          <div class="span3">
                            <figure class="rounded">
                              <img src="{{asset('co/images/content-demo/img9.jpg')}}" alt="">
                            </figure>
                          </div>
                        </div>
                      <div class="row-fluid">
                        <div class="span9">
                          <article>
                            <header>
                              <h4>Lunch</h4>
                              <h5>Fryed halibut with mustard sauce</h5>
                            </header>
                            <p class="description">
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                            </p>
                            <footer>
                              <p class="price">only 4,99€</p>
                            </footer>
                          </article>
                        </div>
                        <div class="span3">
                          <figure class="rounded">
                            <img src="{{asset('co/images/content-demo/img7.jpg')}}" alt="">
                          </figure>
                        </div>
                      </div>
                    </div> <!-- //tab -->

                    <div class="tab-pane" id="tab-saturday"> <!-- tab -->
                      <div class="row-fluid">
                        <div class="span9">
                          <article>
                            <header>
                              <h4>Lunch</h4>
                              <h5>Fryed halibut with mustard sauce</h5>
                            </header>
                            <p class="description">
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                            </p>
                            <footer>
                              <p class="price">only 4,99€</p>
                            </footer>
                          </article>
                        </div>
                        <div class="span3">
                          <figure class="rounded">
                            <img src="{{asset('co/images/content-demo/img8.jpg')}}" alt="">
                          </figure>
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="span9">
                          <article>
                            <header>
                              <h4>Dessert</h4>
                              <h5>Creme brullee with cacao powdered figues</h5>
                            </header>
                            <p class="description">
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                            </p>
                            <footer>
                              <p class="price">only 4,99€</p>
                            </footer>
                          </article>
                        </div>
                        <div class="span3">
                          <figure class="rounded">
                            <img src="{{asset('co/images/content-demo/img9.jpg')}}" alt="">
                          </figure>
                        </div>
                      </div>
                        <div class="row-fluid">
                          <div class="span9">
                            <article>
                              <header>
                                <h4>Starters</h4>
                                <h5>Greek salad with tasty olives</h5>
                              </header>
                              <p class="description">
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                              </p>
                              <footer>
                                <p class="price">only 4,99€</p>
                              </footer>
                            </article>
                          </div>
                          <div class="span3">
                            <figure class="rounded">
                              <img src="{{asset('co/images/content-demo/img7.jpg')}}" alt="">
                            </figure>
                          </div>
                        </div>
                    </div> <!-- //tab -->

                    <div class="tab-pane" id="tab-sunday"> <!-- tab -->
                      <div class="row-fluid">
                        <div class="span9">
                          <article>
                            <header>
                              <h4>Starters</h4>
                              <h5>Greek salad with tasty olives</h5>
                            </header>
                            <p class="description">
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                            </p>
                            <footer>
                              <p class="price">only 4,99€</p>
                            </footer>
                          </article>
                        </div>
                        <div class="span3">
                          <figure class="rounded">
                            <img src="{{asset('co/images/content-demo/img7.jpg')}}" alt="">
                          </figure>
                        </div>
                      </div>
                      <div class="row-fluid">
                        <div class="span9">
                          <article>
                            <header>
                              <h4>Dessert</h4>
                              <h5>Creme brullee with cacao powdered figues</h5>
                            </header>
                            <p class="description">
                              Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                            </p>
                            <footer>
                              <p class="price">only 4,99€</p>
                            </footer>
                          </article>
                        </div>
                        <div class="span3">
                          <figure class="rounded">
                            <img src="{{asset('co/images/content-demo/img9.jpg')}}" alt="">
                          </figure>
                        </div>
                      </div>
                        <div class="row-fluid">
                          <div class="span9">
                            <article>
                              <header>
                                <h4>Lunch</h4>
                                <h5>Fryed halibut with mustard sauce</h5>
                              </header>
                              <p class="description">
                                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                              </p>
                              <footer>
                                <p class="price">only 4,99€</p>
                              </footer>
                            </article>
                          </div>
                          <div class="span3">
                            <figure class="rounded">
                              <img src="{{asset('co/images/content-demo/img8.jpg')}}" alt="">
                            </figure>
                          </div>
                        </div>
                    </div> <!-- //tab -->

                  </div> <!-- // tab-content -->

                </div>
                <!-- //span9 -->
              </div>

            </div>

          </section><!--END HOME-->

          
 
@stop

