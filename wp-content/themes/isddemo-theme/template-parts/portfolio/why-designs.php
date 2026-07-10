<?php
/**
 * Template Part: Why Our Designs
 */
$reasons = [
    ['title' => 'Personalized Design',  'desc' => 'Your lifestyle, habits and tastes form the blueprint. No two projects are ever identical.'],
    ['title' => 'Luxury Materials',     'desc' => 'We source premium stone, wood, metal and textiles globally for uncompromising quality.'],
    ['title' => 'Turnkey Execution',    'desc' => 'From initial concept to final styling, our in-house team manages every detail.'],
    ['title' => 'Timeless Aesthetics',  'desc' => 'We avoid fleeting trends, creating spaces that remain beautiful and relevant for decades.'],
];
?>
<section class="isd-pf-why isd-section" aria-label="Why Choose Us">
    <div class="isd-container">
        <div class="isd-pf-why__header">
            <span class="isd-label isd-fade-up">Our Approach</span>
            <h2 class="isd-pf-why__heading isd-fade-up isd-delay-1">The ISD Difference</h2>
        </div>
        <div class="isd-pf-why__grid">
            <?php foreach ( $reasons as $i => $r ) : ?>
            <div class="isd-pf-why__card isd-fade-up isd-delay-<?php echo $i + 1; ?>">
                <h3 class="isd-pf-why__title"><?php echo esc_html($r['title']); ?></h3>
                <p class="isd-pf-why__desc"><?php echo esc_html($r['desc']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
