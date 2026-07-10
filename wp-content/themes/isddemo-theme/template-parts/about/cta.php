<?php
/**
 * Template Part: Talk To Us CTA
 * ACF: about_cta_image, about_cta_heading, about_cta_desc, about_cta_btn1, about_cta_btn2
 */
$image   = function_exists('get_field') ? get_field('about_cta_image')   : null;
$heading = function_exists('get_field') ? get_field('about_cta_heading') : "Let's Build Something Extraordinary Together";
$desc    = function_exists('get_field') ? get_field('about_cta_desc')    : "Whether you're building your dream home or transforming a commercial space, our designers are ready to bring your vision to life.";
$btn1    = function_exists('get_field') ? get_field('about_cta_btn1')    : ['title' => 'Talk To Us',        'url' => '/contact'];
$btn2    = function_exists('get_field') ? get_field('about_cta_btn2')    : ['title' => 'Book Consultation', 'url' => '/contact#consultation'];
?>
<section class="isd-ab-cta" aria-label="Call To Action">
    <div class="isd-ab-cta__bg">
        <?php if ( $image && !empty($image['url']) ) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="" role="presentation" class="isd-ab-cta__photo" loading="lazy">
        <?php else : ?>
            <img src="https://images.unsplash.com/photo-1600210492493-0946911123ea?auto=format&fit=crop&w=1800&q=75" alt="" role="presentation" class="isd-ab-cta__photo" loading="lazy">
        <?php endif; ?>
        <div class="isd-ab-cta__overlay"></div>
    </div>
    <div class="isd-container isd-ab-cta__inner">
        <span class="isd-label isd-ab-cta__label isd-fade-up">Start Your Project</span>
        <h2 class="isd-ab-cta__heading isd-fade-up isd-delay-1"><?php echo wp_kses_post($heading); ?></h2>
        <p class="isd-ab-cta__desc isd-fade-up isd-delay-2"><?php echo esc_html($desc); ?></p>
        <div class="isd-ab-cta__actions isd-fade-up isd-delay-3">
            <a href="<?php echo esc_url($btn1['url'] ?? '/contact'); ?>" class="isd-btn isd-btn--primary"><?php echo esc_html($btn1['title'] ?? 'Talk To Us'); ?></a>
            <a href="<?php echo esc_url($btn2['url'] ?? '/contact#consultation'); ?>" class="isd-btn isd-btn--outline-white"><?php echo esc_html($btn2['title'] ?? 'Book Consultation'); ?></a>
        </div>
    </div>
</section>
