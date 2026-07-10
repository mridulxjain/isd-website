<?php
/**
 * Template Part: Talk To Us CTA
 * ACF-ready: about_cta_heading, about_cta_desc, about_cta_btn_primary, about_cta_btn_secondary
 */
$heading = function_exists('get_field') ? get_field('about_cta_heading')       : "Let's Create Something Beautiful Together";
$desc    = function_exists('get_field') ? get_field('about_cta_desc')          : 'Whether you are designing your dream home, renovating an office or planning a luxury interior — our designers are ready to help.';
$btn1    = function_exists('get_field') ? get_field('about_cta_btn_primary')   : ['title' => 'Talk To Us',         'url' => '/contact'];
$btn2    = function_exists('get_field') ? get_field('about_cta_btn_secondary') : ['title' => 'Book Consultation',  'url' => '/contact#consultation'];
?>
<section class="isd-about-cta" aria-label="Talk To Us">
    <div class="isd-about-cta__bg" aria-hidden="true">
        <svg viewBox="0 0 1440 700" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
            <rect width="1440" height="700" fill="#111110"/>
            <rect x="0" y="0" width="1440" height="700" fill="#0a0a09" opacity="0.7"/>
            <!-- Elegant room lines -->
            <line x1="720" y1="0" x2="0" y2="700" stroke="#C8A45D" stroke-width="0.5" opacity="0.1"/>
            <line x1="720" y1="0" x2="1440" y2="700" stroke="#C8A45D" stroke-width="0.5" opacity="0.1"/>
            <line x1="0" y1="350" x2="1440" y2="350" stroke="#C8A45D" stroke-width="0.3" opacity="0.08"/>
            <circle cx="720" cy="350" r="280" fill="none" stroke="#C8A45D" stroke-width="0.4" opacity="0.12"/>
            <circle cx="720" cy="350" r="180" fill="none" stroke="#C8A45D" stroke-width="0.3" opacity="0.08"/>
        </svg>
    </div>
    <div class="isd-container isd-about-cta__inner">
        <span class="isd-label isd-about-cta__label isd-fade-up">Start Your Project</span>
        <h2 class="isd-about-cta__heading isd-fade-up isd-delay-1">
            <?php echo wp_kses_post( $heading ?: "Let's Create Something Beautiful Together" ); ?>
        </h2>
        <p class="isd-about-cta__desc isd-fade-up isd-delay-2">
            <?php echo esc_html( $desc ?: 'Whether you are designing your dream home, renovating an office or planning a luxury interior — our designers are ready to help.' ); ?>
        </p>
        <div class="isd-about-cta__actions isd-fade-up isd-delay-3">
            <a href="<?php echo esc_url( ($btn1['url'] ?? '/contact') ); ?>" class="isd-btn isd-btn--primary">
                <?php echo esc_html( ($btn1['title'] ?? 'Talk To Us') ); ?>
            </a>
            <a href="<?php echo esc_url( ($btn2['url'] ?? '/contact#consultation') ); ?>" class="isd-btn isd-btn--outline-white">
                <?php echo esc_html( ($btn2['title'] ?? 'Book Consultation') ); ?>
            </a>
        </div>
        <div class="isd-about-cta__offices isd-fade-up isd-delay-4">
            <span>Delhi</span>
            <span class="isd-about-cta__sep" aria-hidden="true">·</span>
            <span>Lucknow</span>
            <span class="isd-about-cta__sep" aria-hidden="true">·</span>
            <span>Saharanpur</span>
            <span class="isd-about-cta__sep" aria-hidden="true">·</span>
            <span>New York</span>
        </div>
    </div>
</section>
