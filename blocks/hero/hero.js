document.addEventListener('DOMContentLoaded', function () {
    var mainSlider2 = new Swiper('.main-slider-2', {
        loop: true,
        speed: 1000,
        autoplay: false,
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        // autoplay: {
        //     delay: 5000,
        // },
        navigation: {
            nextEl: '.slide-button-next',
            prevEl: '.slide-button-prev',
        },
    });
});
