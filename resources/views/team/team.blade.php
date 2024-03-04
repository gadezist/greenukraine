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
                    Our <span> Team</span>
                </h2>
            </div>

            <div class="team_container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/team-1.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Joseph Brown
                                </h5>
                                <p>
                                    Marketing Head
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/team-2.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Nancy White
                                </h5>
                                <p>
                                    Marketing Head
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/team-3.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Earl Martinez
                                </h5>
                                <p>
                                    Marketing Head
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/team-4.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Josephine Allard
                                </h5>
                                <p>
                                    Marketing Head
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/team-1.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Joseph Brown
                                </h5>
                                <p>
                                    Marketing Head
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/team-2.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Nancy White
                                </h5>
                                <p>
                                    Marketing Head
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/team-3.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Earl Martinez
                                </h5>
                                <p>
                                    Marketing Head
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/team-4.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Josephine Allard
                                </h5>
                                <p>
                                    Marketing Head
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="#">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-youtube-play" aria-hidden="true"></i>
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
