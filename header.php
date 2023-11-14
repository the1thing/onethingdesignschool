<!<!DOCTYPE html>
   <html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Onething Design School</title>
      <link rel="shortcut icon" href="assets/images/logo/monogram.png" type="image/x-icon">
      <link rel="icon" href="assets/images/logo/monogram.png" type="image/x-icon">
      <link href="assets/vendors/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
      <link href="assets/vendors/slick/slick.css" rel="stylesheet" type="text/css" />
      <link href="assets/vendors/slick/slick-theme.css" rel="stylesheet" type="text/css" />
      <link href="assets/vendors/aos/css/aos.css" rel="stylesheet" type="text/css" />
      <link href="assets/css/style.min.css" rel="stylesheet" type="text/css" />
      <script src="assets/js/main.js" language="JavaScript" type="text/javascript"></script>
   </head>
   <body class="<?php echo isset($page_details['body_class']) ? $page_details['body_class'] : ''; ?>">
      <header class="header" id="header">
         <div class="container">
            <div class="container-wrapper">
               <div class="logo clearfix">
                  <a href="#" class="logo-link">
                     <figure>
                        <img src="assets/images/logo/logo.svg">
                     </figure>
                  </a>
               </div>
               <div class="header-contact">
                  <a href="contact" class="bttn bttn-primary">
                     <span>Contact us</span>
                  </a>
               </div>
            </div>
         </div>
      </header>
      <script>
         $(window).on("scroll", function() {
	if($(window).scrollTop() > 150) {
		$(".header").addClass("is-fixed");
	} else {
		$(".header").removeClass("is-fixed");
	}
});

var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();
$(window).scroll(function(event) {
	didScroll = true;
});
setInterval(function() {
	if(didScroll) {
		hasScrolled();
		didScroll = false;
	}
}, 250);

function hasScrolled() {
	var st = $(this).scrollTop();
	if(Math.abs(lastScrollTop - st) <= delta) return;
	if(st > lastScrollTop && st > navbarHeight) {
		$('header').removeClass('nav-down').addClass('nav-up');
	} else {
		if(st + $(window).height() < $(document).height()) {
			$('header').removeClass('nav-up').addClass('nav-down');
		}
	}
	lastScrollTop = st;
}
$(window).on("scroll", function() {
	if($(window).scrollTop() > 150) {
		$(".header").addClass("is-fixed");
	} else {
		$(".header").removeClass("is-fixed");
	}
});

var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();
$(window).scroll(function(event) {
	didScroll = true;
});
setInterval(function() {
	if(didScroll) {
		hasScrolled();
		didScroll = false;
	}
}, 250);

function hasScrolled() {
	var st = $(this).scrollTop();
	if(Math.abs(lastScrollTop - st) <= delta) return;
	if(st > lastScrollTop && st > navbarHeight) {
		$('header').removeClass('nav-down').addClass('nav-up');
	} else {
		if(st + $(window).height() < $(document).height()) {
			$('header').removeClass('nav-up').addClass('nav-down');
		}
	}
	lastScrollTop = st;
}

         var header = document.getElementById("header");
var sxn2 = document.getElementById("two");
var sxn3 = document.getElementById("three");
var hh = header.offsetHeight;

var color = [
	[230, 237, 237],
	[255, 255, 255],
	[13, 13, 13]
	];
var c1, c2, c3;
window.addEventListener("scroll", function() {
	var fraction = 0;
	if(pageYOffset < sxn2.offsetTop - hh) {
		c1 = color[0][0];
		c2 = color[0][1];
		c3 = color[0][2];
	} else if((pageYOffset >= sxn2.offsetTop - hh) && (pageYOffset <= sxn2.offsetTop)) {
		fraction = 1 - ((sxn2.offsetTop - pageYOffset) / hh);
		c1 = color[0][0] + Math.round((color[1][0] - color[0][0]) * fraction);
		c2 = color[0][1] + Math.round((color[1][1] - color[0][1]) * fraction);
		c3 = color[0][2] + Math.round((color[1][2] - color[0][2]) * fraction);
	} else if((pageYOffset > sxn2.offsetTop) && (pageYOffset < sxn3.offsetTop - hh)) {
		c1 = color[1][0];
		c2 = color[1][1];
		c3 = color[1][2];
	} else if((pageYOffset >= sxn3.offsetTop - hh) && (pageYOffset <= sxn3.offsetTop)) {
		fraction = 1 - ((sxn3.offsetTop - pageYOffset) / hh);
		c1 = color[1][0] + Math.round((color[2][0] - color[1][0]) * fraction);
		c2 = color[1][1] + Math.round((color[2][1] - color[1][1]) * fraction);
		c3 = color[1][2] + Math.round((color[2][2] - color[1][2]) * fraction);
	} else if(pageYOffset > sxn3.offsetTop) {
		c1 = color[2][0];
		c2 = color[2][1];
		c3 = color[2][2];
	}
	header.style.backgroundColor = "rgb(" + c1 + "," + c2 + "," + c3 + ")";
	header.style.color = "rgb(" + (255 - c1) + "," + (255 - c2) + "," + (255 - c3) + ")";
});



jQuery(function($) {
	'use strict';
	var Header = $('.header');

	function HeaderDarkMode() {
		var scrollTop = $(window).scrollTop(),
		dark = $('.dark-section');
		dark.length && dark.each(function() {
			var top = $(this).position().top,
			height = $(this).outerHeight(),
			bottom = top + height;
			scrollTop >= top - 45 && scrollTop < bottom - 45 ? Header.addClass('dark') : Header.removeClass('dark');
		});
	}
	$(window).scroll(function() {
		HeaderDarkMode();
	});
});


jQuery(function($) {
	'use strict';
	var Header = $('.header');

	function HeaderWhiteMode() {
		var scrollTop = $(window).scrollTop(),
		white = $('.white-section');
		white.length && white.each(function() {
			var top = $(this).position().top,
			height = $(this).outerHeight(),
			bottom = top + height;
			scrollTop >= top - 45 && scrollTop < bottom - 45 ? Header.addClass('white') : Header.removeClass('white');
		});
	}
	$(window).scroll(function() {
		HeaderWhiteMode();
	});
});
         </script>






