<?php
/**
 * Template Part: Experience Timeline
 */
$milestones = [
    ['year' => '2008', 'label' => 'Company Founded',       'detail' => 'Interior Shapes & Designs opens its doors in New Delhi.'],
    ['year' => '2012', 'label' => '100 Projects',          'detail' => 'Our first hundred projects delivered with 100% client satisfaction.'],
    ['year' => '2017', 'label' => '250 Projects',          'detail' => 'Expanded to Lucknow and Saharanpur, growing our dedicated team.'],
    ['year' => '2021', 'label' => '500 Projects',          'detail' => 'Reached 500 completed projects and opened our New York office.'],
    ['year' => 'Now',  'label' => 'Present Day',           'detail' => 'Continuing to design exceptional spaces across India and internationally.'],
];
?>
<section class="isd-about-timeline isd-section" aria-label="Company Timeline">
    <div class="isd-container">
        <div class="isd-about-timeline__header">
            <span class="isd-label isd-fade-up">Our Journey</span>
            <h2 class="isd-about-timeline__heading isd-fade-up isd-delay-1">A Legacy of Design</h2>
        </div>
        <div class="isd-about-timeline__track">
            <!-- Line -->
            <div class="isd-about-timeline__line" aria-hidden="true">
                <div class="isd-about-timeline__line-fill"></div>
            </div>
            <!-- Milestones -->
            <div class="isd-about-timeline__milestones" role="list">
                <?php foreach ( $milestones as $i => $m ) : ?>
                <div class="isd-about-timeline__milestone isd-fade-up isd-delay-<?php echo $i + 1; ?>" role="listitem">
                    <div class="isd-about-timeline__dot" aria-hidden="true">
                        <div class="isd-about-timeline__dot-inner"></div>
                    </div>
                    <div class="isd-about-timeline__milestone-content">
                        <span class="isd-about-timeline__year"><?php echo esc_html( $m['year'] ); ?></span>
                        <strong class="isd-about-timeline__milestone-label"><?php echo esc_html( $m['label'] ); ?></strong>
                        <p class="isd-about-timeline__milestone-detail"><?php echo esc_html( $m['detail'] ); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
