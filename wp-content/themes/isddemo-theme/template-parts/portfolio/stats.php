<?php
/**
 * Template Part: Statistics
 */
$stats = [
    ['num' => 500,  'suffix' => '+',  'label' => 'Projects Delivered'],
    ['num' => 15,   'suffix' => '+',  'label' => 'Years Experience'],
    ['num' => 98,   'suffix' => '%',  'label' => 'Client Satisfaction'],
    ['num' => 100,  'suffix' => '%',  'label' => 'Customized Designs'],
];
?>
<section class="isd-pf-stats" aria-label="Portfolio Statistics">
    <div class="isd-container">
        <div class="isd-pf-stats__grid">
            <?php foreach ( $stats as $i => $s ) : ?>
            <div class="isd-pf-stats__card isd-fade-up isd-delay-<?php echo $i + 1; ?>">
                <span class="isd-pf-stats__num" data-target="<?php echo (int)$s['num']; ?>" data-suffix="<?php echo esc_attr($s['suffix']); ?>"><?php echo (int)$s['num'] . esc_html($s['suffix']); ?></span>
                <span class="isd-pf-stats__label"><?php echo esc_html($s['label']); ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
