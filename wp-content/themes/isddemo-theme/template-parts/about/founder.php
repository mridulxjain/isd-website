<?php
/**
 * Template Part: Founder Spotlight
 * ACF: about_founder_image, about_founder_name, about_founder_role, about_founder_bio, about_founder_quote
 */
$image  = function_exists('get_field') ? get_field('about_founder_image') : null;
$name   = function_exists('get_field') ? get_field('about_founder_name')  : 'Mrs. Jyoti';
$role   = function_exists('get_field') ? get_field('about_founder_role')  : 'Architect · Interior Designer · Vastu Consultant';
$bio    = function_exists('get_field') ? get_field('about_founder_bio')   : 'Mrs. Jyoti founded Interior Shapes and Designs with a clear conviction: that thoughtful design has the power to transform not just spaces, but the lives within them. With a background spanning architecture, interior design and Vastu consultancy, she has guided the studio through two decades of growth — always placing the client at the centre of every decision. Her leadership style is defined by precision, warmth and an unwavering commitment to ethical practice. Under her vision, the studio has become one of India\'s most trusted design firms, known as much for its integrity as its craft.';
$quote  = function_exists('get_field') ? get_field('about_founder_quote') : 'Design should improve everyday life through beauty, purpose and thoughtful craftsmanship.';
$tags   = ['Leadership', 'Ethical Practice', 'Creative Vision', 'Client Satisfaction'];
?>
<section class="isd-ab-founder isd-section" aria-label="Founder">
    <div class="isd-container">
        <div class="isd-ab-founder__grid">

            <!-- Portrait -->
            <div class="isd-ab-founder__portrait-col isd-fade-up">
                <div class="isd-ab-founder__portrait-wrap">
                    <?php if ( $image && !empty($image['url']) ) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($name); ?>" class="isd-ab-founder__portrait" loading="lazy">
                    <?php else : ?>
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=700&q=80" alt="<?php echo esc_attr($name); ?>" class="isd-ab-founder__portrait" loading="lazy">
                    <?php endif; ?>
                </div>
                <div class="isd-ab-founder__id">
                    <strong class="isd-ab-founder__name"><?php echo esc_html($name); ?></strong>
                    <span class="isd-ab-founder__role"><?php echo esc_html($role); ?></span>
                </div>
            </div>

            <!-- Content -->
            <div class="isd-ab-founder__content isd-fade-up isd-delay-2">
                <span class="isd-label">Meet Our Founder</span>
                <h2 class="isd-ab-founder__heading">Guided by Vision,<br>Grounded in Craft.</h2>
                <div class="isd-ab-founder__divider" aria-hidden="true"></div>
                <p class="isd-ab-founder__bio"><?php echo esc_html($bio); ?></p>
                <div class="isd-ab-founder__tags">
                    <?php foreach ( $tags as $tag ) : ?>
                    <span class="isd-ab-founder__tag"><?php echo esc_html($tag); ?></span>
                    <?php endforeach; ?>
                </div>
                <blockquote class="isd-ab-founder__quote">
                    <p>&ldquo;<?php echo esc_html($quote); ?>&rdquo;</p>
                    <cite>&mdash; <?php echo esc_html($name); ?></cite>
                </blockquote>
            </div>
        </div>
    </div>
</section>
