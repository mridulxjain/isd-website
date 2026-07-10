<?php
/**
 * The main template file
 * Indian Shape Designer - Luxury Theme
 */

get_header();
?>

<div class="isd-container isd-section" style="padding-top: 150px; min-height: 70vh;">
    <header class="page-header" style="margin-bottom: 60px;">
        <h1 class="page-title isd-title isd-title--md">
            <?php
            if ( is_home() && ! is_front_page() ) {
                single_post_title();
            } elseif ( is_archive() ) {
                the_archive_title();
            } elseif ( is_search() ) {
                printf( esc_html__( 'Search Results for: %s', 'isddemo-theme' ), '<span>' . get_search_query() . '</span>' );
            } else {
                the_title();
            }
            ?>
        </h1>
        <?php if ( is_archive() ) : ?>
            <div class="archive-description isd-body"><?php the_archive_description(); ?></div>
        <?php endif; ?>
    </header>

    <div class="isd-blog__grid">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                $cat = get_the_category();
                $cat_name = $cat ? $cat[0]->name : 'Uncategorized';
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'isd-blog-card isd-fade-up' ); ?>>
            <?php if ( has_post_thumbnail() ) : ?>
            <div class="isd-blog-card__img-wrapper">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( 'large', [ 'class' => 'isd-blog-card__img', 'loading' => 'lazy' ] ); ?>
                </a>
            </div>
            <?php endif; ?>
            <div class="isd-blog-card__content">
                <div class="isd-blog-card__meta">
                    <span class="isd-blog-card__category"><?php echo esc_html( $cat_name ); ?></span>
                    <span class="isd-blog-card__date"><?php echo get_the_date( 'M j, Y' ); ?></span>
                </div>
                <h3 class="isd-blog-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p class="isd-blog-card__excerpt"><?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?></p>
                <a href="<?php the_permalink(); ?>" class="isd-blog-card__link">Read More &rarr;</a>
            </div>
        </article>
        <?php
            endwhile;

            the_posts_pagination( [
                'prev_text' => '&larr; Previous',
                'next_text' => 'Next &rarr;',
                'class'     => 'isd-pagination',
            ] );

        else :
            echo '<p class="isd-body">No posts found.</p>';
        endif;
        ?>
    </div>
</div>

<?php
get_footer();
