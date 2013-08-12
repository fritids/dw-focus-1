<?php
/**
 * The template for displaying category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package DW Focus
 * @since DW Focus 1.0
 */
get_header(); 
?>

    <div id="primary" class="site-content span12 photos">
        <div id="bloghead_photo">    
		<h1>Photo Blog</h1>
	    	<p>New Mexico through the eyes of the Journal's photographers</p>
	</div>

        <div class="content-inner layout-list">
		<?php if ( have_posts() ) : ?>
            <?php global $archive_i; $archive_i = 1 ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('content', 'multimedia'); ?>
                <?php $archive_i++; ?>
			<?php endwhile; ?>
		<?php endif; ?>
        </div>
        <?php 
            dw_focus_pagenavi();
            wp_reset_query();
        ?>
	</div>
<?php get_footer(); ?>
