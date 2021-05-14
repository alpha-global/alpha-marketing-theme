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

	acf_register_block_type(
		array(
			'name'            => 'hero',
			'title'           => __( 'Hero', 'alpha' ),
			'description'     => __( 'Hero', 'alpha' ),
			'render_template' => 'template-parts/blocks/hero.php',
			'category'        => 'alpha',
			'keywords'        => array( 'hero', 'alpha' ),
			'mode'            => 'auto',
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

	acf_register_block_type(
		array(
			'name'            => 'stats',
			'title'           => __( 'Stats', 'alpha' ),
			'description'     => __( 'Stats', 'alpha' ),
			'render_template' => 'template-parts/blocks/stats.php',
			'category'        => 'alpha',
			'keywords'        => array( 'stats', 'alpha' ),
			'mode'            => 'auto',
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


	acf_register_block_type(
		array(
			'name'            => 'testimonials',
			'title'           => __( 'Testimonials', 'alpha' ),
			'description'     => __( 'Testimonials', 'alpha' ),
			'render_template' => 'template-parts/blocks/testimonials.php',
			'category'        => 'alpha',
			'keywords'        => array( 'testimonials', 'alpha' ),
			'mode'            => 'auto',
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

	/*
	acf_register_block_type(
		array(
			'name'            => 'hero-slider',
			'title'           => __( 'Hero Slider' ),
			'description'     => __( 'Hero Slider' ),
			'render_template' => 'template-parts/blocks/hero-slider.php',
			'category'        => 'alpha',
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
