$(document).ready(function() {
	// $('#infiniteScroll--left').slick({
	// 	slidesToShow: 3.6,
	// 	slidesToScroll: 2,
	// 	autoplay: true,
	// 	autoplaySpeed: 0,
	// 	speed: 8000,
	// 	pauseOnHover: true,
	// 	cssEase: 'linear'
	// });

	// $('#infiniteScroll--left').hover(function() {
  //   $(this).slick('slickPause');
	// }, function() {
  //   $(this).slick('slickPlay');
  // });

  var stackCards = document.getElementsByClassName("card-deck-js");
var intersectionObserverSupported =
"IntersectionObserver" in window && "IntersectionObserverEntry" in window;

if (stackCards.length > 0 && intersectionObserverSupported) {
	for (var i = 0; i < stackCards.length; i++) {
		new StackCards(stackCards[i]);
	}
}

const contentSection = document.querySelector(".client-content");
const observer = new IntersectionObserver((entries) => {
	entries.forEach((entry) => {
		entry.target.classList.toggle("active", entry.isIntersecting);
	});
});
observer.observe(contentSection);

  // Testimonial Decking Card Animation Js
	var StackCards = function(element) {
		this.element = element;
		this.items = this.element.getElementsByClassName("card");
		this.scrollingListener = false;
		this.scrolling = false;
		initStackCardsEffect(this);
	};

	function initStackCardsEffect(element) {
  // use Intersection Observer to trigger animation
		var observer = new IntersectionObserver(stackCardsCallback.bind(element));
		observer.observe(element.element);
	}

	function stackCardsCallback(entries) {
  // Intersection Observer callback
		if (entries[0].isIntersecting) {
    // cards inside viewport - add scroll listener
    if (this.scrollingListener) return; // listener for scroll event already added
    stackCardsInitEvent(this);
  } else {
    // cards not inside viewport - remove scroll listener
    if (!this.scrollingListener) return; // listener for scroll event already removed
    window.removeEventListener("scroll", this.scrollingListener);
    this.scrollingListener = false;
  }
}

function stackCardsInitEvent(element) {
	element.scrollingListener = stackCardsScrolling.bind(element);
	window.addEventListener("scroll", element.scrollingListener);
}

function stackCardsScrolling() {
	if (this.scrolling) return;
	this.scrolling = true;
	window.requestAnimationFrame(animateStackCards.bind(this));
}

function animateStackCards() {
	var top = this.element.getBoundingClientRect().top;
	var offsetTop = 100,
	cardHeight = 472,
	marginY = 15;
	for (var i = 0; i < this.items.length; i++) {
    // cardTop/cardHeight/marginY are the css values for the card top position/height/Y offset
		var scrolling = offsetTop - top - i * (cardHeight + marginY);
    // debugger;
		if (scrolling > 0) {
      // card is fixed - we can scale it down
			this.items[i].setAttribute(
				"style",
				"transform: translateY(" +
				marginY * i +
				"px) scale(" +
				(cardHeight - scrolling * 0.02) / cardHeight +
				");"
				);
		}
	}

	this.scrolling = false;
}



document.addEventListener("DOMContentLoaded", function() {
	const cards = document.querySelectorAll(".card");
	const container = document.querySelector(".curriculum-main-container");
	const leftAnimation = gsap.timeline();
	leftAnimation.to(container, {
		x: -200,
		duration: 2,
	});
	ScrollTrigger.create({
		animation: leftAnimation,
		trigger: container,
		start: "700px top", 
		end: "center center",
		scrub: 1,
	});

});




gsap.registerPlugin(ScrollTrigger);
console.log(document.querySelector(".card").offsetWidth,"sss")
let sections = gsap.utils.toArray(".card");
gsap.to(sections, {
	xPercent: -100 * (sections.length - 1),
	ease: "none",
	scrollTrigger: {
		trigger: ".curriculum-main-container",
		pin: true,
		scrub: 1,
		snap: 1 / (sections.length-1),
		end: () => "+=4000"
	}
});

const scrollContainers = document.querySelectorAll("#infiniteScroll--left");
scrollContainers.forEach((container) => {
	const scrollWidth = container.scrollWidth;
	let isScrollingPaused = false;
	window.addEventListener("load", () => {
		self.setInterval(() => {
			if (isScrollingPaused) {
				return;
			}
			const first = container.querySelector("article");

			if (!isElementInViewport(first)) {
				container.appendChild(first);
				container.scrollTo(container.scrollLeft - first.offsetWidth, 0);
			}
			if (container.scrollLeft !== scrollWidth) {
				container.scrollTo(container.scrollLeft + 1, 0);
			}
		}, 15);
	});

	function isElementInViewport(el) {
		var rect = el.getBoundingClientRect();
		return rect.right > 0;
	}

	function pauseScrolling() {
		isScrollingPaused = true;
	}

	function resumeScrolling() {
		isScrollingPaused = false;
	}
	const allArticles = container.querySelectorAll("article");
	for (let article of allArticles) {
		article.addEventListener("mouseenter", pauseScrolling);
		article.addEventListener("mouseleave", resumeScrolling);
	}
});




	// Faq Js
const summaries = document.querySelectorAll("summary");
summaries.forEach((summary) => {
	summary.addEventListener("click", closeOpenedDetails);
});
function closeOpenedDetails() {
	summaries.forEach((summary) => {
		let detail = summary.parentNode;
		if (detail != this.parentNode) {
			detail.removeAttribute("open");
		}
	});
}




	// Who can Apply Section Js
const deck = document.querySelector(".deck");
deck.addEventListener("click", (e) => {
	const clickedCard = e.target.closest(".card");
	if (!clickedCard) return;
	const cards = Array.from(deck.querySelectorAll(".card"));
	cards.forEach((card) => {
		card.classList.remove("front");
	});
	e.target.closest(".card").classList.add("front");
});
});

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