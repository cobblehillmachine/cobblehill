<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<script src="//use.typekit.net/ysp2tzm.js"></script>
<script>try{Typekit.load();}catch(e){}</script>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-30395430-1', 'cobblehilldigital.com');
	  ga('send', 'pageview');

	</script>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri(); ?>/css/mytheme.css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/retina.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-color-2.1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo-1.4.3.1-min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/iCheck.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/mytheme.js"></script>

	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> id="<?php echo  strtolower(str_replace(' ','-',get_the_title())); ?>">
	<div id="loader"></div>
	<div id="wrapper">
		
		<div id="header">
				<div class="table mid-cont">
					<div class="table-cell"><a class="logo" href="/"></a></div>
					<div class="new-menu table-cell">
						<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
						<a id="nav-toggle" class="hamburger"><span></span></a>
					</div>
				</div>
				<div id="nav">
					<div class="mid-cont">
						<?php $walker = new Menu_With_Description; ?>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'walker' => $walker ) ); ?>
					</div>
				</div>	
			</div>

		</div>
		<div id="main-wrap" class="cont">
			<?php if(is_home() || is_single() && !is_singular( 'featuredworks' )  || is_category() ) { ?>
				<div id="cat-cont" class="black-bg cont">
					<div class="mid-cont">
						<a class="blog-link" href="/whats-new"><h1>What's New</h1></a>
						<div class="cat-sort hidden">SORT BY</div>
						 <div class="cat-list"><?php wp_nav_menu( array( 'menu' => 'Blog Cat') ); ?></div>
					</div>
				</div>
			<?php } ?>