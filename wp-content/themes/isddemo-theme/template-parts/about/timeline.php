<?php
/**
 * Template Part: Our Journey
 */
$milestones = [
    ['year' => '2008', 'label' => 'Company Founded',       'detail' => 'Opened our first studio in New Delhi with a team of three passionate designers.'],
    ['year' => '2011', 'label' => 'First Major Project',   'detail' => 'Completed our first large-scale commercial interior — setting the standard for what was to come.'],
    ['year' => '2015', 'label' => '100 Projects',          'detail' => 'A milestone reached with a 100% client satisfaction record across residential and commercial work.'],
    ['year' => '2019', 'label' => '250 Projects',          'detail' => 'Expanded to Lucknow and Saharanpur, growing the team and widening our creative reach.'],
    ['year' => '2022', 'label' => '500+ Projects',         'detail' => 'Crossed five hundred completed projects — each one unique, each one crafted with full commitment.'],
    ['year' => 'Now',  'label' => 'International',         'detail' => 'Serving clients in New York and beyond, bringing our design language to a global audience.'],
];
?>
<section class="isd-ab-timeline isd-section" aria-label="Our Journey">
    <div class="isd-container">
        <div class="isd-ab-timeline__header">
            <span class="isd-label isd-fade-up">Our Journey</span>
            <h2 class="isd-ab-timeline__heading isd-fade-up isd-delay-1">A Legacy of Design</h2>
        </div>
        <div class="isd-ab-timeline__row" role="list">
            <?php foreach ( $milestones as $i => $m ) : ?>
            <div class="isd-ab-timeline__card isd-fade-up isd-delay-<?php echo ($i % 3) + 1; ?>" role="listitem">
                <span class="isd-ab-timeline__year"><?php echo esc_html($m['year']); ?></span>
                <div class="isd-ab-timeline__dot" aria-hidden="true"></div>
                <strong class="isd-ab-timeline__label"><?php echo esc_html($m['label']); ?></strong>
                <p class="isd-ab-timeline__detail"><?php echo esc_html($m['detail']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
