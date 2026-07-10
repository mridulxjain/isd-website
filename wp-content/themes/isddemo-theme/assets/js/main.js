/**
 * Main Entry - Indian Shape Designer Theme
 * Orchestrates all module imports
 * Vanilla JS only - no dependencies
 */

(function () {
    'use strict';

    function init() {
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
            anchor.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    const navHeight = 80;
                    const top = target.getBoundingClientRect().top + window.scrollY - navHeight;
                    window.scrollTo({ top, behavior: 'smooth' });
                }
            });
        });

        // Lazy loading images
        if ('loading' in HTMLImageElement.prototype) {
            document.querySelectorAll('img[loading="lazy"]').forEach((img) => {
                img.src = img.dataset.src || img.src;
            });
        } else {
            // Fallback using IntersectionObserver
            const lazyImages = document.querySelectorAll('img[loading="lazy"]');
            const imageObserver = new IntersectionObserver((entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) img.src = img.dataset.src;
                        imageObserver.unobserve(img);
                    }
                });
            });
            lazyImages.forEach((img) => imageObserver.observe(img));
        }

        // Newsletter form handling
        document.querySelectorAll('.isd-footer__newsletter-form').forEach((form) => {
            form.addEventListener('submit', (e) => {
                e.preventDefault();
                const input = form.querySelector('.isd-footer__newsletter-input');
                if (input && input.value) {
                    input.value = '';
                    input.placeholder = 'Thank you for subscribing!';
                    setTimeout(() => {
                        input.placeholder = 'Your email address';
                    }, 3000);
                }
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
