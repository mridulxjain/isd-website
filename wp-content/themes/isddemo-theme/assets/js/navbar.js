/**
 * Navbar + Mega Menu JavaScript
 * Indian Shape Designer - Luxury Theme
 *
 * Responsibilities:
 *  - Scroll-based navbar state
 *  - Desktop mega menu open/close (hover + keyboard)
 *  - Category card hover → child panel swap
 *  - Mobile drawer open/close
 *  - Mobile accordion
 *  - Accessibility: Escape, arrow keys, focus trapping in drawer
 */

( function () {
    'use strict';

    /* ── DOM REFERENCES ─────────────────────────── */
    const navbar      = document.getElementById( 'isd-navbar' );
    const overlay     = document.getElementById( 'isd-overlay' );
    const servicesBtn = document.getElementById( 'nav-services-btn' );
    const megaMenu    = document.getElementById( 'mega-menu-desktop' );
    const mobileToggle = document.getElementById( 'isd-mobile-toggle' );
    const drawer      = document.getElementById( 'isd-mobile-drawer' );
    const drawerClose = document.getElementById( 'isd-drawer-close' );

    if ( ! navbar ) return; // Guard: abort if template not loaded

    /* ── SCROLL STATE ────────────────────────────── */
    const SCROLL_THRESHOLD = 60;

    function onScroll() {
        if ( window.scrollY > SCROLL_THRESHOLD ) {
            navbar.classList.remove( 'isd-navbar--transparent' );
            navbar.classList.add( 'isd-navbar--scrolled' );
        } else {
            navbar.classList.add( 'isd-navbar--transparent' );
            navbar.classList.remove( 'isd-navbar--scrolled' );
        }
    }

    window.addEventListener( 'scroll', onScroll, { passive: true } );
    onScroll(); // run once on load

    /* ══════════════════════════════════════════════
       DESKTOP MEGA MENU
       ═══════════════════════════════════════════ */
    if ( ! servicesBtn || ! megaMenu ) {
        // Mega menu elements missing – skip desktop logic
    } else {
        const servicesItem = document.getElementById( 'nav-services' );
        let megaOpen       = false;
        let closeTimer     = null;

        function openMega() {
            clearTimeout( closeTimer );
            if ( megaOpen ) return;
            megaOpen = true;
            megaMenu.classList.add( 'is-open' );
            servicesBtn.setAttribute( 'aria-expanded', 'true' );
            overlay.classList.add( 'is-visible' );
            // Reset to categories view
            showCategories();
        }

        function closeMega() {
            if ( ! megaOpen ) return;
            megaOpen = false;
            megaMenu.classList.remove( 'is-open' );
            servicesBtn.setAttribute( 'aria-expanded', 'false' );
            overlay.classList.remove( 'is-visible' );
        }

        function scheduledClose() {
            closeTimer = setTimeout( closeMega, 120 );
        }

        /* Hover on nav item */
        if ( servicesItem ) {
            servicesItem.addEventListener( 'mouseenter', openMega );
            servicesItem.addEventListener( 'mouseleave', scheduledClose );
        }

        /* Hover keeps it open */
        megaMenu.addEventListener( 'mouseenter', function () {
            clearTimeout( closeTimer );
        } );
        megaMenu.addEventListener( 'mouseleave', scheduledClose );

        /* Click toggle (keyboard/touch users) */
        servicesBtn.addEventListener( 'click', function ( e ) {
            e.stopPropagation();
            megaOpen ? closeMega() : openMega();
        } );

        /* Close on overlay click */
        overlay.addEventListener( 'click', closeMega );

        /* Close on Escape */
        document.addEventListener( 'keydown', function ( e ) {
            if ( e.key === 'Escape' && megaOpen ) {
                closeMega();
                servicesBtn.focus();
            }
        } );

        /* ── CATEGORY ↔ CHILDREN SWAP ──────────────── */
        const categoriesPanel = document.getElementById( 'mega-categories' );
        const childPanels     = megaMenu.querySelectorAll( '.isd-mega__children' );
        const catCards        = megaMenu.querySelectorAll( '.isd-mega__cat-card' );
        const backBtns        = megaMenu.querySelectorAll( '.isd-mega__back' );

        function showCategories() {
            if ( categoriesPanel ) {
                categoriesPanel.hidden = false;
                categoriesPanel.removeAttribute( 'aria-hidden' );
            }
            childPanels.forEach( function ( panel ) {
                panel.hidden = true;
                panel.setAttribute( 'aria-hidden', 'true' );
            } );
            catCards.forEach( function ( card ) {
                card.setAttribute( 'aria-expanded', 'false' );
            } );
        }

        function showChildren( serviceId ) {
            if ( categoriesPanel ) {
                categoriesPanel.hidden = true;
                categoriesPanel.setAttribute( 'aria-hidden', 'true' );
            }
            childPanels.forEach( function ( panel ) {
                panel.hidden = true;
                panel.setAttribute( 'aria-hidden', 'true' );
            } );
            const target = document.getElementById( 'mega-children-' + serviceId );
            if ( target ) {
                target.hidden = false;
                target.removeAttribute( 'aria-hidden' );
                // Focus first focusable element
                const firstLink = target.querySelector( '.isd-mega__child-card' );
                if ( firstLink ) firstLink.focus();
            }
        }

        /* Category card: hover shows children */
        catCards.forEach( function ( card ) {
            card.addEventListener( 'mouseenter', function () {
                showChildren( this.dataset.service );
                this.setAttribute( 'aria-expanded', 'true' );
            } );
            card.addEventListener( 'click', function () {
                showChildren( this.dataset.service );
                this.setAttribute( 'aria-expanded', 'true' );
            } );
            /* Keyboard: Enter/Space */
            card.addEventListener( 'keydown', function ( e ) {
                if ( e.key === 'Enter' || e.key === ' ' ) {
                    e.preventDefault();
                    showChildren( this.dataset.service );
                }
            } );
        } );

        /* Back button: returns to categories */
        backBtns.forEach( function ( btn ) {
            btn.addEventListener( 'click', showCategories );
        } );

        /* Mouse leaving children → return to categories */
        childPanels.forEach( function ( panel ) {
            panel.addEventListener( 'mouseleave', showCategories );
        } );
    }

    /* ══════════════════════════════════════════════
       MOBILE DRAWER
       ═══════════════════════════════════════════ */
    if ( mobileToggle && drawer ) {

        function openDrawer() {
            drawer.hidden = false;
            // Trigger reflow so the transition fires
            // eslint-disable-next-line no-unused-expressions
            drawer.offsetHeight;
            drawer.classList.add( 'is-open' );
            mobileToggle.setAttribute( 'aria-expanded', 'true' );
            overlay.classList.add( 'is-visible' );
            document.body.style.overflow = 'hidden';
            // Focus first focusable element in drawer
            const firstFocusable = drawer.querySelector( 'a, button' );
            if ( firstFocusable ) firstFocusable.focus();
        }

        function closeDrawer() {
            drawer.classList.remove( 'is-open' );
            mobileToggle.setAttribute( 'aria-expanded', 'false' );
            overlay.classList.remove( 'is-visible' );
            document.body.style.overflow = '';
            // Wait for transition before hiding
            drawer.addEventListener( 'transitionend', function handler() {
                drawer.hidden = true;
                drawer.removeEventListener( 'transitionend', handler );
            } );
        }

        mobileToggle.addEventListener( 'click', function () {
            mobileToggle.getAttribute( 'aria-expanded' ) === 'true' ? closeDrawer() : openDrawer();
        } );

        if ( drawerClose ) drawerClose.addEventListener( 'click', closeDrawer );
        overlay.addEventListener( 'click', closeDrawer );

        document.addEventListener( 'keydown', function ( e ) {
            if ( e.key === 'Escape' && mobileToggle.getAttribute( 'aria-expanded' ) === 'true' ) {
                closeDrawer();
                mobileToggle.focus();
            }
        } );

        /* ── ACCORDION ──────────────────────────────── */
        const accordionTriggers = drawer.querySelectorAll( '.isd-drawer__accordion-trigger' );

        accordionTriggers.forEach( function ( trigger ) {
            trigger.addEventListener( 'click', function () {
                const panel   = this.nextElementSibling;
                const isOpen  = this.getAttribute( 'aria-expanded' ) === 'true';

                if ( ! panel ) return;

                if ( isOpen ) {
                    this.setAttribute( 'aria-expanded', 'false' );
                    // Animate collapse
                    panel.style.height = panel.scrollHeight + 'px';
                    // Force reflow
                    // eslint-disable-next-line no-unused-expressions
                    panel.offsetHeight;
                    panel.style.height = '0';
                    panel.style.overflow = 'hidden';
                    panel.addEventListener( 'transitionend', function handler() {
                        panel.hidden = true;
                        panel.style.height = '';
                        panel.style.overflow = '';
                        panel.removeEventListener( 'transitionend', handler );
                    } );
                } else {
                    this.setAttribute( 'aria-expanded', 'true' );
                    panel.hidden = false;
                    panel.style.overflow = 'hidden';
                    panel.style.height   = '0';
                    // Force reflow
                    // eslint-disable-next-line no-unused-expressions
                    panel.offsetHeight;
                    panel.style.height = panel.scrollHeight + 'px';
                    panel.addEventListener( 'transitionend', function handler() {
                        panel.style.height   = '';
                        panel.style.overflow = '';
                        panel.removeEventListener( 'transitionend', handler );
                    } );
                }
            } );
        } );
    }

    /* ── FOCUS TRAP in Drawer ───────────────────── */
    if ( drawer ) {
        drawer.addEventListener( 'keydown', function ( e ) {
            if ( e.key !== 'Tab' ) return;
            const focusable = Array.from(
                drawer.querySelectorAll( 'a[href], button:not([disabled]), [tabindex="0"]' )
            ).filter( el => ! el.closest( '[hidden]' ) );
            if ( ! focusable.length ) return;
            const first = focusable[ 0 ];
            const last  = focusable[ focusable.length - 1 ];
            if ( e.shiftKey ) {
                if ( document.activeElement === first ) {
                    e.preventDefault();
                    last.focus();
                }
            } else {
                if ( document.activeElement === last ) {
                    e.preventDefault();
                    first.focus();
                }
            }
        } );
    }

} )();
