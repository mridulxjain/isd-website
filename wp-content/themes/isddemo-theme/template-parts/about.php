<?php
/**
 * Template Part: About Section
 */
$about_image   = function_exists( 'get_field' ) ? get_field( 'about_image' ) : null;
$about_title   = function_exists( 'get_field' ) ? get_field( 'about_title' ) : 'Designing Dreams Into Reality Since 2009';
$about_text1   = function_exists( 'get_field' ) ? get_field( 'about_text_1' ) : 'With over 15 years of experience in luxury interior design, Indian Shape Designer has become the most trusted name for premium interiors in Delhi NCR. We specialize in creating spaces that are both beautiful and deeply personal.';
$about_text2   = function_exists( 'get_field' ) ? get_field( 'about_text_2' ) : 'Our team of expert designers work closely with clients from concept to completion, ensuring every detail is crafted with precision and purpose.';
?>
<section id="about" class="isd-about isd-section">
    <div class="isd-container">
        <div class="isd-about__grid">
            <div class="isd-about__image-wrapper isd-scale-in">
                <?php if ( $about_image ) : ?>
                    <img src="<?php echo esc_url( $about_image['url'] ); ?>" alt="<?php echo esc_attr( $about_image['alt'] ?? 'Our Studio' ); ?>" class="isd-about__image" loading="lazy">
                <?php else : ?>
                    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?auto=format&fit=crop&w=800&q=80" alt="Luxury interior design studio" class="isd-about__image" loading="lazy">
                <?php endif; ?>
                <div class="isd-about__image-frame" aria-hidden="true"></div>
                <div class="isd-about__experience-badge">
                    <span class="isd-about__badge-number">15+</span>
                    <span class="isd-about__badge-text">Years of Excellence</span>
                </div>
            </div>
            <div class="isd-about__content">
                <span class="isd-label isd-fade-up">About Us</span>
                <h2 class="isd-title isd-title--md isd-fade-up isd-delay-1"><?php echo esc_html( $about_title ); ?></h2>
                <p class="isd-about__text isd-fade-up isd-delay-2"><?php echo esc_html( $about_text1 ); ?></p>
                <p class="isd-about__text isd-fade-up isd-delay-2"><?php echo esc_html( $about_text2 ); ?></p>
                <div class="isd-about__timeline">
                    <div class="isd-about__milestone isd-fade-up isd-delay-3">
                        <span class="isd-about__milestone-year">2009</span>
                        <div class="isd-about__milestone-content"><h4>Founded in Delhi</h4><p>Started our journey with a passion for luxury interiors.</p></div>
                    </div>
                    <div class="isd-about__milestone isd-fade-up isd-delay-4">
                        <span class="isd-about__milestone-year">2015</span>
                        <div class="isd-about__milestone-content"><h4>Expanded to NCR</h4><p>Grew our team to 50+ designers and craftsmen.</p></div>
                    </div>
                    <div class="isd-about__milestone isd-fade-up isd-delay-5">
                        <span class="isd-about__milestone-year">2023</span>
                        <div class="isd-about__milestone-content"><h4>500+ Projects Completed</h4><p>Delivered luxury transformations across 500+ homes and offices.</p></div>
                    </div>
                </div>
                <div class="isd-about__actions isd-fade-up isd-delay-5">
                    <a href="#contact" class="isd-btn isd-btn--primary">Learn Our Story</a>
                    <a href="#contact" class="isd-btn isd-btn--ghost">Get In Touch</a>
                </div>
            </div>
        </div>
    </div>
</section>
