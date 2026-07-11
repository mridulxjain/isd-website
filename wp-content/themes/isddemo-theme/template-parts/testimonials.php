<?php
/**
 * Template Part: Testimonials
 */
$testimonials = [
    [ 'quote' => '"Interior Shapes Design completely transformed our 3BHK into a luxury masterpiece. Every detail was thoughtfully curated — we couldn\'t be happier!"', 'name' => 'Priya Sharma', 'project' => 'Residential, South Delhi', 'photo' => 'https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=80&h=80&q=80' ],
    [ 'quote' => '"Our office space went from mundane to magnificent. The team was professional, on-time, and delivered beyond expectations. Highly recommend!"', 'name' => 'Rahul Mehta', 'project' => 'Commercial, Gurgaon', 'photo' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&h=80&q=80' ],
    [ 'quote' => '"The modular kitchen they designed is the heart of our home now. Stunning aesthetics, premium quality, and flawless execution. Worth every rupee!"', 'name' => 'Ananya Kapoor', 'project' => 'Kitchen, Noida', 'photo' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&w=80&h=80&q=80' ],
];
?>
<section id="testimonials" class="isd-testimonials isd-section">
    <div class="isd-container">
        <div class="isd-testimonials__header">
            <span class="isd-label" style="color:rgba(200,164,93,0.9);">Client Stories</span>
            <h2 class="isd-testimonials__title isd-title isd-title--md isd-fade-up isd-delay-1">What Our Clients Say</h2>
        </div>
        <div class="isd-testimonials__track-outer">
            <div class="isd-testimonials__track">
                <?php foreach ( $testimonials as $t ) : ?>
                <div class="isd-testimonial-card isd-fade-up">
                    <div class="isd-testimonial-card__stars"><?php for ( $i = 0; $i < 5; $i++ ) : ?><svg class="isd-testimonial-card__star" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg><?php endfor; ?></div>
                    <p class="isd-testimonial-card__quote"><?php echo esc_html( $t['quote'] ); ?></p>
                    <div class="isd-testimonial-card__author">
                        <img src="<?php echo esc_url( $t['photo'] ); ?>" alt="<?php echo esc_attr( $t['name'] ); ?>" class="isd-testimonial-card__photo" loading="lazy" width="48" height="48">
                        <div>
                            <span class="isd-testimonial-card__name"><?php echo esc_html( $t['name'] ); ?></span>
                            <span class="isd-testimonial-card__project"><?php echo esc_html( $t['project'] ); ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="isd-testimonials__controls">
            <button class="isd-testimonials__btn isd-testimonials__btn--prev" aria-label="Previous testimonial">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M15 18l-6-6 6-6"/></svg>
            </button>
            <button class="isd-testimonials__btn isd-testimonials__btn--next" aria-label="Next testimonial">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M9 18l6-6-6-6"/></svg>
            </button>
        </div>
    </div>
</section>
