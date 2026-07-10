/**
 * Project Portfolio Filter
 * Indian Shape Designer - Luxury Theme
 */

(function () {
    'use strict';

    function initFilters() {
        const filterSections = document.querySelectorAll('[data-filter-section]');

        filterSections.forEach((section) => {
            const tabs    = section.querySelectorAll('[data-filter]');
            const cards   = section.querySelectorAll('[data-category]');

            if (!tabs.length || !cards.length) return;

            tabs.forEach((tab) => {
                tab.addEventListener('click', () => {
                    const filter = tab.dataset.filter;

                    // Update active tab
                    tabs.forEach((t) => t.classList.remove('is-active'));
                    tab.classList.add('is-active');

                    // Filter cards
                    cards.forEach((card) => {
                        const category = card.dataset.category;
                        const show = filter === 'all' || category === filter;

                        if (show) {
                            card.style.display = '';
                            requestAnimationFrame(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            });
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                if (card.style.opacity === '0') card.style.display = 'none';
                            }, 400);
                        }
                    });
                });
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFilters);
    } else {
        initFilters();
    }
})();
