<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>
			<article id="post-0" class="post error404 not-found" role="main">
				<h1><?php _e( 'What the deuce?! o.0', 'boilerplate' ); ?></h1>
				<p><?php _e( 'Either the page you requested could not be found, or the flux-capacitor is operating at over over 1.21 gigawatts. Perhaps searching will help...', 'boilerplate' ); ?></p>
				<?php get_search_form(); ?>
				<script>
					// focus on search field after it has loaded
					document.getElementById('s') && document.getElementById('s').focus();
				</script>
			</article>
<?php get_footer(); ?>
