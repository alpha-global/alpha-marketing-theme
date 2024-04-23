<?php
/**
 * AYS Stay Connected
 *
 * @package Alpha
 */

$block_id = 'alpha-ays-stay-connected-' . $block['id'];


// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-ays-stay-connected';

if ( get_field( 'image' ) ) {
	$image = get_field( 'image' );
}

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="container">
		
		<div class="ays-stay-connected-left">

			<h2><?php the_field( 'title' ); ?></h2>

			<?php echo get_field('newsletter_embed'); ?>

			<div class="ays-stay-connected-social">
				<a target="_blank" href="<?php echo get_field('youtube'); ?>">
					<svg width="53" height="47" viewBox="0 0 53 47" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M50.5801 11.392C50.0004 9.21641 48.2982 7.50898 46.1359 6.93066C42.2161 5.875 26.5001 5.875 26.5001 5.875C26.5001 5.875 10.7841 5.875 6.86432 6.93066C4.702 7.50898 2.99974 9.21641 2.42005 11.392C1.37109 15.3301 1.37109 23.5367 1.37109 23.5367C1.37109 23.5367 1.37109 31.7434 2.42005 35.6814C2.99974 37.857 4.702 39.491 6.86432 40.0693C10.7841 41.125 26.5001 41.125 26.5001 41.125C26.5001 41.125 42.2161 41.125 46.1359 40.0693C48.2982 39.491 50.0004 37.8479 50.5801 35.6814C51.6291 31.7434 51.6291 23.5367 51.6291 23.5367C51.6291 23.5367 51.6291 15.3301 50.5801 11.392ZM21.3657 30.9906V16.0828L34.4961 23.5367L21.3657 30.9906Z" fill="black"/>
					</svg>
				</a>
				<a target="_blank" href="<?php echo get_field('facebook'); ?>">
					<svg width="47" height="47" viewBox="0 0 47 47" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_19_370)">
						<path d="M47 23.5C47 10.5199 36.4801 0 23.5 0C10.5199 0 0 10.5199 0 23.5C0 34.5156 7.5916 43.7687 17.827 46.3115V30.6785H12.9801V23.5H17.827V20.4064C17.827 12.4109 21.4438 8.70234 29.3016 8.70234C30.7887 8.70234 33.359 8.99609 34.4146 9.28984V15.7891C33.8639 15.734 32.9 15.6973 31.6975 15.6973C27.842 15.6973 26.3549 17.1568 26.3549 20.948V23.5H34.0291L32.7072 30.6785H26.3457V46.8256C37.9855 45.4211 47 35.5162 47 23.5Z" fill="black"/>
						</g>
						<defs>
						<clipPath id="clip0_19_370">
						<rect width="47" height="47" fill="white"/>
						</clipPath>
						</defs>
					</svg>
				</a>
				<a target="_blank" href="<?php echo get_field('tiktok'); ?>">
					<svg width="41" height="47" viewBox="0 0 41 47" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_19_374)">
						<path d="M41 19.2682C36.9695 19.2768 33.0382 18.0148 29.7616 15.6605V32.0738C29.7607 35.1136 28.8344 38.0807 27.1068 40.5782C25.3791 43.0757 22.9324 44.9846 20.0939 46.0495C17.2554 47.1144 14.1604 47.2846 11.2228 46.5374C8.28519 45.7901 5.6451 44.161 3.65558 41.8679C1.66607 39.5749 0.421983 36.7272 0.0897192 33.7057C-0.242545 30.6842 0.35285 27.633 1.79628 24.9601C3.2397 22.2872 5.46234 20.1201 8.16693 18.7486C10.8715 17.3771 13.9291 16.8666 16.9308 17.2854V25.5379C15.5583 25.1045 14.0843 25.1172 12.7194 25.5741C11.3545 26.031 10.1684 26.9089 9.33052 28.0822C8.49261 29.2556 8.04573 30.6645 8.05369 32.1078C8.06164 33.5511 8.52402 34.9549 9.37481 36.1189C10.2256 37.2829 11.4213 38.1476 12.7912 38.5893C14.161 39.0311 15.635 39.0274 17.0027 38.5788C18.3704 38.1303 19.5618 37.2597 20.4068 36.0915C21.2518 34.9233 21.7072 33.5171 21.708 32.0738V0H29.7616C29.7571 0.683211 29.8153 1.36539 29.9355 2.03789C30.2156 3.53694 30.7975 4.96295 31.6456 6.22878C32.4938 7.49461 33.5903 8.57367 34.8683 9.4C36.6875 10.6051 38.8199 11.2468 41 11.2451V19.2682Z" fill="black"/>
						</g>
						<defs>
						<clipPath id="clip0_19_374">
						<rect width="41" height="47" fill="white"/>
						</clipPath>
						</defs>
					</svg>
				</a>
				<a target="_blank" href="<?php echo get_field('instagram'); ?>">
					<svg width="42" height="47" viewBox="0 0 42 47" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0_24_726)">
						<path d="M21.0094 12.9433C15.0469 12.9433 10.2376 17.6525 10.2376 23.4908C10.2376 29.3291 15.0469 34.0382 21.0094 34.0382C26.9719 34.0382 31.7813 29.3291 31.7813 23.4908C31.7813 17.6525 26.9719 12.9433 21.0094 12.9433ZM21.0094 30.348C17.1563 30.348 14.0063 27.2728 14.0063 23.4908C14.0063 19.7087 17.1469 16.6335 21.0094 16.6335C24.8719 16.6335 28.0126 19.7087 28.0126 23.4908C28.0126 27.2728 24.8626 30.348 21.0094 30.348ZM34.7345 12.5119C34.7345 13.8796 33.6095 14.972 32.222 14.972C30.8251 14.972 29.7094 13.8705 29.7094 12.5119C29.7094 11.1533 30.8344 10.0517 32.222 10.0517C33.6095 10.0517 34.7345 11.1533 34.7345 12.5119ZM41.8688 15.0087C41.7094 11.7132 40.9407 8.79409 38.4751 6.38901C36.0188 3.98394 33.0376 3.2312 29.6719 3.06597C26.2032 2.87319 15.8063 2.87319 12.3376 3.06597C8.98132 3.22202 6.00007 3.97476 3.53445 6.37983C1.06882 8.78491 0.309448 11.7041 0.140698 14.9996C-0.0561768 18.396 -0.0561768 28.5763 0.140698 31.9728C0.300073 35.2683 1.06882 38.1874 3.53445 40.5925C6.00007 42.9976 8.97195 43.7503 12.3376 43.9156C15.8063 44.1083 26.2032 44.1083 29.6719 43.9156C33.0376 43.7595 36.0188 43.0068 38.4751 40.5925C40.9313 38.1874 41.7001 35.2683 41.8688 31.9728C42.0657 28.5763 42.0657 18.4052 41.8688 15.0087ZM37.3876 35.6171C36.6563 37.4164 35.2407 38.8025 33.3938 39.5277C30.6282 40.6017 24.0657 40.3539 21.0094 40.3539C17.9532 40.3539 11.3813 40.5925 8.62507 39.5277C6.78757 38.8117 5.37195 37.4255 4.63132 35.6171C3.53445 32.9091 3.78757 26.4833 3.78757 23.4908C3.78757 20.4982 3.54382 14.0632 4.63132 11.3644C5.36257 9.56519 6.7782 8.17905 8.62507 7.45386C11.3907 6.37983 17.9532 6.62768 21.0094 6.62768C24.0657 6.62768 30.6376 6.38901 33.3938 7.45386C35.2313 8.16987 36.6469 9.55601 37.3876 11.3644C38.4844 14.0724 38.2313 20.4982 38.2313 23.4908C38.2313 26.4833 38.4844 32.9183 37.3876 35.6171Z" fill="black"/>
						</g>
						<defs>
						<clipPath id="clip0_24_726">
						<rect width="42" height="47" fill="white"/>
						</clipPath>
						</defs>
					</svg>
				</a>
			</div>

			<a href="mailto:<?php echo get_field('contact_email_address'); ?>" class="ays-stay-connected-email">
				<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.625 3.5C1.17578 3.5 0 4.67578 0 6.125C0 6.95078 0.388281 7.72734 1.05 8.225L12.95 17.15C13.5734 17.6148 14.4266 17.6148 15.05 17.15L26.95 8.225C27.6117 7.72734 28 6.95078 28 6.125C28 4.67578 26.8242 3.5 25.375 3.5H2.625ZM0 9.625V21C0 22.9305 1.56953 24.5 3.5 24.5H24.5C26.4305 24.5 28 22.9305 28 21V9.625L16.1 18.55C14.8531 19.4852 13.1469 19.4852 11.9 18.55L0 9.625Z" fill="black"/>
				</svg>

				<?php echo get_field('contact_email_address'); ?>
			</a>	

		</div>

		<div class="ays-stay-connected-right">

			<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"/>

		</div>

	</div>
</section>
