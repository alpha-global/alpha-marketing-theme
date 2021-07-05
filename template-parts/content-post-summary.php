<?php
/**
 * Post Summary
 *
 * @package Alpha
 */

?>

<a href="<?php the_permalink(); ?>" class="post-summary">
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="post-summary-thumbnail">
			<?php the_post_thumbnail( 'large' ); ?>
		</div>
	<?php endif; ?>
	<div class="post-summary-content">
		<div class="post-summary-date"><?php the_time( 'M j, Y' ); ?></div>
		<h6 class="post-summary-title"><?php the_title(); ?></h6>
		<?php if ( 'product' === get_post_type() ) : ?>
			<div class="post-summary-link"><?php _e( 'See More', 'alpha' ); ?></div>
		<?php else: ?>
			<div class="post-summary-link"><?php _e( 'Read Article', 'alpha' ); ?></div>
		<?php endif; ?>
	</div>
</a>
