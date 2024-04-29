<?php
/**
 * Episodes Carousel
 *
 * @package Alpha
 */

$block_id = 'alpha-ays-episode-carousel-' . $block['id'];


// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-ays-episode-carousel';

if ( get_field( 'episodes' ) ) {
	$episodes = get_field( 'episodes' );
}

if ( get_field( 'colour_one' ) ) {
	$colour_one = get_field( 'colour_one' );
}

if ( get_field( 'colour_two' ) ) {
	$colour_two = get_field( 'colour_two' );
}

if ( get_field( 'card_size' ) ) {
	$card_size = get_field( 'card_size' );
}

$count = 0;

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="container ays-episode-carousel-container">
		<h2><?php the_field( 'title' ); ?></h2>
		<div class="swiper ays-episode-carousel-swiper ays-episode-carousel-colour-one-<?php echo $colour_one; ?> ays-episode-carousel-colour-two-<?php echo $colour_two; ?>">
			<div class="swiper-wrapper">
				<?php foreach($episodes as $episode){ ?>
					<?php $count++; ?>
					<div class="swiper-slide ays-episode <?php echo ($count % 2 == 1) ? "ays-episode-bg-".$colour_one : "ays-episode-bg-".$colour_two; ?>">
						<div class="ays-episode-inner">
							<div class="ays-episode-number">
								<?php echo $episode['episode_number']; ?>
							</div>
							<div class="ays-episode-title">
								<?php echo $episode['episode_title']; ?>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<!-- If we need pagination -->

			  <!-- If we need navigation buttons -->
			  <div class="swiper-button-prev"></div>
			  <div class="swiper-button-next"></div>

			  <!-- If we need scrollbar -->
			  <div class="swiper-scrollbar swiper-scrollbar-<?php echo $colour_one; ?>"></div>
		</div>
	</div>
</section>
