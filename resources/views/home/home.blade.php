<x-app-layout>
    @section('css_section')
        @vite(["resources/css/main_layout/about.css"])
    @endsection
    <!-- start slider section -->
    <div id="top_section" class=" banner_main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="bluid">
                                            <h1 style="color: white">SAVE UKRAINIAN<br style="color: darkgreen">LANDS TODAY</h1>
                                            <p style="color: white; font-size: 24px">Over 50,000 square kilometers of Ukraine's agricultural soils are damaged by war</p>
                                            <a class="read_more" href="#about">About</a><a class="read_more" href="{{ route('actual') }}">Actual</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="container-fluid">
                                    <div class="carousel-caption relative">
                                        <div class="bluid">
                                            <h1 style="color: white">FOR PLANET`S<br style="color: darkgreen">GREENER TOMORROW</h1>
                                            <p style="color: white; font-size: 24px">We must restore our lands, safeguarding the planet's future</p>
                                            <a class="read_more" href="{{ route('map') }}">Map</a><a class="read_more" href="{{ route('team') }}">Team</a>
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

    <!-- about -->
    <div id="about" class="about" style="height: 100% !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2 class="text-center mb-4">About Us</h2>
                        <p>The Green Ukraine project takes on one of the most extensive and ambitious ecological challenges of our time: the research, analysis, and systematization of the war-damaged agricultural lands of Ukraine, and the development of restoration methods for these lands.</p>

                        <p>Ukraine stands out on the European map with its unique agricultural potential, possessing some of the most fertile soils in the world. This makes Ukraine a key global agro-exporter of wheat, barley, corn, and sunflower seeds feeding millions of people all over the globe, especially in Asia and Africa, where the threat of hunger reaches critical levels.</p>
                        <img src="{{ asset('about') }}" alt="">
                        <p>However, as a result of the Russian military invasion, Ukraine's biosphere including air, water, land, and soils have suffered catastrophic damage, which many refer to as “ecocide”. It not only threatens food security but also contributes significantly to global climate change, undermining the efforts of the international community to mitigate climate change. Over five million hectares of agricultural land have suffered from physical damage, biodiversity disruptions, and the impact of organic and chemical substances, leading to soil degradation and jeopardizing their future fertility.</p>
                        <img src="{{ asset('about') }}" alt="">
                        <p>Our mission is simple: we want to understand how Ukraine's farmlands have been hurt by war and figure out the best ways to heal them.</p>

                        <p>Within our project, we conduct analyses of the soil's chemical composition, study the dynamics of these changes, and create a database for soil analysis in our <a href="{{ route('map') }}">Map page.</a> Special attention will be given to developing remediation techniques and exploring the potential for carbon sequestration in the most affected areas.</p>

                        <p>We're tackling huge challenges, unlike anything before. In the world today, there's no playbook or prior scientific experience for rehabilitating agricultural lands damaged by war on such a scale, meaning we're charting new territory with every step.</p>
                        <img src="{{ asset('about') }}" alt="">
                        <p>To make a real difference, we believe in joining forces with the best minds around the world. This means teaming up with leading scientists, governments, NGOs, the hardworking farmers of Ukraine, private businesses, and anyone else who wants to help. It's your chance to be part of something big. It's your chance to be part of something groundbreaking!</p>
                        <p><span class="bold-text">For Scientists, Researchers and Laboratories:</span> Share your expertise in soil science, ecology, or data analysis. We’re particularly interested in innovative approaches to land rehabilitation and carbon sequestration.<br>
                            <span class="bold-text">For Governments and NGOs:</span> Partner with us to implement policies and initiatives that support sustainable agricultural practices and land restoration. Your advocacy and funding can propel our efforts forward.<br>
                            <span class="bold-text">For Ukrainian Farmers:</span> Your firsthand experience is invaluable. Join our network to share insights, participate in soil health monitoring, and implement restoration techniques on your lands.<br>
                            <span class="bold-text">For Private Companies:</span> Invest in sustainability by supporting our project financially or through services. Whether it's technology, resources, or expertise, your contribution can make a significant impact.<br>
                            <span class="bold-text">For Volunteers and Global Citizens:</span> Help us spread the word, raise awareness, and mobilize resources. Every effort counts, from social media advocacy to fundraising.</p>
                        <p class="extbold-text "><a href="{{ route('contact') }}">Join our initiative and help us face these challenges together!</a></p>
                        <p>Initiated in Switzerland with support from ETH Zurich and Bern University of Applied Sciences as part of the CAS Rebuild Ukraine program, our project aims to make a significant contribution to global efforts in ecosystem restoration and combating the climate crisis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end about -->
    <!-- portfolio -->
{{--    <div class="portfolio">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="titlepage text_align_left">--}}
{{--                        <h2>We Have Done Portfolio  </h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div id="ho_nf" class="portfolio_main text_align_left">--}}
{{--                        <figure>--}}
{{--                            <img src="images/prot1.png" alt="#"/>--}}
{{--                            <div class="portfolio_text">--}}
{{--                                <div class="li_icon">--}}
{{--                                    <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>--}}
{{--                                    <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>--}}
{{--                                </div>--}}
{{--                                <h3>Carrency Dashbord</h3>--}}
{{--                                <p>There are many variations of passages of Lorem Ipsum available, but the majoraity have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>--}}
{{--                            </div>--}}
{{--                        </figure>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div id="ho_nf" class="portfolio_main text_align_left">--}}
{{--                        <figure>--}}
{{--                            <img src="images/prot2.png" alt="#"/>--}}
{{--                            <div class="portfolio_text">--}}
{{--                                <div class="li_icon">--}}
{{--                                    <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>--}}
{{--                                    <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>--}}
{{--                                </div>--}}
{{--                                <h3>Carrency Dashbord</h3>--}}
{{--                                <p>There are many variations of passages of Lorem Ipsum available, but the majoraity have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>--}}
{{--                            </div>--}}
{{--                        </figure>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div id="ho_nf" class="portfolio_main text_align_left">--}}
{{--                        <figure>--}}
{{--                            <img src="images/prot3.png" alt="#"/>--}}
{{--                            <div class="portfolio_text">--}}
{{--                                <div class="li_icon">--}}
{{--                                    <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>--}}
{{--                                    <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>--}}
{{--                                </div>--}}
{{--                                <h3>Carrency Dashbord</h3>--}}
{{--                                <p>There are many variations of passages of Lorem Ipsum available, but the majoraity have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>--}}
{{--                            </div>--}}
{{--                        </figure>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div id="ho_nf" class="portfolio_main text_align_left">--}}
{{--                        <figure>--}}
{{--                            <img src="images/prot4.png" alt="#"/>--}}
{{--                            <div class="portfolio_text">--}}
{{--                                <div class="li_icon">--}}
{{--                                    <a href="Javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>--}}
{{--                                    <a href="Javascript:void(0)"><i class="fa fa-link" aria-hidden="true"></i></a>--}}
{{--                                </div>--}}
{{--                                <h3>Carrency Dashbord</h3>--}}
{{--                                <p>There are many variations of passages of Lorem Ipsum available, but the majoraity have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</p>--}}
{{--                            </div>--}}
{{--                        </figure>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-md-12">--}}
{{--                    <a class="read_more" href="portfolio.html">See More</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- end portfolio -->
    <!-- chose -->
{{--    <div class="chose">--}}
{{--        <div class="container">--}}
{{--            <div class="row d_flex">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="titlepage text_align_left">--}}
{{--                        <h2>Why Chose us</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-5 col-md-4">--}}
{{--                    <div class="chose_box">--}}
{{--                        <i><img src="images/chose1.png" alt="#"/></i>--}}
{{--                        <h3>Project Done </h3>--}}
{{--                        <strong>1000+</strong>--}}
{{--                        <a class="read_more" href="Javascript:void(0)">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-5 col-md-4">--}}
{{--                    <div class="chose_box">--}}
{{--                        <i><img src="images/chose2.png" alt="#"/></i>--}}
{{--                        <h3>Happy Clients </h3>--}}
{{--                        <strong>900+</strong>--}}
{{--                        <a class="read_more" href="Javascript:void(0)">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-2 col-md-4">--}}
{{--                    <div class="chose_box">--}}
{{--                        <i><img src="images/chose3.png" alt="#"/></i>--}}
{{--                        <h3>Awards</h3>--}}
{{--                        <strong>100+</strong>--}}
{{--                        <a class="read_more" href="Javascript:void(0)">Read More</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- end chose -->
    <!-- contact -->
{{--    <div class="contact">--}}
{{--        <div class="container">--}}
{{--            <div class="row ">--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="titlepage text_align_left">--}}
{{--                        <h2>Get In Touch</h2>--}}
{{--                    </div>--}}
{{--                    <form id="request" class="main_form">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-12">--}}
{{--                                <input class="contactus" placeholder="Name" type="type" name=" Name">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-12">--}}
{{--                                <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-12">--}}
{{--                                <input class="contactus" placeholder="Email" type="type" name="Email">--}}
{{--                            </div>--}}
{{--                            <div class="col-md-12">--}}
{{--                                <textarea class="textarea" placeholder="Message" type="type" Message="Name"></textarea>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-12">--}}
{{--                                <button class="send_btn">Send Now</button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--                <div class="col-md-6">--}}
{{--                    <div class="titlepage text_align_left">--}}
{{--                        <h2>What Says Clients</h2>--}}
{{--                    </div>--}}
{{--                    <div id="clientsl" class="carousel slide our_clientsl" data-ride="carousel">--}}
{{--                        <ol class="carousel-indicators">--}}
{{--                            <li data-target="#clientsl" data-slide-to="0" class="active"></li>--}}
{{--                            <li data-target="#clientsl" data-slide-to="1"></li>--}}
{{--                            <li data-target="#clientsl" data-slide-to="2"></li>--}}
{{--                        </ol>--}}
{{--                        <div class="carousel-inner">--}}
{{--                            <div class="carousel-item active">--}}
{{--                                <div class="container">--}}
{{--                                    <div class="carousel-caption posi_in">--}}
{{--                                        <div class="clientsl_text">--}}
{{--                                            <i><img src="images/clint.jpg" alt="#"/></i>--}}
{{--                                            <h3>Deno <img src="images/icon.png" alt="#"/></h3>--}}
{{--                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem IpsumIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item">--}}
{{--                                <div class="container">--}}
{{--                                    <div class="carousel-caption posi_in">--}}
{{--                                        <div class="clientsl_text">--}}
{{--                                            <i><img src="images/clint.jpg" alt="#"/></i>--}}
{{--                                            <h3>Deno <img src="images/icon.png" alt="#"/></h3>--}}
{{--                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem IpsumIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="carousel-item">--}}
{{--                                <div class="container">--}}
{{--                                    <div class="carousel-caption posi_in">--}}
{{--                                        <div class="clientsl_text">--}}
{{--                                            <i><img src="images/clint.jpg" alt="#"/></i>--}}
{{--                                            <h3>Deno <img src="images/icon.png" alt="#"/></h3>--}}
{{--                                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem IpsumIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <a class="carousel-control-prev" href="#clientsl" role="button" data-slide="prev">--}}
{{--                            <i class="fa fa-angle-left" aria-hidden="true"></i>--}}
{{--                            <span class="sr-only">Previous</span>--}}
{{--                        </a>--}}
{{--                        <a class="carousel-control-next" href="#clientsl" role="button" data-slide="next">--}}
{{--                            <i class="fa fa-angle-right" aria-hidden="true"></i>--}}
{{--                            <span class="sr-only">Next</span>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- contact -->

    @section('footer')
        @include('layouts.footer')
    @endsection
</x-app-layout>


