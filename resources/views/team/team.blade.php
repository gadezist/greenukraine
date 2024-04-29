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
    <section class="team_section layout_padding">
        <div class="container-fluid">
            <div class="heading_container heading_center">
                <h2 class="">
                    Implementation <span> Team</span>
                </h2>
            </div>

            <div class="team_container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6 team">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/Evgen_Getman.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Yevgen Getman
                                </h5>
                            </div>
                            <div class="social_box">
                                <a href="mailto:yevgen.getman@students.bfh.ch">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="http://linkedin.com/in/yevgen-getman-2a42b327b" target="_blank">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 team">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/Yevheniia_Kozyr.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Yevheniia Kozyr
                                </h5>
                            </div>
                            <div class="social_box">
                                <a href="mailto:yevheniia.kozyr@students.bfh.ch">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/yevheniia-kozyr-9084a2146/" target="_blank">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 team">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/Galyna_Chos.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Galyna Chos
                                </h5>
                            </div>
                            <div class="social_box">
                                <a href="mailto:galyna.chos@students.bfh.ch">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/galyna-chos-9a9b407b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 team">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/Igor_Storchak.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Igor Storchak
                                </h5>
                            </div>
                            <div class="social_box">
                                <a href="mailto:igor.storchak@students.bfh.ch">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="http://linkedin.com/in/igor-storchak-17530120" target="_blank">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-top: 5rem">
            <div class="heading_container heading_center">
                <h2 class="">
                    Research <span> Team</span>
                </h2>
            </div>

            <div class="team_container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6 team">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/Olena_Melnyk.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box" style="margin-bottom: 0">
                                <h5>
                                    Dr. Olena Melnyk
                                </h5>
                                <p>ETH Zürich</p>
                            </div>
                            <div class="social_box">
                                <a href="mailto:olena.melnyk@usys.ethz.ch">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/olena-melnyk-4793b6128/" target="_blank">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 team">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/Prof_Mark_Horton.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box" style="margin-bottom: 0">
                                <h5>
                                    Prof. Mark Horton
                                </h5>
                                <p>Royal Agricultural University, UK</p>
                            </div>
                            <div class="social_box">
                                <a href="mailto:mark.horton@rau.ac.uk">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/mark-horton-4b425618/?trk=public-profile-join-page" target="_blank">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 team">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/Prof_Nicola_Cannon.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box" style="margin-bottom: 0">
                                <h5>
                                    Prof. Nicola Cannon
                                </h5>
                                <p>Royal Agricultural University, UK</p>
                            </div>
                            <div class="social_box">
                                <a href="mailto:nicola.cannon@rau.ac.uk">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/nicola-cannon-84876b87/?originalSubdomain=uk" target="_blank">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 team">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/Prof_Elina_Zakharchenko.jpeg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box" style="margin-bottom: 0">
                                <h5>
                                    Prof. Elina Zakharchenko
                                </h5>
                                <p>Sumy National Agrarian University</p>
                            </div>
                            <div class="social_box">
                                <a href="mailto:elionapolis@gmail.com">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
                                <a href="https://www.linkedin.com/in/elina-zakharchenko-811106a/" target="_blank">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 team">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/Dr_Oksana_Datsko.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box" style="margin-bottom: 0">
                                <h5>
                                    Dr. Oksana Datsko
                                </h5>
                                <p>Sumy National Agrarian University</p>
                            </div>
                            <div class="social_box">
                                <a href="mailto:datsko.oksana.nikol@gmail.com">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </a>
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

    @section('footer-scripts')
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <!-- owl slider -->
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

            <!-- Google Map -->
{{--            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>--}}

                @vite([
                    "resources/js/main_layout/partners_team/custom.js",
                ])
    @endsection

</x-app-layout>
