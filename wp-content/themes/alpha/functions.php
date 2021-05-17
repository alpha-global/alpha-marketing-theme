<?php
/**
 * Alpha functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alpha
 */

if ( ! defined( 'ALPHA_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'ALPHA_VERSION', '1.0.0-build.1' );
}

require_once get_template_directory() . '/inc/acf-load.php';
require_once get_template_directory() . '/inc/wp-cli-acf-tools.php';
require_once get_template_directory() . '/inc/alpha-menu.php';
require_once get_template_directory() . '/inc/widgets.php';

if ( ! function_exists( 'alpha_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function alpha_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Alpha, use a find and replace
		 * to change 'alpha' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'alpha', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary'       => esc_html__( 'Primary', 'alpha' ),
				'primary-right' => esc_html__( 'Primary Right', 'alpha' ),
				'topline'       => esc_html__( 'Topline', 'alpha' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'alpha_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'alpha_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alpha_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'alpha_content_width', 640 );
}
add_action( 'after_setup_theme', 'alpha_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function alpha_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'alpha' ),
			'id'            => 'footer',
			'description'   => esc_html__( 'Add footer widgets.', 'alpha' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'alpha_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function alpha_scripts() {
	wp_enqueue_style( 'alpha-style', get_stylesheet_uri(), array(), ALPHA_VERSION );
	wp_style_add_data( 'alpha-style', 'rtl', 'replace' );

	wp_enqueue_script( 'alpha-navigation', get_template_directory_uri() . '/js/navigation.js', array(), ALPHA_VERSION, true );

	if ( has_block( 'acf/testimonials' ) || has_reusable_block( 'acf/testimonials' ) ) {
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/vendor/slick/slick/slick.js', array( 'jquery' ), ALPHA_VERSION, true );
		wp_enqueue_style( 'slick', get_template_directory_uri() . '/js/vendor/slick/slick/slick.css', array(), ALPHA_VERSION );
		wp_enqueue_script( 'alpha-slider', get_template_directory_uri() . '/js/slider.js', array( 'jquery', 'slick' ), ALPHA_VERSION, true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alpha_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Enqueue block editor style for Gutenberg Blocks
 */
function alpha_block_editor_styles() {
	wp_enqueue_style( 'axis1-blocks-editor-style', get_theme_file_uri( '/block-editor-style.css' ), false, ALPHA_VERSION, 'all' );
}
add_action( 'enqueue_block_editor_assets', 'alpha_block_editor_styles' );

function alpha_add_custom_gutenberg_color_palette() {
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => esc_html__( 'Black', 'alpha' ),
				'slug'  => 'black',
				'color' => '#000000',
			),
			array(
				'name'  => esc_html__( 'White', 'alpha' ),
				'slug'  => 'white',
				'color' => '#ffffff',
			),
			array(
				'name'  => esc_html__( 'Dark Gray', 'alpha' ),
				'slug'  => 'dark-gray',
				'color' => '#414141',
			),
			array(
				'name'  => esc_html__( 'Dark Blue', 'alpha' ),
				'slug'  => 'dark-blue',
				'color' => '#1e2433',
			),
			array(
				'name'  => esc_html__( 'Red', 'alpha' ),
				'slug'  => 'red',
				'color' => '#e42312',
			),
			array(
				'name'  => esc_html__( 'Light Gray', 'alpha' ),
				'slug'  => 'light-gray',
				'color' => '#f3f4f5',
			),
			array(
				'name'  => esc_html__( 'Purple', 'alpha' ),
				'slug'  => 'purple',
				'color' => '#4D4DA5',
			),
		)
	);
}
add_action( 'after_setup_theme', 'alpha_add_custom_gutenberg_color_palette' );
