<?php
/**
 * Kalium WordPress Theme
 *
 * Laborator.co
 * www.laborator.co
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

// Comments list
if ( have_comments() ) :
	$comments_number = get_comments_number();

	?>
    <section class="post-comments">

        <div class="container">

            <div class="post-comments--section-title">
                <h2><?php echo sprintf( _n( '1 Comment', '%d Comments', $comments_number, 'kalium' ), $comments_number ); ?></h2>
                <p><?php $comments_number > 0 ? esc_html_e( 'Join the discussion and tell us your opinion.', 'kalium' ) : esc_html_e( 'Be the first to comment on this article.', 'kalium' ); ?></p>
            </div>

            <div class="post-comments--list">
				<?php
				// Comments List
				wp_list_comments( [
					'style'        => 'div',
					'callback'     => 'kalium_blog_post_comment_open',
					'end-callback' => 'kalium_blog_post_comment_close',
				] );
				?>
            </div>

			<?php
			// Comments pagination
			$comments_pagination_args = [
				'prev_text' => sprintf( esc_html__( '%s Previous', 'kalium' ), '<i class="flaticon-arrow427"></i>' ),
				'next_text' => sprintf( esc_html__( 'Next %s', 'kalium' ), '<i class="flaticon-arrow413"></i>' ),
				'type'      => 'list',
				'echo'      => false,
			];

			// Display pagination
			if ( $comments_pagination = paginate_comments_links( $comments_pagination_args ) ) {
				echo sprintf( '<div class="pagination-container">%s</div>', $comments_pagination );
			}
			?>


        </div>

    </section>
<?php

endif;

// Post comment form
if ( comments_open() ) :

	// Form arguments
	$form_args = array(
		'format' => 'html5',

		'title_reply'    => have_comments() ? esc_html__( 'Leave a reply', 'kalium' ) : esc_html__( 'Share your thoughts', 'kalium' ),
		'title_reply_to' => esc_html__( 'Reply to %s', 'kalium' ),

		'comment_notes_before' => '',
		'comment_notes_after'  => '',

		'label_submit' => esc_html__( 'Comment', 'kalium' ),
		'class_submit' => 'button',
	);

	?>
    <section class="post-comment-form">

        <div class="container">

			<?php
			// Comment form
			comment_form( $form_args );
			?>

        </div>

    </section>
<?php

endif;
