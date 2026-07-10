<?php
/**
 * Template Part: Core Values — 2×3 grid
 */
$values = [
    ['title' => 'Integrity',           'desc' => 'We say what we mean and do what we say. Honest communication is the foundation of every client relationship we build.'],
    ['title' => 'Craftsmanship',       'desc' => 'Every material, joint and finish is selected and executed with precision. We take pride in details no one else would notice — but everyone would feel.'],
    ['title' => 'Attention to Detail', 'desc' => 'The difference between a good space and a great one is invisible. We obsess over proportion, texture, light and rhythm until every room feels right.'],
    ['title' => 'Transparency',        'desc' => 'Detailed quotes, honest timelines, no surprises. We believe clarity is not a courtesy — it is a responsibility.'],
    ['title' => 'Innovation',          'desc' => 'We draw inspiration from architecture, fashion, travel and material culture to bring originality to every project we touch.'],
    ['title' => 'Client First',        'desc' => 'Your brief drives every decision. We listen deeply, ask better questions and never lose sight of what matters most — your satisfaction.'],
];
?>
<section class="isd-ab-values isd-section" aria-label="Core Values">
    <div class="isd-container">
        <div class="isd-ab-values__header">
            <span class="isd-label isd-fade-up">Our Values</span>
            <h2 class="isd-ab-values__heading isd-fade-up isd-delay-1">The Principles We Work By</h2>
        </div>
        <div class="isd-ab-values__grid">
            <?php foreach ( $values as $i => $v ) : ?>
            <article class="isd-ab-values__card isd-fade-up isd-delay-<?php echo ($i % 3) + 1; ?>" aria-label="<?php echo esc_attr($v['title']); ?>">
                <h3 class="isd-ab-values__title"><?php echo esc_html($v['title']); ?></h3>
                <p class="isd-ab-values__desc"><?php echo esc_html($v['desc']); ?></p>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
