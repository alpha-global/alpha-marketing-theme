<?php
/**
 * AYS Hosts
 *
 * @package Alpha
 */

$block_id = 'alpha-ays-hosts-' . $block['id'];


// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-ays-hosts';

if ( get_field( 'hosts' ) ) {
	$hosts = get_field( 'hosts' );
}
$count = 0;

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="container ays-hosts">
		<h2><?php the_field( 'title' ); ?></h2>
		<div class="swiper-hosts ays-hosts-swiper ays-fade-up">
			<div class="swiper-wrapper">
				<?php foreach($hosts as $host){ ?>
					<?php $count++; ?>
					<div class="swiper-slide ays-host">
						<div class="ays-host-inner">
							<div class="ays-host-content">
								<div>
									<div class="ays-host-image-mobile">
										<?php if(isset($host['image']['url'])) { ?>
											<img src="<?php echo $host['image']['url']; ?>"alt="<?php echo $host['image']['alt']; ?>" />
										<?php } ?>
									</div>
									<div class="ays-host-contain">
										<div class="ays-host-name"><?php echo $host['name']; ?></div>
										<div class="ays-host-bio"><?php echo $host['bio']; ?></div>
									</div>

									<!-- <div class="swiper-pagination-<?php echo $count; ?>"></div> -->

									<div class="ays-host-nav-buttons">
										<div class="swiper-button-prev swiper-button-prev-hosts"></div>
					  					<div class="swiper-button-next swiper-button-next-hosts"></div>
									</div>
								</div>
							</div>
							<div class="ays-host-image ays-host-image-desktop">
								<?php if(isset($host['image']['url'])) { ?>
									<img src="<?php echo $host['image']['url']; ?>"alt="<?php echo $host['image']['alt']; ?>" />
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination-container">
				<div class="swiper-pagination swiper-pagination-hosts"></div>
			</div>

			  <!-- If we need navigation buttons -->
			  <!-- <div class="swiper-button-prev"></div>
			  <div class="swiper-button-next"></div> -->

			  <!-- If we need scrollbar -->
			  <!-- <div class="swiper-scrollbar"></div> -->
		</div>
	</div>
</section>
