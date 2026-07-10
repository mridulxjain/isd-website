/**
 * Testimonials Carousel
 * Indian Shape Designer - Luxury Theme
 */

(function () {
    'use strict';

    function initCarousel(carouselEl) {
        const track     = carouselEl.querySelector('.isd-testimonials__track');
        const prevBtn   = carouselEl.querySelector('.isd-testimonials__btn--prev');
        const nextBtn   = carouselEl.querySelector('.isd-testimonials__btn--next');
        const cards     = carouselEl.querySelectorAll('.isd-testimonial-card');

        if (!track || !cards.length) return;

        let current = 0;
        let perView = getPerView();
        const total = cards.length;

        function getPerView() {
            if (window.innerWidth <= 768) return 1;
            if (window.innerWidth <= 1024) return 2;
            return 3;
        }

        function goTo(index) {
            const maxIndex = Math.max(0, total - perView);
            current = Math.max(0, Math.min(index, maxIndex));
            const cardWidth = cards[0].offsetWidth + 32; // gap
            track.style.transform = `translateX(-${current * cardWidth}px)`;
            if (prevBtn) prevBtn.disabled = current === 0;
            if (nextBtn) nextBtn.disabled = current >= maxIndex;
        }

        if (prevBtn) prevBtn.addEventListener('click', () => goTo(current - 1));
        if (nextBtn) nextBtn.addEventListener('click', () => goTo(current + 1));

        window.addEventListener('resize', () => {
            perView = getPerView();
            goTo(current);
        });

        goTo(0);
    }

    function init() {
        document.querySelectorAll('.isd-testimonials').forEach(initCarousel);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
