<?php
/**
 * Kalium WordPress Theme
 *
 * Theme footer.
 *
 * @author Laborator
 * @link   https://kaliumtheme.com
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

/**
 * Wrapper end hooks.
 */
do_action( 'kalium_wrapper_end' );

?>
</div><!-- .wrapper -->
<?php
/**
 * After wrapper hooks.
 *
 * @hooked kalium_display_footer - 10
 */
do_action( 'kalium_after_wrapper' );

/**
 * WP Footer actions.
 */
wp_footer();
?>
</body>
</html>