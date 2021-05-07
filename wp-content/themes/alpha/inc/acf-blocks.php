<?php
/**
 * Place all ACF powered blocks definitions here.
 *
 * @package Alpha
 */

/**
 * Registers ACF blocks.
 */
function alpha_register_acf_block_types() {

	/*
	acf_register_block_type(
		array(
			'name'            => 'hero-slider',
			'title'           => __( 'Hero Slider' ),
			'description'     => __( 'Hero Slider' ),
			'render_template' => 'partials/blocks/pf/hero-slider.php',
			'category'        => 'pressfoundry',
			'keywords'        => array( 'slider', 'hero' ),
			'mode'            => 'preview',
			'icon'            => 'images-alt2',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);
	*/

}

// Check if function exists and hook into setup.
if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'alpha_register_acf_block_types' );
}
