<?php
/**
 * Template Part: Portfolio Hero
 */
$bg_img = 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&w=1800&q=80';
?>
<section class="isd-pf-hero" aria-label="Portfolio Hero">
    <div class="isd-pf-hero__bg">
        <img src="<?php echo esc_url($bg_img); ?>" alt="Architecture" class="isd-pf-hero__photo" loading="eager">
        <div class="isd-pf-hero__overlay"></div>
    </div>
    
    <div class="isd-container isd-pf-hero__inner">
        <div class="isd-pf-hero__content">
            <span class="isd-label isd-pf-hero__label isd-fade-up">Our Portfolio</span>
            <h1 class="isd-pf-hero__heading isd-fade-up isd-delay-1">Designed Spaces.<br>Lasting Impressions.</h1>
            <p class="isd-pf-hero__desc isd-fade-up isd-delay-2">Explore our collection of residential, commercial and luxury interior projects thoughtfully designed to combine beauty, comfort and functionality.</p>
            
            <div class="isd-pf-hero__actions isd-fade-up isd-delay-3">
                <a href="#projects" class="isd-btn isd-btn--primary">Explore Projects</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="isd-btn isd-btn--outline-white">Get Quotation</a>
            </div>
        </div>

        <div class="isd-pf-hero__badges isd-fade-up isd-delay-4">
            <div class="isd-pf-hero__badge">
                <strong>500+</strong>
                <span>Completed Projects</span>
            </div>
            <div class="isd-pf-hero__badge">
                <strong>15+</strong>
                <span>Years Experience</span>
            </div>
            <div class="isd-pf-hero__badge">
                <strong>Global</strong>
                <span>India & International</span>
            </div>
        </div>
    </div>
</section>
