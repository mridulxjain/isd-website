<?php
/**
 * Template Part: About Intro (Homepage Teaser)
 * A minimal section pointing visitors to /about
 */
$intro_label   = function_exists('get_field') ? get_field('hp_about_label')   : 'About Us';
$intro_heading = function_exists('get_field') ? get_field('hp_about_heading') : "A Studio Built on Craft,\nDriven by Design.";
$intro_text    = function_exists('get_field') ? get_field('hp_about_text')    : 'Interior Shapes and Design is a New Delhi-based design studio creating luxury interiors, exteriors and turnkey spaces for discerning clients across India and internationally.';
$intro_image   = function_exists('get_field') ? get_field('hp_about_image')   : null;
?>
<section class="isd-hp-about isd-section" aria-label="About the Studio">
    <div class="isd-container">
        <div class="isd-hp-about__grid">
            <div class="isd-hp-about__image-col isd-fade-up">
                <div class="isd-hp-about__image-wrap">
                    <?php if ( $intro_image && !empty($intro_image['url']) ) : ?>
                        <img src="<?php echo esc_url($intro_image['url']); ?>" alt="<?php echo esc_attr($intro_image['alt'] ?? 'Design Studio'); ?>" class="isd-hp-about__image" loading="lazy">
                    <?php else : ?>
                        <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=900&q=80" alt="Luxury interior design studio workspace" class="isd-hp-about__image" loading="lazy">
                    <?php endif; ?>
                    <div class="isd-hp-about__badge">
                        <span class="isd-hp-about__badge-num">15+</span>
                        <span class="isd-hp-about__badge-txt">Years of Excellence</span>
                    </div>
                </div>
            </div>
            <div class="isd-hp-about__content isd-fade-up isd-delay-2">
                <span class="isd-label"><?php echo esc_html($intro_label ?: 'About Us'); ?></span>
                <h2 class="isd-hp-about__heading"><?php echo nl2br(esc_html($intro_heading ?: "A Studio Built on Craft,\nDriven by Design.")); ?></h2>
                <p class="isd-hp-about__text"><?php echo esc_html($intro_text); ?></p>
                <div class="isd-hp-about__stats">
                    <div class="isd-hp-about__stat">
                        <strong>500+</strong><span>Projects Delivered</span>
                    </div>
                    <div class="isd-hp-about__stat">
                        <strong>4</strong><span>Office Locations</span>
                    </div>
                    <div class="isd-hp-about__stat">
                        <strong>98%</strong><span>Client Satisfaction</span>
                    </div>
                </div>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="isd-btn isd-btn--outline">Learn Our Story</a>
            </div>
        </div>
    </div>
</section>
