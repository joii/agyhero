(function ($) {
	"use strict";

/*=============================================
	=    		 Preloader			      =
=============================================*/
function preloader() {
	$('#preloader').delay(0).fadeOut();
};

$(window).on('load', function () {
	//preloader();
	mainSlider();
	aosAnimation();
	wowAnimation();
});

// sticky
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 245) {
		$("#header-sticky").removeClass("sticky-header");
		$(".stricky-height-fix").removeClass("menufix-height");
		//$(".nav-transparent").css('color', '#f0f0f0');
	} else {
		$("#header-sticky").addClass("sticky-header");
		$(".stricky-height-fix").addClass("menufix-height");
		//$(".nav-transparent").css('color', '#000000');
		
	}
});

// sticky
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 245) {
		$("#header-sticky-two").removeClass("sticky-header2");
		$(".stricky-height-fix").removeClass("menufix-height");
	} else {
		$("#header-sticky-two").addClass("sticky-header2");
		$(".stricky-height-fix").addClass("menufix-height");
	}
});

/*=============================================
	=    		Mobile Menu			      =
=============================================*/
//SubMenu Dropdown Toggle
if ($('.menu-area li.dropdown ul').length) {
	$('.menu-area .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');

}

//Mobile Nav Hide Show
if ($('.mobile-menu').length) {

	var mobileMenuContent = $('.menu-area .main-menu').html();
	$('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);

	//Dropdown Button
	$('.mobile-menu li.dropdown .dropdown-btn').on('click', function () {
		$(this).toggleClass('open');
		$(this).prev('ul').slideToggle(500);
	});
	//Menu Toggle Btn
	$('.mobile-nav-toggler').on('click', function () {
		$('body').addClass('mobile-menu-visible');
	});

	//Menu Toggle Btn
	$('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function () {
		$('body').removeClass('mobile-menu-visible');
	});
}


/*=============================================
	=    		 Language  	         =
=============================================*/
$('.language-name').on('click', function (event) {
	event.stopPropagation();
});

$(".language-name").on("click", function () {
	if ($(".list-language").hasClass('active')) {
		$(".list-language").removeClass("active");
		return false;
	} else {
		$(".list-language").addClass("active");
		return false;
	}
});


/*=============================================
	=          Data Background               =
=============================================*/
$("[data-background]").each(function () {
	$(this).css("background-image", "url(" + $(this).attr("data-background") + ")")
})


/*=============================================
	=     Menu sticky & Scroll to top      =
=============================================*/
$(window).on('scroll', function () {
	var scroll = $(window).scrollTop();
	if (scroll < 245) {
		$("#sticky-header").removeClass("sticky-menu");

	} else {
		$("#sticky-header").addClass("sticky-menu");
	}
});


/*=============================================
	=    		 Scroll Up  	         =
=============================================*/
if ($('.scroll-to-target').length) {
  $(".scroll-to-target").on('click', function () {
    var target = $(this).attr('data-target');
    // animate
    $('html, body').animate({
      scrollTop: $(target).offset().top
    }, 1000);

  });
}


/*=============================================
=              offCanvas  Menu                =
=============================================*/
$(".menu-trigger").on("click", function () {
	$(".extra-info,.offcanvas-overly").addClass("active");
	return false;
});
$(".menu-close,.offcanvas-overly").on("click", function () {
	$(".extra-info,.offcanvas-overly").removeClass("active");
});


/*=============================================
	=    		 Main Slider		      =
=============================================*/
function mainSlider() {
	var BasicSlider = $('.slider-active');
	BasicSlider.on('init', function (e, slick) {
		var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
		doAnimations($firstAnimatingElements);
	});
	BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
		var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
		doAnimations($animatingElements);
	});
	BasicSlider.slick({
		customPaging: function (slider, i) {
			var thumb = jQuery(slider.$slides[i]).data();
			// return '<a>'+(i+1)+'</a>'; // <-- old
			return '<button>' + ('0' + (i + 1)).slice(-2) + '</button>'; // <-- new
		},
		autoplay: true,
		autoplaySpeed: 3000,
		dots: true,
		fade: true,
		arrows: false,
		responsive: [
			{ breakpoint: 992, settings: { dots: false, arrows: false } }
		],
	});

	function doAnimations(elements) {
		var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
		elements.each(function () {
			var $this = $(this);
			var $animationDelay = $this.data('delay');
			var $animationType = 'animated ' + $this.data('animation');
			$this.css({
				'animation-delay': $animationDelay,
				'-webkit-animation-delay': $animationDelay
			});
			$this.addClass($animationType).one(animationEndEvents, function () {
				$this.removeClass($animationType);
			});
		});
	}
}



/*=============================================
	=    		 Wow Active  	         =
=============================================*/
function wowAnimation() {
	var wow = new WOW({
		boxClass: 'wow',
		animateClass: 'animated',
		offset: 0,
		mobile: false,
		live: true
	});
	wow.init();
}



})(jQuery);