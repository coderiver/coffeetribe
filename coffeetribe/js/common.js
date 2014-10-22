$(document).ready(function() {

	// masonry
	var gallery = $('.js-gallery'),
			body = $('body'),
			item = gallery.find('a'),
			up = $('.up'),
			content = $('.js-content');
	gallery.isotope({
		itemSelector: '.gallery p',
		masonry: {
		  columnWidth: 200,
		  gutter: 20
		}
	});
	item.attr('rel', 'gallery');
	item.fancybox({
		openEffect: 'fade',
		closeEffect: 'fade',
		nextEffect: 'none',
		prevEffect: 'none',
		padding: [20, 20, 55, 20],
		margin: 30,
		afterShow: function () {
			var customContent = "<button class='fancybox-menu'></button>"
			$('.fancybox-outer').append(customContent);
		}
	});
	body.on('click', '.fancybox-menu', function () {
		$('.fancybox-close').trigger('click');
	});
	up.on('click', function () {
		$('.gallery').animate({scrollTop: 0}, 500);
	});
	function content_pic () {
		if (content.length) {
			var content_in = content.find('.content__in'),
					content_pic = content.find('.content__pic'),
					content_height = content.height(),
					content_in_height = content_in.outerHeight();
			content_pic.height(content_height - content_in_height);
		};
	}
	content_pic();
	$(window).resize(function () {
		content_pic();
	});

});