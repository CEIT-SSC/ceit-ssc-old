<?php
/**
 * Kalium WordPress Theme
 *
 * Search form template.
 *
 * @author Laborator
 * @link   https://kaliumtheme.com
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

?>
<div class="widget_search widget">
    <form role="search" method="get" class="search-form search-bar" action="<?php echo esc_url( home_url() ); ?>">
        <label>
            <span class="screen-reader-text"><?php echo esc_attr__( 'Search for:', 'kalium' ); ?></span>
            <input type="search" class="form-control search-field" placeholder="<?php echo esc_attr__( 'Search site...', 'kalium' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" id="s" title="<?php echo esc_attr__( 'Search for:', 'kalium' ); ?>"/>
        </label>
        <input type="submit" class="search-submit go-button" id="searchsubmit" value="<?php echo esc_attr__( 'Go', 'kalium' ); ?>"/>
    </form>
</div>
