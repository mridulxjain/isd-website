<?php
/**
 * Template Part: Client Testimonials
 */
$reviews = [
    [
        'name'  => 'Amitabh Singhania',
        'proj'  => 'The Malabar House',
        'quote' => 'Interior Shapes and Design didn\'t just renovate our home; they completely elevated the way we live. The attention to detail is unmatched.',
        'img'   => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&w=150&q=80',
    ],
    [
        'name'  => 'Priya Sharma',
        'proj'  => 'Lumina Penthouse',
        'quote' => 'Mrs. Jyoti and her team are visionaries. They understood my taste immediately and delivered a space that is both hyper-luxurious and deeply comfortable.',
        'img'   => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=150&q=80',
    ],
    [
        'name'  => 'Vikram Mehta',
        'proj'  => 'Aura Corporate HQ',
        'quote' => 'The turnkey execution was flawless. They managed the entire commercial build-out on a strict timeline without a single compromise on finish quality.',
        'img'   => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=150&q=80',
    ],
];
?>
<section class="isd-pf-testimonials isd-section" aria-label="Client Testimonials">
    <div class="isd-container">
        <div class="isd-pf-testimonials__header">
            <span class="isd-label isd-fade-up">Testimonials</span>
            <h2 class="isd-pf-testimonials__heading isd-fade-up isd-delay-1">Client Experiences</h2>
        </div>
        <div class="isd-pf-testimonials__grid">
            <?php foreach ( $reviews as $i => $r ) : ?>
            <article class="isd-pf-testimonial isd-fade-up isd-delay-<?php echo $i + 1; ?>">
                <div class="isd-pf-testimonial__stars">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                </div>
                <blockquote class="isd-pf-testimonial__quote">
                    <p>&ldquo;<?php echo esc_html($r['quote']); ?>&rdquo;</p>
                </blockquote>
                <div class="isd-pf-testimonial__client">
                    <img src="<?php echo esc_url($r['img']); ?>" alt="<?php echo esc_attr($r['name']); ?>" class="isd-pf-testimonial__img" loading="lazy">
                    <div class="isd-pf-testimonial__info">
                        <strong><?php echo esc_html($r['name']); ?></strong>
                        <span><?php echo esc_html($r['proj']); ?></span>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
