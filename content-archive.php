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
        <?php if( has_post_thumbnail() ) : ?>
        <div class="entry-thumbnail">
            <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'dw_focus' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">

                <?php if ( has_post_format('Video') || has_post_format('Audio') || has_post_format('Gallery')) : ?>
                    <?php echo dw_focus_post_format_icons(); ?>    
                <?php endif ?>

                <?php if( $archive_i == 1 ): ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php else: ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php endif; ?>
            </a>

            <?php if( $archive_i == 1 ): ?>
                <header class="entry-header">
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'dw_focus' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
                    </h2>

		    <?php if(is_category('dining')) { ?>
		    <div class="pull-left">
			<?php do_action('journal_staff_ratings', 'dining'); ?>
		    </div>
		    <?php } ?>	
                    <div class="entry-meta entry-meta-top">
                        <?php echo dw_focus_time_stamp( get_the_date('c') ); ?>
                        <span class="author"> | <?php the_author_posts_link(); ?> </span>
                    </div>
                </header>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <div class="post-inner">
            <header class="entry-header">
                <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'dw_focus' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

                <?php if(is_category('dining')) { ?>
                <div class="pull-left">
                    <?php do_action('journal_staff_ratings', 'dining'); ?>
                </div>
                <?php } ?>
                <div class="entry-meta entry-meta-top">
                    <?php echo dw_focus_time_stamp( get_the_date('c') ); ?>
                    <span class="author"> | <?php the_author_posts_link(); ?> </span>
                </div>
            </header>

            <div class="entry-content">
                <?php the_excerpt(); ?>
                <?php if(is_category('dining')) { ?>
                    <p style="text-align: right;">
                        <i><a href="<?php the_permalink(); ?>">rate this restaurant >></a></i>
		    </p>
                <?php } ?>
            </div><!-- .entry-content -->
            
            <footer class="entry-meta entry-meta-bottom">
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $tags_list = get_the_tag_list( '', __( ', ', 'dw_focus' ) );
                    if ( $tags_list ) :
                ?>
                <span class="tags-links">
                    <?php printf( __( 'Tags: %1$s', 'dw_focus' ), $tags_list ); ?>
                </span>
                <?php endif; // End if $tags_list ?>
            
            </footer>
        </div>
    </article>
