<?php
/**
 * Template Part: Book Consultation Form
 * Compatible with Contact Form 7 shortcode or standalone HTML form.
 */
?>
<section class="isd-consultation isd-section" id="consultation" aria-label="Book Consultation">
    <div class="isd-container">
        <div class="isd-consultation__grid">

            <!-- LEFT: Brand copy -->
            <div class="isd-consultation__left">
                <span class="isd-label isd-fade-up">Book a Meeting</span>
                <h2 class="isd-consultation__heading isd-fade-up isd-delay-1">
                    Let&rsquo;s discuss<br><em>your project.</em>
                </h2>
                <p class="isd-consultation__desc isd-fade-up isd-delay-2">
                    Fill out the consultation form and our designers will contact you within 24 hours to discuss your vision.
                </p>
                <ul class="isd-consultation__features isd-fade-up isd-delay-3" aria-label="Why book with us">
                    <?php
                    $features = [
                        'Free initial consultation',
                        'Response within 24 hours',
                        'Personalised design approach',
                        'End-to-end project management',
                    ];
                    foreach ( $features as $feat ) :
                    ?>
                    <li class="isd-consultation__feature">
                        <span class="isd-consultation__feature-check" aria-hidden="true">
                            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 8 7 12 13 5"/></svg>
                        </span>
                        <?php echo esc_html( $feat ); ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <div class="isd-consultation__testimonial isd-fade-up isd-delay-4">
                    <blockquote class="isd-consultation__quote">
                        &ldquo;From our first call to the final reveal, every step felt effortless. Truly a luxury experience.&rdquo;
                    </blockquote>
                    <cite class="isd-consultation__cite">— Priya Sharma, Homeowner, Delhi</cite>
                </div>
            </div>

            <!-- RIGHT: Premium Form -->
            <div class="isd-consultation__right isd-fade-up isd-delay-2">
                <div class="isd-consultation__form-card">
                    <form class="isd-consult-form" id="isd-consult-form" method="post" novalidate aria-label="Consultation booking form">
                        <?php if ( function_exists( 'wp_nonce_field' ) ) wp_nonce_field( 'isd_consultation', 'isd_consult_nonce' ); ?>

                        <div class="isd-form-row">
                            <div class="isd-float-group">
                                <input type="text" id="consult-name" name="consult_name" class="isd-float-input" placeholder=" " required autocomplete="name">
                                <label for="consult-name" class="isd-float-label">Full Name</label>
                                <span class="isd-float-bar" aria-hidden="true"></span>
                            </div>
                            <div class="isd-float-group">
                                <input type="tel" id="consult-phone" name="consult_phone" class="isd-float-input" placeholder=" " required autocomplete="tel">
                                <label for="consult-phone" class="isd-float-label">Phone Number</label>
                                <span class="isd-float-bar" aria-hidden="true"></span>
                            </div>
                        </div>

                        <div class="isd-float-group">
                            <input type="email" id="consult-email" name="consult_email" class="isd-float-input" placeholder=" " required autocomplete="email">
                            <label for="consult-email" class="isd-float-label">Email Address</label>
                            <span class="isd-float-bar" aria-hidden="true"></span>
                        </div>

                        <div class="isd-form-row">
                            <div class="isd-float-group isd-float-group--select">
                                <select id="consult-project" name="consult_project" class="isd-float-select" required aria-required="true">
                                    <option value="" disabled selected></option>
                                    <option value="residential">Residential Interiors</option>
                                    <option value="commercial">Commercial Interiors</option>
                                    <option value="kitchen">Modular Kitchen</option>
                                    <option value="bedroom">Luxury Bedroom</option>
                                    <option value="bathroom">Bathroom Design</option>
                                    <option value="renovation">Full Renovation</option>
                                    <option value="villa">Luxury Villa</option>
                                </select>
                                <label for="consult-project" class="isd-float-label isd-float-label--select">Project Type</label>
                                <svg class="isd-select-arrow" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 4l4 4 4-4"/></svg>
                            </div>
                            <div class="isd-float-group isd-float-group--select">
                                <select id="consult-budget" name="consult_budget" class="isd-float-select" required aria-required="true">
                                    <option value="" disabled selected></option>
                                    <option value="below-5">Below ₹5 Lakhs</option>
                                    <option value="5-10">₹5 – 10 Lakhs</option>
                                    <option value="10-20">₹10 – 20 Lakhs</option>
                                    <option value="20-plus">₹20 Lakhs+</option>
                                </select>
                                <label for="consult-budget" class="isd-float-label isd-float-label--select">Budget Range</label>
                                <svg class="isd-select-arrow" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 4l4 4 4-4"/></svg>
                            </div>
                        </div>

                        <div class="isd-float-group">
                            <textarea id="consult-message" name="consult_message" class="isd-float-input isd-float-textarea" placeholder=" " rows="4"></textarea>
                            <label for="consult-message" class="isd-float-label">Tell us about your project&hellip;</label>
                            <span class="isd-float-bar" aria-hidden="true"></span>
                        </div>

                        <button type="submit" class="isd-btn isd-btn--primary isd-consult-submit" id="isd-consult-submit" style="width:100%;justify-content:center;font-size:1rem;padding:16px 32px;">
                            <span class="isd-consult-submit__text">Book Consultation</span>
                            <span class="isd-consult-submit__loader" aria-hidden="true"></span>
                        </button>

                        <!-- Success state -->
                        <div class="isd-consult-success" id="isd-consult-success" role="status" aria-live="polite" hidden>
                            <svg viewBox="0 0 48 48" fill="none" aria-hidden="true" class="isd-consult-success__icon">
                                <circle cx="24" cy="24" r="22" stroke="#C8A45D" stroke-width="2"/>
                                <polyline points="14 25 21 32 34 17" stroke="#C8A45D" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <p class="isd-consult-success__msg">Thank you! Our team will contact you within 24 hours.</p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
