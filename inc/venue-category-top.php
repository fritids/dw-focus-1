<?php if(is_category('movies')) { ?>
<section class="category-top Movies">
	<?php 
	$args = array(
		'cat' => 517,
		'post_status' => 'publish',
                'meta_key' => '_thumbnail_id',
		'posts_per_page' =>1 
	);
	$query = new WP_Query( $args );
	// set $more to 0 in order to only get the first part of the post
	//global $more;
	//$more = 0;
	// The Loop
        if( $query->have_posts() ) {
	        while ( $query->have_posts() ) {
                     $query->the_post(); 
		     echo '<div class="image-wrapper"><div class="cat-label Movies"><a href="/category/movie-reviews">Movie Reviews</a></div><a href="';
		     the_permalink();
		     echo '">';
		     if(has_post_thumbnail()) {
			     the_post_thumbnail('large');
		     }
		     echo '</a></div><h2><a href="';
		     the_permalink();
		     echo '">';
		     the_title();
		     echo '</a></h2><div class="pull-left">';
		     do_action('journal_staff_ratings', 'movies');
                     echo '</div>';
		     the_excerpt();
 		     echo '<p style="text-align: right"><i><a href="';
		     the_permalink();
		     echo '">rate this movie >></a></i></p><li class="section-link" style="padding-top:5px;"><a href="/category/movie-reviews">More reviews >></a></li>';
	        }
        } else { 
               //no posts found 
        }
	//Reset Query
	wp_reset_postdata();
	?>
</section>
<div class="pull-right top-list">
<section class="category-section movies">
        <h3>Latest Trailers</h3>
	<div id="ndn_launcher_22322"><script type="text/javascript" src="http://embed.newsinc.com/thumbnail/embed.js?wid=22322&parent=ndn_launcher_22322"></script></div>
</section>
</div>
<div class="clear"></div>
<?php } elseif(is_category('tv')) { ?>
<style type="text/css">
                /* DO NOT MODIFY */
                .zcc-primetime {width:100%;}
                /* END DO NOT MODIFY */

                /* CUSTOMIZE PRESENTATION WITH THESE STYLES */
                /* adjust width here */
                #tms_widget_footer_wrap,
                #zcc-wrap {
                        width: 100%;
                        margin-bottom: 0px;
                }

                /* Adjust text within the grid */
                .zcc-primetime {
                        border-collapse: collapse;
                        caption-side: top;
                        font-size: 10px;
                        color: #000;
                        table-layout: fixed;
                        border-top: 1px solid #999;
                        border-left: 1px solid #999;
                        margin: 0;
                }

                /* Adjust NEW attribute */
                .zcc-sked-new,
                .zcc-sked-live {
                        color: #EEE;
                        font-size: 10px;
                        font-weight: bold;
                        padding: 0px 3px;
                        text-transform: uppercase;
                }
                .zcc-sked-live {
                        background-color: #1B905B;
                }
                .zcc-sked-new {
                        background-color: #1E75BB;
                }
                .zcc-primetime td,
                .zcc-primetime th {
                        border-right: 1px solid #859FC1;
                        border-bottom: 1px solid #859FC1;
                        padding: 3px 4px 5px;
                        overflow: hidden;
                        font-family: Verdana, sans-serif;
                }
                .zcc-primetime th {
                        padding: 3px 4px;
                        font-weight: normal;
                        text-align: left;
                }
                /* Adjust show titles within grid */
                .zcc-primetime a {
                        color: #004276 !important;
                        font-weight: bold;
                        text-decoration: none;
                }
                .zcc-primetime a:hover {
                        text-decoration: underline;
                }
                .zcc-primetime .zcc-station,
                .zcc-primetime .zcc-station .zcc-callsign {
                        text-align: center;
                }
                .zcc-primetime .zcc-station img {
                        text-align: center;
                }
                #tms_widget_footer {
                        clear: both;
                        color: #999;
                        font-family: arial, sans-serif;
                        font-size: 9px;
                        line-height: 2;
                        text-align: right;
                        border-width: 0 1px 1px;
                        border-style: solid;
                        border-color: #999;
                        margin: 0 0 10px 0;
                }
                #tms_widget_footer a:link,
                #tms_widget_footer a:visited,
                #tms_widget_footer a:hover,
                #tms_widget_footer a:active {
                        color: #999;
                        text-decoration: none;
                }
                #tms_widget_footer a:hover {
                        color: #666;
                        text-decoration: underline;
                }
        </style>

        <div class="content-bar row-fluid"><h1 class="page-title"><a href="http://affiliate.zap2it.com/tvlistings/ZCGrid.do?aid=nmalbaxs">Tonight in Prime Time</a></h1></div>
        <div id="zcc-wrap">
            <script type="text/javascript" src="http://api.zap2it.com/tvlistings/webservices/primetimeGrid?rty=html&aid=nmalbaxs&zip=87109&stnlt=12377,10609,10594,18857,10608,15762,10475"></script>
        </div>
        <div id="tms_widget_footer_wrap">
                <div id="tms_widget_footer">
                        <a target="_blank" href="http://tvlistings.zap2it.com/">TV listings</a>powered by <a target="_blank" href="http://www.zap2it.com/">Zap2it</a>
                </div>
        </div>
<?php } ?>
