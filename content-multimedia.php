<?php
/*
 * The template for displaying content on the archive page.
 *
 * @package DW Focus
 * @since DW Focus 1.0
 */
?>

    <?php
        global $archive_i; $class = '';
        if( isset($archive_i) && $archive_i % 3 == 0 ) {
            $class = 'first';
        }
        if( has_post_thumbnail( get_the_ID() ) ) {
            $class .= ' has-thumbnail';
        }
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class($class); ?> >
        <header class="entry-header">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'dw_focus' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
	</header>
	<?php if( has_post_thumbnail() ) : ?>
        <div class="entry">
	    <div class="entry-thumbnail">
	    <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'dw_focus' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
                    <?php the_post_thumbnail('full'); ?>
            </a>
	    </div>
	    <div class="entry-text">
                <div class="entry-meta"><?php echo the_date('M j, Y'); ?></div>
                <div class="entry-content">
                   <?php the_excerpt(); ?>
                </div><!-- .entry-content -->
            </div>
        </div>
        <?php endif; ?>
    </article>
