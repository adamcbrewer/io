  <?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.  The actual display of comments is
 * handled by a callback to boilerplate_comment which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?>

<?php if ( post_password_required() ) : ?>

	<p><?php _e( 'This post is password protected. Enter the password to view any comments.', 'boilerplate' ); ?></p>

	<?php
		/* Stop the rest of comments.php from being processed,
		 * but don't kill the script entirely -- we still have
		 * to fully load the template.
		 */

	return;

endif; ?>

<?php if ( have_comments() ) : ?>

	<h3 id="comments-title">Thoughts on this</h3>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>

		<?php previous_comments_link( __( '&larr; Older Comments', 'boilerplate' ) ); ?>
		<?php next_comments_link( __( 'Newer Comments &rarr;', 'boilerplate' ) ); ?>

	<?php endif; // check for comment navigation ?>

	<ol>
		<?php
			/** 
			 * If you want to overload this in a child theme then you can
			 * define boilerplate_comment() and that will be used instead.
			 * See boilerplate_comment() in boilerplate/functions.php for more.
			 */
			wp_list_comments( array( 'callback' => 'io_comments' ) );
		?>

	</ol>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
	
		<?php previous_comments_link( __( '&larr; Older Comments', 'boilerplate' ) ); ?>
		<?php next_comments_link( __( 'Newer Comments &rarr;', 'boilerplate' ) ); ?>

	<?php endif; // check for comment navigation ?>

<?php else : // or, if we don't have comments:

	/* If there are no comments and comments are closed,
	 * let's leave a little note, shall we?
	 */
	if ( ! comments_open() ) : ?>
		
		<p><?php _e( 'Sorry, comments are closed.', 'boilerplate' ); ?></p>

	<?php endif; // end ! comments_open() ?>

<?php endif; // end have_comments() ?>

<?php
	$new_args = array(
		'fields' => array(
			'author' => '<p class="comment-form-author">' . '<label for="author">' . __( 'Name' ) . '</label> ' .
	            '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',
			'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) . '</label> ' .
	            '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',
		),
		'comment_notes_before' => '',
		'comment_notes_after' => '',
		'title_reply' => 'Your thoughts'
	);
?>

<?php comment_form($new_args); ?>