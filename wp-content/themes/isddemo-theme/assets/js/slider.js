/**
 * Before/After Comparison Slider
 * Indian Shape Designer - Luxury Theme
 */

(function () {
    'use strict';

    function initSlider(sliderEl) {
        const handle    = sliderEl.querySelector('.isd-before-after__handle');
        const afterPane = sliderEl.querySelector('.isd-before-after__after');
        let isDragging  = false;

        if (!handle || !afterPane) return;

        function getPercent(clientX) {
            const rect = sliderEl.getBoundingClientRect();
            const x = clientX - rect.left;
            return Math.max(0, Math.min(100, (x / rect.width) * 100));
        }

        function setPosition(pct) {
            afterPane.style.width = pct + '%';
            handle.style.left = pct + '%';
        }

        // Initialize at 50%
        setPosition(50);

        // Mouse events
        handle.addEventListener('mousedown', () => { isDragging = true; });
        document.addEventListener('mouseup',  () => { isDragging = false; });
        sliderEl.addEventListener('mousemove', (e) => {
            if (!isDragging) return;
            setPosition(getPercent(e.clientX));
        });

        // Touch events
        handle.addEventListener('touchstart', (e) => {
            isDragging = true;
            e.preventDefault();
        }, { passive: false });
        document.addEventListener('touchend', () => { isDragging = false; });
        sliderEl.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            setPosition(getPercent(e.touches[0].clientX));
            e.preventDefault();
        }, { passive: false });
    }

    function init() {
        document.querySelectorAll('.isd-before-after').forEach(initSlider);
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
