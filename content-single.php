<?php
/*
 * The template for displaying content on the search page.
 *
 * @package DW Focus
 * @since DW Focus 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php $categories = wp_get_post_categories($post->ID); 
	foreach($categories as $catID) {
		if(cat_is_ancestor_of(11, $catID)) {
        	        include('/web/journal/web/wp-content/themes/dw-focus/inc/blog-headers.php');
     			break;
		}
	} ?>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="pull-left"><?php the_category(); ?></div>
		<div class="fb-like pull-right" data-href="http://www.facebook.com/TheAlbuquerqueJournal" data-send="false" data-width="150" data-show-faces="false"></div>
		<div class="clear"></div>
	</header><!-- .entry-header -->

	<?php $keep_inline = get_post_meta( get_the_ID(), 'journal_featured_image_inline', true );
        if( has_post_thumbnail() && ! has_post_format('video') && ! has_post_format('audio') && ! has_post_format('gallery') && ($keep_inline != 1) ) : ?>	
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(''); ?>
			<?php the_post_thumbnail_caption(); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<div class="entry-meta">
                        By <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php echo get_the_author(); ?></a> | <?php dw_focus_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php if(in_category('abqnewsseeker')) {
			echo '<div class="post-time">Posted: ';
			echo the_time();
			$updatetime = get_post_meta($post->ID, 'updatetime', true);
			if($updatetime != get_the_time('U') && $updatetime >  get_the_time('U') + 600) {
                                echo '<br>Last updated: ';
                                echo date('g:i a', $updatetime);
                        }
			echo '</div>';
		} ?>
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'dw_focus' ), 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<?php dw_focus_post_actions(); ?>

	<footer class="entry-meta entry-meta-bottom">
		<?php related_posts(); ?>	
		<?php if ( get_the_author_meta( 'description' ) ) : ?>
		<div class="author-info">
			<div class="author-avatar">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ), 90 ); ?>
			</div><!-- .author-avatar -->
			<div class="author-description">
                <h2><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author"><?php echo get_the_author(); ?></a></h2>

                <p class="description"><?php the_author_meta( 'description' ); ?></p>
            </div><!-- .author-description -->
		</div><!-- .author-info -->
		<?php endif; ?>
		<!-- comments -->
		<a name="comment"></a>
		<?php if( get_the_time('U') < 1339430454 ) {
			//used to be disqus those comments are now gone
		} elseif (( get_the_time('U') > 1370239380)) { ?>
			<div id="facebook-comments" style="margin:10px;">
    				<h3>Comments</h3>
    				<p style="font-size:11px;"><b>Note:</b> Readers can use their Facebook identity for online comments or can use Hotmail, Yahoo or AOL accounts via the "Comment using" pulldown menu. You may send a news tip or an anonymous comment directly to the reporter, <a target="_blank" href="http://www.abqjournal.com/cgi-bin/email_reporter.pl?byline=<?php the_author_meta('user_email'); ?>">click here</a>.</p>
 				<?php $shortlink=wp_get_shortlink();
				//time when main went away -- put it back in
				if( get_the_time('U') < 1374704259 ) {
					$shortlink = preg_replace("/abqjournal.com/","abqjournal.com/main","$shortlink");
				} ?>
				<fb:comments href="<? echo $shortlink ?>" num_posts="10" width="640" migrated="1"></fb:comments>
			</div>
		<?php } elseif(( get_the_time('U') > 1339430454 ) and( get_the_time('U') < 1370131200 )) {
			//fb comments, but using old url structure, with dates
			$oldlink = get_permalink();
			$datepublished = get_the_date('/Y/m/d');
			$oldlink =   preg_replace('/http:\/\/www.abqjournal.com\//','',"$oldlink");
			$oldlink = preg_replace("/[0-9]{5,6}/","$datepublished","$oldlink");
			$oldlink = "http://www.abqjournal.com/main".$oldlink; ?>
			<div id="facebook-comments" style="margin:10px;">
    				<h3>Comments</h3>
    				<fb:comments href="<? echo $oldlink ?>" num_posts="12" width="640" migrated="1"></fb:comments>
			</div>
		<?php } ?>
	</footer>
</article><!-- #post-<?php the_ID(); ?> -->
