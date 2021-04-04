<?php
/**
 * Kalium WordPress Theme
 *
 * Portfolio archive.
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
 * Show portfolio items.
 */
get_template_part( 'tpls/portfolio-listing' );

/**
 * Theme footer.
 */
get_footer();
