/**
 * Global Navigation Interactions
 */
document.addEventListener('DOMContentLoaded', () => {

    const nav = document.getElementById('isd-global-nav');
    if (!nav) return;

    /* ── 1. SCROLL LISTENER (Sticky & Transparent -> Solid) ── */
    let lastScroll = 0;
    const scrollThreshold = 50;
    
    function onScroll() {
        const currentScroll = window.pageYOffset;
        if (currentScroll > scrollThreshold) {
            nav.classList.add('is-scrolled');
        } else {
            nav.classList.remove('is-scrolled');
        }
        lastScroll = currentScroll;
    }
    
    // Initial check
    onScroll();
    
    // Throttled scroll listener via rAF
    let ticking = false;
    window.addEventListener('scroll', () => {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                onScroll();
                ticking = false;
            });
            ticking = true;
        }
    });

    /* ── 2. DESKTOP MEGA MENU ── */
    const megaTriggerItem = document.querySelector('.isd-nav__item--has-mega');
    const megaBtn = document.getElementById('isd-services-btn');
    const overlay = document.getElementById('isd-nav-overlay');
    
    if (megaTriggerItem && megaBtn && overlay) {
        let timeout;

        const openMega = () => {
            clearTimeout(timeout);
            megaTriggerItem.classList.add('is-hovered');
            megaBtn.setAttribute('aria-expanded', 'true');
            overlay.classList.add('is-active');
        };

        const closeMega = () => {
            timeout = setTimeout(() => {
                megaTriggerItem.classList.remove('is-hovered');
                megaBtn.setAttribute('aria-expanded', 'false');
                overlay.classList.remove('is-active');
            }, 100);
        };

        megaTriggerItem.addEventListener('mouseenter', openMega);
        megaTriggerItem.addEventListener('mouseleave', closeMega);

        // Accessibility: Keyboard toggles
        megaBtn.addEventListener('focus', openMega);
        megaTriggerItem.addEventListener('focusout', (e) => {
            if (!megaTriggerItem.contains(e.relatedTarget)) closeMega();
        });
    }

    // Mega Menu Tab Switching
    const tabs = document.querySelectorAll('.isd-mega__tab');
    const panels = document.querySelectorAll('.isd-mega__panel');

    tabs.forEach(tab => {
        tab.addEventListener('mouseenter', () => {
            const target = tab.getAttribute('data-target');
            
            // Deactivate all
            tabs.forEach(t => {
                t.classList.remove('is-active');
                t.setAttribute('aria-selected', 'false');
            });
            panels.forEach(p => {
                p.classList.remove('is-active');
                p.setAttribute('hidden', '');
            });

            // Activate target
            tab.classList.add('is-active');
            tab.setAttribute('aria-selected', 'true');
            
            const panel = document.getElementById('mega-panel-' + target);
            if (panel) {
                panel.classList.add('is-active');
                panel.removeAttribute('hidden');
            }
        });
    });

    /* ── 3. MOBILE DRAWER ── */
    const mobileToggle = document.getElementById('isd-mobile-toggle');
    const mobileDrawer = document.getElementById('isd-mobile-drawer');
    const closeDrawer  = document.getElementById('isd-drawer-close');

    if (mobileToggle && mobileDrawer && closeDrawer && overlay) {
        
        const openDrawer = () => {
            mobileDrawer.removeAttribute('hidden');
            // Small delay for transition
            setTimeout(() => {
                mobileDrawer.classList.add('is-open');
                overlay.classList.add('is-active');
                mobileToggle.setAttribute('aria-expanded', 'true');
                document.body.style.overflow = 'hidden';
            }, 10);
        };

        const hideDrawer = () => {
            mobileDrawer.classList.remove('is-open');
            overlay.classList.remove('is-active');
            mobileToggle.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
            
            // Wait for transition
            setTimeout(() => {
                mobileDrawer.setAttribute('hidden', '');
            }, 400);
        };

        mobileToggle.addEventListener('click', openDrawer);
        closeDrawer.addEventListener('click', hideDrawer);
        overlay.addEventListener('click', () => {
            if (mobileDrawer.classList.contains('is-open')) hideDrawer();
        });

        // Escape key closes drawer
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileDrawer.classList.contains('is-open')) {
                hideDrawer();
            }
        });
    }

    /* ── 4. MOBILE ACCORDION ── */
    const accBtn = document.querySelector('.isd-drawer__accordion-btn');
    const accPanel = document.getElementById('mobile-services-panel');
    const accItem = document.querySelector('.isd-drawer__accordion');

    if (accBtn && accPanel) {
        accBtn.addEventListener('click', () => {
            const isOpen = accItem.classList.contains('is-open');
            if (isOpen) {
                accItem.classList.remove('is-open');
                accBtn.setAttribute('aria-expanded', 'false');
                accPanel.setAttribute('hidden', '');
            } else {
                accItem.classList.add('is-open');
                accBtn.setAttribute('aria-expanded', 'true');
                accPanel.removeAttribute('hidden');
            }
        });
    }

});
