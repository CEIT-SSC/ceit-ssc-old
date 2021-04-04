<?php
/**
 * Kalium WordPress Theme
 *
 * Search template.
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
 * Search results listing.
 */
get_template_part( 'tpls/search-results' );

/**
 * Theme footer.
 */
get_footer();
