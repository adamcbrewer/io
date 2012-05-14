<?php
/**
 * The Template for displaying all single posts.
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
					<time datetime="<?php the_time('d/m/Y, g:i A') ?>"><?php the_time('l, jS F Y') ?></time> &#9734;
					<a href="<?php the_permalink() ?>/#comments" rel="bookmark" title="view comments"><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></a> &#9734;
					<a href="<?= site_url('feed'); ?>" title="subscribe">rss</a> &#9734;
					<a href="https://twitter.com/share?url=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>&amp;via=adamcbrewer" target="_blank" title="tweet">twits</a> &#9734;
					<a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&amp;t=BrewerLogic" target="_blank" title="share">fb</a> &#9734;
					<a href="http://plusone.google.com/_/+1/confirm?hl=en&amp;url=<?php the_permalink(); ?>" target="_blank" title="+1">g+</a>
				</header>

				<section class="post-copy">
					<?php the_content(); ?>
				</section>

			</article>

			<section id="comments">

				<?php comments_template( '/io-comments.php', true ); ?>

			</section>

		<?php endwhile; ?>

		<?php
			// $max_pages = 7;
			// $range = 2;
			// custom_pagination($max_pages , $range);
		?>

	<?php endif; ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>