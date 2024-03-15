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

<!-- About US Start -->
<div class="about-area">
    <div class="container">
        <!-- Hot Aimated News Tittle-->
        <div class="row">
            <div class="col-lg-12">
                <div class="trending-tittle">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Trending Tittle -->
                <div class="about-right mb-90">
                    <div class="about-img">
                        <img src="{{ Storage::url($post->image) }}" alt="">
                        <figcaption style="color: #506172">{{ $post->descr_image }}</figcaption>
                    </div>
                    <div class="section-tittle mb-30 pt-30">
                        <h3 style="word-wrap: break-word;">{{ $post->title }}</h3>
                    </div>
                    <div class="mb-20">
                        <span style="color: #506172">@if($post->custom_date) {{ (new DateTime($post->custom_date))->format('l jS \of F Y') }} @else {{ $post->created_at->format('d.m.Y') }} @endif</span>
                    </div>
                    <div>
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
