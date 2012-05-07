<!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
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
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<!-- <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" /> -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
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
