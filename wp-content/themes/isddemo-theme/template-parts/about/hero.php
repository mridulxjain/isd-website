<?php
/**
 * Template Part: About Hero
 * ACF: about_hero_label, about_hero_heading, about_hero_desc, about_hero_btn1, about_hero_btn2, about_hero_image
 */
$label   = function_exists('get_field') ? get_field('about_hero_label')   : 'About Us';
$heading = function_exists('get_field') ? get_field('about_hero_heading') : 'A Legacy of Luxury,<br><em>Crafted for You.</em>';
$desc    = function_exists('get_field') ? get_field('about_hero_desc')    : 'We are a premier interior design studio dedicated to creating breathtaking, bespoke spaces. We believe that true luxury lies in the flawless harmony of aesthetics and function.';
$btn1    = function_exists('get_field') ? get_field('about_hero_btn1')    : ['title' => 'Talk To Us',        'url' => '/contact'];
$btn2    = function_exists('get_field') ? get_field('about_hero_btn2')    : ['title' => 'Explore Portfolio', 'url' => '/#portfolio'];
$image   = function_exists('get_field') ? get_field('about_hero_image')   : null;
?>
<section class="isd-ab-hero" aria-label="About Hero">
    <div class="isd-ab-hero__bg">
        <?php if ( $image && !empty($image['url']) ) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="" role="presentation" class="isd-ab-hero__photo" loading="eager">
        <?php else : ?>
            <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1920&q=80" alt="Luxury Interior" role="presentation" class="isd-ab-hero__photo" loading="eager">
        <?php endif; ?>
        <div class="isd-ab-hero__overlay"></div>
    </div>
    <div class="isd-container isd-ab-hero__inner">
        <div class="isd-ab-hero__content">
            <span class="isd-label isd-ab-hero__label isd-fade-up"><?php echo esc_html($label ?: 'About Us'); ?></span>
            <h1 class="isd-ab-hero__heading isd-fade-up isd-delay-1"><?php echo wp_kses_post($heading ?: 'Designing Timeless Spaces,<br>Built Around People.'); ?></h1>
            <p class="isd-ab-hero__desc isd-fade-up isd-delay-2"><?php echo esc_html($desc); ?></p>
            <div class="isd-ab-hero__actions isd-fade-up isd-delay-3">
                <a href="<?php echo esc_url($btn1['url'] ?? '/contact'); ?>" class="isd-btn isd-btn--primary"><?php echo esc_html($btn1['title'] ?? 'Talk To Us'); ?></a>
                <a href="<?php echo esc_url($btn2['url'] ?? '/#portfolio'); ?>" class="isd-btn isd-btn--outline-white"><?php echo esc_html($btn2['title'] ?? 'Explore Portfolio'); ?></a>
            </div>
        </div>
        <div class="isd-ab-hero__scroll" aria-hidden="true">
            <span>Scroll</span>
            <div class="isd-ab-hero__scroll-line"><div class="isd-ab-hero__scroll-dot"></div></div>
        </div>
    </div>
</section>
