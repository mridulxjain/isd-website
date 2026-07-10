<?php
/**
 * Template Part: Navbar
 * Indian Shape Designer - Luxury Theme
 */
?>
<div id="isd-drawer-overlay" class="isd-drawer__overlay" aria-hidden="true"></div>

<nav id="isd-navbar" class="isd-navbar isd-navbar--transparent" role="navigation" aria-label="Primary Navigation">
    <div class="isd-navbar__inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="isd-navbar__logo" rel="home">
            <?php if ( has_custom_logo() ) : the_custom_logo();
            else : ?>
                <span class="isd-navbar__logo-text"><?php bloginfo( 'name' ); ?></span>
            <?php endif; ?>
        </a>
        <nav class="isd-navbar__nav">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="isd-navbar__nav-link is-active">Home</a>
            <a href="#about" class="isd-navbar__nav-link">About</a>
            <a href="#services" class="isd-navbar__nav-link">Services</a>
            <a href="#projects" class="isd-navbar__nav-link">Projects</a>
            <?php if ( class_exists( 'WooCommerce' ) ) : ?>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="isd-navbar__nav-link">Shop</a>
            <?php endif; ?>
            <a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/blog' ) ); ?>" class="isd-navbar__nav-link">Blog</a>
            <a href="#contact" class="isd-navbar__nav-link">Contact</a>
        </nav>
        <a href="#contact" class="isd-navbar__cta">Book Consultation</a>
        <button id="isd-nav-toggle" class="isd-navbar__toggle" aria-expanded="false" aria-controls="isd-drawer" aria-label="Open mobile menu">
            <span></span><span></span><span></span>
        </button>
    </div>
</nav>

<div id="isd-drawer" class="isd-drawer" aria-hidden="true">
    <nav class="isd-drawer__nav">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="isd-drawer__link">Home</a>
        <a href="#about" class="isd-drawer__link">About</a>
        <a href="#services" class="isd-drawer__link">Services</a>
        <a href="#projects" class="isd-drawer__link">Projects</a>
        <a href="#blog" class="isd-drawer__link">Blog</a>
        <a href="#contact" class="isd-drawer__link">Contact</a>
    </nav>
    <a href="#contact" class="isd-btn isd-btn--primary" style="width:100%;text-align:center;margin-top:2rem;">Book Consultation</a>
</div>
