<?php
/**
 * Template Part: Our Philosophy
 * Three premium editorial cards with line illustrations
 */
$cards = [
    [
        'title' => 'Creativity',
        'desc'  => 'We approach every brief with fresh eyes and genuine curiosity. Ideas are never borrowed — they are drawn from the specific character of your space, your life and your vision.',
        'svg'   => '<svg viewBox="0 0 80 80" fill="none" stroke="currentColor" stroke-width="0.8"><path d="M40 8 Q60 20 60 40 Q60 60 40 72 Q20 60 20 40 Q20 20 40 8Z"/><line x1="40" y1="8" x2="40" y2="72"/><line x1="20" y1="40" x2="60" y2="40"/><circle cx="40" cy="40" r="8"/></svg>',
    ],
    [
        'title' => 'Functionality',
        'desc'  => 'Beauty without utility is decoration. We design spaces that perform — where every element earns its place by improving the way you live, work or host.',
        'svg'   => '<svg viewBox="0 0 80 80" fill="none" stroke="currentColor" stroke-width="0.8"><rect x="16" y="16" width="48" height="48"/><line x1="16" y1="32" x2="64" y2="32"/><line x1="16" y1="48" x2="64" y2="48"/><line x1="32" y1="16" x2="32" y2="64"/><line x1="48" y1="16" x2="48" y2="64"/></svg>',
    ],
    [
        'title' => 'Timeless Elegance',
        'desc'  => 'We do not follow trends — we understand them, then set them aside. Our spaces are designed to look as considered in twenty years as they do today.',
        'svg'   => '<svg viewBox="0 0 80 80" fill="none" stroke="currentColor" stroke-width="0.8"><circle cx="40" cy="40" r="28"/><circle cx="40" cy="40" r="16"/><circle cx="40" cy="40" r="4"/><line x1="40" y1="12" x2="40" y2="24"/><line x1="40" y1="56" x2="40" y2="68"/><line x1="12" y1="40" x2="24" y2="40"/><line x1="56" y1="40" x2="68" y2="40"/></svg>',
    ],
];
?>
<section class="isd-ab-philosophy isd-section" aria-label="Design Philosophy">
    <div class="isd-container">
        <div class="isd-ab-philosophy__header">
            <span class="isd-label isd-fade-up">Philosophy</span>
            <h2 class="isd-ab-philosophy__heading isd-fade-up isd-delay-1">What We Believe In</h2>
            <p class="isd-ab-philosophy__intro isd-fade-up isd-delay-2">Great spaces are never accidental. They are the result of three values we hold above all else.</p>
        </div>
        <div class="isd-ab-philosophy__cards">
            <?php foreach ( $cards as $i => $c ) : ?>
            <article class="isd-ab-philosophy__card isd-fade-up isd-delay-<?php echo $i + 1; ?>" aria-label="<?php echo esc_attr($c['title']); ?>">
                <div class="isd-ab-philosophy__illus" aria-hidden="true"><?php echo $c['svg']; // phpcs:ignore ?></div>
                <h3 class="isd-ab-philosophy__card-title"><?php echo esc_html($c['title']); ?></h3>
                <p class="isd-ab-philosophy__card-desc"><?php echo esc_html($c['desc']); ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
