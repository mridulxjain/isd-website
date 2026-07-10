<?php
/**
 * Template Part: Company Story
 * ACF-ready: about_story_label, about_story_heading, about_story_body, about_story_image
 */
$label   = function_exists('get_field') ? get_field('about_story_label')   : 'Our Story';
$heading = function_exists('get_field') ? get_field('about_story_heading') : 'From New Delhi,<br>To the World.';
$body    = function_exists('get_field') ? get_field('about_story_body')    : '';
$image   = function_exists('get_field') ? get_field('about_story_image')   : null;

$default_body = [
    'Born in the heart of New Delhi, Interior Shapes & Designs has grown from a focused design practice into one of India\'s most trusted interior and exterior design firms — with a presence that now extends internationally.',
    'We take on turnkey projects from conception to completion, blending creativity, technical precision, and an unwavering commitment to quality. Every space we create is a balance of form and function — thoughtfully designed for the people who inhabit it.',
    'Behind every project is a team of experienced architects, designers and craftsmen who share a single conviction: that great design is not a luxury, but a right.',
];
?>
<section class="isd-about-story isd-section" aria-label="Company Story">
    <div class="isd-container">
        <div class="isd-about-story__grid">

            <!-- Image -->
            <div class="isd-about-story__image-wrapper isd-fade-up">
                <div class="isd-about-story__image-frame">
                    <?php if ( $image && isset($image['url']) ) : ?>
                    <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ?? 'Interior Design Studio' ); ?>" class="isd-about-story__image" loading="lazy">
                    <?php else : ?>
                    <!-- Premium SVG illustration placeholder -->
                    <svg viewBox="0 0 600 750" fill="none" xmlns="http://www.w3.org/2000/svg" class="isd-about-story__image isd-about-story__image--placeholder" aria-hidden="true">
                        <rect width="600" height="750" fill="#EDE8DF"/>
                        <rect x="0" y="580" width="600" height="170" fill="#DDD5C8"/>
                        <!-- Window -->
                        <rect x="340" y="80" width="200" height="280" rx="4" fill="#C8D8E8" opacity="0.6"/>
                        <line x1="440" y1="80" x2="440" y2="360" stroke="#B0C4D4" stroke-width="1"/>
                        <line x1="340" y1="220" x2="540" y2="220" stroke="#B0C4D4" stroke-width="1"/>
                        <!-- Sofa -->
                        <rect x="60" y="480" width="360" height="100" rx="12" fill="#C8A45D" opacity="0.35"/>
                        <rect x="40" y="460" width="380" height="40" rx="8" fill="#C8A45D" opacity="0.5"/>
                        <rect x="40" y="460" width="30" height="120" rx="6" fill="#A88A4A" opacity="0.5"/>
                        <rect x="390" y="460" width="30" height="120" rx="6" fill="#A88A4A" opacity="0.5"/>
                        <!-- Coffee Table -->
                        <rect x="160" y="580" width="160" height="10" rx="3" fill="#8B7355" opacity="0.6"/>
                        <rect x="180" y="590" width="10" height="40" rx="2" fill="#8B7355" opacity="0.5"/>
                        <rect x="290" y="590" width="10" height="40" rx="2" fill="#8B7355" opacity="0.5"/>
                        <!-- Plant -->
                        <rect x="500" y="440" width="20" height="140" rx="4" fill="#8B7355" opacity="0.4"/>
                        <ellipse cx="510" cy="420" rx="45" ry="55" fill="#4A7C59" opacity="0.5"/>
                        <ellipse cx="490" cy="398" rx="30" ry="38" fill="#5A8F6A" opacity="0.45"/>
                        <!-- Gold accent -->
                        <rect x="0" y="576" width="600" height="2" fill="#C8A45D" opacity="0.4"/>
                        <!-- Wall art -->
                        <rect x="80" y="100" width="160" height="200" rx="4" fill="#FAF8F5" opacity="0.8"/>
                        <rect x="90" y="110" width="140" height="180" rx="2" fill="#EDE8DF"/>
                        <line x1="90" y1="290" x2="230" y2="110" stroke="#C8A45D" stroke-width="0.8" opacity="0.6"/>
                        <circle cx="160" cy="200" r="30" fill="none" stroke="#C8A45D" stroke-width="0.8" opacity="0.4"/>
                    </svg>
                    <?php endif; ?>
                    <div class="isd-about-story__image-accent" aria-hidden="true"></div>
                </div>
                <!-- Gold stat chip -->
                <div class="isd-about-story__chip" aria-label="Founded in New Delhi">
                    <span class="isd-about-story__chip-num">2008</span>
                    <span class="isd-about-story__chip-label">Founded</span>
                </div>
            </div>

            <!-- Content -->
            <div class="isd-about-story__content">
                <span class="isd-label isd-fade-up"><?php echo esc_html( $label ?: 'Our Story' ); ?></span>
                <h2 class="isd-about-story__heading isd-fade-up isd-delay-1">
                    <?php echo wp_kses_post( $heading ?: 'From New Delhi,<br>To the World.' ); ?>
                </h2>
                <div class="isd-about-story__divider" aria-hidden="true"></div>
                <?php if ( $body ) : ?>
                    <div class="isd-about-story__body"><?php echo wp_kses_post( $body ); ?></div>
                <?php else : ?>
                    <?php foreach ( $default_body as $i => $para ) : ?>
                    <p class="isd-about-story__para isd-fade-up isd-delay-<?php echo $i + 2; ?>"><?php echo esc_html( $para ); ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>
                <div class="isd-about-story__markers isd-fade-up isd-delay-4">
                    <div class="isd-about-story__marker">
                        <span class="isd-about-story__marker-icon" aria-hidden="true">
                            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M10 2l1.5 4.5H16l-3.5 2.5 1.5 4.5L10 11l-4 2.5 1.5-4.5L4 6.5h4.5z"/></svg>
                        </span>
                        <span>New Delhi Headquarters</span>
                    </div>
                    <div class="isd-about-story__marker">
                        <span class="isd-about-story__marker-icon" aria-hidden="true">
                            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="10" cy="10" r="8"/><path d="M10 2a8 8 0 010 16M2 10h16"/></svg>
                        </span>
                        <span>India &amp; International Projects</span>
                    </div>
                    <div class="isd-about-story__marker">
                        <span class="isd-about-story__marker-icon" aria-hidden="true">
                            <svg viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M3 10h14M10 3l7 7-7 7"/></svg>
                        </span>
                        <span>Turnkey Interior &amp; Exterior</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
