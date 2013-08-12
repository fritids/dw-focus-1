<?php
/*
Template Name: Section Page / No sidebar
By Jolie McCullough
*/

get_header('sections');
?>

    <div id="primary" class="site-content span12">

        <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                                <?php the_content(); ?>
                                <?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'dw_focus' ), 'after' => '</div>' ) ); ?>
                        </div><!-- .entry-content -->
                </article><!-- #post-<?php the_ID(); ?> -->

        <?php endwhile; // end of the loop. ?>
        <?php comments_template( '', true ); ?>
        </div>

<?php get_footer(); ?>

~

