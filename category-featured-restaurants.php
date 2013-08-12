<?php
/**
 * The template for displaying category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package DW Focus
 * @since DW Focus 1.0
 */
get_header('venue');
?>

    <div id="primary" class="site-content span9 restaurants">
    	<div class="content-bar row-fluid">
	<h1 class="page-title" style="font-size:15px;">Featured Restaurants</h1>
        </div>
	
	<div class="advertisement">Advertisement section</div>
        <div class="content-inner layout-list">
		<?php if ( have_posts() ) : ?>
            <?php global $archive_i; $archive_i = 1 ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('content', 'restaurants'); ?>
                <?php $archive_i++; ?>
			<?php endwhile; ?>
		<?php endif; ?>
        </div>
        <?php 
            dw_focus_pagenavi();
            wp_reset_query();
        ?>
	</div>
<?php get_sidebar( 'archive' ); ?>
<?php get_footer(); ?>
