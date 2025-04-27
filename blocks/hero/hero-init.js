// Initialize hero slider
function initHeroSlider() {
    var mainSlider2 = new Swiper('.main-slider-2', {
        loop: true,
        speed: 2500,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: "fade",
        fadeEffect: {
            crossFade: true,
        },
        navigation: {
            nextEl: '.slide-button-next',
            prevEl: '.slide-button-prev',
        },
        on: {
            init: function () {
                // Add loaded class to enable transitions
                document.querySelector('.slider-area').classList.add('is-loaded');
            }
        }
    });
}

// Load Swiper on demand
if ('IntersectionObserver' in window) {
    const sliderObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Dynamically load Swiper
                const script = document.createElement('script');
                script.src = 'path/to/swiper-bundle.min.js';
                script.onload = initHeroSlider;
                document.body.appendChild(script);
                sliderObserver.disconnect();
            }
        });
    });

    const slider = document.querySelector('.main-slider-2');
    if (slider) sliderObserver.observe(slider);
} else {
    // Fallback for older browsers
    initHeroSlider();
} 