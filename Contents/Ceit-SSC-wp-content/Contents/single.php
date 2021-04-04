<?php
/**
 * Kalium WordPress Theme
 *
 * Single post template.
 *
 * @author Laborator
 * @link   https://kaliumtheme.com
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

/**
 * Theme header.
 */
get_header();

/**
 * Show post information if exists.
 */
if ( have_posts() ) :

	while ( have_posts() ) : the_post();

		/**
		 * kalium_blog_single_before_content
		 *
		 * @hooked kalium_blog_single_post_image_full_width - 10
		 **/
		do_action( 'kalium_blog_single_before_content' );

		?>
        <div <?php kalium_blog_single_container_class(); ?>>

            <div class="container">

                <div class="row">

					<?php
					/**
					 * kalium_blog_single_content hook
					 *
					 * @hooked kalium_blog_single_post_image_boxed - 10
					 * @hooked kalium_blog_single_post_layout - 20
					 * @hooked kalium_blog_single_post_sidebar - 30
					 **/
					do_action( 'kalium_blog_single_content' );
					?>

                </div>

            </div>

        </div>
		<?php

		/**
		 * kalium_blog_single_after_content
		 *
		 * @hooked kalium_blog_single_post_comments - 10
		 **/
		do_action( 'kalium_blog_single_after_content' );

	endwhile;

endif;

/**
 * Theme footer.
 */
get_footer();
