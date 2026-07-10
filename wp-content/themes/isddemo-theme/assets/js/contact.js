/**
 * Contact Page JavaScript
 * Indian Shape Designer - Luxury Theme
 *
 * Handles:
 *  - FAQ accordion (smooth height animation)
 *  - Consultation form validation + loading + success
 *  - Location email copy-to-clipboard
 *  - Map pin interaction
 */

( function () {
    'use strict';

    /* ─── FAQ ACCORDION ──────────────────────── */
    const faqTriggers = document.querySelectorAll( '.isd-faq__trigger' );

    faqTriggers.forEach( function ( trigger ) {
        trigger.addEventListener( 'click', function () {
            const panel    = document.getElementById( this.getAttribute( 'aria-controls' ) );
            const isOpen   = this.getAttribute( 'aria-expanded' ) === 'true';

            // Close all other panels
            faqTriggers.forEach( function ( t ) {
                if ( t === trigger ) return;
                const p = document.getElementById( t.getAttribute( 'aria-controls' ) );
                if ( p && ! p.hidden ) {
                    t.setAttribute( 'aria-expanded', 'false' );
                    collapsePanel( p );
                }
            } );

            if ( isOpen ) {
                this.setAttribute( 'aria-expanded', 'false' );
                collapsePanel( panel );
            } else {
                this.setAttribute( 'aria-expanded', 'true' );
                expandPanel( panel );
            }
        } );
    } );

    function expandPanel( panel ) {
        if ( ! panel ) return;
        panel.hidden = false;
        panel.style.overflow = 'hidden';
        panel.style.height   = '0px';
        // eslint-disable-next-line no-unused-expressions
        panel.offsetHeight; // force reflow
        panel.style.height = panel.scrollHeight + 'px';
        panel.addEventListener( 'transitionend', function handler() {
            panel.style.height   = '';
            panel.style.overflow = '';
            panel.removeEventListener( 'transitionend', handler );
        } );
    }

    function collapsePanel( panel ) {
        if ( ! panel ) return;
        panel.style.overflow = 'hidden';
        panel.style.height   = panel.scrollHeight + 'px';
        // eslint-disable-next-line no-unused-expressions
        panel.offsetHeight;
        panel.style.height = '0px';
        panel.addEventListener( 'transitionend', function handler() {
            panel.hidden         = true;
            panel.style.height   = '';
            panel.style.overflow = '';
            panel.removeEventListener( 'transitionend', handler );
        } );
    }

    /* ─── CONSULTATION FORM ──────────────────── */
    const form       = document.getElementById( 'isd-consult-form' );
    const submitBtn  = document.getElementById( 'isd-consult-submit' );
    const successMsg = document.getElementById( 'isd-consult-success' );

    if ( form && submitBtn ) {
        form.addEventListener( 'submit', function ( e ) {
            e.preventDefault();

            // Basic validation
            const required = form.querySelectorAll( '[required]' );
            let valid = true;

            required.forEach( function ( field ) {
                field.classList.remove( 'isd-input-error' );
                if ( ! field.value.trim() ) {
                    field.classList.add( 'isd-input-error' );
                    if ( valid ) field.focus();
                    valid = false;
                }
            } );

            if ( ! valid ) return;

            // Loading state
            submitBtn.classList.add( 'is-loading' );
            submitBtn.disabled = true;

            // Simulate async submission (swap for real AJAX/CF7 handler)
            setTimeout( function () {
                submitBtn.classList.remove( 'is-loading' );
                submitBtn.hidden = true;
                if ( successMsg ) {
                    successMsg.hidden = false;
                }
                // Reset form fields
                form.reset();
            }, 1800 );
        } );

        // Real-time error clearing
        form.querySelectorAll( '.isd-input-std, .isd-select-std, .isd-textarea-std' ).forEach( function ( field ) {
            field.addEventListener( 'input', function () {
                this.classList.remove( 'isd-input-error' );
            } );
        } );
    }

    /* ─── COPY EMAIL ─────────────────────────── */
    const copyBtns = document.querySelectorAll( '.isd-copy-email' );

    copyBtns.forEach( function ( btn ) {
        btn.addEventListener( 'click', function () {
            const email = this.dataset.email;
            if ( ! email ) return;

            if ( navigator.clipboard && navigator.clipboard.writeText ) {
                navigator.clipboard.writeText( email ).then( function () {
                    flashCopied( btn );
                } ).catch( function () {
                    fallbackCopy( email, btn );
                } );
            } else {
                fallbackCopy( email, btn );
            }
        } );
    } );

    function flashCopied( btn ) {
        const orig = btn.innerHTML;
        btn.innerHTML = '<svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true" style="width:14px;height:14px"><polyline points="3 8 7 12 13 5"/></svg> Copied!';
        btn.style.color = 'var(--color-accent)';
        setTimeout( function () {
            btn.innerHTML = orig;
            btn.style.color = '';
        }, 2000 );
    }

    function fallbackCopy( text, btn ) {
        const el = document.createElement( 'textarea' );
        el.value = text;
        el.style.cssText = 'position:fixed;opacity:0;';
        document.body.appendChild( el );
        el.select();
        try {
            document.execCommand( 'copy' );
            flashCopied( btn );
        } catch ( err ) { /* silent */ }
        document.body.removeChild( el );
    }

    /* ─── MAP PINS ───────────────────────────── */
    const mapPins = document.querySelectorAll( '.isd-contact-map__pin' );
    const mapIframe = document.querySelector( '.isd-contact-map__iframe' );

    const locationUrls = {
        'New Delhi':   'https://maps.google.com/maps?q=Shalimar+Bagh+East+New+Delhi+110088&output=embed&z=13',
        'Lucknow':     'https://maps.google.com/maps?q=Ganeshpuri+Colony+Near+Medical+College+Lucknow+226003&output=embed&z=13',
        'Saharanpur':  'https://maps.google.com/maps?q=Civil+Hospital+Chowk+Mission+Compound+Saharanpur&output=embed&z=13',
        'New York':    'https://maps.google.com/maps?q=25+Heitz+Place+Hicksville+New+York+11801&output=embed&z=13',
    };

    mapPins.forEach( function ( pin ) {
        pin.addEventListener( 'click', function () {
            mapPins.forEach( function ( p ) {
                p.classList.remove( 'is-active' );
                p.setAttribute( 'aria-pressed', 'false' );
            } );
            this.classList.add( 'is-active' );
            this.setAttribute( 'aria-pressed', 'true' );

            const city = this.textContent.trim();
            if ( mapIframe && locationUrls[ city ] ) {
                mapIframe.src = locationUrls[ city ];
            }
        } );
    } );

} )();
