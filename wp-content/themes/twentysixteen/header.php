<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" version="XHTML+RDFa 1.0" dir="ltr">
	<head profile="http://www.w3.org/1999/xhtml/vocab">
		<title>Northeast Investors Trust |</title>
		<meta name="google-site-verification" content="yoXQ1LwKIK4s9DXuZ8aN6fRAtd7eRRN8XfTvZhLeBE0" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="images/favicons.png" type="image/png" />
		<meta name="description" content="Northeast Investors Trust is a No-Load High-Yield Mutual Fund. The Trust's mission provides for the highest integrity of service to its shareholders through the prudent investment in marketable income-producing securities of established companies." />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/base.css' ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/layerslider.css' ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/responsive.css' ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/icons.css' ?>">
	
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/superfish.css' ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/colors.css' ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/css/driver.css' ?>">
		<?php wp_head(); ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/supposition.js' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery.bgiframe.min.js' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/superfish.js' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/supersubs.js' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/superfish.js' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery.sb.js' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery.tooltips.min.js' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery.magnific-popup.min.js' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery.jpanelmenu.js' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/custom.js' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/sfsmallscreen.js' ?>"></script>
		
		<!--<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/chart.js?p9fc7k' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/driver.js?p9fc7k' ?>"></script>-->
			<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/chart.js' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/driver.js' ?>"></script>
			<script type="text/javascript" src<?php echo get_template_directory_uri().'/js/sftouchscreen.js' ?>"></script>
			<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery.min.js' ?>"></script>
		
		<!--<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery.once.js?v=1.2' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/drupal.js?p9fc7k' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/admin_devel.js?p9fc7k' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery.colorbox-min.js?p9fc7k' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/colorbox.js?p9fc7k' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/colorbox_style.js?p9fc7k' ?>"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/jquery.flexslider.js?p9fc7k' ?>"></script>-->
		
		
		<script type="text/javascript">
			jQuery(document).ready(function() { 
				jQuery("#layerslider_1").layerSlider({ 
					width : '100%',
					height : '900px',
					responsive : true,
					responsiveUnder : 1200,
					sublayerContainer : 1200,
					autoStart : true,
					pauseOnHover : true,
					firstLayer : 1,
					animateFirstLayer : true,
					randomSlideshow : false,
					twoWaySlideshow : true,
					keybNav : true,
					touchNav : true,
					imgPreload : true,
					navPrevNext : true,
					navStartStop : true,
					navButtons : true,
					hoverPrevNext : true,
					hoverBottomNav : false,
					thumbnailNavigation : 'hover',
					tnWidth : 100,
					tnHeight : 60,
					tnContainerWidth : '60%',
					tnActiveOpacity : 35,
					tnInactiveOpacity : 100,
					skin : 'fullwidth',
					globalBGColor : 'transparent',
					yourLogo : false,
					yourLogoStyle : 'left: 10px; top: 10px;',
					yourLogoLink : false,
					yourLogoTarget : '_self',
					loops : 0,
					forceLoopNum : true,
					autoPlayVideos : true,
					autoPauseSlideshow : 'auto',
					youtubePreview : 'maxresdefault.jpg',
					cbInit : function(element) { },
					cbStart : function(data) { },
					cbStop : function(data) { },
					cbPause : function(data) { },
					cbAnimStart : function(data) { },
					cbAnimStop : function(data) { },
					cbPrev : function(data) { },
					cbNext : function(data) { }
				});
			});
		</script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri().'/js/layerslider.jquery.js' ?>"></script>
	
				
		
</head>
<body <?php body_class(); ?>>
  <div class="top-area">
	  <div class="container">
		<div class="stock nine columns">
			<div class="stockTick"></div>
		</div>
		<div class="seven columns top-nav-bar">
		<?php
		    get_search_form();
			wp_nav_menu( array( 
			'theme_location' => 'top-nav', 
			'container_class' => '',
			'menu_class'     => 'menu right'
			)); 
			
		?>
		</div>
	  </div>
  </div>
  
  
	<header id="header">   
		<div class="container">	  			
			<div id="mobile-navigation">
				<a href="#menu" class="menu-trigger"><i class="icon-reorder"></i></a>
			</div>

			<div id="logo" class="five columns">
				<!--<?php // twentysixteen_the_custom_logo(); ?>-->
				 <h1>
			<a href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri().'/images/northeast-logo.jpg' ?>" /></a>
			</h1>
				
			</div>
		
			<div class="eleven columns">
				<nav id="navigation" class="menu">
					<div class="region region-main-menu">
						<div id="block-superfish-1" class="block block-superfish">
						 
							<?php if ( has_nav_menu( 'primary' ) ) : ?>
								<?php
								wp_nav_menu( array(
									'theme_location' => 'primary',
									'container_class'     => 'content',
									'menu_class'     => 'menu sf-menu '
								 ) );
								?>
							<?php endif; ?>
						</div>
							
					</div>
				</nav>
			</div>
		</div>	
	</header>
	
	
	
	<div id="content" class="site-content">
