<section class="curriculum-wrapper">
	 <!-- <div class="firstContainer">
        <h1>Testing horizontal scrolling w/ three sections</h1>
        <h2>First Container</h2>
      </div> -->
<div class="curriculum-container">
        <div id="card" class="curriculum-card card1">
			<p class="card-head">Six months to</p>
			<p class="angle1">Industry</p>
			<p class="angle2">Readiness</p>
			<div class="line"></div>
			<div class="card-footer">
				<p>Lay the foundation for a confident start. From a masterclass to a complete training and everything in between.</p>
				<button>Contact US</button>
			</div>
			<img class="card-pattern1" src="assets/images/curriculum/card-pattern1.png">
			<img class="card-pattern2" src="assets/images/curriculum/card-pattern2.png">
			<img class="card-pattern3" src="assets/images/curriculum/card-pattern3.png">
		</div>
      
        <div id="card" class="curriculum-card cards">
			<div class="card2-main card-main">
				<button class="card-btn"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M5.55453 9.42773L9.42798 13.3012L13.3014 9.42773L9.42798 5.55428L5.55453 9.42773ZM9.42798 18.5723L18.5725 9.42773L9.42798 0.283195L0.283444 9.42773L9.42798 18.5723Z" fill="white"/>
				</svg> Month 1 & 2</button>
				<p class="card-heading">Design Foundation</p>
				<p class="card-text">Unlearn and relearn with focused attention on getting the fundamentals right.</p>
				<button class="card2-contact-btn">Contact US</button>
				<div class="card-bottom-pattern2">
					<img src="assets/images/curriculum/card-bottom.png">
				</div>
			</div>
			<img class="card2-side" src="assets/images/curriculum/card-side.png">
			<img src="assets/images/curriculum/card2-pattern.png" class="card-pattern card-second">
		</div>
		<div id="card" class="curriculum-card cards">
			<div class="card3-main card-main">
				<button class="card-btn"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M5.55453 9.42773L9.42798 13.3012L13.3014 9.42773L9.42798 5.55428L5.55453 9.42773ZM9.42798 18.5723L18.5725 9.42773L9.42798 0.283195L0.283444 9.42773L9.42798 18.5723Z" fill="white"/>
				</svg> Month 1 & 2</button>
				<p class="card-heading">Design Foundation</p>
				<p class="card-text">Unlearn and relearn with focused attention on getting the fundamentals right.</p>
				<button class="card3-contact-btn">Contact US</button>
				<div class="card-bottom-pattern3">
					<img src="assets/images/curriculum/card-bottom.png">
				</div>
			</div>
			<img class="card-side" src="assets/images/curriculum/card-side.png">
			<img src="assets/images/curriculum/card3-pattern.png" class="card-pattern card-third">

		</div>
		<div id="card" class="curriculum-card cards">
			<img class="card-side" src="assets/images/curriculum/card-side.png">
			<div class="card4-main card-main">
				<button class="card-btn"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M5.55453 9.42773L9.42798 13.3012L13.3014 9.42773L9.42798 5.55428L5.55453 9.42773ZM9.42798 18.5723L18.5725 9.42773L9.42798 0.283195L0.283444 9.42773L9.42798 18.5723Z" fill="white"/>
				</svg> Month 1 & 2</button>
				<p class="card-heading">Design Foundation</p>
				<p class="card-text">Unlearn and relearn with focused attention on getting the fundamentals right.</p>
				<button class="card4-contact-btn">Contact US</button>
				<div class="card-bottom-pattern3">
					<img src="assets/images/curriculum/card-bottom.png">
				</div>
			</div>
			<img src="assets/images/curriculum/card2-pattern.png" class="card-pattern card-fourth">

		</div>
      </div>
	   <!-- <div class="firstContainer">
        <h1>Testing horizontal scrolling w/ three sections</h1>
        <h2>First Container</h2>
      </div> -->
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.1/ScrollTrigger.min.js"></script>
<script>
	gsap.registerPlugin(ScrollTrigger);
let sections = gsap.utils.toArray(".curriculum-card");
gsap.to(sections, {
	xPercent: -100 * (sections.length - 1),
    duration: 1, // Increase the duration to make the animation slower (in seconds)
    ease: "none", 
    scrollTrigger: {
    	trigger: ".curriculum-container",
    	pin: true,
    	scrub: 1,
    	snap: 1 / (sections.length - 1),
    	end: () => "+=" + document.querySelector(".curriculum-container").offsetWidth
    }
  });
	</script>