<?php
/**
 * Template Part: Footer Content
 */
?>
<footer class="isd-footer" role="contentinfo">
    <div class="isd-container">
        <div class="isd-footer__grid">
            <!-- Brand Column -->
            <div class="isd-footer__brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="isd-footer__logo">
                    <?php if ( has_custom_logo() ) : the_custom_logo();
                    else : ?>
                        <span class="isd-footer__logo-text"><?php bloginfo( 'name' ); ?></span>
                    <?php endif; ?>
                </a>
                <p class="isd-footer__tagline">Crafting timeless luxury interiors that reflect your unique lifestyle. Delhi NCR's most trusted interior design studio since 2009.</p>
                <div class="isd-footer__socials">
                    <a href="#" class="isd-footer__social-link" aria-label="Instagram">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
                    </a>
                    <a href="#" class="isd-footer__social-link" aria-label="Facebook">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg>
                    </a>
                    <a href="#" class="isd-footer__social-link" aria-label="Pinterest">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="10"/><path d="M8.56 2.75c4.37 6.03 6.02 9.42 8.03 17.72m2.54-15.38c-3.72 4.35-8.94 5.66-16.88 5.85m19.5 1.9c-3.5-.93-6.63-.82-8.94 0-2.58.92-5.01 2.86-7.44 6.32"/></svg>
                    </a>
                    <a href="#" class="isd-footer__social-link" aria-label="YouTube">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 00-1.95 1.96A29 29 0 001 12a29 29 0 00.46 5.58A2.78 2.78 0 003.41 19.58C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.95A29 29 0 0023 12a29 29 0 00-.46-5.58z"/><polygon points="9.75 15.02 15.5 12 9.75 8.98 9.75 15.02"/></svg>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <span class="isd-footer__col-title">Quick Links</span>
                <ul class="isd-footer__links">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="isd-footer__link">Home</a></li>
                    <li><a href="#about" class="isd-footer__link">About Us</a></li>
                    <li><a href="#services" class="isd-footer__link">Services</a></li>
                    <li><a href="#projects" class="isd-footer__link">Projects</a></li>
                    <li><a href="#blog" class="isd-footer__link">Journal</a></li>
                    <li><a href="#contact" class="isd-footer__link">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div>
                <span class="isd-footer__col-title">Services</span>
                <ul class="isd-footer__links">
                    <li><a href="#services" class="isd-footer__link">Residential Interiors</a></li>
                    <li><a href="#services" class="isd-footer__link">Commercial Interiors</a></li>
                    <li><a href="#services" class="isd-footer__link">Modular Kitchen</a></li>
                    <li><a href="#services" class="isd-footer__link">Luxury Wardrobes</a></li>
                    <li><a href="#services" class="isd-footer__link">False Ceiling</a></li>
                    <li><a href="#services" class="isd-footer__link">Renovation</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div>
                <span class="isd-footer__col-title">Stay Inspired</span>
                <p class="isd-footer__newsletter-text">Subscribe to receive design inspiration, trend updates, and exclusive offers.</p>
                <form class="isd-footer__newsletter-form" method="post" novalidate>
                    <?php wp_nonce_field( 'isd_newsletter', 'isd_newsletter_nonce' ); ?>
                    <input type="email" class="isd-footer__newsletter-input" placeholder="Your email address" name="newsletter_email" required>
                    <button type="submit" class="isd-footer__newsletter-btn">Subscribe</button>
                </form>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="isd-footer__bottom">
            <span class="isd-footer__copyright">
                &copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
            </span>
            <div class="isd-footer__bottom-links">
                <a href="<?php echo esc_url( get_privacy_policy_url() ); ?>" class="isd-footer__bottom-link">Privacy Policy</a>
                <a href="#" class="isd-footer__bottom-link">Terms of Service</a>
                <a href="#" class="isd-footer__bottom-link">Sitemap</a>
            </div>
        </div>
    </div>
</footer>
