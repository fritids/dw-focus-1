<?php 
/*
Template Name: Section Page
By Jolie McCullough
*/
if(is_page('venue')) {
	get_header('venue');
} elseif(is_page('riowest')) {
	get_header('riowest');
} else {
	get_header('sections');
} ?>

    <div id="primary" class="site-content span9">

	<?php if(!is_page(array('riowest', 'venue'))) { ?>
		<div class="category-header row-fluid">
	        	<h1><?php the_title(); ?></h1>
	        </div>
	<?php } ?>

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

<?php get_sidebar(); ?>
<?php get_footer(); ?>
