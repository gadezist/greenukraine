<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="csrf-token" content="{{ csrf_token() }}">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
       <title>{{ config('app.name', 'Laravel') }}</title>

      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">

       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
{{--       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>--}}

       @vite(['resources/css/app.css'])

       <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
       <link rel="stylesheet" href="https://unpkg.com/leaflet-draw/dist/leaflet.draw.css" />


{{--       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>--}}
{{--      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
{{--      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>--}}
       <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js" integrity="sha512-ozq8xQKq6urvuU6jNgkfqAmT7jKN2XumbrX1JiB3TnF7tI48DPI4Gy1GXKD/V3EExgAs1V+pRO7vwtS1LHg0Gw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


       <!-- Load fonts style after rendering the layout styles -->
       <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">

       <!-- Fonts -->
       <link rel="preconnect" href="https://fonts.bunny.net">
       <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

       @yield('header_scripts')
       <!-- Scripts -->
       @vite([
                'resources/css/app.css',
               'resources/js/app.js',
               "resources/css/main_layout/bootstrap.min.css",
               "resources/css/main_layout/style.css",
               "resources/css/main_layout/responsive.css",
               ])

       <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src={{ asset("images/loading.gif") }} alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->

      <header>
          @include('layouts.navigation')
         <div class="header">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class=" col-md-2 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="{{ route('about') }}"><img src={{ asset("images/logo.png") }} alt="#" /></a>
                               <a href="{{ route('index') }}">
                                   <h1 class="text-green-700">Green Ukraine</h1>
                               </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-8 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{ route('about') }}">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('map') }}">Map</a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('partners') }}">Partners</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('actual') }}">Actual</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-md-2 d_none">
                     <ul class="email text_align_right">
                        <li> <a href="Javascript:void(0)"> Login </a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header -->
      <!-- start slider section -->
      <div id="top_section" class=" banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>Creative  <br>Work Idea </h1>
                                    <p>There are many variations of passages of Lorem Ipsum <br>available, but the majority have suffered alteration
                                    </p>
                                    <a class="read_more" href="about.html">About Company </a><a class="read_more" href="contact.html">Contact </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>Creative  <br>Work Idea </h1>
                                    <p>There are many variations of passages of Lorem Ipsum <br>available, but the majority have suffered alteration
                                    </p>
                                    <a class="read_more" href="about.html">About Company </a><a class="read_more" href="contact.html">Contact </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>Creative  <br>Work Idea </h1>
                                    <p>There are many variations of passages of Lorem Ipsum <br>available, but the majority have suffered alteration
                                    </p>
                                    <a class="read_more" href="about.html">About Company </a><a class="read_more" href="contact.html">Contact </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>Creative  <br>Work Idea </h1>
                                    <p>There are many variations of passages of Lorem Ipsum <br>available, but the majority have suffered alteration
                                    </p>
                                    <a class="read_more" href="about.html">About Company </a><a class="read_more" href="contact.html">Contact </a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end slider section -->
      <!-- we_do -->
      <div class="we_do">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>What we do </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="we1" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#we1" data-slide-to="0" class="active"></li>
                        <li data-target="#we1" data-slide-to="1"></li>
                        <li data-target="#we1" data-slide-to="2"></li>
                        <li data-target="#we1" data-slide-to="3"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption we1_do">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="images/we1.png" alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="images/we1.png" alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="images/we1.png" alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption we1_do">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="images/we1.png" alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="images/we2.png" alt="#"/></i>
                                          <h3>App <br>development</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="images/we3.png" alt="#"/></i>
                                          <h3>website <br>design</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption we1_do">
                                 <div class="row">
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="images/we1.png" alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="images/we1.png" alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                    <div class="col-md-4">
                                       <div id="bo_ho" class="we_box text_align_left">
                                          <i><img src="images/we1.png" alt="#"/></i>
                                          <h3>website <br>development</h3>
                                          <p>many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which
                                          </p>
                                          <a class="read_more" href="we_do">Read More</a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#we1" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#we1" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end we_do -->
      <!-- about -->
      <div class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center">
                     <h2>About Company</h2>
                     <p>There are many variations of passages of Lorem Ipsum available, but the majority have </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- portfolio -->
      <div class="portfolio">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <h2>We Have Done Portfolio  </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <div id="ho_nf" class="portfolio_main text_align_left">
                     <figure>
                        <img src="images/prot1.png" alt="#"/>
                        <div class="portfolio_text">
                           <div class="li_icon">
                              <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                              <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>
                           </div>
                           <h3>Carrency Dashbord</h3>
                           <p>There are many variations of passages of Lorem Ipsum available, but the majoraity have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                        </div>
                     </figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div id="ho_nf" class="portfolio_main text_align_left">
                     <figure>
                        <img src="images/prot2.png" alt="#"/>
                        <div class="portfolio_text">
                           <div class="li_icon">
                              <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                              <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>
                           </div>
                           <h3>Carrency Dashbord</h3>
                           <p>There are many variations of passages of Lorem Ipsum available, but the majoraity have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                        </div>
                     </figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div id="ho_nf" class="portfolio_main text_align_left">
                     <figure>
                        <img src="images/prot3.png" alt="#"/>
                        <div class="portfolio_text">
                           <div class="li_icon">
                              <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                              <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>
                           </div>
                           <h3>Carrency Dashbord</h3>
                           <p>There are many variations of passages of Lorem Ipsum available, but the majoraity have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                        </div>
                     </figure>
                  </div>
               </div>
               <div class="col-md-6">
                  <div id="ho_nf" class="portfolio_main text_align_left">
                     <figure>
                        <img src="images/prot4.png" alt="#"/>
                        <div class="portfolio_text">
                           <div class="li_icon">
                              <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                              <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>
                           </div>
                           <h3>Carrency Dashbord</h3>
                           <p>There are many variations of passages of Lorem Ipsum available, but the majoraity have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>
                        </div>
                     </figure>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="portfolio.html">See More</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end portfolio -->
      <!-- chose -->
      <div class="chose">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-12">
                  <div class="titlepage text_align_left">
                     <h2>Why Chose us</h2>
                  </div>
               </div>
               <div class="col-lg-5 col-md-4">
                  <div class="chose_box">
                     <i><img src="images/chose1.png" alt="#"/></i>
                     <h3>Project Done </h3>
                     <strong>1000+</strong>
                     <a class="read_more" href="Javascript:void(0)">Read More</a>
                  </div>
               </div>
               <div class="col-lg-5 col-md-4">
                  <div class="chose_box">
                     <i><img src="images/chose2.png" alt="#"/></i>
                     <h3>Happy Clients </h3>
                     <strong>900+</strong>
                     <a class="read_more" href="Javascript:void(0)">Read More</a>
                  </div>
               </div>
               <div class="col-lg-2 col-md-4">
                  <div class="chose_box">
                     <i><img src="images/chose3.png" alt="#"/></i>
                     <h3>Awards</h3>
                     <strong>100+</strong>
                     <a class="read_more" href="Javascript:void(0)">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end chose -->
      <!-- contact -->
      <div class="contact">
         <div class="container">
            <div class="row ">
               <div class="col-md-6">
                  <div class="titlepage text_align_left">
                     <h2>Get In Touch</h2>
                  </div>
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Name" type="type" name=" Name">
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email">
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Message" type="type" Message="Name"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send Now</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="titlepage text_align_left">
                     <h2>What Says Clients</h2>
                  </div>
                  <div id="clientsl" class="carousel slide our_clientsl" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#clientsl" data-slide-to="0" class="active"></li>
                        <li data-target="#clientsl" data-slide-to="1"></li>
                        <li data-target="#clientsl" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="clientsl_text">
                                    <i><img src="images/clint.jpg" alt="#"/></i>
                                    <h3>Deno <img src="images/icon.png" alt="#"/></h3>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem IpsumIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="clientsl_text">
                                    <i><img src="images/clint.jpg" alt="#"/></i>
                                    <h3>Deno <img src="images/icon.png" alt="#"/></h3>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem IpsumIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption posi_in">
                                 <div class="clientsl_text">
                                    <i><img src="images/clint.jpg" alt="#"/></i>
                                    <h3>Deno <img src="images/icon.png" alt="#"/></h3>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem IpsumIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#clientsl" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#clientsl" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact -->
      <!-- footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-3">
                     <a class="logo_footer" href="index.html"><img src="{{ asset('images/logo_footer.png') }}" alt="#" /></a>
                  </div>
                  <div class="col-md-9">
                     <form class="newslatter_form">
                        <input class="ente" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="subs_btn">Sbscribe Now</button>
                     </form>
                  </div>
                  <div class="col-md-3 col-sm-6"
                  >
                     <div class="Informa helpful">
                        <h3>Useful  Link</h3>
                        <ul>
                           <li><a href="index.html">Home</a></li>
                           <li><a href="about.html">About</a></li>
                           <li><a href="we_do.html">What we do</a></li>
                           <li><a href="portfolio.html">Portfolio</a></li>
                           <li><a href="contact.html">Contact us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa">
                        <h3>News</h3>
                        <ul>
                           <li>It is a long established
                           </li>
                           <li>fact that a reader will
                           </li>
                           <li>be distracted by the
                           </li>
                           <li>readable content of a
                           </li>
                           <li>page when
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa">
                        <h3>company</h3>
                        <ul>
                           <li>It is a long established
                           </li>
                           <li>fact that a reader will
                           </li>
                           <li>be distracted by the
                           </li>
                           <li>readable content of a
                           </li>
                           <li>page when
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="Informa conta">
                        <h3>contact Us</h3>
                        <ul>
                           <li> <a href="Javascript:void(0)"> <i class="fa fa-map-marker" aria-hidden="true"></i> Location
                              </a>
                           </li>
                           <li> <a href="Javascript:void(0)"><i class="fa fa-phone" aria-hidden="true"></i> Call +01 1234567890
                              </a>
                           </li>
                           <li> <a href="Javascript:void(0)"> <i class="fa fa-envelope" aria-hidden="true"></i> demo@gmail.com
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright text_align_left">
               <div class="container">
                  <div class="row d_flex">
                     <div class="col-md-6">
                        <p>© 2020 All Rights Reserved.  <a href="https://html.design/"> Free Html Template</a></p>
                     </div>
{{--                     <div class="col-md-6">--}}
{{--                        <ul class="social_icon text_align_center">--}}
{{--                           <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>--}}
{{--                           <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>--}}
{{--                           <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>--}}
{{--                           <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>--}}
{{--                           <li> <a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>--}}
{{--                        </ul>--}}
{{--                     </div>--}}
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('js/custom.js') }}"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

      @yield('footer_scripts')
   </body>
</html>
