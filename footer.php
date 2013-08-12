<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package DW Focus
 * @since DW Focus 1.0
 */
?>
            </div>
         </div>
     </div>

        <!-- Bottom sidebar position -->
        <?php if( is_active_sidebar( 'dw_focus_bottom' ) ) : ?>
        <div id="bottom">
            <div class="container">
            <?php dynamic_sidebar('dw_focus_bottom'); ?>
            </div>
        </div>
        <?php endif; ?>

    <!-- Footer -->
    <footer id="colophon" class="site-footer dark" role="contentinfo">
        <div class="container">

            <?php if( is_active_sidebar( 'dw_focus_footer_1' ) 
                        || is_active_sidebar( 'dw_focus_footer_2' ) 
                        || is_active_sidebar( 'dw_focus_footer_3' )  
                        || is_active_sidebar( 'dw_focus_footer_4' )  ) { ?>
            <div id="sidebar-footer" class="row-fluid">
                <?php if( is_active_sidebar('dw_focus_footer_1') ) { ?>
                <div id="sidebar-footer-1" class="span4">
                <?php dynamic_sidebar('dw_focus_footer_1'); ?>
                </div>
                <?php } ?>
                <?php if( is_active_sidebar('dw_focus_footer_2') ) { ?>
                <div id="sidebar-footer-2" class="span4">
                <?php dynamic_sidebar('dw_focus_footer_2'); ?>
                </div>
                <?php } ?>
                <?php if( is_active_sidebar('dw_focus_footer_3') ) { ?>
                <div id="sidebar-footer-3" class="span4">
                <?php dynamic_sidebar('dw_focus_footer_3'); ?>
                </div>
                <?php } ?>
		<!-- JM commented out widget 4. If we need to add another one, uncomment and change span4 to span3 on all -->
                <?php //if( is_active_sidebar('dw_focus_footer_4') ) { ?>
                <!-- <div id="sidebar-footer-4" class="span3"> -->
                <?php //dynamic_sidebar('dw_focus_footer_4'); ?>
                <!-- </div> -->
                <?php //} ?>
            </div>

            <?php } ?>

        </div>

        <div id="site-info" class="container">
            <div class="clearfix">
                <div class="copyright">
                    <p>Copyright &copy; <? echo date("Y"); ?> Albuquerque Journal | Albuquerque, N.M.</p>
                </div>
            </div>
        </div>
    </footer><!-- #colophon .site-footer -->
<a class="scroll-top" href="#masthead" title="<?php _e( 'Scroll to top', 'dw-focus' ); ?>"><?php _e( 'Top', 'dw-focus' ); ?></a>


<?php wp_footer(); ?>

</body>
</html>
