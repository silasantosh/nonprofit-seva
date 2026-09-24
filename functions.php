<?php
/**
 * Nonprofit Seva functions and definitions.
 *
 * @package Nonprofit_Seva
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register pattern categories so NGOs find the page layouts fast.
 */
function nonprofit_seva_register_pattern_categories() {
	register_block_pattern_category(
		'nonprofit-seva-pages',
		array( 'label' => __( 'Nonprofit Seva - Full pages', 'nonprofit-seva' ) )
	);
	register_block_pattern_category(
		'nonprofit-seva-sections',
		array( 'label' => __( 'Nonprofit Seva - Sections', 'nonprofit-seva' ) )
	);
}
add_action( 'init', 'nonprofit_seva_register_pattern_categories' );
