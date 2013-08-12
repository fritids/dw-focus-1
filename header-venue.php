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
		include("/web/journal/web/assets/googlesurvey.html"); 
	} ?>
	<?php include('/web/journal/web/assets/login.php'); ?>
	<header id="masthead" class="site-header venue" role="banner">
	    <div class="container">
		<div id="header" class="venue">
	    		<div class="row">
                 		<div id="sidebar-header" class="span9">
                                	<a href="/venue"><img src="http://www.abqjournal.com/base/venue_logo.png"></a>
					<div class="venue-top">VENUE<br><span>your arts and entertainment guide</span></div>
				</div>
				<div id="search-social">
					 <div id="toplinks-venue">
                                                <li><a href="http://www.abqjournal.com/subscribe">Subscribe</a></li>
                                                <li>|</li>
                                                <li><script type="text/javascript" src="http://www.abqjournal.com/base/cookieinsidelb.js"></script></li>
                                        </div>
					<?php
        	        		// Social links
                			$facebook = ot_get_option('dw_facebook');
                			$twitter = ot_get_option('dw_twitter');
               				$gplus = ot_get_option('dw_gplus');
                			?>
					<ul class="social-links">
						<li><a href="http://www.abqjournal.com/main/apps">Apps</a></li>
               		         		<li class="facebook"><a target="_blank" href="https://www.facebook.com/venueabqjournal" title="Venue ABQJournal Facebook"><img src="http://www.abqjournal.com/assets/facebook.png"></a></li>
                       				<li class="twitter"><a target="_blank" href="<?php echo $twitter;  ?>" title="<?php _e('Twitter','dw-focus') ?>"><img src="http://www.abqjournal.com/assets/twitter.png"></a></li>
                        			<li class="rss"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Rss','dw-focus') ?>"><img src="http://www.abqjournal.com/assets/rss.png"></a></li>
	                		</ul><!-- End social links -->
					<div id="searchbig" class="span3 <?php echo $offset; ?>" style="width:210px; height:26px; float: right;"><?php get_search_form(); ?></div>
				</div>
		        </div>
	        </div>
		    <div class="wrap-navigation venue">
			<nav id="site-navigation" class="main-navigation navbar" role="navigation">
				<div class="navbar-inner">
					<button class="collapse-search" data-target=".search-collapse" data-toggle="collapse" >
					<i class="icon-search"></i>
					</button>
					<div id="search-small" class="span3" style="margin: 7px; width: 250px; height:20px; float: right;">
						<form method="get" name="searchForm" class="searchForm" action="/search" role="search">
							<input type="text" class="field" name="q" value="" placeholder="Search &hellip;" />
							<input type="submit" class="submit" name="submit" value="Search" />
						</form>
					</div>
					<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse"  type="button">
                                        SECTIONS <img src="/wp-content/themes/dw-focus/assets/img/red-arrow-down.png">
                                        </button>
					<div class="search-collapse collapse">
						<form method="get" name="searchForm" class="searchForm" action="/search" role="search">
							<input type="text" class="field" name="q" value="" placeholder="Search &hellip;" />
							<input type="submit" class="submit" name="submit" value="Search" />
						</form>
					</div>	
					<div class="nav-collapse collapse">
						<ul id="menu-main-navigation" class="nav">
							<li id="menu-item-177490" class="menu-item-object-custom venue"><a href="/">Home</a></li>
							<li id="menu-item-177481" class="menu-item-object-category menu-parent-item"><a style="color: #0099cc" href="/category/movies">Movies</a></li>
							<li id="menu-item-177480" class="menu-item-object-category menu-parent-item"><a style="color: #ff0000" href="/category/dining">Dining</a></li>
							<li id="menu-item-177483" class="menu-item-object-category menu-parent-item"><a style="color: #ff9900" href="/category/music">Music</a></li>
							<li id="menu-item-177478" class="menu-item-object-category menu-parent-item"><a style="color: #9900ff" href="/category/arts">Arts</a></li>
							<li id="menu-item-177479" class="menu-item-object-category menu-parent-item"><a style="color: #666666" href="/category/tv">TV</a></li>
							<li id="menu-item-177484" class="menu-item-object-category menu-parent-item"><a style="color: #009966" href="/calendar">Calendar</a></li>
						</ul>						
					</div>	
				</div>
			</nav>
			
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

	<div id="main" class="venue">
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
