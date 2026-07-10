<?php
/**
 * Template Part: Portfolio Teaser (Homepage)
 * A premium CTA section encouraging users to explore the portfolio.
 */
?>
<section class="isd-pf-teaser isd-section" aria-label="Explore Our Portfolio">
    <div class="isd-container">
        <div class="isd-pf-teaser__inner isd-fade-up">
            <div class="isd-pf-teaser__bg">
                <img src="https://images.unsplash.com/photo-1600210491369-e753d80a41f3?auto=format&fit=crop&w=1600&q=80" alt="Luxury interior design showcase" class="isd-pf-teaser__img" loading="lazy">
                <div class="isd-pf-teaser__overlay"></div>
            </div>
            
            <div class="isd-pf-teaser__content">
                <span class="isd-label isd-label--white isd-fade-up isd-delay-1">Our Work</span>
                <h2 class="isd-pf-teaser__heading isd-fade-up isd-delay-2">Designed Spaces.<br>Lasting Impressions.</h2>
                <p class="isd-pf-teaser__desc isd-fade-up isd-delay-3">Explore our collection of residential, commercial and luxury interior projects thoughtfully designed to combine beauty, comfort and functionality.</p>
                
                <div class="isd-pf-teaser__actions isd-fade-up isd-delay-4">
                    <a href="<?php echo esc_url( home_url( '/portfolio' ) ); ?>" class="isd-btn isd-btn--primary">Explore Portfolio</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Inline styling for homepage teaser to keep it contained without needing the full portfolio.css */
.isd-pf-teaser__inner {
    position: relative;
    border-radius: var(--radius-card);
    overflow: hidden;
    padding: 100px 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
}
.isd-pf-teaser__bg {
    position: absolute;
    inset: 0;
    z-index: 1;
}
.isd-pf-teaser__img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 1.5s ease;
}
.isd-pf-teaser__inner:hover .isd-pf-teaser__img {
    transform: scale(1.02);
}
.isd-pf-teaser__overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(17,17,17,0.85) 0%, rgba(17,17,17,0.4) 100%);
}
.isd-pf-teaser__content {
    position: relative;
    z-index: 2;
    max-width: 600px;
}
.isd-pf-teaser__heading {
    font-family: var(--font-heading);
    font-size: clamp(2rem, 4vw, 3rem);
    font-weight: 500;
    color: var(--color-white);
    margin: 16px 0 20px;
    line-height: 1.15;
}
.isd-pf-teaser__desc {
    font-family: var(--font-body);
    font-size: 1.0625rem;
    color: rgba(255,255,255,0.75);
    line-height: 1.7;
    margin-bottom: 32px;
}
</style>
