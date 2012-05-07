<?php
/**
 * The home page
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<article class="post" id="post-<?php the_ID(); ?>">
				
				<h2 class="post-title">
					<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>

				<header class="post-meta">
					<time datetime="<?php the_time('d/m/Y, g:i A') ?>"><?php the_time('l, jS F Y') ?></time> •
					<a href="<?php the_permalink() ?>/#comments" rel="bookmark" title="view comments"><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></a>
				</header>

				<section class="post-copy">
					<?php the_excerpt(); ?>
				</section>

			</article>

		<?php endwhile; ?>

		<?php
			// $max_pages = 7;
			// $range = 2;
			// custom_pagination($max_pages , $range);
		?>

	<?php endif; ?>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>