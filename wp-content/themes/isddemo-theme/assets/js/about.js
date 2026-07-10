/**
 * About Page JS
 * Indian Shape Designer - Luxury Theme
 *
 * Handles:
 * - Animated intersection observer for fade-up elements
 * - Animated stat counters
 * - Timeline line-fill animation
 * - FAQ accordion (re-used from contact page logic)
 */

( function () {
    'use strict';

    /* =====================================================
       1. INTERSECTION OBSERVER - Fade-up + Reveals
    ===================================================== */
    const observeAll = ( selector, options = {} ) => {
        const elements = document.querySelectorAll( selector );
        if ( ! elements.length ) return;

        const observer = new IntersectionObserver( ( entries ) => {
            entries.forEach( entry => {
                if ( entry.isIntersecting ) {
                    entry.target.classList.add( 'is-visible' );
                    observer.unobserve( entry.target );
                }
            } );
        }, { threshold: 0.15, rootMargin: '0px 0px -60px 0px', ...options } );

        elements.forEach( el => observer.observe( el ) );
    };

    observeAll( '.isd-fade-up' );
    observeAll( '.isd-scale-in' );
    observeAll( '.isd-blur-reveal' );

    /* =====================================================
       2. STAT COUNTERS
    ===================================================== */
    const animateCounter = ( el ) => {
        const target  = parseInt( el.dataset.target, 10 );
        const suffix  = el.dataset.suffix || '';
        const duration = 1800;
        const start    = performance.now();

        const tick = ( now ) => {
            const elapsed  = now - start;
            const progress = Math.min( elapsed / duration, 1 );
            const eased    = 1 - Math.pow( 1 - progress, 4 );
            const current  = Math.floor( eased * target );

            el.textContent = current + suffix;

            if ( progress < 1 ) requestAnimationFrame( tick );
            else el.textContent = target + suffix;
        };

        requestAnimationFrame( tick );
    };

    const statsObserver = new IntersectionObserver( ( entries ) => {
        entries.forEach( entry => {
            if ( entry.isIntersecting ) {
                animateCounter( entry.target );
                statsObserver.unobserve( entry.target );
            }
        } );
    }, { threshold: 0.5 } );

    document.querySelectorAll( '.isd-about-stats__num[data-target]' ).forEach( el => {
        statsObserver.observe( el );
    } );

    /* =====================================================
       3. TIMELINE LINE FILL
    ===================================================== */
    const lineObserver = new IntersectionObserver( ( entries ) => {
        entries.forEach( entry => {
            if ( entry.isIntersecting ) {
                entry.target.classList.add( 'is-visible' );
                lineObserver.unobserve( entry.target );
            }
        } );
    }, { threshold: 0.3 } );

    document.querySelectorAll( '.isd-about-timeline__line-fill' ).forEach( el => {
        lineObserver.observe( el );
    } );

    /* =====================================================
       4. FAQ ACCORDION (About page)
    ===================================================== */
    const triggers = document.querySelectorAll( '.isd-faq-minimal__trigger' );
    triggers.forEach( trigger => {
        trigger.addEventListener( 'click', () => {
            const expanded = trigger.getAttribute( 'aria-expanded' ) === 'true';
            const panelId  = trigger.getAttribute( 'aria-controls' );
            const panel    = document.getElementById( panelId );

            // Close all
            triggers.forEach( t => {
                t.setAttribute( 'aria-expanded', 'false' );
                const p = document.getElementById( t.getAttribute( 'aria-controls' ) );
                if ( p ) p.hidden = true;
            } );

            // Open clicked (if it was closed)
            if ( ! expanded ) {
                trigger.setAttribute( 'aria-expanded', 'true' );
                if ( panel ) panel.hidden = false;
            }
        } );
    } );

    /* =====================================================
       5. PARALLAX HERO
    ===================================================== */
    const hero = document.querySelector( '.isd-about-hero' );
    if ( hero ) {
        let ticking = false;
        window.addEventListener( 'scroll', () => {
            if ( ! ticking ) {
                requestAnimationFrame( () => {
                    const scrolled = window.pageYOffset;
                    const bg = hero.querySelector( '.isd-about-hero__bg' );
                    if ( bg ) bg.style.transform = `translateY(${ scrolled * 0.3 }px)`;
                    ticking = false;
                } );
                ticking = true;
            }
        }, { passive: true } );
    }

} )();
