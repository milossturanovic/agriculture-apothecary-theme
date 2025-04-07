document.addEventListener('DOMContentLoaded', function () {
    var mainSlider2 = new Swiper('.main-slider-2', {
        loop: true,
        speed: 2500,
        autoplay: false,
        delay: 5000,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },

        navigation: {
            nextEl: '.slide-button-next',
            prevEl: '.slide-button-prev',
        },
    });
});
