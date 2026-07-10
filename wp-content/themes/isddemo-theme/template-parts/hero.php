<?php
/**
 * Template Part: Hero Section
 * Indian Shape Designer - Luxury Theme
 */
$hero_title    = function_exists( 'get_field' ) ? get_field( 'hero_title' ) : 'Crafting Timeless <em>Luxury</em> Interiors';
$hero_subtitle = function_exists( 'get_field' ) ? get_field( 'hero_subtitle' ) : 'Transforming spaces into bespoke masterpieces that reflect your unique lifestyle across Delhi NCR.';
$hero_bg       = function_exists( 'get_field' ) ? get_field( 'hero_bg_image' ) : null;
?>
<section id="home" class="isd-hero">
    <div class="isd-hero__bg" aria-hidden="true">
        <?php if ( $hero_bg ) : ?>
            <img src="<?php echo esc_url( $hero_bg['url'] ); ?>" alt="" class="isd-hero__bg-img" loading="eager">
        <?php else : ?>
            <img src="https://images.unsplash.com/photo-1600210492486-724fe5c67fb0?auto=format&fit=crop&w=1920&q=80" alt="" class="isd-hero__bg-img" loading="eager">
        <?php endif; ?>
        <div class="isd-hero__overlay"></div>
    </div>
    <div class="isd-hero__content isd-fade-up">
        <span class="isd-hero__eyebrow">Premium Interior Design &middot; Delhi NCR</span>
        <h1 class="isd-hero__title"><?php echo wp_kses( $hero_title, [ 'em' => [], 'br' => [] ] ); ?></h1>
        <p class="isd-hero__subtitle"><?php echo esc_html( $hero_subtitle ); ?></p>
        <div class="isd-hero__actions">
            <a href="#projects" class="isd-btn isd-btn--primary">Explore Projects</a>
            <a href="#contact" class="isd-btn isd-btn--outline-white">Book Consultation</a>
        </div>
    </div>
    <div class="isd-hero__card isd-fade-up isd-delay-3" aria-hidden="true">
        <div class="isd-hero__card-stars">
            <?php for ( $i = 0; $i < 5; $i++ ) : ?>
            <svg class="isd-hero__card-star" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <?php endfor; ?>
        </div>
        <div class="isd-hero__card-rating">4.9&#9733;</div>
        <div class="isd-hero__card-label">Google Rating</div>
        <div class="isd-hero__card-divider"></div>
        <div class="isd-hero__card-stat">500+</div>
        <div class="isd-hero__card-label">Happy Clients</div>
    </div>
    <a href="#stats" class="isd-hero__scroll" aria-label="Scroll down">
        <div class="isd-hero__scroll-line"></div>
        <span>Scroll</span>
    </a>
</section>
