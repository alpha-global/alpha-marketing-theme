<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Alpha
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content-product' );

		endwhile; // End of the loop.
		?>

		<?php get_template_part( 'template-parts/related-posts' ); ?>

	</main><!-- #main -->

<?php
get_footer();