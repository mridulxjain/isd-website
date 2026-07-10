	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="footer-inner" style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
				<div class="footer-branding" style="margin-bottom: 20px;">
					<h2 style="color: var(--color-white); margin-bottom: 10px;">Indian Shape Designer</h2>
					<p style="max-width: 300px; color: #ccc;">Transforming spaces with elegant and timeless interior design solutions across India.</p>
				</div>
				
				<div class="footer-links" style="margin-bottom: 20px;">
					<h4 style="color: var(--color-white); margin-bottom: 10px;">Quick Links</h4>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_id'        => 'footer-menu',
							'container'      => false,
							'fallback_cb'    => false,
						)
					);
					?>
				</div>
				
				<div class="footer-contact" style="margin-bottom: 20px;">
					<h4 style="color: var(--color-white); margin-bottom: 10px;">Contact Us</h4>
					<p style="color: #ccc;">Email: hello@indianshapedesigner.com</p>
					<p style="color: #ccc;">Phone: +91 98765 43210</p>
				</div>
			</div>
			
			<div class="site-info" style="text-align: center; margin-top: 40px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.1); color: #999; font-size: 0.9rem;">
				&copy; <?php echo date('Y'); ?> Indian Shape Designer. All Rights Reserved.
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
