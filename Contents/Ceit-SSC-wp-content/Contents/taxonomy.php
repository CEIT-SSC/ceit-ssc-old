<?php
/**
 * Kalium WordPress Theme
 *
 * Taxonomy template.
 *
 * @author Laborator
 * @link   https://kaliumtheme.com
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

// Portfolio taxonomies
if ( is_tax( [ 'portfolio_category', 'portfolio_tag' ] ) ) {
	get_template_part( 'archive-portfolio' );
} // Other taxonomies
else {
	get_template_part( 'archive' );
}
