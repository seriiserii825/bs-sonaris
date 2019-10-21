'use strict';

var map_location = [47.035107, 28.8180988];

jQuery(document).ready(function ($) {

	$('#js-list').magnificPopup({
		delegate: '.list-item-link',
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	$('#js-gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		gallery: {
			enabled: true
		}
	});

	// First Page Slider
	if ($('.owl-carousel.fullscreen').length) {
		$('.owl-carousel.fullscreen').owlCarousel({
			items: 1,
			loop: true,
			autoplay: true,
			autoplayTimeout: 4000,
			smartSpeed: 750,
			autoplayHoverPause: false,
			animateOut: 'fadeOut',
			animateIn: 'fadeIn',
			mouseDrag: false,
			touchDrag: false,
			dots: false,
		});
	}

	// Clients Slider
	if ($('.owl-carousel.clients').length) {
		$('.owl-carousel.clients').owlCarousel({
			loop: true,
			autoplay: true,
			autoplayTimeout: 3000,
			autoplayHoverPause: false,
			mouseDrag: false,
			touchDrag: false,
			dots: false,
			responsive: {
				0: {items: 1},
				600: {items: 3},
				1000: {items: 5}
			}
		});
	}


	// Inputs Phone
	$('[type=tel]').inputmask({
		mask: '+373 (99) 999 999',
		showMaskOnHover: false,
		placeholder: '#'
	});

	// Services Navbar
	var stickyOffset = $('.section.section-services').offset().top + $('.section.section-services').outerHeight();
	$(window).on('scroll', function () {
		var sticky = $('.sticky');
		var scroll = $(window).scrollTop();

		if (scroll >= stickyOffset) sticky.addClass('in-view'); else sticky.removeClass('in-view');
	});

	// Popup CallBack
	$('[data-mfp-src="#callback-form"]').magnificPopup({
		type: 'inline',
		preloader: false,
		removalDelay: 750,
		mainClass: 'mfp-fade'
	});
	$('[data-mfp-src="#order-form"]').magnificPopup({
		type: 'inline',
		preloader: false,
		removalDelay: 750,
		mainClass: 'mfp-fade'
	});

	// Popup Gallery
	$('.gallery-nav').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function titleSrc(item) {
				return item.el.attr('title') + '<small>copyrights sonaris.md</small>';
			}
		}
	});

	// mobile Navbar Toggle
	$('[data-toggle="navbar"]').on('click', function () {
		$('.header-nav').toggleClass('open');
	});
	$('[data-toggle="navbar"]').on('blur', function () {
		$('.header-nav').removeClass('open');
	});

});

// $(document).ready(function () {
//   // First Page Slider
//   if ($('.owl-carousel.fullscreen').length) {
//     $('.owl-carousel.fullscreen').owlCarousel({
//       items: 1,
//       loop: true,
//       autoplay: true,
//       autoplayTimeout: 4000,
//       smartSpeed: 750,
//       autoplayHoverPause: false,
//       animateOut: 'fadeOut',
//       animateIn: 'fadeIn',
//       mouseDrag: false,
//       touchDrag: false,
//       dots: false
//     });
//   }

//   // Clients Slider
//   if ($('.owl-carousel.clients').length) {
//     $('.owl-carousel.clients').owlCarousel({
//       loop: true,
//       autoplay: true,
//       autoplayTimeout: 3000,
//       autoplayHoverPause: false,
//       mouseDrag: false,
//       touchDrag: false,
//       dots: false,
//       responsive: {
//         0: { items: 1 },
//         600: { items: 3 },
//         1000: { items: 5 }
//       }
//     });
//   }

//   // Google Map Footer
//   // if ($('#gmap').length) {
//   //   var small_map = new google.maps.Map(document.getElementById('gmap'), {
//   //     zoom: 13,
//   //     center: new google.maps.LatLng(map_location[0], map_location[1]),
//   //     disableDefaultUI: true
//   //   });
//   //   var small_map_marker = new google.maps.Marker({
//   //     position: new google.maps.LatLng(map_location[0], map_location[1]),
//   //     map: small_map,
//   //     icon: {
//   //       url: 'img/marker.png',
//   //       scaledSize: new google.maps.Size(34, 40)
//   //     }
//   //   });
//   //   small_map.addListener('center_changed', function () {
//   //     window.setTimeout(function () {
//   //       small_map.panTo(small_map_marker.getPosition());
//   //     }, 100);
//   //   });
//   // }

//   // Inputs Phone
//   $('[type=tel]').inputmask({
//     mask: '+373 (99) 999 999',
//     showMaskOnHover: false,
//     placeholder: '#'
//   });

//   // Services Navbar
//   var stickyOffset = $('.section.section-services').offset().top + $('.section.section-services').outerHeight();
//   $(window).on('scroll', function () {
//     var sticky = $('.sticky');
//     var scroll = $(window).scrollTop();

//     if (scroll >= stickyOffset) sticky.addClass('in-view');else sticky.removeClass('in-view');
//   });

//   // Popup CallBack
//   $('[data-mfp-src="#callback-form"]').magnificPopup({
//     type: 'inline',
//     preloader: false,
//     removalDelay: 750,
//     mainClass: 'mfp-fade'
//   });
//   $('[data-mfp-src="#order-form"]').magnificPopup({
//     type: 'inline',
//     preloader: false,
//     removalDelay: 750,
//     mainClass: 'mfp-fade'
//   });

//   // Popup Gallery
//   $('.gallery-nav').magnificPopup({
//     delegate: 'a',
//     type: 'image',
//     tLoading: 'Loading image #%curr%...',
//     mainClass: 'mfp-img-mobile',
//     gallery: {
//       enabled: true,
//       navigateByImgClick: true,
//       preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
//     },
//     image: {
//       tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
//       titleSrc: function titleSrc(item) {
//         return item.el.attr('title') + '<small>copyrights sonaris.md</small>';
//       }
//     }
//   });

//   // mobile Navbar Toggle
//   $('[data-toggle="navbar"]').on('click', function () {
//     $('.header-nav').toggleClass('open');
//   });
//   $('[data-toggle="navbar"]').on('blur', function () {
//     $('.header-nav').removeClass('open');
//   });
// });
