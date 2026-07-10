<?php
/**
 * Template Part: Contact Section
 */
?>
<section id="contact" class="isd-contact isd-section">
    <div class="isd-container">
        <div style="text-align:center;margin-bottom:70px;">
            <span class="isd-label isd-fade-up">Get In Touch</span>
            <h2 class="isd-title isd-title--md isd-fade-up isd-delay-1">Start Your Journey</h2>
            <p class="isd-body isd-fade-up isd-delay-2" style="max-width:480px;margin:0 auto;">Ready to transform your space? Fill in the form and our team will reach out within 24 hours.</p>
        </div>
        <div class="isd-contact__grid">
            <!-- Form -->
            <div class="isd-fade-up">
                <form class="isd-contact-form" method="post" novalidate>
                    <?php wp_nonce_field( 'isd_contact_form', 'isd_contact_nonce' ); ?>
                    <div class="isd-form-row">
                        <div class="isd-form-group">
                            <label class="isd-form-label" for="isd-name">Full Name</label>
                            <input class="isd-form-input" type="text" id="isd-name" name="isd_name" placeholder="Your full name" required>
                        </div>
                        <div class="isd-form-group">
                            <label class="isd-form-label" for="isd-email">Email Address</label>
                            <input class="isd-form-input" type="email" id="isd-email" name="isd_email" placeholder="your@email.com" required>
                        </div>
                    </div>
                    <div class="isd-form-row">
                        <div class="isd-form-group">
                            <label class="isd-form-label" for="isd-phone">Phone Number</label>
                            <input class="isd-form-input" type="tel" id="isd-phone" name="isd_phone" placeholder="+91 98765 43210">
                        </div>
                        <div class="isd-form-group">
                            <label class="isd-form-label" for="isd-service">Service Interested In</label>
                            <select class="isd-form-select" id="isd-service" name="isd_service">
                                <option value="">Select a service</option>
                                <option value="residential">Residential Interiors</option>
                                <option value="commercial">Commercial Interiors</option>
                                <option value="kitchen">Modular Kitchen</option>
                                <option value="wardrobes">Luxury Wardrobes</option>
                                <option value="renovation">Full Renovation</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="isd-form-group">
                        <label class="isd-form-label" for="isd-message">Your Message</label>
                        <textarea class="isd-form-textarea" id="isd-message" name="isd_message" placeholder="Tell us about your project, space size, and budget..."></textarea>
                    </div>
                    <div class="isd-form-submit">
                        <button type="submit" class="isd-btn isd-btn--primary">Send Message &rarr;</button>
                    </div>
                </form>
            </div>
            <!-- Info Panel -->
            <div class="isd-contact__info isd-fade-up isd-delay-2">
                <div class="isd-contact__details">
                    <div class="isd-contact__detail">
                        <div class="isd-contact__detail-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
                        <div><span class="isd-contact__detail-label">Address</span><span class="isd-contact__detail-value">New Delhi, Delhi NCR, India</span></div>
                    </div>
                    <div class="isd-contact__detail">
                        <div class="isd-contact__detail-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 9.63 19.79 19.79 0 01.01 1 2 2 0 012 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 14.92z"/></svg></div>
                        <div><span class="isd-contact__detail-label">Phone</span><span class="isd-contact__detail-value">+91 98765 43210</span></div>
                    </div>
                    <div class="isd-contact__detail">
                        <div class="isd-contact__detail-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
                        <div><span class="isd-contact__detail-label">Email</span><span class="isd-contact__detail-value">hello@indianshapedesigner.com</span></div>
                    </div>
                </div>
                <div class="isd-contact__hours">
                    <div class="isd-contact__hours-title">Working Hours</div>
                    <div class="isd-contact__hours-item"><span>Monday &ndash; Friday</span><span>9:00 AM &ndash; 7:00 PM</span></div>
                    <div class="isd-contact__hours-item"><span>Saturday</span><span>10:00 AM &ndash; 5:00 PM</span></div>
                    <div class="isd-contact__hours-item"><span>Sunday</span><span>By Appointment</span></div>
                </div>
                <div class="isd-contact__socials">
                    <a href="#" class="isd-social-link" aria-label="Instagram"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></a>
                    <a href="#" class="isd-social-link" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></a>
                    <a href="#" class="isd-social-link" aria-label="Pinterest"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M12 2C6.477 2 2 6.477 2 12c0 4.236 2.636 7.855 6.356 9.312-.088-.791-.167-2.005.035-2.868.181-.78 1.172-4.97 1.172-4.97s-.299-.598-.299-1.482c0-1.388.806-2.428 1.808-2.428.852 0 1.265.64 1.265 1.408 0 .858-.546 2.141-.828 3.33-.236.995.499 1.806 1.476 1.806 1.771 0 2.963-2.29 2.963-5.004 0-2.065-1.376-3.604-3.862-3.604-2.814 0-4.573 2.104-4.573 4.452 0 .809.239 1.378.615 1.822.173.21.198.293.135.534l-.226.886c-.07.298-.282.404-.517.294-1.444-.596-2.115-2.194-2.115-3.995 0-2.98 2.515-6.576 7.505-6.576 4.014 0 6.67 2.921 6.67 6.058 0 4.15-2.304 7.232-5.685 7.232-1.138 0-2.21-.614-2.577-1.305l-.741 2.862c-.268 1.007-1 2.27-1.483 3.037A10 10 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z"/></svg></a>
                    <a href="#" class="isd-social-link" aria-label="YouTube"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 00-1.95 1.96A29 29 0 001 12a29 29 0 00.46 5.58A2.78 2.78 0 003.41 19.58C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.95A29 29 0 0023 12a29 29 0 00-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"/></svg></a>
                </div>
            </div>
        </div>
    </div>
</section>
