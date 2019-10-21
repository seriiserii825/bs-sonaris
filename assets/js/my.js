jQuery(document).ready(function ($) {
	let fixedTopHeader = function(){
		let topHeader = $('#js-topbar');
		let topHeaderOffset = topHeader.offset().top + $('#js-topbar').outerHeight();
		$(window).on('scroll', function () {
			let scroll = $(window).scrollTop();
			if (scroll >= topHeaderOffset) topHeader.addClass('fixed'); else topHeader.removeClass('fixed');
		});
	};
	fixedTopHeader();
});
