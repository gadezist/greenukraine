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
                                <img src="{{ asset('images/partners_team/igor.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Igor Storchak
                                </h5>
                                <p>
                                    igor.storchak@students.bfh.ch
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="http://linkedin.com/in/igor-storchak-17530120">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/jenya_f.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Yevheniia Kozyr
                                </h5>
                                <p>
                                    yevheniia.kozyr@students.bfh.ch
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="https://www.linkedin.com/in/yevheniia-kozyr-9084a2146/">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/yevgen_f.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Yevgen Getman
                                </h5>
                                <p>
                                    yevgen.getman@students.bfh.ch
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
                                <img src="{{ asset('images/partners_team/hanna_f.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Hanna Stepanenko
                                </h5>
                                <p>
                                    hanna.stepanenko@students.bfh.ch
                                </p>
                            </div>
                            <div class="social_box">
                                <a href="#">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="{{ asset('images/partners_team/galyna_f.jpg') }}" class="img1" alt="">
                            </div>
                            <div class="detail-box">
                                <h5>
                                    Galyna Chos
                                </h5>
                                <p>
                                    galyna.chos@students.bfh.ch
                                </p>
                            </div>
                            <div class="social_box">
{{--                                <a href="#">--}}
{{--                                    <i class="fa fa-facebook" aria-hidden="true"></i>--}}
{{--                                </a>--}}
{{--                                <a href="#">--}}
{{--                                    <i class="fa fa-twitter" aria-hidden="true"></i>--}}
{{--                                </a>--}}
                                <a href="https://www.linkedin.com/in/galyna-chos-9a9b407b?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app">
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
