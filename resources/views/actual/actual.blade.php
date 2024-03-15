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
                                    <img src="{{ Storage::url($posts->first()->image) }}" alt="">
                                    <div class="trend-top-cap">
                                        <h2><a href="{{ route('post', ['post' => $posts->first()->id]) }}">{{ $posts->first()->title }}</a></h2>
                                    </div>
                                </div>
                            </div>
                            <!-- Trending Bottom -->
                            <div class="trending-bottom">
                                <div class="row">
                                    @foreach($posts->slice(1, 3) as $post)
                                        <div class="col-lg-4">
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30">
                                                    <img style="height: 200px" src="{{ Storage::url($post->image) }}" alt="">
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <h4><a href="{{ route('post', ['post' => $post->id]) }}">{{ $post->title }}</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- Riht content -->
                        <div class="col-lg-4">
                            @foreach($posts->slice(4) as $post)
                                <div class="trand-right-single d-flex">
                                    <div style="min-width: 200px" class="trand-right-img">
                                        <img style="width: 200px" src="{{ Storage::url($post->image) }}" alt="">
                                    </div>
                                    <div class="trand-right-cap">
                                        <h4><a href="{{ route('post', ['post' => $post->id]) }}">{{ $post->title }}</a></h4>
                                    </div>
                                </div>
                            @endforeach
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
