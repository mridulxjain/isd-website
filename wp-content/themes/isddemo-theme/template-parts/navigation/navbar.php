<?php
/**
 * Template Part: Global Navbar
 * Refactored for consistency, accessibility, and modern aesthetics.
 */

if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!-- Overlay for mobile drawer -->
<div class="isd-nav-overlay" id="isd-nav-overlay" aria-hidden="true"></div>

<header class="isd-nav" id="isd-global-nav" role="banner">
    <div class="isd-nav__container">
        
        <!-- Left: Logo -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="isd-nav__logo" aria-label="<?php bloginfo( 'name' ); ?> – Home">
            <!-- SVG Logo (Always Dark) -->
            <svg class="isd-nav__logo-mark" width="32" height="32" viewBox="0 0 36 36" fill="none" aria-hidden="true">
                <rect width="36" height="36" rx="8" fill="#111111"/>
                <path d="M8 28V12l10-8 10 8v16" stroke="#FFFFFF" stroke-width="1.8" fill="none"/>
                <path d="M14 28v-8h8v8" stroke="#FFFFFF" stroke-width="1.8" fill="none"/>
            </svg>
            <span class="isd-nav__logo-text">Interior Shapes<br><em>and Designs</em></span>
        </a>

        <!-- Center: Navigation Links -->
        <nav class="isd-nav__menu" aria-label="Primary Navigation">
            <ul class="isd-nav__list" role="list">
                <li class="isd-nav__item">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="isd-nav__link">Home</a>
                </li>
                <li class="isd-nav__item">
                    <a href="<?php echo esc_url( home_url( '/about' ) ); ?>" class="isd-nav__link">About</a>
                </li>
                
                <!-- Mega Menu Trigger -->
                <li class="isd-nav__item isd-nav__item--has-mega">
                    <button class="isd-nav__link isd-nav__link--btn" aria-haspopup="true" aria-expanded="false" id="isd-services-btn">
                        Our Services
                        <svg class="isd-nav__chevron" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 4l4 4 4-4"/></svg>
                    </button>
                    <?php get_template_part( 'template-parts/navigation/services-dropdown' ); ?>
                </li>

                <li class="isd-nav__item">
                    <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="isd-nav__link">Portfolio</a>
                </li>
                <li class="isd-nav__item">
                    <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="isd-nav__link">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Right: CTA Button -->
        <div class="isd-nav__actions">
            <a href="<?php echo esc_url( home_url( '/contact#consultation' ) ); ?>" class="isd-nav__cta">Book Consultation</a>
            
            <!-- Mobile Toggle -->
            <button class="isd-nav__toggle" id="isd-mobile-toggle" aria-expanded="false" aria-controls="isd-mobile-drawer" aria-label="Open menu">
                <span></span><span></span><span></span>
            </button>
        </div>

    </div>
</header>

<?php get_template_part( 'template-parts/navigation/mobile-menu' ); ?>
