<?php
/**
 * Template Part: Founder Spotlight
 * ACF-ready: about_founder_name, about_founder_title, about_founder_bio,
 *            about_founder_quote, about_founder_image
 */
$name    = function_exists('get_field') ? get_field('about_founder_name')  : 'Mrs. Jyoti';
$title   = function_exists('get_field') ? get_field('about_founder_title') : 'Architect · Interior Designer · Vastu Consultant';
$bio     = function_exists('get_field') ? get_field('about_founder_bio')   : '';
$quote   = function_exists('get_field') ? get_field('about_founder_quote') : 'Design should improve everyday life.';
$image   = function_exists('get_field') ? get_field('about_founder_image') : null;

$default_bio = 'With decades of experience in architecture, interior design, and Vastu consultancy, Mrs. Jyoti has built Interior Shapes & Designs on a foundation of ethical practice, creative excellence, and deep respect for the client\'s vision. Her philosophy is simple: every space is an opportunity to elevate a life. Under her leadership, the firm has earned the trust of hundreds of families and businesses across India and beyond — not by following trends, but by designing with intention, integrity, and timeless clarity.';
?>
<section class="isd-about-founder isd-section" aria-label="Founder Spotlight">
    <div class="isd-container">
        <div class="isd-about-founder__grid">

            <!-- Portrait -->
            <div class="isd-about-founder__portrait-wrapper isd-fade-up">
                <div class="isd-about-founder__portrait-frame">
                    <?php if ( $image && isset($image['url']) ) : ?>
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $name ); ?>" class="isd-about-founder__portrait" loading="lazy">
                    <?php else : ?>
                    <svg viewBox="0 0 500 600" fill="none" xmlns="http://www.w3.org/2000/svg" class="isd-about-founder__portrait isd-about-founder__portrait--placeholder" aria-label="Founder portrait">
                        <rect width="500" height="600" fill="#EDE8DF"/>
                        <rect x="0" y="450" width="500" height="150" fill="#DDD5C8"/>
                        <!-- Figure silhouette -->
                        <circle cx="250" cy="180" r="90" fill="#C8BBA8"/>
                        <path d="M100 600 Q100 370 250 340 Q400 370 400 600Z" fill="#C8BBA8"/>
                        <!-- Gold accent -->
                        <rect x="30" y="30" width="440" height="540" rx="8" fill="none" stroke="#C8A45D" stroke-width="1" opacity="0.4"/>
                        <!-- Decorative elements -->
                        <line x1="0" y1="450" x2="500" y2="450" stroke="#C8A45D" stroke-width="1" opacity="0.3"/>
                        <path d="M30 570 L80 570" stroke="#C8A45D" stroke-width="1.5" opacity="0.5"/>
                    </svg>
                    <?php endif; ?>
                </div>
                <div class="isd-about-founder__portrait-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#C8A45D" stroke-width="1.2" aria-hidden="true"><path d="M12 2l1.9 5.8H20l-4.9 3.6 1.9 5.8L12 14l-4.9 3.2 1.9-5.8L4 7.8h6.1z"/></svg>
                    <span>Founder &amp; Principal Designer</span>
                </div>
            </div>

            <!-- Content -->
            <div class="isd-about-founder__content">
                <span class="isd-label isd-fade-up">Meet Our Founder</span>
                <h2 class="isd-about-founder__name isd-fade-up isd-delay-1"><?php echo esc_html( $name ?: 'Mrs. Jyoti' ); ?></h2>
                <p class="isd-about-founder__title isd-fade-up isd-delay-2"><?php echo esc_html( $title ?: 'Architect · Interior Designer · Vastu Consultant' ); ?></p>
                <div class="isd-about-founder__divider" aria-hidden="true"></div>
                <p class="isd-about-founder__bio isd-fade-up isd-delay-3">
                    <?php echo esc_html( $bio ?: $default_bio ); ?>
                </p>
                <div class="isd-about-founder__values isd-fade-up isd-delay-4">
                    <div class="isd-about-founder__value">Leadership</div>
                    <div class="isd-about-founder__value">Ethical Practice</div>
                    <div class="isd-about-founder__value">Client Satisfaction</div>
                    <div class="isd-about-founder__value">Timeless Vision</div>
                </div>
                <blockquote class="isd-about-founder__quote isd-fade-up isd-delay-5">
                    <span class="isd-about-founder__quote-mark" aria-hidden="true">&ldquo;</span>
                    <p><?php echo esc_html( $quote ?: 'Design should improve everyday life.' ); ?></p>
                    <cite>&mdash; <?php echo esc_html( $name ?: 'Mrs. Jyoti' ); ?></cite>
                </blockquote>
            </div>
        </div>
    </div>
</section>
