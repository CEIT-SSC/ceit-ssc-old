<?php
/**
 * Kalium WordPress Theme
 *
 * Archive page.
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
 * kalium_blog_archive_before_content
 *
 * @hooked kalium_blog_get_options - 10
 * @hooked kalium_blog_page_header - 20
 **/
do_action( 'kalium_blog_archive_before_content' );

?>
    <div <?php kalium_blog_container_class(); ?>>

        <div class="container">

            <div class="row">

				<?php
				/**
				 * kalium_blog_archive_content hook
				 *
				 * @hooked kalium_blog_archive_posts_column_open - 10
				 * @hooked kalium_blog_posts_loop - 20
				 * @hooked kalium_blog_archive_posts_pagination - 30
				 * @hooked kalium_blog_archive_posts_column_close - 40
				 * @hooked kalium_blog_sidebar_loop - 50
				 **/
				do_action( 'kalium_blog_archive_content' );
				?>

            </div>

        </div>

    </div>
<?php

/**
 * kalium_blog_archive_after_content
 *
 * @hooked kalium_blog_reset_options - 1000
 **/
do_action( 'kalium_blog_archive_after_content' );

/**
 * Theme footer.
 */
get_footer();
