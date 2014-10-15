head.ready(function() {

	// masonry
	var gallery = $('.js-gallery'),
			body = $('body'),
			item = gallery.find('.gallery__item'),
			up = $('.up');
	gallery.isotope({
		itemSelector: '.gallery__item',
		masonry: {
		  columnWidth: 200,
		  gutter: 20
		}
	});
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

});