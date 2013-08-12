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
        if( has_post_thumbnail( get_the_ID() ) ) {
            $class .= ' has-thumbnail';
        }
    ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class($class); ?> >
        <?php if( has_post_thumbnail() ) : ?>
        <div class="entry-thumbnail">
                <?php if ( has_post_format('Video') || has_post_format('Audio') || has_post_format('Gallery')) : ?>
                    <?php echo dw_focus_post_format_icons(); ?>    
                <?php endif ?>

                <?php the_post_thumbnail('medium'); ?>
        </div>
        <?php endif; ?>
        <div class="post-inner">
            <header class="entry-header">
                <h2 class="entry-title"><?php the_title(); ?></h2>
            </header>

            <div class="entry-content">
                <?php the_content(); ?>
            </div><!-- .entry-content -->
	</div>
    </article>
