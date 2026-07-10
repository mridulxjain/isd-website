<?php
/**
 * Template Part: Company Story
 * ACF: about_story_image, about_story_label, about_story_heading, about_story_blocks[]
 */
$image   = function_exists('get_field') ? get_field('about_story_image')   : null;
$label   = function_exists('get_field') ? get_field('about_story_label')   : 'Who We Are';
$heading = function_exists('get_field') ? get_field('about_story_heading') : 'A Practice Built on Trust, Shaped by Craft.';
$blocks  = function_exists('get_field') && have_rows('about_story_blocks') ? null : [
    'Based in New Delhi, we are an interior and exterior design firm trusted by clients across India and internationally — from private residences to large commercial projects.',
    'We take on projects from concept to completion. Every space we create balances creativity with function, guided by a team of experienced architects, designers and craftsmen.',
    'Over the years we have built something rarer than a portfolio: a reputation. For quality, for honest communication, and for relationships that outlast the project.',
];
$markers = [
    ['label' => 'New Delhi', 'detail' => 'Head Office'],
    ['label' => 'Turnkey',   'detail' => 'Full Execution'],
    ['label' => '4 Cities',  'detail' => 'India + New York'],
];
?>
<section class="isd-ab-story isd-section" aria-label="Company Story">
    <div class="isd-container">
        <div class="isd-ab-story__grid">

            <!-- Image column -->
            <div class="isd-ab-story__media isd-fade-up">
                <div class="isd-ab-story__img-wrap">
                    <?php if ( $image && !empty($image['url']) ) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt'] ?? 'Studio interior'); ?>" class="isd-ab-story__img" loading="lazy">
                    <?php else : ?>
                        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?auto=format&fit=crop&w=900&q=80" alt="Luxury interior living room" class="isd-ab-story__img" loading="lazy">
                    <?php endif; ?>
                </div>
                <div class="isd-ab-story__markers">
                    <?php foreach ( $markers as $m ) : ?>
                    <div class="isd-ab-story__marker">
                        <strong><?php echo esc_html($m['label']); ?></strong>
                        <span><?php echo esc_html($m['detail']); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Content column -->
            <div class="isd-ab-story__content isd-fade-up isd-delay-2">
                <span class="isd-label"><?php echo esc_html($label ?: 'Who We Are'); ?></span>
                <h2 class="isd-ab-story__heading"><?php echo esc_html($heading); ?></h2>
                <div class="isd-ab-story__divider" aria-hidden="true"></div>
                <?php if ( function_exists('get_field') && have_rows('about_story_blocks') ) : ?>
                    <?php while ( have_rows('about_story_blocks') ) : the_row(); ?>
                    <p class="isd-ab-story__para"><?php echo esc_html(get_sub_field('block_text')); ?></p>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php foreach ( $blocks as $para ) : ?>
                    <p class="isd-ab-story__para"><?php echo esc_html($para); ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
