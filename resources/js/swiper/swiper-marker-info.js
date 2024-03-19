// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';
function initSwiper() {
    const swiper = new Swiper('.swiper', {
        loop: false,
        spaceBetween: 10,
        slidesPerView: 3,
        simulateTouch: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });


}

function fullScreen() {
    let fullScreen = $('.swiper .swiper-slide').on('click', function() {
        let slideId = $(this).attr('id');
        openFullscreenSwiper(slideId);
    });

    function openFullscreenSwiper(initialSlideNumber) {
        let mainSwiperMarkup = $('.swiper').html();

        $('#fullscreen-swiper')
            .append(mainSwiperMarkup + "<div id='fullscreen-swiper-close'>X</div>")
            .fadeIn();

        let fullscreenSwiper = new Swiper('#fullscreen-swiper', {
            slidesPerView: 1,
            centeredSlides: true,
            paginationClickable: true,
            spaceBetween: 10,
            loop: true,
            initialSlide: initialSlideNumber - 1,

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });

        $('#fullscreen-swiper-backdrop').fadeIn();
        $('body, html').addClass('no-scroll');

        $('#fullscreen-swiper .swiper-slide, #fullscreen-swiper-close').on('click', function(e) {
            if (e.target.tagName !== 'IMG') {
                $('#fullscreen-swiper').hide().empty();
                $('#fullscreen-swiper-backdrop').fadeOut();
                $('body, html').removeClass('no-scroll');
            }
        });

    }
}

var observer = new MutationObserver(function(mutations) {
    mutations.forEach(function(mutation) {
        // Перевіряємо, чи доданий новий блок div
        if (mutation.addedNodes && mutation.addedNodes.length > 0) {
            // Перевіряємо, чи є серед доданих елементів блок div
            for (var i = 0; i < mutation.addedNodes.length; i++) {
                var addedNode = mutation.addedNodes[i];
                if (addedNode.nodeType === 1 && addedNode.tagName === 'DIV' && addedNode.classList.contains('info-marker')) {
                    // Якщо доданий очікуваний блок div, ініціалізуємо JavaScript
                    initSwiper();
                    fullScreen();
                }
            }
        }
    });
});

const config = {
    childList: true,
    subtree: true,
};

let mapContainerId = document.getElementById('map');
observer.observe(mapContainerId, config);
