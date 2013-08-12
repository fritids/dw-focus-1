<?php 
	$today = getdate();
	$args = array(
		'cat' => 83,
		'post_status' => 'publish',
		'year'     => $today["year"],
		'monthnum' => $today["mon"],
		'day' => $today["mday"],
		'posts_per_page' =>1, 
		'order'    => 'DESC'
	);
	$query= new WP_Query( $args );
	// The Loop
        if( $query -> have_posts() ) {
               	while ( $query -> have_posts() ) {
                        $query->the_post();
                        global $do_not_duplicate;
                        $do_not_duplicate[0] = get_the_ID();
                        $updatetime = get_post_meta(get_the_ID(), 'updatetime', true);
			echo '<div id="post"><div id="breaking"><div class="breaking-text-small">BREAKING</div><div class="breaking-text-big">BREAKING<br><span>NEWS</span></div><p><a href="';
			the_permalink();
			echo '">';
			the_title();
			echo '</a><span class="seektime">updated ';
			echo date('g:i a', $updatetime);
			echo '</div></div>';
	        }
        }
        // Reset Query
	wp_reset_postdata();
?>
