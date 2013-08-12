<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport">
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
</head>

<body <?php body_class(); ?> >
	<header id="masthead" class="site-header" role="banner">
	    <div class="container">
		<?php
                // Social links
                $facebook = ot_get_option('dw_facebook');
                $twitter = ot_get_option('dw_twitter');
                $gplus = ot_get_option('dw_gplus');
                ?>
                <ul class="social-links visible-desktop">
                	<li class="span3 <?php echo $offset; ?>" style="width:210px; height:26px;"><?php get_search_form(); ?></li>
			<li class="facebook"><a target="_blank" href="<?php echo $facebook; ?>" title="<?php _e('Facebook','dw-focus') ?>"><img src="http://www.abqjournal.com/assets/facebook.png" style="width:24px;"></a></li>
                      	<li class="twitter"><a target="_blank" href="<?php echo $twitter;  ?>" title="<?php _e('Twitter','dw-focus') ?>"><img src="http://www.abqjournal.com/assets/twitter.png" style="width:24px;"></a></li>
                        <li class="rss"><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Rss','dw-focus') ?>"><img src="http://www.abqjournal.com/assets/rss.png" style="width:25px;"></a></li>
			<li><a href="http://www.abqjournal.com/subscribe">Subscribe</a></li>
                        <li><a href="http://www.abqjournal.com/subscribe">Log In</a></li>
                        <li><a href="http://www.abqjournal.com/subscribe">eJournal</a></li>
                </ul><!-- End social links -->
                <!-- header widget for weather -->
		<?php if( is_active_sidebar( 'dw_focus_header' ) ) { ?>
	                <div id="sidebar-header" class="span9">
        	                <div class="row">
                                        <?php dynamic_sidebar('dw_focus_header'); ?>
                                </div>
                        </div>
                <?php } ?>
		<!-- end weather widget -->

		<div id="header">
	    		<div class="row">
	           		<div id="branding" class="span3 visible-desktop">
		                <h1>
		                	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		                		<?php bloginfo( 'name' ); ?>
		                	</a>
		                </h1>
		            </div>
		            <!-- div added by JM pre-launch -->
			    <div id="header-ad">
			    	<script type='text/javascript'>
					GA_googleFillSlot("728x90_Top_Front");
				</script>
			    </div>
		        </div>
	        </div>
		    <div class="wrap-navigation">
		        <nav id="site-navigation" class="main-navigation navbar" role="navigation">
		            <div class="navbar-inner">
						<button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse"  type="button">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<button class="collapse-search hidden-desktop" data-target=".search-collapse" data-toggle="collapse" >
							<i class="icon-search"></i>
						</button>

						<a class="small-logo hidden-desktop" rel="home" title="DW Focus" href="<?php echo esc_url( home_url( '/' ) ); ?>">DW Focus</a>

						<div class="search-collapse collapse">
							<?php get_search_form( $echo = true ); ?>
						</div>

						<div class="nav-collapse collapse">
							<?php
							  $params = array(
							  	    'theme_location'  => 'primary',
									'container'       => '',
									'menu_class'      => 'nav',
									'depth'           => 3,
									'fallback_cb'    => 'link_to_menu_editor'
							  	);

							  if (!is_handheld()) {
							  	$params['walker']  = new DW_Mega_Walker();
							  }else{
							  	$params['walker']	=	new DW_Mega_Walker_Mobile();
							  }
								wp_nav_menu($params);
							?>
						</div>	
		            </div>
		        </nav>

		        <div id="under-navigation" class="clearfix under-navigation">
		        	<div class="row-fluid">
		        		<?php $offset = ''; ?>
		        		<?php if( is_active_sidebar( 'dw_focus_under_navigation' ) ) { ?>
		        		<!-- Under navigation positions ( breadcrum, twitter widgets) -->
			        	<div class="span9">
							<?php dynamic_sidebar('dw_focus_under_navigation'); ?>
						</div>
						<?php } //else { $offset = 'offset9';  }?>

						<!-- <div class="span3 <?php echo $offset; ?>"><?php get_search_form(); ?></div> -->
					</div>
			    </div>
		    </div>
	    </div>
	</header> <!-- End header -->

	<div id="main">
         <div class="container">
             <div class="row">
