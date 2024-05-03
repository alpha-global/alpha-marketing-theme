<?php
/**
 * AYS Call To Action
 *
 * @package Alpha
 */

$block_id = 'alpha-ays-call-to-action-' . $block['id'];


// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-ays-call-to-action';

if ( get_field( 'button_type' ) ) {
	$button_type = get_field( 'button_type' );
}
if ( get_field( 'button' ) ) {
	$button = get_field( 'button' );
}
if ( get_field( 'image' ) ) {
	$image = get_field( 'image' );
}

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="ays-call-to-action">
		
		<div class="background-container">
			<div class="background" style="background-image: url( <?php echo esc_url( $image['url'] ); ?> )"></div>
		</div>
		
		<div class="container">

			<h2><?php the_field( 'title' ); ?></h2>

			<?php if($button_type == 'button'){ ?>
				<a class="ays-button" href="<?php echo $button['url'] ?>"><?php echo $button['title'] ?></a>
			<?php } else { ?>
				<!-- MailerLite Universal -->
				<script>
				(function(m,a,i,l,e,r){ m['MailerLiteObject']=e;function f(){
				var c={ a:arguments,q:[]};var r=this.push(c);return "number"!=typeof r?r:f.bind(c.q);}
				f.q=f.q||[];m[e]=m[e]||f.bind(f.q);m[e].q=m[e].q||f.q;r=a.createElement(i);
				var _=a.getElementsByTagName(i)[0];r.async=1;r.src=l+'?v'+(~~(new Date().getTime()/1000000));
				_.parentNode.insertBefore(r,_);})(window, document, 'script', 'https://static.mailerlite.com/js/universal.js', 'ml');

				var ml_account = ml('accounts', '1785156', 'x0t8g9s6s7', 'load');
				</script>
				<!-- End MailerLite Universal -->
			
				<?php echo get_field('newsletter_embed'); ?>
			
			<?php } ?>

		</div>

		
	</div>
</section>
