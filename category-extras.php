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

    <div id="primary" class="site-content span12 extras">
    	<div class="content-bar row-fluid">
	<h1 class="page-title" style="font-size:15px;">Extras</h1>
        </div>
	
        <div class="content-inner layout-list">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        				<header class="entry-header">
			                	<h1 class="entry-title"><?php the_title(); ?></h1>
					</header>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
        </div>
        <?php 
            dw_focus_pagenavi();
            wp_reset_query();
        ?>
	</div>
<?php get_footer(); ?>
