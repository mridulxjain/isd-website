<?php
/**
 * Template Part: Contact CTA (Centered, Elegant)
 */

$heading = function_exists('get_field') ? get_field('cta_heading') : "Let's Create Something Extraordinary";
$desc    = function_exists('get_field') ? get_field('cta_desc')    : "Whether you're building your dream home or transforming a commercial space, our designers are ready to bring your vision to life.";
$bg      = function_exists('get_field') ? get_field('cta_bg')      : null;
?>
<section class="isd-contact-cta" aria-labelledby="cta-heading">
    <div class="isd-contact-cta__bg" aria-hidden="true">
        <?php if ( $bg && !empty($bg['url']) ) : ?>
            <img src="<?php echo esc_url($bg['url']); ?>" alt="" loading="lazy">
        <?php else : ?>
            <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=1920&q=80" alt="" loading="lazy">
        <?php endif; ?>
    </div>
    <div class="isd-contact-cta__overlay" aria-hidden="true"></div>

    <div class="isd-container isd-contact-cta__inner">
        <h2 id="cta-heading" class="isd-contact-cta__heading"><?php echo esc_html($heading); ?></h2>
        <p class="isd-contact-cta__desc"><?php echo esc_html($desc); ?></p>
        
        <div class="isd-contact-cta__actions">
            <a href="#consultation" class="isd-btn isd-btn--primary">Book Consultation</a>
            <a href="tel:+919876543210" class="isd-btn isd-btn--outline-white">Call Us</a>
        </div>
        
        <div class="isd-contact-cta__contacts">
            <a href="tel:+919876543210" class="isd-contact-cta__link">+91 98765 43210</a>
            <a href="mailto:hello@indianshapedesigner.com" class="isd-contact-cta__link">hello@indianshapedesigner.com</a>
        </div>
        
        <div class="isd-contact-cta__badge">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
            500+ Projects Completed
        </div>
    </div>
</section>
