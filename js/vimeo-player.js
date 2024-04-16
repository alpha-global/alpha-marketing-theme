( function ( $ ) {

		$('.ays-vimeo-custom-thumb-cover').on( 'click', function( event ) {
			var vimeo_id = $(this).data('vimeo-video-id');
			$('.ays-vimeo-custom-thumb .container').prepend('<iframe class="" src="https://player.vimeo.com/video/'+vimeo_id+'?autoplay=1" width="100%" height="auto" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay"> </iframe>');
			$(this).fadeOut();
		} );

} )( jQuery );
