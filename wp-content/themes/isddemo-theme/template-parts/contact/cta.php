<?php
/**
 * Template Part: Contact CTA Banner
 */
?>
<section class="isd-contact-cta" aria-label="Book Consultation CTA">
    <img
        src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=1920&q=80"
        alt=""
        class="isd-contact-cta__bg"
        aria-hidden="true"
        loading="lazy"
    >
    <div class="isd-contact-cta__overlay" aria-hidden="true"></div>
    <div class="isd-contact-cta__content isd-fade-up">
        <span class="isd-label" style="color:var(--color-accent)">Start Your Journey</span>
        <h2 class="isd-contact-cta__heading">Ready to transform<br><em>your space?</em></h2>
        <p class="isd-contact-cta__desc">Book your consultation today and let&rsquo;s design something extraordinary.</p>
        <div class="isd-contact-cta__actions">
            <a href="#consultation" class="isd-btn isd-btn--primary" style="font-size:1rem;padding:16px 40px;">Book Consultation</a>
            <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="isd-btn isd-btn--outline-white" style="font-size:1rem;padding:16px 40px;">View Portfolio</a>
        </div>
    </div>
</section>
