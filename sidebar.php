<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package DW Focus
 * @since DW Focus 1.0
 */
?>
	
	<?php if ( is_active_sidebar( 'dw_focus_sidebar' ) ) : ?>
    		<div id="secondary" class="widget-area span3" role="complementary">
			<?php if(!is_home() && is_active_sidebar( 'dw_focus_top_sidebar' ) ) : 
				dynamic_sidebar('dw_focus_top_sidebar'); 
			endif; ?>
			<?php dynamic_sidebar('dw_focus_sidebar'); ?>
		</div>
	<?php endif; ?>
