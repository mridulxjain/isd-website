<?php
/**
 * Template Part: Statistics
 * ACF: about_stats (repeater: stat_num, stat_suffix, stat_label, stat_detail)
 */
$stats = [
    ['num' => 15,   'suffix' => '+',  'label' => 'Years Experience',     'detail' => 'of designing exceptional spaces'],
    ['num' => 500,  'suffix' => '+',  'label' => 'Projects Delivered',   'detail' => 'across India and internationally'],
    ['num' => 98,   'suffix' => '%',  'label' => 'Client Satisfaction',  'detail' => 'across all completed projects'],
    ['num' => null, 'suffix' => '',   'label' => 'Project Locations',    'detail' => 'India + New York, USA'],
];
?>
<section class="isd-ab-stats" aria-label="Studio Statistics">
    <div class="isd-container">
        <div class="isd-ab-stats__grid">
            <?php foreach ( $stats as $i => $s ) : ?>
            <article class="isd-ab-stats__card isd-fade-up isd-delay-<?php echo $i + 1; ?>">
                <?php if ( $s['num'] ) : ?>
                <span class="isd-ab-stats__num" data-target="<?php echo (int)$s['num']; ?>" data-suffix="<?php echo esc_attr($s['suffix']); ?>"><?php echo (int)$s['num'] . esc_html($s['suffix']); ?></span>
                <?php else : ?>
                <span class="isd-ab-stats__num isd-ab-stats__num--text">Global</span>
                <?php endif; ?>
                <strong class="isd-ab-stats__label"><?php echo esc_html($s['label']); ?></strong>
                <p class="isd-ab-stats__detail"><?php echo esc_html($s['detail']); ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
