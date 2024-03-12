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
    ])

    @endsection

    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>About Us</h2>
                        <p>Our project takes on one of the most extensive and ambitious challenges of our time: the research, analysis, and systematization of the war-damaged agricultural lands of Ukraine, and the development of remediation methods for these lands.</p>

                        <p>Ukraine stands out on the European map with its unique agricultural potential, possessing some of the most fertile soils in the world. This feature establishes it as a key global agro-exporter, feeding people all over the globe, especially in Asia and Africa, where the threat of hunger reaches critical levels. However, as a result of Russian military actions, Ukraine's biosphere and soils have suffered catastrophic damage, which not only threatens food security but also contributes significantly to global climate change, undermining the efforts of the international community to mitigate climate change.</p>

                        <p>Over five million hectares of agricultural land have suffered from physical damage, biodiversity disruptions, and the impact of organic and chemical substances, leading to soil degradation and jeopardizing their future fertility. Within our project, we conduct analyses of the soil's chemical composition, study the dynamics of these changes, and create a database for soil analysis. Special attention is given to developing remediation techniques and exploring the potential for carbon sequestration in the most affected areas.</p>

                        <p>Faced with an unprecedented scale of challenges, we see the vital need for global teamwork with top scientific bodies, government and NGO partners, Ukrainian farmers, private companies, and other stakeholders.</p>

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
                    <div class="col-md-4">
                        <div class="why_container">
                            <div class="box">
                                <div class="img-box">
                                    <a href="https://ethz.ch/en.html" target="_blank">
                                        <img style="width: 220px" class="" src={{ asset("images/partners_team/ETH_Zurich_Logo.png") }} alt="ETH Zürich" />
                                    </a>
                                </div>
                                <div class="detail-box">
{{--                                    <h5>--}}
{{--                                        ETH Zürich--}}
{{--                                    </h5>--}}
{{--                                    <p>--}}
{{--                                        Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.--}}
{{--                                    </p>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="why_container">
                            <div class="box">
                                <div class="img-box">
                                    <a href="https://www.bfh.ch/en/" target="_blank">
                                        <img style="width: 220px" src={{ asset("images/partners_team/BFH_Logo.png") }} alt="BFH" />
                                    </a>
                                </div>
                                <div class="detail-box">
{{--                                    <h5>--}}
{{--                                        Bern University of Applied Sciences--}}
{{--                                    </h5>--}}
{{--                                    <p>--}}
{{--                                        Incidunt odit rerum tenetur alias architecto asperiores omnis cumque doloribus aperiam numquam! Eligendi corrupti, molestias laborum dolores quod nisi vitae voluptate ipsa? In tempore voluptate ducimus officia id, aspernatur nihil.--}}
{{--                                    </p>--}}
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
