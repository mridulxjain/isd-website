<?php
/**
 * The main template file
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container">
			<?php
			if ( have_posts() ) :
				while ( have_posts() ) :
					the_post();
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="margin-bottom: 40px;">
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content(); ?>
						</div><!-- .entry-content -->
					</article><!-- #post-<?php the_ID(); ?> -->
					<?php
				endwhile;

				the_posts_navigation();

			else :
				?>
				<section class="no-results not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'isddemo-theme' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">
						<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'isddemo-theme' ); ?></p>
					</div><!-- .page-content -->
				</section><!-- .no-results -->
				<?php
			endif;
			?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
