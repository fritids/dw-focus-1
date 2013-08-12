<?php
/**
 * The Template for displaying all single posts.
 *
 * @package DW Focus
 * @since DW Focus 1.0
 */
$fromwhere = wp_get_referer();
if(stristr($fromwhere,'riowest') && (in_category('riowest') || post_is_in_descendant_category(61))) {
	get_header('riowest');
} else if(in_category(array('blogs', 'news', 'biz', 'sports-nm', 'opinion', 'politics', 'living', 'a1', 'abqnewsseeker')) || post_is_in_descendant_category(11,3,7,6,10,8,15,85,16)) {
        get_header('sections-single');
} else if(in_category(array('entertainment', 'featured-restaurants')) || post_is_in_descendant_category(14)) {
        get_header('venue');
} else {
	get_header();
} ?>
    <?php if(in_category(array('multimedia', 'extras'))) { ?>
	<div id="primary" class="site-content full-width">
    <?php } else { ?>
    	<div id="primary" class="site-content span9">
    <?php } ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>
		

	<?php endwhile; // end of the loop. ?>

	</div>

<!-- For not indexing MCT or LA Times -->
<?php                         
$author = get_the_author();
$content = get_the_content();
if ( $custom_author = get_post_meta( $post->ID, 'author', TRUE ) ) $author = $custom_author;
if ((stristr($author, 'McClatchy') or (stristr($author, 'Los Angeles Times')) or (stristr($author, 'Washington Post') or (stristr($content, ' by MCT') )))) {
	echo "\n".'<META NAME="ROBOTS" content="NOINDEX, NOFOLLOW" />'."\n";
} ?>
<!-- for google surveys -->
<div class="p402_hide">
</div>
<script type="text/javascript">
  try { _402_Show(); } catch(e) {}
</script>

<?php if(!in_category(array('multimedia', 'extras'))) {
	get_sidebar( 'single' ); 
} ?>
<?php get_footer(); ?>
