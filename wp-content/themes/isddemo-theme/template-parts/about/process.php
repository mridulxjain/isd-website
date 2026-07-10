<?php
/**
 * Template Part: How We Work
 */
$steps = [
    ['num' => '01', 'title' => 'Consultation',    'desc' => 'We begin by listening — learning your lifestyle, aspirations and the specific character of your space.'],
    ['num' => '02', 'title' => 'Planning',         'desc' => 'A clear project roadmap: timelines, budgets, scope and team assignment — before a single sketch is drawn.'],
    ['num' => '03', 'title' => 'Design',           'desc' => 'Concept development, mood boards, material palettes and detailed drawings that define the language of your space.'],
    ['num' => '04', 'title' => '3D Visualisation', 'desc' => 'Photorealistic renders so you can experience every room before execution begins. Nothing proceeds without your approval.'],
    ['num' => '05', 'title' => 'Execution',        'desc' => 'Expert craftsmen, rigorous site management and precise quality control — delivered on time and on budget.'],
    ['num' => '06', 'title' => 'Final Styling',    'desc' => 'The finishing layer: accessories, art, lighting and the considered details that make a house feel like a home.'],
];
?>
<section class="isd-ab-process isd-section" aria-label="How We Work">
    <div class="isd-container">
        <div class="isd-ab-process__header">
            <span class="isd-label isd-fade-up">Process</span>
            <h2 class="isd-ab-process__heading isd-fade-up isd-delay-1">How We Work</h2>
            <p class="isd-ab-process__intro isd-fade-up isd-delay-2">Six considered stages, one seamless experience.</p>
        </div>
        <div class="isd-ab-process__grid" role="list">
            <?php foreach ( $steps as $i => $step ) : ?>
            <div class="isd-ab-process__step isd-fade-up isd-delay-<?php echo ($i % 3) + 1; ?>" role="listitem">
                <span class="isd-ab-process__step-num" aria-hidden="true"><?php echo esc_html($step['num']); ?></span>
                <h3 class="isd-ab-process__step-title"><?php echo esc_html($step['title']); ?></h3>
                <p class="isd-ab-process__step-desc"><?php echo esc_html($step['desc']); ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
