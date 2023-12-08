// var cursor = document.querySelector('.blob');

// document.addEventListener('mousemove', function(e){
//   var x = e.clientX;
//   var y = e.clientY;
//   cursor.style.transform = `translate3d(calc(${e.clientX}px - 50%), calc(${e.clientY}px - 50%), 0)`
// });

$(document).ready(function() {

AOS.init({
	duration:1000
})
})

$(document).ready(function() {
	const cards = gsap.utils.toArray(".testimonialcard");
  
	cards.forEach((card, index) => {
	  const yOffset = 50;
	  const marginTop = index * yOffset;
        gsap.set(card, { marginTop: `${marginTop}px` });
	  const animationTimeline = gsap.timeline({ paused: true });
	  animationTimeline.to(card, {
		// scale: 1 - (cards.length - index) * 0.025,
		duration: 0.3,
		// ease: "power2.inOut",
		// y: `-600px`,

	  });
	  
	  const tween = gsap.to(card, {
		// y: index * yOffset,           //changable value
		scrollTrigger: {
		  trigger: card,
		  start: "top bottom-=100",
		  end: "top top+=40",
		  scrub: true,
		//   y:index*yOffset,
		  invalidateOnRefresh: true,
		  animation: animationTimeline,
		},
	  });
	  
	  ScrollTrigger.create({
		trigger: card,
		start: "top 15%",
		pin: true,
		pinSpacing: false,
		id: 'pin',
		end: "center 60%",
		invalidateOnRefresh: true,
		endTrigger: ".template-faq",
	  });
	});
  });
  
// gsap.registerPlugin(ScrollTrigger);
// let sections = gsap.utils.toArray(".curriculum-card");
// gsap.to(sections, {
// 	xPercent: -100 * (sections.length - 1),
//     duration: 1, // Increase the duration to make the animation slower (in seconds)
//     ease: "none", 
//     scrollTrigger: {
//     	trigger: ".curriculum-container",
//     	pin: true,
//     	scrub: 1,
//     	snap: 1 / (sections.length - 1),
//     	end: () => "+=" + document.querySelector(".curriculum-container").offsetWidth
//     }
//   });



// const scrollContainers = document.querySelectorAll("#infiniteScroll--left");
// console.log(scrollContainers,"scroll")
// scrollContainers.forEach((container) => {
// 	const scrollWidth = container.scrollWidth;
// 	let isScrollingPaused = false;
// 	window.addEventListener("load", () => {
// 		self.setInterval(() => {
// 			if (isScrollingPaused) {
// 				return;
// 			}
// 			const first = container.querySelector("article");

// 			if (!isElementInViewport(first)) {
// 				container.appendChild(first);
// 				container.scrollTo(container.scrollLeft - first.offsetWidth, 0);
// 			}
// 			if (container.scrollLeft !== scrollWidth) {
// 				container.scrollTo(container.scrollLeft + 1, 0);
// 			}
// 		}, 15);
// 	});

// 	function isElementInViewport(el) {
// 		var rect = el.getBoundingClientRect();
// 		return rect.right > 0;
// 	}

// 	function pauseScrolling() {
// 		isScrollingPaused = true;
// 	}

// 	function resumeScrolling() {
// 		isScrollingPaused = false;
// 	}
// 	const allArticles = container.querySelectorAll("article");
// 	for (let article of allArticles) {
// 		article.addEventListener("mouseenter", pauseScrolling);
// 		article.addEventListener("mouseleave", resumeScrolling);
// 	}
// });




// 	// Faq Js
// const summaries = document.querySelectorAll("summary");
// summaries.forEach((summary) => {
// 	summary.addEventListener("click", closeOpenedDetails);
// });
// function closeOpenedDetails() {
// 	summaries.forEach((summary) => {
// 		let detail = summary.parentNode;
// 		if (detail != this.parentNode) {
// 			detail.removeAttribute("open");
// 		}
// 	});
// }

	// Who can Apply Section Js
