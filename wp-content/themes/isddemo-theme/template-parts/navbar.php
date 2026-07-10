<?php
/**
 * Template Part: Navbar
 * Indian Shape Designer - Luxury Theme
 *
 * Fully custom HTML for pixel-perfect luxury mega menu.
 * Nav items hard-coded for bespoke UI control; URLs remain dynamic.
 */

if ( ! defined( 'ABSPATH' ) ) exit;
?>

<!-- OVERLAY for mega menu / mobile drawer -->
<div class="isd-overlay" id="isd-overlay" aria-hidden="true"></div>

<nav class="isd-navbar isd-navbar--transparent" id="isd-navbar" role="navigation" aria-label="Primary Navigation">
    <div class="isd-navbar__inner">

        <!-- ── LOGO ── -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="isd-navbar__logo" aria-label="<?php bloginfo( 'name' ); ?> – Home">
            <?php if ( has_custom_logo() ) :
                the_custom_logo();
            else : ?>
                <svg class="isd-navbar__logo-mark" width="36" height="36" viewBox="0 0 36 36" fill="none">
                    <rect width="36" height="36" rx="8" fill="#C8A45D"/>
                    <path d="M8 28V12l10-8 10 8v16" stroke="#fff" stroke-width="1.8" fill="none"/>
                    <path d="M14 28v-8h8v8" stroke="#fff" stroke-width="1.8" fill="none"/>
                </svg>
                <span class="isd-navbar__logo-text">Indian Shape<br><em>Designer</em></span>
            <?php endif; ?>
        </a>

        <!-- ── PRIMARY NAV (Desktop) ── -->
        <ul class="isd-navbar__nav" role="list" id="isd-primary-nav">

            <li class="isd-navbar__item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="isd-navbar__nav-link">Home</a>
            </li>

            <li class="isd-navbar__item">
                <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="isd-navbar__nav-link">About</a>
            </li>

            <!-- OUR SERVICES – with Mega Menu -->
            <li class="isd-navbar__item isd-navbar__item--has-mega" id="nav-services">
                <button
                    class="isd-navbar__nav-link isd-navbar__nav-link--btn"
                    aria-haspopup="true"
                    aria-expanded="false"
                    aria-controls="mega-menu-desktop"
                    id="nav-services-btn"
                >
                    Our Services
                    <svg class="isd-navbar__chevron" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                        <path d="M2 4l4 4 4-4"/>
                    </svg>
                </button>
                <?php get_template_part( 'components/mega-menu' ); ?>
            </li>

            <li class="isd-navbar__item">
                <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="isd-navbar__nav-link">Portfolio</a>
            </li>

            <li class="isd-navbar__item">
                <a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="isd-navbar__nav-link">Shop</a>
            </li>

            <li class="isd-navbar__item">
                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="isd-navbar__nav-link">Contact</a>
            </li>
        </ul>

        <!-- ── CTA BUTTON (Desktop) ── -->
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="isd-navbar__cta" id="isd-navbar-cta">
            Book Consultation
        </a>

        <!-- ── MOBILE HAMBURGER ── -->
        <button class="isd-navbar__toggle" id="isd-mobile-toggle" aria-expanded="false" aria-controls="isd-mobile-drawer" aria-label="Open navigation menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

    </div><!-- /.isd-navbar__inner -->
</nav>

<!-- ── MOBILE FULL-SCREEN DRAWER ── -->
<div class="isd-drawer" id="isd-mobile-drawer" role="dialog" aria-modal="true" aria-label="Mobile Navigation" hidden>

    <div class="isd-drawer__header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="isd-drawer__logo">
            <?php if ( has_custom_logo() ) :
                the_custom_logo();
            else : ?>
                <span class="isd-drawer__logo-text"><?php bloginfo( 'name' ); ?></span>
            <?php endif; ?>
        </a>
        <button class="isd-drawer__close" id="isd-drawer-close" aria-label="Close navigation menu">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 6L6 18M6 6l12 12"/></svg>
        </button>
    </div>

    <nav class="isd-drawer__nav" aria-label="Mobile Navigation">
        <ul class="isd-drawer__list" role="list">
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="isd-drawer__link">Home</a></li>
            <li><a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="isd-drawer__link">About</a></li>

            <!-- Accordion: Our Services -->
            <li class="isd-drawer__accordion">
                <button class="isd-drawer__accordion-trigger" aria-expanded="false">
                    Our Services
                    <svg class="isd-drawer__chevron" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 4l4 4 4-4"/></svg>
                </button>
                <div class="isd-drawer__accordion-panel" hidden>
                    <?php
                    // Reuse $isd_services if it is in scope (it was set in mega-menu.php),
                    // or redefine a minimal list here for the drawer.
                    $isd_mobile_services = [
                        [ 'id' => 'vaastu',       'title' => 'Vaastu',       'children' => [ 'Master Bedroom', 'Kitchen', 'Study Room', 'Kids Room', 'Washroom', 'Pooja Room' ] ],
                        [ 'id' => 'design',        'title' => 'Design',       'children' => [ 'Bedroom', 'Living Room', 'Kitchen', 'Bathroom', 'Kids Room', 'Courtyard' ] ],
                        [ 'id' => 'construction',  'title' => 'Construction', 'children' => [ 'Technical Aspects', 'Concrete Work', 'Electrical Work', 'Front Elevation', 'Landscaping' ] ],
                        [ 'id' => 'exterior',      'title' => 'Exterior',     'children' => [ 'Front Elevation', 'Landscaping', 'Security Lighting', 'Boundary Design', 'Garden Design' ] ],
                        [ 'id' => 'security',      'title' => 'Security',     'children' => [ 'CCTV', 'Smart Locks', 'Motion Sensors', 'Video Door Phone', 'Perimeter Security' ] ],
                    ];
                    foreach ( $isd_mobile_services as $ms ) : ?>
                    <div class="isd-drawer__service-group">
                        <a href="<?php echo esc_url( home_url( '/' . $ms['id'] ) ); ?>" class="isd-drawer__service-parent">
                            <?php echo esc_html( $ms['title'] ); ?>
                        </a>
                        <ul class="isd-drawer__service-children" role="list">
                            <?php foreach ( $ms['children'] as $child ) : ?>
                            <li>
                                <a href="<?php echo esc_url( home_url( '/' . $ms['id'] . '/' . sanitize_title( $child ) ) ); ?>" class="isd-drawer__service-child">
                                    <?php echo esc_html( $child ); ?>
                                    <svg viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M3 6h6M7 4l2 2-2 2"/></svg>
                                </a>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endforeach; ?>
                </div>
            </li>

            <li><a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="isd-drawer__link">Portfolio</a></li>
            <li><a href="<?php echo esc_url( home_url( '/shop' ) ); ?>" class="isd-drawer__link">Shop</a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="isd-drawer__link">Contact</a></li>
        </ul>
    </nav>

    <div class="isd-drawer__footer">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="isd-btn isd-btn--primary" style="width:100%;justify-content:center;">Book Consultation</a>
    </div>

</div><!-- /.isd-drawer -->
