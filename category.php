<?php
/**
 * The template for displaying category pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package DW Focus
 * @since DW Focus 1.0
 */
/*if(is_category(array('news', 'biz', 'sports', 'entertainment', 'opinion', 'politics', 'living'))) {
	get_header('sections');
} else*/ if(is_category('entertainment') || in_category('entertainment')) {
	get_header('venue');
} else {
	get_header('sections'); 
} ?>

    <div id="primary" class="site-content span9">
    	<?php if(is_category(array('movies', 'dining', 'music', 'arts', 'tv'))) {
		include('/web/journal/web/wp-content/themes/dw-focus/inc/venue-category-top.php');
	} ?>
	<?php $catID = getCurrentCatID();
	if(cat_is_ancestor_of(11, $catID) || cat_is_ancestor_of(254, $catID)) { 
  		include('/web/journal/web/wp-content/themes/dw-focus/inc/blog-headers.php');
	}  elseif (cat_is_ancestor_of(14, $catID)) { ?>
		<div class="content-bar row-fluid">
            		<h1 class="page-title"><?php
				printf( __( '%s', 'dw-focus' ), '<span>' . single_cat_title( '', false ) . '</span>' );
	    		?></h1>
            		<?php if ( have_posts() ) :
				if(in_category('movies')) {
                    			$category = "Movies";
                    		 } elseif(in_category('dining')) {
                    		  	$category = "Dining";
                    		 } elseif(in_category('music')) {
                    			$category = "Music";
                    		 } elseif(in_category('tv')) {
                    		 	$category = "TV";
                    		 } elseif(in_category('arts')) {
                    		 	$category = "Arts";
                    		 } else {
                    			$category = "";
                    		 }                 
	    			?>         
            			<div class="post-layout">
					<a class="layout-list active <?php echo $category; ?>" href="#"><i class="icon-th-list"></i></a> 
					<a class="layout-grid <?php echo $category; ?>" href="#"><i class="icon-th"></i></a>
            			</div>
            		<?php endif; ?>
        	</div>
	<?php } else { ?>
		<div class="category-header row-fluid">
			<?php if(is_category('abqnewsseeker')) { ?>
				<h1><span>Most Recent</span></h1>
			<?php } else { ?>
				<h1><?php printf( __( '%s', 'dw-focus' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
			<?php } ?>
		</div>
		<?php if(cat_is_ancestor_of(6, $catID)) {
                	echo '<div class="sports-sublink">';
                        include('/web/journal/web/assets/sports-subcat-links.php');
                        echo '</div>';
                } ?>
	<?php } ?>

        <div class="content-inner layout-list">
		<?php if ( have_posts() ) : ?>
            <?php global $archive_i; $archive_i = 1 ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part('content', 'archive'); ?>
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