// const deck = document.querySelector(".deck");
// deck.addEventListener("click", (e) => {
// 	const clickedCard = e.target.closest(".card");
// 	if (!clickedCard) return;
// 	const cards = Array.from(deck.querySelectorAll(".card"));
// 	cards.forEach((card) => {
// 		card.classList.remove("front");
// 	});
// 	e.target.closest(".card").classList.add("front");
// });
// });

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
	if(window.location.pathname.includes('contact')){
		if(st > lastScrollTop && st > 10) {
			$('header').removeClass('nav-down').addClass('nav-up');
		} else {
			if(st + $(window).height() < $(document).height()) {
				$('header').removeClass('nav-up').addClass('nav-down');
			}
		}
	}
	else{
		if(st > lastScrollTop && st > navbarHeight) {
			$('header').removeClass('nav-down').addClass('nav-up');
		} else {
			if(st + $(window).height() < $(document).height()) {
				$('header').removeClass('nav-up').addClass('nav-down');
			}
		}
	}
	
	lastScrollTop = st;
}


// var header = document.getElementById("header");
// var sxn2 = document.getElementById("two");
// var sxn3 = document.getElementById("three");
// var hh = header.offsetHeight;

// var color = [
// 	[230, 237, 237],
// 	[255, 255, 255],
// 	[13, 13, 13]
// 	];
// var c1, c2, c3;
// window.addEventListener("scroll", function() {
// 	var fraction = 0;
// 	if(pageYOffset < sxn2.offsetTop - hh) {
// 		c1 = color[0][0];
// 		c2 = color[0][1];
// 		c3 = color[0][2];
// 	} else if((pageYOffset >= sxn2.offsetTop - hh) && (pageYOffset <= sxn2.offsetTop)) {
// 		fraction = 1 - ((sxn2.offsetTop - pageYOffset) / hh);
// 		c1 = color[0][0] + Math.round((color[1][0] - color[0][0]) * fraction);
// 		c2 = color[0][1] + Math.round((color[1][1] - color[0][1]) * fraction);
// 		c3 = color[0][2] + Math.round((color[1][2] - color[0][2]) * fraction);
// 	} else if((pageYOffset > sxn2.offsetTop) && (pageYOffset < sxn3.offsetTop - hh)) {
// 		c1 = color[1][0];
// 		c2 = color[1][1];
// 		c3 = color[1][2];
// 	} else if((pageYOffset >= sxn3.offsetTop - hh) && (pageYOffset <= sxn3.offsetTop)) {
// 		fraction = 1 - ((sxn3.offsetTop - pageYOffset) / hh);
// 		c1 = color[1][0] + Math.round((color[2][0] - color[1][0]) * fraction);
// 		c2 = color[1][1] + Math.round((color[2][1] - color[1][1]) * fraction);
// 		c3 = color[1][2] + Math.round((color[2][2] - color[1][2]) * fraction);
// 	} else if(pageYOffset > sxn3.offsetTop) {
// 		c1 = color[2][0];
// 		c2 = color[2][1];
// 		c3 = color[2][2];
// 	}
// 	header.style.backgroundColor = "rgb(" + c1 + "," + c2 + "," + c3 + ")";
// 	header.style.color = "rgb(" + (255 - c1) + "," + (255 - c2) + "," + (255 - c3) + ")";
// });



// jQuery(function($) {
// 	'use strict';
// 	var Header = $('.header');

// 	function HeaderDarkMode() {
// 		var scrollTop = $(window).scrollTop(),
// 		dark = $('.dark-section');
// 		dark.length && dark.each(function() {
// 			var top = $(this).position().top,
// 			height = $(this).outerHeight(),
// 			bottom = top + height;
// 			scrollTop >= top - 45 && scrollTop < bottom - 45 ? Header.addClass('dark') : Header.removeClass('dark');
// 		});
// 	}
// 	$(window).scroll(function() {
// 		HeaderDarkMode();
// 	});
// });


// jQuery(function($) {
// 	'use strict';
// 	var Header = $('.header');

// 	function HeaderWhiteMode() {
// 		var scrollTop = $(window).scrollTop(),
// 		white = $('.white-section');
// 		white.length && white.each(function() {
// 			var top = $(this).position().top,
// 			height = $(this).outerHeight(),
// 			bottom = top + height;
// 			scrollTop >= top - 45 && scrollTop < bottom - 45 ? Header.addClass('white') : Header.removeClass('white');
// 		});
// 	}
// 	$(window).scroll(function() {
// 		HeaderWhiteMode();
// 	});
// });