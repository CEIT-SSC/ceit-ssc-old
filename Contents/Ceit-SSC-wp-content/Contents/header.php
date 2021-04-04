<?php
/**
 * Kalium WordPress Theme
 *
 * Theme header.
 *
 * @author Laborator
 * @link   https://kaliumtheme.com
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}
?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
// WP body open
// wp_body_open();

/**
 * Before wrapper hooks.
 *
 * @hooked kalium_display_page_borders - 10
 * @hooked kalium_header_display_mobile_menu - 20
 * @hooked kalium_header_display_top_menu - 30
 * @hooked kalium_header_display_side_menu - 40
 */
// do_action( 'kalium_before_wrapper' );
?>

<div class="wrapper" id="main-wrapper">

	<?php
	/**
	 * Wrapper start hooks.
	 *
	 * @hooked kalium_header_display - 10
	 */
	// do_action( 'kalium_wrapper_start' );
	?>
