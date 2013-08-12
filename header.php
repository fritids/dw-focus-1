<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
<meta property="fb:app_id" content="419447351433280"/>
<?php if(is_home()) { ?>
	<meta http-equiv="refresh" content="600">
<?php } ?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php include('/web/journal/web/assets/catads.php'); ?>
<!-- google ad tags for targetting DFP by section | added by JM pre-launch -->
<?php
global $cat999;
$cat999="home";
$uri = $_SERVER['REQUEST_URI'];
if (preg_match ("/main\/$/i","$uri")){             $cat999="home";    }
if (preg_match ("/\/$/i","$uri")){                 $cat999="home";    }
if (preg_match ("/biz/i","$uri")){                 $cat999="business";}
if (preg_match ("/news/i","$uri")){                $cat999="news";}
if (preg_match ("/entertainment/i","$uri")){       $cat999="ent";}
if (preg_match ("/obit/i","$uri")){                $cat999="obituaries";}
if (preg_match ("/sports/i","$uri")){              $cat999="sports";}
if (preg_match ("/opinion/i","$uri")){             $cat999="opinions";}
if (preg_match ("/comics/i","$uri")){              $cat999="comics";}
if (preg_match ("/blogs/i","$uri")){              $cat999="blogs";}
?>
<!-- end google ad tags -->
<?php wp_head(); ?>

<!-- moves top-sidebar below top story for smaller screen sizes - JM -->
<script type="text/javascript">
/*jQuery(document).ready(function() {
	jQuery('#secondary aside').filter(':even').addClass('clear');
});*/
</script>
<!-- Facebook SDK -->
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '419447351433280', // App ID
      channelUrl : '//www.abqjournal.com/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional initialization code here
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>
<!-- end Facebook SDK -->

</head>

