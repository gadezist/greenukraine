<x-app-layout>
    @section('css_section')
        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

        <!--owl slider stylesheet -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

        @vite([
            "resources/css/main_layout/partners_team/font-awesome.min.css",
            "resources/css/main_layout/partners_team/style.css",
            "resources/css/main_layout/partners_team/responsive.css",
            "resources/css/main_layout/about.css",
    ])

    @endsection

    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2 class="text-center mb-4">About Us</h2>
                        <p>The Green Ukraine project takes on one of the most extensive and ambitious ecological challenges of our time: the research, analysis, and systematization of the war-damaged agricultural lands of Ukraine, and the development of restoration methods for these lands.</p>

                        <p>Ukraine stands out on the European map with its unique agricultural potential, possessing some of the most fertile soils in the world. This makes Ukraine a key global agro-exporter of wheat, barley, corn, and sunflower seeds feeding millions of people all over the globe, especially in Asia and Africa, where the threat of hunger reaches critical levels.</p>
                        <figure>
                            <img src="{{ asset('images/about/peter-kleinau.jpg') }}" alt="">
                            <figcaption>Photo of Ukraine by Peter Kleinau</figcaption>
                        </figure>
                        <p>However, as a result of the Russian military invasion, Ukraine's biosphere including air, water, land, and soils have suffered catastrophic damage, which many refer to as “ecocide”. It not only threatens food security but also contributes significantly to global climate change, undermining the efforts of the international community to mitigate climate change. Over five million hectares of agricultural land have suffered from physical damage, biodiversity disruptions, and the impact of organic and chemical substances, leading to soil degradation and jeopardizing their future fertility.</p>
                        <figure>
                            <img src="{{ asset('images/about/dominik-kiss.jpg') }}" alt="">
                            <figcaption>Photo by Dominik Kiss</figcaption>
                        </figure>
                        <p>Our mission is simple: we want to understand how Ukraine's farmlands have been hurt by war and figure out the best ways to heal them.</p>
                        <p>Within our project, we conduct analyses of the soil's chemical composition, study the dynamics of these changes, and create a database for soil analysis in our <a href="{{ route('map') }}">Map page.</a> Special attention will be given to developing remediation techniques and exploring the potential for carbon sequestration in the most affected areas.</p>
                        <p>We're tackling huge challenges, unlike anything before. In the world today, there's no playbook or prior scientific experience for rehabilitating agricultural lands damaged by war on such a scale, meaning we're charting new territory with every step.</p>
                        <figure>
                            <img src="{{ asset('images/about/Rau-11.jpg') }}" alt="">
                            <figcaption>Scientists of Zurich ETH, Ukrainian SNAU and UK RAU studying the soil samples. Photo by Olena Melnyk</figcaption>
                        </figure>
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

    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2 style="color: #000">
                    Our <span>Partners</span>
                </h2>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-2">
                    <div class="why_container">
                        <div class="box">
                            <div class="img-box">
                                <a href="https://snau.edu.ua/" target="_blank">
                                    <img style="width: 260px" class="" src={{ asset("images/partners_team/SNAU_logo.png") }} alt="Sumy National Agrarian University" />
                                </a>
                            </div>
                            <div class="detail-box">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="why_container">
                        <div class="box">
                            <div class="img-box">
                                <a href="https://www.rau.ac.uk/" target="_blank">
                                    <img style="width: 260px" class="" src={{ asset("images/partners_team/RAU_logo.png") }} alt="Royal Agricultural University" />
                                </a>
                            </div>
                            <div class="detail-box">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="why_container">
                        <div class="box">
                            <div class="img-box">
                                <a href="https://ethz.ch/en.html" target="_blank">
                                    <img style="width: 260px" class="" src={{ asset("images/partners_team/ETH_Zurich_Logo.png") }} alt="ETH Zürich" />
                                </a>
                            </div>
                            <div class="detail-box">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="why_container">
                        <div class="box">
                            <div class="img-box">
                                <a href="https://www.bfh.ch/en/" target="_blank">
                                    <img style="width: 260px" src={{ asset("images/partners_team/BFH_Logo.png") }} alt="BFH" />
                                </a>
                            </div>
                            <div class="detail-box">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="why_container">
                        <div class="box">
                            <div class="img-box">
                                <a href="https://www.returnassociation.org/" target="_blank">
                                    <img style="width: 200px" src={{ asset("images/partners_team/Logo_Return.png") }} alt="BFH" />
                                </a>
                            </div>
                            <div class="detail-box">
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </section>

    @section('footer')
        @include('layouts.footer')
    @endsection
</x-app-layout>
