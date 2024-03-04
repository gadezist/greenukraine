<x-app-layout>
    @section('css_section')
        @vite([
            "resources/css/main_layout/news/bootstrap.min.css",
            "resources/css/main_layout/news/owl.carousel.min.css",
            "resources/css/main_layout/news/ticker-style.css",
            "resources/css/main_layout/news/flaticon.css",
            "resources/css/main_layout/news/slicknav.css",
            "resources/css/main_layout/news/animate.min.css",
            "resources/css/main_layout/news/magnific-popup.css",
            "resources/css/main_layout/news/fontawesome-all.min.css",
            "resources/css/main_layout/news/themify-icons.css",
            "resources/css/main_layout/news/slick.css",
            "resources/css/main_layout/news/nice-select.css",
            "resources/css/main_layout/news/style.css",
        ])
    @endsection
        <!-- Trending Area Start -->
        <div class="trending-area fix">
            <div class="container">
                <div class="trending-main">
                    <!-- Trending Tittle -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Trending Top -->
                            <div class="trending-top mb-30">
                                <div class="trend-top-img">
                                    <img src="{{ asset('images/news/trending_top.jpg') }}" alt="">
                                    <div class="trend-top-cap">
                                        <h2><a href="{{ route('post') }}">Welcome To The Best Model Winner<br> Contest At Look of the year</a></h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Trending Bottom -->
                            <div class="trending-bottom">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="{{ asset('images/news/trending_bottom1.jpg') }}" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="{{ asset('images/news/trending_bottom2.jpg') }}" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <h4><h4><a href="details.html">Get the Illusion of Fuller Lashes by “Mascng.”</a></h4></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="{{ asset('images/news/trending_bottom3.jpg') }}" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <h4><a href="details.html"> Welcome To The Best Model Winner Contest</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Riht content -->
                        <div class="col-lg-4">
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset('images/news/right1.jpg') }}" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset('images/news/right2.jpg') }}" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset('images/news/right3.jpg') }}" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset('images/news/right4.jpg') }}" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img src="{{ asset('images/news/right5.jpg') }}" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <h4><a href="details.html">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trending Area End -->

        @section('footer')
            @include('layouts.footer')
        @endsection

        @section('footer-scripts')

            @vite([
                "resources/js/main_layout/news/vendor/modernizr-3.5.0.min.js",
                "resources/js/main_layout/news/vendor/jquery-1.12.4.min.js",
                "resources/js/main_layout/news/popper.min.js",
                "resources/js/main_layout/news/bootstrap.min.js",
                "resources/js/main_layout/news/jquery.slicknav.min.js",
                "resources/js/main_layout/news/owl.carousel.min.js",
                "resources/js/main_layout/news/slick.min.js",
                "resources/js/main_layout/news/gijgo.min.js",
                "resources/js/main_layout/news/wow.min.js",
                "resources/js/main_layout/news/animated.headline.js",
                "resources/js/main_layout/news/jquery.magnific-popup.js",
                "resources/js/main_layout/news/jquery.ticker.js",
                "resources/js/main_layout/news/site.js",
                "resources/js/main_layout/news/jquery.scrollUp.min.js",
                "resources/js/main_layout/news/jquery.nice-select.min.js",
                "resources/js/main_layout/news/jquery.sticky.js",
                "resources/js/main_layout/news/contact.js",
                "resources/js/main_layout/news/jquery.form.js",
                "resources/js/main_layout/news/jquery.validate.min.js",
                "resources/js/main_layout/news/mail-script.js",
                "resources/js/main_layout/news/jquery.ajaxchimp.min.js",
                "resources/js/main_layout/news/plugins.js",
                "resources/js/main_layout/news/main.js",
            ])
        @endsection
</x-app-layout>
