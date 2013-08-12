 <?php
	date_default_timezone_set('America/Denver');
        $args = array(
                'showposts' => 1,
                'post_status' => 'publish',
                'caller_get_posts' => 1,
                'meta_key' => 'breaking',
                'orderby' => 'meta_value_num',
                'order' => 'DESC'
        );
        $query = new WP_Query( $args );
        //The loop
        if ( $query-> have_posts() ) {
                while( $query -> have_posts() ) {
                        $query -> the_post();
                        global $do_not_duplicate;
                        $do_not_duplicate[0] = get_the_ID();
                        $now = date("U");
                        $updatetime = get_post_meta(get_the_ID(), 'updatetime', true);
                        //make time longer on weekend
                        $dayweek = date("w");
            		$howlong = 10800;
            		if(($dayweek == "0") || ($dayweek == "6")) {
                		$howlong = 21600;
            		}
                        if($now > $updatetime + $howlong) {
                		delete_post_meta($post->ID, 'breaking');
                		break;
                        }
                        $breaking = get_post_meta($post->ID, 'breaking', true);
                	//removes breaking/updated from beginning of headlines
			$breakhed = 'Breaking:';
			$updatehed = 'Updated:';
			$title = get_the_title();
			if (preg_match("/^breaking:/i", $title)) {
				$title = substr($title, strlen($breakhed));
			} elseif (preg_match("/^updated:/i", $title)) {
				$title = substr($title, strlen($updatehed));
			}								    
                        if(preg_match('/.*_1$/', $breaking)) { ?>
                                <div id="breaking">
					<div class="breaking-text-small">BREAKING</div>
					<div class="breaking-text-big">BREAKING<br><span>NEWS</span></div>
					<p><a href="<?php the_permalink(); ?>"><?php echo $title; ?> </a><span class="seektime">updated <?php echo date('g:i a', $updatetime); ?></span></p>
				</div>
                        <?php
                        } elseif(preg_match('/.*_2$/', $breaking)) { ?>
                        <!--        <div id="breaking-big"><p> <a href="<?php the_permalink(); ?>" style="font-size:24px; text-decoration:none; font-weight:700; "><?php echo  $title; ?> </a><span class="seektime">updated <?php echo date('g:i a', $updatetime); ?></span><span class="image-rss"><?php get_the_image(array( 'image_scan' => true )); ?></span><br/> <?php the_excerpt(); ?> </p><div class="clear"></div></a></div>  -->
                        <?php }
                }
        } else {
                //no posts found
        }
//Reset query
wp_reset_postdata();
?>

