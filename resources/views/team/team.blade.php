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
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/Olena_Melnyk.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box" style="margin-bottom: 0">
                                <h5>
                                    Dr. Olena Melnyk
                                </h5>
                                <p>ETH Zürich</p>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> olena.melnyk@usys.ethz.ch
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="https://www.linkedin.com/in/olena-melnyk-4793b6128/">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/Evgen_Getman.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Yevgen Getman
                                </h5>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> yevgen.getman@students.bfh.ch
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="http://linkedin.com/in/yevgen-getman-2a42b327b">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/Yevheniia_Kozyr.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Yevheniia Kozyr
                                </h5>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> yevheniia.kozyr@students.bfh.ch
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="https://www.linkedin.com/in/yevheniia-kozyr-9084a2146/">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/Hanna_Stepanenko.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Hanna Stepanenko
                                </h5>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> hanna.stepanenko@students.bfh.ch
                                </p>
                            </div>
                            <div class="social_box">
{{--                                <a href="#">--}}
{{--                                    <i class="fa fa-linkedin" aria-hidden="true"></i>--}}
{{--                                </a>--}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/Galyna_Chos.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Galyna Chos
                                </h5>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> galyna.chos@students.bfh.ch
                                </p>
                            </div>
                            <div class="social_box">
{{--                                <a href="#">--}}
{{--                                    <i class="fa fa-facebook" aria-hidden="true"></i>--}}
{{--                                </a>--}}
{{--                                <a href="#">--}}
{{--                                    <i class="fa fa-envelope" aria-hidden="true"></i>--}}
{{--                                </a>--}}
                                <a href="https://www.linkedin.com/in/galyna-chos-9a9b407b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/Igor_Storchak.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Igor Storchak
                                </h5>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> igor.storchak@students.bfh.ch
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="http://linkedin.com/in/igor-storchak-17530120">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
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
