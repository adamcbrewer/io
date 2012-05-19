<!DOCTYPE html public '♟'>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
<head>
	<meta charset="utf-8">

	<!-- 	
		Make a DNS handshake with a foreign domain, so the connection 
		goes faster when the user eventually needs to access it. 
		This works well for loading in assets (like images) from another domain, 
		or a JavaScript library from a CDN.
	-->
	<link rel="dns-prefetch" href="//ajax.googleapis.com">

	<!-- 
		IE10 does not support plugins, such as Flash, in Metro Mode. 
		If your site requires plugins, you can let users know that via the 
		X-UA-Compatible meta element (requiresActiveX=true), which will prompt them to switch to Desktop Mode.
	-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true">

	<title>
		<?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 * We filter the output of wp_title() a bit -- see
			 * boilerplate_filter_wp_title() in functions.php.
			 */
			//wp_title( '|', true, 'right' );
			$title = single_post_title(false, false);
		?>
		{ io: <?php echo $title ? $title : 'null'; ?> }
	</title>

	<!-- META -->
	<meta http-equiv="Content-Language" content="en-gb">
	<meta http-equiv="imagetoolbar" content="false">
	<meta name="MSSmartTagsPreventParsing" content="true">
	<meta name="robots" content="all">
	
	<meta name="Author" content="Adam Brewer">
	<link type="text/plain" rel="author" href="humans.txt" />
	<meta name="Copyright" content="Adam Brewer">
	
	<meta name="description" content="Thoughts on web-development, from null.">
	<meta name="keywords" content="html, css, javascript, web dev, front-end, responsive, mobile, code, development">

	<!-- FACEBOOK OPEN GRAPH -->
	<meta property="og:title" content="<?php echo $title ? $title : 'BrewerLogic: I/O'; ?>"/> <!-- subject title -->
	<meta property="og:site_name" content="BrewerLogic: I/O"/> <!-- A human-readable name for your site -->
	<meta property="og:description" content="Thoughts on web-development, from null."/> <!-- basic site description -->

	<!-- 
		Signal to search engines and others "Use this URL for this page!" 
		Useful when parameters after a # or ? is used to control the display state of a page.
	-->
	<!-- <link rel="canonical" href=""> -->

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/reset.css" />
	<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/assets/css/core.css" />

	<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) ) {
			//wp_enqueue_script( 'comment-reply' );
		}

		wp_head();
	?>
</head>
<body <?php body_class(); ?>>
	
	<div id="wrapper">

		<header id="header" role="banner">
			<h1><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">Input/Output<?php // bloginfo( 'name' ); ?></a></h1>
			<p><?php bloginfo( 'description' ); ?></p>

			<nav id="navigation" role="navigation">
			
				<?php
					// Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.
				?>
				<?php
					//wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) );
				?>

			</nav><!-- #access -->

		</header>

		<section id="content" role="main">
