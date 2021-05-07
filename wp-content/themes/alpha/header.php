<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alpha
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'alpha' ); ?></a>

	<nav id="topline-nav" class="topline-nav">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'topline',
				'menu_id'        => 'topline-menu',
			)
		);
		?>
	</nav>

	<header id="masthead" class="site-header solid">

		<div class="branding">

			<a id="header-menu-logo" title="<?php bloginfo( 'name' ); ?>" rel="home" class="aicon-logo" href="<?php echo esc_url( home_url() ); ?>"></a>

			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'alpha' ); ?></button>

			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'menu_id'         => 'primary-menu',
						'container_class' => 'primary-menu-container',
					)
				);
				wp_nav_menu(
					array(
						'theme_location'  => 'primary-right',
						'menu_id'         => 'primary-right-menu',
						'container_class' => 'primary-right-menu-container',
					)
				);
				?>
			</nav><!-- #site-navigation -->

		</div><!-- .container -->

	</header><!-- #masthead -->
