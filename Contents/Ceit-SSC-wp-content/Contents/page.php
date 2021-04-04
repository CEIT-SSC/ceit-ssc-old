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

// When using "mPress Custom Front Page" template switching is necessary
if ( 'portfolio' === get_post_type() ) {
	get_template_part( 'single-portfolio' );

	return;
}

// Show header
get_header();

// Check if is default container
$is_vc_content           = preg_match( "/\[vc_row.*?\]/i", $post->post_content );
$is_build_with_elementor = kalium()->elementor->is_built_with_elementor( get_the_ID() );

// Password protected page doesn't use vc container
if ( post_password_required() ) {
	$is_vc_content = false;
}

// Page title (show or hide)
$show_title = is_singular() && kalium_get_field( 'heading_title' ) && ! $is_vc_content;

// Container start
$container = [];

if ( $is_build_with_elementor ) {
	$container[] = 'elementor-content';
} else if ( $is_vc_content ) {
	$container[] = 'vc-container';
} else {
	$container[] = 'container';
	$container[] = 'default-margin';

	if ( ! kalium()->is->woocommerce_active() || ! ( is_woocommerce() || is_cart() || is_checkout() || is_account_page() ) ) {
		$container[] = 'post-formatting';
	}
}

while ( have_posts() ) : the_post();
	?>
    <div <?php kalium_class_attr( $container ); ?>>
		<?php
		// Show page title
		if ( false == defined( 'HEADING_TITLE_DISPLAYED' ) && apply_filters( 'kalium_page_title', $show_title ) ) {
			?>
            <h1 class="wp-page-title"><?php the_title(); ?></h1>
			<?php
		}

		// Page content
		the_content();
		?>
    </div>
<?php
endwhile;

// Show footer
get_footer();