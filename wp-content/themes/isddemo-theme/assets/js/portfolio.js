/**
 * Portfolio Filtering & Interactions
 */
document.addEventListener('DOMContentLoaded', () => {

    // 1. Dropdown Toggles
    const filterGroups = document.querySelectorAll('.isd-pf-filter');
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', (e) => {
        filterGroups.forEach(group => {
            if (!group.contains(e.target)) {
                group.classList.remove('is-open');
                group.querySelector('.isd-pf-filter__btn').setAttribute('aria-expanded', 'false');
            }
        });
    });

    filterGroups.forEach(group => {
        const btn = group.querySelector('.isd-pf-filter__btn');
        btn.addEventListener('click', (e) => {
            const isOpen = group.classList.contains('is-open');
            // Close all others
            filterGroups.forEach(g => {
                g.classList.remove('is-open');
                g.querySelector('.isd-pf-filter__btn').setAttribute('aria-expanded', 'false');
            });
            // Toggle current
            if (!isOpen) {
                group.classList.add('is-open');
                btn.setAttribute('aria-expanded', 'true');
            }
        });
    });

    // 2. Live Filtering Logic
    const searchInput = document.getElementById('pf-search');
    const resetBtn    = document.getElementById('pf-reset');
    const resetEmpty  = document.getElementById('pf-reset-empty');
    const cards       = document.querySelectorAll('.isd-pf-card');
    const resultCount = document.querySelector('#pf-results-count strong');
    const emptyState  = document.getElementById('pf-no-results');
    const masonry     = document.getElementById('pf-masonry');

    // State object to hold current filters
    let currentFilters = {
        search: '',
        category: 'all',
        room: 'all',
        style: 'all',
        construction: 'all'
    };

    function updateFilters() {
        let visibleCount = 0;
        const s = currentFilters.search.toLowerCase();

        cards.forEach(card => {
            const title = card.getAttribute('data-title') || '';
            const cat   = card.getAttribute('data-category') || '';
            const room  = card.getAttribute('data-room') || '';
            const style = card.getAttribute('data-style') || '';
            const cons  = card.getAttribute('data-construction') || '';

            // Match conditions
            const matchSearch = s === '' || title.includes(s) || cat.includes(s) || room.includes(s) || style.includes(s);
            const matchCat    = currentFilters.category === 'all' || cat === currentFilters.category;
            const matchRoom   = currentFilters.room === 'all' || room === currentFilters.room;
            const matchStyle  = currentFilters.style === 'all' || style === currentFilters.style;
            const matchCons   = currentFilters.construction === 'all' || cons === currentFilters.construction;

            if (matchSearch && matchCat && matchRoom && matchStyle && matchCons) {
                card.classList.remove('is-hidden');
                visibleCount++;
            } else {
                card.classList.add('is-hidden');
            }
        });

        // Update counts
        if (resultCount) resultCount.textContent = visibleCount;

        // Empty state
        if (visibleCount === 0) {
            emptyState.removeAttribute('hidden');
            masonry.setAttribute('hidden', '');
        } else {
            emptyState.setAttribute('hidden', '');
            masonry.removeAttribute('hidden');
        }
    }

    // Bind Search Input
    if (searchInput) {
        searchInput.addEventListener('input', (e) => {
            currentFilters.search = e.target.value.trim();
            updateFilters();
        });
    }

    // Bind Dropdown Options
    const options = document.querySelectorAll('.isd-pf-filter__option');
    options.forEach(opt => {
        opt.addEventListener('click', (e) => {
            const group = opt.closest('.isd-pf-filter');
            const type  = group.getAttribute('data-filter-group');
            const val   = opt.getAttribute('data-val');
            const label = opt.textContent;

            // Update active state in UI
            group.querySelectorAll('.isd-pf-filter__option').forEach(o => o.classList.remove('is-active'));
            opt.classList.add('is-active');

            // Update button label
            const btnLabel = group.querySelector('.isd-pf-filter__label');
            const prefix = type.charAt(0).toUpperCase() + type.slice(1);
            btnLabel.textContent = `${prefix}: ${label}`;

            // Highlight button if not 'all'
            if (val === 'all') {
                group.classList.remove('has-active');
            } else {
                group.classList.add('has-active');
            }

            // Close dropdown
            group.classList.remove('is-open');
            group.querySelector('.isd-pf-filter__btn').setAttribute('aria-expanded', 'false');

            // Update state and filter
            currentFilters[type] = val;
            updateFilters();
        });
    });

    // Reset All Filters
    function resetAll() {
        // Reset state
        currentFilters = {
            search: '',
            category: 'all',
            room: 'all',
            style: 'all',
            construction: 'all'
        };

        // Reset UI Search
        if (searchInput) searchInput.value = '';

        // Reset UI Dropdowns
        filterGroups.forEach(group => {
            group.classList.remove('has-active');
            group.querySelectorAll('.isd-pf-filter__option').forEach(o => o.classList.remove('is-active'));
            
            // Set 'All' active
            const allOpt = group.querySelector('.isd-pf-filter__option[data-val="all"]');
            if (allOpt) allOpt.classList.add('is-active');

            // Reset Label
            const type = group.getAttribute('data-filter-group');
            const btnLabel = group.querySelector('.isd-pf-filter__label');
            const prefix = type.charAt(0).toUpperCase() + type.slice(1);
            btnLabel.textContent = `${prefix}: All`;
        });

        updateFilters();
    }

    if (resetBtn) resetBtn.addEventListener('click', resetAll);
    if (resetEmpty) resetEmpty.addEventListener('click', resetAll);

});
