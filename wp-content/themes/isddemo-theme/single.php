<?php
/**
 * Single Post Template
 * Indian Shape Designer - Luxury Theme
 */

get_header();
?>

<div class="isd-container isd-section" style="padding-top: 150px; min-height: 70vh;">
    <?php
    while ( have_posts() ) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header" style="max-width: 800px; margin: 0 auto 40px; text-align: center;">
                <div class="entry-meta isd-label" style="margin-bottom: 20px;">
                    <?php
                    $cat = get_the_category();
                    if ( $cat ) {
                        echo esc_html( $cat[0]->name ) . ' / ';
                    }
                    echo get_the_date( 'M j, Y' );
                    ?>
                </div>
                <h1 class="entry-title isd-title isd-title--lg" style="margin-bottom: 30px;">
                    <?php the_title(); ?>
                </h1>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="post-thumbnail" style="margin-bottom: 60px; border-radius: var(--radius-lg); overflow: hidden;">
                    <?php the_post_thumbnail( 'full', [ 'style' => 'width:100%;height:auto;display:block;' ] ); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content isd-body" style="max-width: 800px; margin: 0 auto;">
                <?php
                the_content();
                
                wp_link_pages( [
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'isddemo-theme' ),
                    'after'  => '</div>',
                ] );
                ?>
            </div>
        </article>
        <?php
        
        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>
</div>

<?php
get_footer();
