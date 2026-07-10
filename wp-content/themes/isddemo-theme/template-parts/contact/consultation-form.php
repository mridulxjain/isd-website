<?php
/**
 * Template Part: Book Consultation Form & Locations
 * Combined Section for visual balance (60% Form / 40% Locations)
 */
?>
<section class="isd-consultation isd-section" id="consultation" aria-label="Book Consultation">
    <div class="isd-container" style="max-width: 1200px;">
        
        <!-- Heading -->
        <div class="isd-consultation__header">
            <span class="isd-label isd-fade-up">Start Your Journey</span>
            <h2 class="isd-consultation__heading isd-fade-up isd-delay-1">
                Let&rsquo;s discuss<br><em>your project.</em>
            </h2>
        </div>

        <div class="isd-consultation__grid">
            
            <!-- LEFT: Premium Form Card (60%) -->
            <div class="isd-consultation__form-wrapper isd-fade-up isd-delay-2">
                <div class="isd-consultation__form-card">
                    <form class="isd-consult-form" id="isd-consult-form" method="post" novalidate aria-label="Consultation booking form">
                        <?php if ( function_exists( 'wp_nonce_field' ) ) wp_nonce_field( 'isd_consultation', 'isd_consult_nonce' ); ?>

                        <div class="isd-form-row">
                            <div class="isd-input-group">
                                <label for="consult-name" class="isd-label-std">Full Name</label>
                                <input type="text" id="consult-name" name="consult_name" class="isd-input-std" placeholder="John Doe" required autocomplete="name">
                            </div>
                            <div class="isd-input-group">
                                <label for="consult-phone" class="isd-label-std">Phone Number</label>
                                <input type="tel" id="consult-phone" name="consult_phone" class="isd-input-std" placeholder="+91 98765 43210" required autocomplete="tel">
                            </div>
                        </div>

                        <div class="isd-input-group">
                            <label for="consult-email" class="isd-label-std">Email Address</label>
                            <input type="email" id="consult-email" name="consult_email" class="isd-input-std" placeholder="john@example.com" required autocomplete="email">
                        </div>

                        <div class="isd-form-row">
                            <div class="isd-input-group isd-input-group--select">
                                <label for="consult-project" class="isd-label-std">Project Type</label>
                                <div class="isd-select-wrapper">
                                    <select id="consult-project" name="consult_project" class="isd-select-std" required aria-required="true">
                                        <option value="" disabled selected>Select project type</option>
                                        <option value="residential">Residential Interiors</option>
                                        <option value="commercial">Commercial Interiors</option>
                                        <option value="kitchen">Modular Kitchen</option>
                                        <option value="bedroom">Luxury Bedroom</option>
                                        <option value="bathroom">Bathroom Design</option>
                                        <option value="renovation">Full Renovation</option>
                                        <option value="villa">Luxury Villa</option>
                                    </select>
                                    <svg class="isd-select-arrow" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 4l4 4 4-4"/></svg>
                                </div>
                            </div>
                            <div class="isd-input-group isd-input-group--select">
                                <label for="consult-budget" class="isd-label-std">Budget Range</label>
                                <div class="isd-select-wrapper">
                                    <select id="consult-budget" name="consult_budget" class="isd-select-std" required aria-required="true">
                                        <option value="" disabled selected>Select budget</option>
                                        <option value="below-5">Below ₹5 Lakhs</option>
                                        <option value="5-10">₹5 – 10 Lakhs</option>
                                        <option value="10-20">₹10 – 20 Lakhs</option>
                                        <option value="20-plus">₹20 Lakhs+</option>
                                    </select>
                                    <svg class="isd-select-arrow" viewBox="0 0 12 12" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M2 4l4 4 4-4"/></svg>
                                </div>
                            </div>
                        </div>

                        <div class="isd-input-group">
                            <label for="consult-message" class="isd-label-std">Tell us about your project</label>
                            <textarea id="consult-message" name="consult_message" class="isd-input-std isd-textarea-std" placeholder="Project details, timeline, etc." rows="4"></textarea>
                        </div>

                        <button type="submit" class="isd-btn-submit" id="isd-consult-submit">
                            <span class="isd-consult-submit__text">Book Consultation</span>
                            <span class="isd-consult-submit__loader" aria-hidden="true"></span>
                            <svg class="isd-consult-submit__arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
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

            <!-- RIGHT: Office Locations (40%) -->
            <div class="isd-consultation__locations-wrapper isd-fade-up isd-delay-3">
                <?php get_template_part( 'template-parts/contact/locations' ); ?>
            </div>

        </div>
    </div>
</section>