<body <?php body_class(); ?>>
	<?php if(is_single()) {
		include('/web/journal/web/assets/googlesurvey.html'); 
	}?>
	<?php include('/web/journal/web/assets/login.php'); ?>
	<?php if(is_home()) { ?>
		<div class="skin_ad">
			<script type='text/javascript'>
			var width = document.documentElement.clientWidth;
			if (width >= 1200) 
				GA_googleFillSlot("home_skin");
			</script>
		</div>
	<?php } ?>
	<header id="masthead" class="site-header" role="banner">
	    <div class="container">
		<!-- top header links -->
		<ul id="top-header-links">	
			<span style="float:left; width:50%;">
			<li><a href="http://www.abqjournal.com/subscribe">Subscribe</a></li>
                        <li><script type="text/javascript" src="http://www.abqjournal.com/base/cookieinsidelb.js"></script></li>
                        <li><a href="http://epaper.abqjournal.com/">eJournal</a></li>
			<li><a href="http://subscriber.abqjournal.com/">Subscriber Services</a></li>
			</span>
			<span style="float: right; width:50%; text-align: right;">
			<li><a href="/puzzles?content_category=crosswords">Crossword</a></li>
			<li><a href="/puzzles">Puzzles</a></li>
			<li><a href="/comics">Comics</a></li>
			</span>
                </ul><!-- End top headerlinks -->
		<div id="header" <?php if(is_page('north') || in_category('north')) { echo 'class="north"'; } ?>>
	    		<div class="row">
       		                <!-- header widget for weather -->
 		                <?php if( is_active_sidebar( 'dw_focus_header' ) ) { ?>
                 		        <div id="sidebar-header" class="span9">
                                		<!-- for smaller sizes, only shows these two links -->
						<div id="toplinks-small">
							<li><a href="http://www.abqjournal.com/subscribe">Subscribe</a></li>
				                        <li>|</li>
							<li><script type="text/javascript" src="http://www.abqjournal.com/base/cookieinsidelb.js"></script></li>
						</div>
						<div id="sidebar-header-widget">
							<div class="row" style="overflow: hidden;">
                                        			<?php dynamic_sidebar('dw_focus_header'); ?>
                                			</div>
							<ul id="top-header-links" style="margin:-15px 12px;">
							<?php if(is_page('north') || in_category('north')) { ?>
								<li><a href="http://www.wunderground.com/auto/journal/NM/Santa_fe.html">Santa Fe Weather</a></li>
							<?php } else { ?>
								<li><a href="http://www.wunderground.com/auto/journal/NM/KABQ.html">Weather</a></li>
								<li>|</li>
								<li><a href="/traffic">Traffic</a></li>
							<?php } ?>
							</ul>
						</div>
					</div>
                		<?php } ?>
                		<!-- end weather widget -->
				<?php if(is_page('north') || in_category('north')) { ?>
				<div id="branding" class="span3 north">
				<?php } else { ?>
				<div id="branding" class="span3">
					<div class="above-logo">
						<img src="http://www.abqjournal.com/base/abqj-ball-logo.png">
					</div>
		                <?php } ?>
				<h1>
		                	<center><a href="<?php if(is_page('north') || in_category('north')) { echo '/north'; } else { echo esc_url( home_url( '/' ) ); } ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
		                	</a></center>
		                </h1>
		        	</div>
				<div id="search-social">
				<?php
                		// Social links
                		$facebook = ot_get_option('dw_facebook');
                		$twitter = ot_get_option('dw_twitter');
               			$gplus = ot_get_option('dw_gplus');
                		?>
				<ul class="social-links">
					<li><a href="/apps">Apps</a></li>
                        		<li class="facebook"><a target="_blank" href="<?php echo $facebook; ?>" title="<?php _e('Facebook','dw-focus') ?>"><img src="http://www.abqjournal.com/assets/facebook.png"></a></li>
                       			<li class="twitter"><a target="_blank" href="<?php echo $twitter;  ?>" title="<?php _e('Twitter','dw-focus') ?>"><img src="http://www.abqjournal.com/assets/twitter.png"></a></li>
                        		<li class="rss"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Rss','dw-focus') ?>"><img src="http://www.abqjournal.com/assets/rss.png"></a></li>
                		</ul><!-- End social links -->
				<div id="searchbig" class="span3 <?php echo $offset; ?>" style="width:100%; height:26px; float: right;"><?php get_search_form(); ?></div>
				</div>
		        </div>
	        </div>
		    <div class="wrap-navigation">
			<?php include('/web/journal/web/assets/navbar-responsive.php'); ?>

		         <?php if( is_active_sidebar( 'dw_focus_under_navigation' ) ) { ?>
			 <div id="under-navigation" class="clearfix under-navigation">
		        	<div class="row-fluid">
		        		<!-- Under navigation positions ( breadcrum, twitter widgets) -->
			        	<div class="span9">
						<?php dynamic_sidebar('dw_focus_under_navigation'); ?>
					</div>
			    	</div>
		    	</div>
			<?php } ?>
	    </div>
	</header> <!-- End header -->

	<div id="main">
         <div class="container">         
		<?php if(is_home()) { ?>
		<div class="banner-ad-home">
                        <script type='text/javascript'>
                        var width = document.documentElement.clientWidth;
			if (width >= 980)
				GA_googleFillSlot("1000x300");
                        </script>
                </div>
		<?php } else { ?>
			<div class="banner-ad big">
	                        <script type='text/javascript'>
	                        var width = document.documentElement.clientWidth;
	                        if(width >= 1220 )
	                                GA_googleFillSlot("970x66_Top_ROS");
        	                </script>
        	        </div>
        	        <div class="banner-ad middle">
        	                <script type="text/javascript">
        	                var width = document.documentElement.clientWidth;
        	                if(width < 1220 && width >= 785)
        	                        GA_googleFillSlot("728x90_Top_<?php global $catads; echo $catads ?>");
        	                </script>
        	        </div>
        	        <div class="banner-ad small">
        	                <script type="text/javascript">
        	                var width = document.documentElement.clientWidth;
        	                if(width < 785)
        	                        GA_googleFillSlot("320x50_Mobile_ATF");
        	                </script>
        	        </div>
		<?php } ?>
		
               <?php if(is_home()) { include('/web/journal/web/wp-content/themes/dw-focus/inc/breaking-insert.php'); } ?>
		
		<div class="row">
