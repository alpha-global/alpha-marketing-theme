<?php
/**
 * Product Custom Post Type
 *
 * @package Alpha
 */

/**
 * Registers a new post type
 *
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string       $post_type Post type key, must not exceed 20 characters
 * @param array|string $args See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function alpha_register_product_post_type() {

	$labels = array(
		'name'               => __( 'Products', 'alpha' ),
		'singular_name'      => __( 'Product', 'alpha' ),
		'add_new'            => _x( 'Add New Product', 'alpha', 'alpha' ),
		'add_new_item'       => __( 'Add New Product', 'alpha' ),
		'edit_item'          => __( 'Edit Product', 'alpha' ),
		'new_item'           => __( 'New Product', 'alpha' ),
		'view_item'          => __( 'View Product', 'alpha' ),
		'search_items'       => __( 'Search Products', 'alpha' ),
		'not_found'          => __( 'No Products found', 'alpha' ),
		'not_found_in_trash' => __( 'No Products found in Trash', 'alpha' ),
		'parent_item_colon'  => __( 'Parent Product:', 'alpha' ),
		'menu_name'          => __( 'Products', 'alpha' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'show_in_rest'        => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => true,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'trackbacks',
			'comments',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type( 'product', $args );
}
add_action( 'init', 'alpha_register_product_post_type' );
