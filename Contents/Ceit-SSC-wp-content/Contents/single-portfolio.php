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

$item_type = kalium_get_field( 'item_type' );

// Custom Item Link Redirect
if ( kalium_get_field( 'item_linking' ) == 'external' ) {

	$launch_link_href = kalium_get_field( 'launch_link_href' );

	if ( $launch_link_href ) {

		if ( $launch_link_href != '#' ) {
			wp_redirect( $launch_link_href );
		} else {
			// Disabled item links, will redirect to closest next/previous post
			$include_categories = kalium_get_theme_option( 'portfolio_prev_next_category' ) ? true : false;

			$prev = get_next_post( $include_categories, '', 'portfolio_category' );
			$next = get_previous_post( $include_categories, '', 'portfolio_category' );

			if ( ! empty( $next ) ) {
				wp_redirect( get_permalink( $next ) );
			} else if ( ! empty( $prev ) ) {
				wp_redirect( get_permalink( $prev ) );
			}
		}

		die();
	}
}

// Disable Lightbox
if ( kalium_get_theme_option( 'portfolio_disable_lightbox' ) ) {
	kalium()->helpers->add_body_class( 'lightbox-disabled' );
}

// Theme header
get_header();

// Portfolio content
while ( have_posts() ) {
	the_post();

	// Post password.
	if ( post_password_required() ) {
		?>
        <div class="container password-protected-portfolio-item">
            <div class="row">
                <div class="col-sm-12"><?php echo get_the_password_form(); ?></div>
            </div>
        </div>
		<?php
		continue;
	}

	// Portfolio item type layout.
	switch ( $item_type ) {
		case 'type-1':
			get_template_part( 'tpls/portfolio-single-1' );
			break;

		case 'type-2':
			get_template_part( 'tpls/portfolio-single-2' );
			break;

		case 'type-3':
			get_template_part( 'tpls/portfolio-single-3' );
			break;

		case 'type-4':
			get_template_part( 'tpls/portfolio-single-4' );
			break;

		case 'type-5':
			get_template_part( 'tpls/portfolio-single-5' );
			break;

		case 'type-6':
			get_template_part( 'tpls/portfolio-single-6' );
			break;

		case 'type-7':
			get_template_part( 'tpls/portfolio-single-7' );
			break;
	}
}

// Theme footer
get_footer();