<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport">
<meta property="fb:app_id" content="419447351433280"/>
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
<?php if(is_page('classifieds-bridge')) { ?>
<link rel="stylesheet" type="text/css" media="all" href="http://www.abqjournal.com/base/stylesheets/classifieds2013.css?ver=1255294206" />
<script type="text/javascript" src="https://secure.adpay.com/branding/0/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="https://secure.adpay.com/branding/0/jquery.jcarousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://secure.adpay.com/branding/2011/skin.css" />
<script type="text/javascript">
	var width = document.documentElement.clientWidth;
	if (width > 979) {
		jQuery(document).ready(function() {
		$('#mycarousel').show();
    		jQuery('#mycarousel').jcarousel({
    		scroll: 5, 
    		visible: 5,
    		wrap: 'circular'
    		});
		});
	}
</script>
<?php } ?>
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
	<?php include('/web/journal/web/assets/login.php'); ?>
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
                        <li><a href="/jobs">Comics</a></li>
			</span>
                </ul><!-- End top headerlinks -->
		<div id="header" class="section">
	    		<div class="row">
       		                <!-- shows logo on the side -->
                 		        <div id="sidebar-header" class="span9">
                                		<!-- for smaller sizes, only shows these two links -->
						<div id="toplinks-small">
							<li><a href="http://www.abqjournal.com/subscribe">Subscribe</a></li>
				                        <li>|</li>
							<li><script type="text/javascript" src="http://www.abqjournal.com/base/cookieinsidelb.js"></script></li>
						</div>
						<div id="sidebar-header-widget" class="section">
							<div class="row" style="overflow: hidden;">
                                				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://www.abqjournal.com/base/abqj-ball-logo.png"></a>
							</div>
						</div>
					</div>
				<div id="branding" class="section">
		                <h1 class="section-header">
                                	<a href="/"><img src="http://www.abqjournal.com/base/journal-logo300.png"></a>
				        <div class="page-title-header">
						<?php if(is_page()) { ?>
                                        		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						<?php } else if(is_category())  { 
							$catID = getCurrentCatID(); 
							if(cat_is_ancestor_of(11, $catID)) { ?>
								<a href="/blogs">Blogs</a>
							<? } else if(is_category('abqnewsseeker')) { ?>
								<a href="/category/abqnewsseeker">Most Recent</a>
							<?php } else { ?>
								<a href="<?php get_category_link($catID); ?>"><?php single_cat_title(); ?></a>
							<?php } 
						} ?>
					</div>
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
					<li class="facebook"><a target="_blank" href="<?php echo $facebook; ?>" title="<?php _e('Facebook','dw-focus') ?>"><img src="http://www.abqjournal.com/assets/facebook.png" style="width:24px;"></a></li>
                       			<li class="twitter"><a target="_blank" href="<?php echo $twitter;  ?>" title="<?php _e('Twitter','dw-focus') ?>"><img src="http://www.abqjournal.com/assets/twitter.png" style="width:24px;"></a></li>
                        		<li class="rss"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Rss','dw-focus') ?>"><img src="http://www.abqjournal.com/assets/rss.png" style="width:25px;"></a></li>
                		</ul><!-- End social links -->
				<div id="searchbig" class="span3 <?php echo $offset; ?>" style="width:210px; height:26px; float: right;"><?php get_search_form(); ?></div>
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
	    </div>
	</header> <!-- End header -->

	<div id="main">
         <div class="container">         
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
		<div class="row">
