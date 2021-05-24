<?php
/**
 * Card Block
 *
 * @package Alpha
 */

$block_id = 'alpha-offices-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-offices';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}

$continents = get_field( 'continents' );
$countries  = get_field( 'countries' );

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="alpha-offices-tabs">
		<ul>
			<?php foreach ( $continents as $key => $continent ) : ?>
				<li><a href="#"><?php echo esc_html( $continent['title'] ); ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
