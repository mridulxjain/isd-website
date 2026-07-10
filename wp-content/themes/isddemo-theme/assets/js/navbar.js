/**
 * Navbar Module
 * Indian Shape Designer - Luxury Theme
 * Handles: scroll state, mobile drawer, active link
 */

(function () {
    'use strict';

    const navbar       = document.getElementById('isd-navbar');
    const toggle       = document.getElementById('isd-nav-toggle');
    const drawer       = document.getElementById('isd-drawer');
    const overlay      = document.getElementById('isd-drawer-overlay');
    const drawerLinks  = document.querySelectorAll('.isd-drawer__link');

    if (!navbar) return;

    // --- SCROLL STATE ---
    let ticking = false;

    function onScroll() {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                if (window.scrollY > 60) {
                    navbar.classList.remove('isd-navbar--transparent');
                    navbar.classList.add('isd-navbar--scrolled');
                } else {
                    navbar.classList.add('isd-navbar--transparent');
                    navbar.classList.remove('isd-navbar--scrolled');
                }
                ticking = false;
            });
            ticking = true;
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); // run once on load

    // --- MOBILE DRAWER ---
    function openDrawer() {
        drawer && drawer.classList.add('is-open');
        overlay && overlay.classList.add('is-visible');
        toggle && toggle.classList.add('is-open');
        toggle && toggle.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
        drawer && drawer.classList.remove('is-open');
        overlay && overlay.classList.remove('is-visible');
        toggle && toggle.classList.remove('is-open');
        toggle && toggle.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }

    if (toggle) {
        toggle.addEventListener('click', () => {
            if (drawer && drawer.classList.contains('is-open')) {
                closeDrawer();
            } else {
                openDrawer();
            }
        });
    }

    if (overlay) {
        overlay.addEventListener('click', closeDrawer);
    }

    drawerLinks.forEach((link) => {
        link.addEventListener('click', closeDrawer);
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeDrawer();
    });

    // --- ACTIVE NAV LINK (Scrollspy) ---
    const navLinks = document.querySelectorAll('.isd-navbar__nav-link[href^="#"]');
    const sections = [];

    navLinks.forEach((link) => {
        const id = link.getAttribute('href').replace('#', '');
        const section = document.getElementById(id);
        if (section) sections.push({ link, section });
    });

    const scrollspyObserver = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    navLinks.forEach((l) => l.classList.remove('is-active'));
                    const activeLink = sections.find((s) => s.section === entry.target);
                    if (activeLink) activeLink.link.classList.add('is-active');
                }
            });
        },
        { rootMargin: '-40% 0px -40% 0px', threshold: 0 }
    );

    sections.forEach(({ section }) => scrollspyObserver.observe(section));
})();
