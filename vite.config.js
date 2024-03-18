import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/admin/user.js',
                "resources/css/main_layout/bootstrap.min.css",
                "resources/css/main_layout/style.css",
                "resources/css/main_layout/responsive.css",
                "resources/css/main_layout/partners_team/font-awesome.min.css",
                "resources/css/main_layout/partners_team/style.css",
                "resources/css/main_layout/partners_team/responsive.css",
                'resources/js/map/map.js',
                "resources/js/main_layout/partners_team/custom.js",
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
                'resources/js/admin/news.js',
                'resources/js/gtag.js',
                'resources/js/swiper/swiper-marker-info.js',
                'resources/css/swiper/swiper-marker-info.css',
            ],
            refresh: true,
        }),
    ],
});
