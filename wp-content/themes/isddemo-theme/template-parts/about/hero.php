<?php
/**
 * Template Part: About Hero
 * ACF-ready: about_hero_label, about_hero_heading, about_hero_desc,
 *            about_hero_btn_primary, about_hero_btn_secondary
 */
$label    = function_exists('get_field') ? get_field('about_hero_label')         : 'About Us';
$heading  = function_exists('get_field') ? get_field('about_hero_heading')       : 'Designing Timeless Spaces,<br>Built Around People.';
$desc     = function_exists('get_field') ? get_field('about_hero_desc')          : 'We create interiors and exteriors that combine functionality, creativity and timeless elegance — crafted for the way you live.';
$btn1     = function_exists('get_field') ? get_field('about_hero_btn_primary')   : ['title' => 'Talk To Us',     'url' => '/contact'];
$btn2     = function_exists('get_field') ? get_field('about_hero_btn_secondary') : ['title' => 'View Projects',  'url' => '/#portfolio'];
?>
<section class="isd-about-hero" aria-label="About Hero">
    <div class="isd-about-hero__overlay" aria-hidden="true"></div>
    <div class="isd-about-hero__grain" aria-hidden="true"></div>
    <div class="isd-container isd-about-hero__inner">
        <div class="isd-about-hero__content">
            <span class="isd-label isd-fade-up"><?php echo esc_html( $label ?: 'About Us' ); ?></span>
            <h1 class="isd-about-hero__heading isd-fade-up isd-delay-1">
                <?php echo wp_kses_post( $heading ?: 'Designing Timeless Spaces,<br>Built Around People.' ); ?>
            </h1>
            <p class="isd-about-hero__desc isd-fade-up isd-delay-2">
                <?php echo esc_html( $desc ?: 'We create interiors and exteriors that combine functionality, creativity and timeless elegance.' ); ?>
            </p>
            <div class="isd-about-hero__actions isd-fade-up isd-delay-3">
                <a href="<?php echo esc_url( ($btn1['url'] ?? '/contact') ); ?>" class="isd-btn isd-btn--primary">
                    <?php echo esc_html( ($btn1['title'] ?? 'Talk To Us') ); ?>
                </a>
                <a href="<?php echo esc_url( ($btn2['url'] ?? '/#portfolio') ); ?>" class="isd-btn isd-btn--outline-white">
                    <?php echo esc_html( ($btn2['title'] ?? 'View Projects') ); ?>
                </a>
            </div>
        </div>
        <div class="isd-about-hero__scroll isd-fade-up isd-delay-4" aria-hidden="true">
            <span class="isd-about-hero__scroll-label">Scroll</span>
            <div class="isd-about-hero__scroll-line">
                <div class="isd-about-hero__scroll-dot"></div>
            </div>
        </div>
    </div>
    <!-- Architectural background texture -->
    <div class="isd-about-hero__bg" aria-hidden="true">
        <svg viewBox="0 0 1440 900" fill="none" preserveAspectRatio="xMidYMid slice" xmlns="http://www.w3.org/2000/svg">
            <rect width="1440" height="900" fill="#1a1a18"/>
            <!-- Architectural grid -->
            <line x1="240" y1="0" x2="240" y2="900" stroke="#ffffff" stroke-width="0.3" opacity="0.08"/>
            <line x1="480" y1="0" x2="480" y2="900" stroke="#ffffff" stroke-width="0.3" opacity="0.08"/>
            <line x1="720" y1="0" x2="720" y2="900" stroke="#ffffff" stroke-width="0.3" opacity="0.08"/>
            <line x1="960" y1="0" x2="960" y2="900" stroke="#ffffff" stroke-width="0.3" opacity="0.08"/>
            <line x1="1200" y1="0" x2="1200" y2="900" stroke="#ffffff" stroke-width="0.3" opacity="0.08"/>
            <line x1="0" y1="180" x2="1440" y2="180" stroke="#ffffff" stroke-width="0.3" opacity="0.08"/>
            <line x1="0" y1="360" x2="1440" y2="360" stroke="#ffffff" stroke-width="0.3" opacity="0.08"/>
            <line x1="0" y1="540" x2="1440" y2="540" stroke="#ffffff" stroke-width="0.3" opacity="0.08"/>
            <line x1="0" y1="720" x2="1440" y2="720" stroke="#ffffff" stroke-width="0.3" opacity="0.08"/>
            <!-- Gold accent lines -->
            <line x1="0" y1="0" x2="720" y2="900" stroke="#C8A45D" stroke-width="0.5" opacity="0.15"/>
            <line x1="1440" y1="0" x2="720" y2="900" stroke="#C8A45D" stroke-width="0.5" opacity="0.1"/>
            <!-- Room outline -->
            <rect x="400" y="200" width="640" height="480" fill="none" stroke="#C8A45D" stroke-width="0.8" opacity="0.2"/>
            <line x1="400" y1="560" x2="1040" y2="560" stroke="#C8A45D" stroke-width="0.5" opacity="0.2"/>
            <line x1="720" y1="200" x2="720" y2="560" stroke="#C8A45D" stroke-width="0.3" opacity="0.15"/>
        </svg>
    </div>
</section>
