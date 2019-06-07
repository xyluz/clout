$(document).ready(function() {

	// ========== FUNCTIONS ========== //

	/*function openLightbox() {
		$('.gallery').after('<div class="lightbox">'
								  + '<figure>'
								  + '<figcaption>' + ($(this).attr('alt') ? $(this).attr('alt') : '') + '</figcaption>'
								  + '<img src="' + $(this).attr('src') + '" />'
								  + '<span class="prev"></span>'
								  + '<span class="next"></span>'
								  + '</figure>'
								  + '</div>');
		$('.lightbox').hide().fadeIn(400);
		$('html').css('overflow', 'hidden');
	}*/

	function closeLightbox() {
		$('.lightbox').fadeOut(400, function() {
			$(this).remove();
		});
		$('html').css('overflow', 'auto');
	}

	function nextImage() {
		alert('Next');
	}

	function prevImage() {
		alert('Prev');
	}


	// ========== EVENTS ========== //

	$('.gallery img').on('click', function() {
		//openLightbox();
		$('.gallery').after('<div class="lightbox">'
								  + '<figure>'
								  + '<figcaption>' + ($(this).attr('alt') ? $(this).attr('alt') : '') + '</figcaption>'
								  + '<img src="' + $(this).attr('src') + '" />'
								  + '</figure>'
								  + '</div>');
		$('.lightbox').hide().fadeIn(400);
		$('html').css('overflow', 'hidden');
	});

	$('html').on('click', '.lightbox', function(e) {
		if(!$(e.target).is('figure, figure *')) {
			closeLightbox();
		};
	});
	
	$(document).on('keyup', function(e) {
		if(e.keyCode == 27) {
			closeLightbox();
		}
	});

	$('html').on('click', '.lightbox .next', function() {
		nextImage();
	});
	
	$(document).on('keyup', function(e) {
		if(e.keyCode == 39) {
			nextImage();
		}
	});

	$('html').on('click', '.lightbox .prev', function() {
		prevImage();
	});
	
	$(document).on('keyup', function(e) {
		if(e.keyCode == 37) {
			prevImage();
		}
	});
	
	$('.overlay').find('.close').on('click', function() {
		$('.overlay').fadeOut(300);
	});

});