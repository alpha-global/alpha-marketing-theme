<?php
/**
 * Hero Block
 *
 * @package Alpha
 */

$block_id = 'alpha-hero-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-hero';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}
if ( get_field( 'is_full_page' ) ) {
	$class_name .= ' alpha-hero-full-page';
} else {
	$class_name .= ' alpha-hero-default';
}

if ( get_field( 'background_image' ) ) {
	$background_id = get_field( 'background_image' );
	$background_url = wp_get_attachment_image_url( $background_id, 'full' );
	$background_url_mobile = wp_get_attachment_image_url( $background_id, 'large' );

	?>
	<style>
		#<?php echo $block_id; ?> .background {
			background-image: url( <?php echo esc_url( $background_url ); ?> );
		}
		@media (max-width: 480px) {
			#<?php echo $block_id; ?> .background {
				background-image: url( <?php echo esc_url( $background_url_mobile ); ?> );
			}
		}
	</style>
	<?php
}

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="background"></div>
	<div class="container">
		<div class="alpha-hero-content">
			<?php if ( get_field( 'title' ) ) : ?>
				<h1><?php the_field( 'title' ); ?></h1>
			<?php endif; ?>
			<?php if ( get_field( 'description' ) ) : ?>
				<div class="alpha-hero-description"><?php the_field( 'description' ); ?></div>
			<?php endif; ?>
			<?php if ( have_rows( 'buttons' ) ) : ?>
				<ul class="alpha-hero-buttons">
					<?php
					while ( have_rows( 'buttons' ) ) :
						the_row();
						$button = get_sub_field( 'button' );
						$icon   = get_sub_field( 'icon' );
						$style  = get_sub_field( 'style' );
						?>
						<li>
							<?php alpha_button( $button, $style, $icon ); ?>
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
</section>
