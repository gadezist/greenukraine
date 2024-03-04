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
                        <img src="{{ asset('images/news/trending_top.jpg') }}" alt="">
                    </div>
                    <div class="section-tittle mb-30 pt-30">
                        <h3>Here come the moms in space</h3>
                    </div>
                    <div class="about-prea">
                        <p class="about-pera1 mb-25">Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                        <p class="about-pera1 mb-25">Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                        <p class="about-pera1 mb-25">
                            My hero when I was a kid was my mom. Same for everyone I knew. Moms are untouchable. They’re elegant, smart, beautiful, kind…everything we want to be. At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.
                            the refractor telescope uses a convex lens to focus the light on the eyepiece.
                            The reflector telescope has a concave lens which means it bends in. It uses mirrors to focus the image that you eventually see.
                            Collimation is a term for how well tuned the telescope is to give you a good clear image of what you are looking at. You want your telescope to have good collimation so you are not getting a false image of the celestial body.
                            Aperture is a fancy word for how big the lens of your telescope is. But it’s an important word because the aperture of the lens is the key to how powerful your telescope is. Magnification has nothing to do with it, its all in the aperture.
                            Focuser is the housing that keeps the eyepiece of the telescope, or what you will look through, in place. The focuser has to be stable and in good repair for you to have an image you can rely on.
                            Mount and Wedge. Both of these terms refer to the tripod your telescope sits on. The mount is the actual tripod and the wedge is the device that lets you attach the telescope to the mount.
                            Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                    </div>
                    <div class="section-tittle">
                        <h3>Unordered list style?</h3>
                    </div>
                    <div class="about-prea">
                        <p class="about-pera1 mb-25">The refractor telescope uses a convex lens to focus the light on the eyepiece.
                            The reflector telescope has a concave lens which means it bends in. It uses mirrors to focus the image that you eventually see.</p>
                        <p class="about-pera1 mb-25">Collimation is a term for how well tuned the telescope is to give you a good clear image of what you are looking at. You want your telescope to have good collimation so you are not getting a false image of the celestial body.</p>
                        <p class="about-pera1 mb-25">
                            My hero when I was a kid was my mom. Same for everyone I knew. Moms are untouchable. They’re elegant, smart, beautiful, kind…everything we want to be. At 29 years old, my favorite compliment is being told that I look like my mom. Seeing myself in her image, like this daughter up top, makes me so proud of how far I’ve come, and so thankful for where I come from.
                            the refractor telescope uses a convex lens to focus the light on the eyepiece.
                            The reflector telescope has a concave lens which means it bends in. It uses mirrors to focus the image that you eventually see.
                            Collimation is a term fo
                            Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                        <p class="about-pera1 mb-25">
                            Mount and Wedge. Both of these terms refer to the tripod your telescope sits on. The mount is the actual tripod and the wedge is the device that lets you attach the telescope to the mount.
                            Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
                        <p class="about-pera1 mb-25">
                            Mount and Wedge. Both of these terms refer to the tripod your telescope sits on. The mount is the actual tripod and the wedge is the device that lets you attach the telescope to the mount.
                            Moms are like…buttons? Moms are like glue. Moms are like pizza crusts. Moms are the ones who make sure things happen—from birth to school lunch.</p>
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
