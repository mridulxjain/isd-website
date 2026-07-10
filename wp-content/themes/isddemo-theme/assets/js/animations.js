/**
 * Animations Module
 * Indian Shape Designer - Luxury Theme
 * Handles all scroll-triggered animations using IntersectionObserver
 */

(function () {
    'use strict';

    const ANIMATION_CLASSES = [
        '.isd-fade-up',
        '.isd-scale-in',
        '.isd-blur-reveal',
    ];

    const observerOptions = {
        root: null,
        rootMargin: '-50px 0px',
        threshold: 0.1,
    };

    function initAnimations() {
        if (!('IntersectionObserver' in window)) {
            // Fallback: show all elements if IO not supported
            document.querySelectorAll(ANIMATION_CLASSES.join(',')).forEach((el) => {
                el.classList.add('is-visible');
            });
            return;
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll(ANIMATION_CLASSES.join(',')).forEach((el) => {
            observer.observe(el);
        });
    }

    // Initialize on DOM ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initAnimations);
    } else {
        initAnimations();
    }

    // Expose globally for dynamic content
    window.isdAnimations = { init: initAnimations };
})();
