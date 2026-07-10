<?php
/**
 * Template Part: Book Consultation Form & Locations
 * Combined Section for visual balance (60% Form / 40% Locations)
 */
?>
<section class="isd-consultation-minimal isd-section" id="consultation" aria-label="Book Consultation">
    <div class="isd-container">
        <div class="isd-consultation-minimal__grid">
            
            <!-- LEFT: Minimal Form (55%) -->
            <div class="isd-consultation-minimal__form-wrapper isd-fade-up isd-delay-2">
                <div class="isd-consultation-minimal__header">
                    <span class="isd-label">Start Your Journey</span>
                    <h2 class="isd-consultation-minimal__heading">Tell us about<br><em>your project.</em></h2>
                </div>

                <form class="isd-consult-form-minimal" id="isd-consult-form" method="post" novalidate aria-label="Consultation booking form">
                    <?php if ( function_exists( 'wp_nonce_field' ) ) wp_nonce_field( 'isd_consultation', 'isd_consult_nonce' ); ?>

                    <div class="isd-form-row-minimal">
                        <div class="isd-input-group-minimal">
                            <input type="text" id="consult-name" name="consult_name" class="isd-input-minimal" placeholder="Full Name" required autocomplete="name">
                            <label for="consult-name" class="sr-only">Full Name</label>
                        </div>
                        <div class="isd-input-group-minimal">
                            <input type="tel" id="consult-phone" name="consult_phone" class="isd-input-minimal" placeholder="Phone Number" required autocomplete="tel">
                            <label for="consult-phone" class="sr-only">Phone Number</label>
                        </div>
                    </div>

                    <div class="isd-input-group-minimal">
                        <input type="email" id="consult-email" name="consult_email" class="isd-input-minimal" placeholder="Email Address" required autocomplete="email">
                        <label for="consult-email" class="sr-only">Email Address</label>
                    </div>

                    <div class="isd-form-row-minimal">
                        <div class="isd-input-group-minimal isd-input-group-minimal--select">
                            <label for="consult-project" class="sr-only">Project Type</label>
                            <div class="isd-select-wrapper-minimal">
                                <select id="consult-project" name="consult_project" class="isd-select-minimal" required aria-required="true">
                                    <option value="" disabled selected>Project Type</option>
                                    <option value="residential">Residential Interiors</option>
                                    <option value="commercial">Commercial Interiors</option>
                                    <option value="kitchen">Modular Kitchen</option>
                                    <option value="bedroom">Luxury Bedroom</option>
                                    <option value="office">Office</option>
                                    <option value="restaurant">Restaurant</option>
                                    <option value="exterior">Exterior</option>
                                    <option value="turnkey">Turnkey</option>
                                </select>
                                <svg class="isd-select-arrow-minimal" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 4l4 4 4-4"/></svg>
                            </div>
                        </div>
                        <div class="isd-input-group-minimal isd-input-group-minimal--select">
                            <label for="consult-budget" class="sr-only">Budget Range</label>
                            <div class="isd-select-wrapper-minimal">
                                <select id="consult-budget" name="consult_budget" class="isd-select-minimal" required aria-required="true">
                                    <option value="" disabled selected>Budget Range</option>
                                    <option value="below-5">Below ₹5 Lakhs</option>
                                    <option value="5-10">₹5 – 10 Lakhs</option>
                                    <option value="10-20">₹10 – 20 Lakhs</option>
                                    <option value="20-plus">₹20 Lakhs+</option>
                                </select>
                                <svg class="isd-select-arrow-minimal" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 4l4 4 4-4"/></svg>
                            </div>
                        </div>
                    </div>

                    <div class="isd-input-group-minimal">
                        <textarea id="consult-message" name="consult_message" class="isd-input-minimal isd-textarea-minimal" placeholder="Tell us about your project" rows="1"></textarea>
                        <label for="consult-message" class="sr-only">Message</label>
                    </div>

                    <div class="isd-form-submit-wrapper-minimal">
                        <button type="submit" class="isd-btn-submit-minimal" id="isd-consult-submit">
                            <span class="isd-consult-submit-minimal__text">Submit Inquiry</span>
                            <span class="isd-consult-submit-minimal__loader" aria-hidden="true"></span>
                            <svg class="isd-consult-submit-minimal__arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.2" aria-hidden="true"><path d="M5 12h14M13 5l7 7-7 7"/></svg>
                        </button>
                    </div>

                    <!-- Success state -->
                    <div class="isd-consult-success-minimal" id="isd-consult-success" role="status" aria-live="polite" hidden>
                        <p class="isd-consult-success-minimal__msg">Thank you. Our designers will be in touch shortly.</p>
                    </div>
                </form>
            </div>

            <!-- RIGHT: Office Locations (45%) -->
            <div class="isd-consultation-minimal__locations-wrapper isd-fade-up isd-delay-3">
                <?php get_template_part( 'template-parts/contact/locations' ); ?>
            </div>

        </div>
    </div>
</section>
