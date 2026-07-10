<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'isddemo-theme' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container header-inner">
			<div class="site-branding">
				<?php if ( has_custom_logo() ) : ?>
					<div class="site-logo"><?php the_custom_logo(); ?></div>
				<?php else : ?>
					<div class="site-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							<span style="color: var(--color-blue)">Indian Shape</span> 
							<span style="color: var(--color-orange)">Designer</span>
						</a>
					</div>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'      => false,
						'fallback_cb'    => false, // Do not fallback to wp_page_menu
					)
				);
				?>
			</nav><!-- #site-navigation -->
			
			<div class="header-action">
				<a href="#contact" class="btn">Get a Quote</a>
			</div>
		</div>
	</header><!-- #masthead -->
