<?php
/**
 * Template Part: Statistics
 * ACF-ready: about_stats (repeater)
 */
$stats = [
    ['num' => '15+',  'label' => 'Years Experience',        'detail' => 'of crafting exceptional spaces'],
    ['num' => '500+', 'label' => 'Projects Delivered',      'detail' => 'across India and internationally'],
    ['num' => '98%',  'label' => 'Client Satisfaction',     'detail' => 'across all completed projects'],
    ['num' => '100%', 'label' => 'Customised Solutions',    'detail' => 'no template, no compromise'],
];
?>
<section class="isd-about-stats" aria-label="Company Statistics">
    <div class="isd-container">
        <div class="isd-about-stats__grid">
            <?php foreach ( $stats as $i => $stat ) : ?>
            <article class="isd-about-stats__card isd-fade-up isd-delay-<?php echo $i + 1; ?>">
                <span class="isd-about-stats__num" data-target="<?php echo esc_attr( preg_replace('/[^0-9]/', '', $stat['num']) ); ?>" data-suffix="<?php echo esc_attr( preg_replace('/[0-9]/', '', $stat['num']) ); ?>">
                    <?php echo esc_html( $stat['num'] ); ?>
                </span>
                <strong class="isd-about-stats__label"><?php echo esc_html( $stat['label'] ); ?></strong>
                <p class="isd-about-stats__detail"><?php echo esc_html( $stat['detail'] ); ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
