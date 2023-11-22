<section class="ods-hero-wrapper">
   <div class="left-container">
      <h1 class="hero-big-text">
         <span class="text-span type-span-1">Design Your</span>
         <span class="text-span type-span-2">Future with Onething</span>
         <span class="text-span type-span-3">Design School.</span>
         <img data-aos="fade-right" src="assets/images/elements/star-pink.svg" class="elem1">
         <img data-aos="fade-up" src="assets/images/elements/rectangle.svg" class="elem2">

      </h1>
   </div>
   <div class="hero-video-wrapper">
   <section class="animate three">
        <div class="container">
                    <div class="scrollimgzoomcontainer">
                        <!-- <div class="scrollimgzoom" style="background: url(assets/images/home/hero-circle.png)"></div>  -->
                        <div class="scrollimgzoom" style="background: url(assets/images/home/samp-img.png)"></div>   

                    </div>
        </div>
    </section>
    <img src="assets/images/home/samp-img.png" class="hero-img">
   </div>
   <div class="hero-stats-wrapper">
      <div class="container">
         <div class="grid-content">
            <div class="ods-col">
               <div data-aos="flip-left" class="svg-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                    <path d="M40.6304 20.0002L40.6304 0.000488281L20.6307 0.000487408L40.6304 20.0002Z" fill="#E571EE"/>
                    <path d="M20.63 19.9997L20.63 0L0.630363 -8.7321e-07L20.63 19.9997Z" fill="#E571EE"/>
                    <path d="M20.6302 39.9992L20.6302 19.9995L0.630516 19.9995L20.6302 39.9992Z" fill="#E571EE"/>
                    <path d="M40.6295 39.9992L40.6295 19.9995L20.6299 19.9995L40.6295 39.9992Z" fill="#E571EE"/>
                  </svg>
               </div>
               <p>Beginner friendly UX Design course</p>
            </div>
            <div class="ods-col">
               <div data-aos="flip-left" class="svg-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                    <path d="M20.0155 0L20.0194 19.9803L27.6692 1.5224L20.0267 19.9834L34.1576 5.85787L20.0321 19.9889L38.4931 12.3463L20.0352 19.9961L40.0155 20L20.0352 20.0039L38.4931 27.6537L20.0321 20.0111L34.1576 34.1421L20.0267 20.0166L27.6692 38.4776L20.0194 20.0197L20.0155 40L20.0117 20.0197L12.3618 38.4776L20.0044 20.0166L5.8734 34.1421L19.9989 20.0111L1.53794 27.6537L19.9959 20.0039L0.0155334 20L19.9959 19.9961L1.53794 12.3463L19.9989 19.9889L5.8734 5.85787L20.0044 19.9834L12.3618 1.5224L20.0117 19.9803L20.0155 0Z" stroke="#628BFF" stroke-width="2.78"/>
                  </svg>
               </div>
               <p>Interactive project discussions and Q&A</p>
            </div>
            <div class="ods-col">
               <div data-aos="flip-left" class="svg-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.400848 0H0.542545L40.4008 39.8583V40H25.0182L0.400848 15.3827V0ZM17.7344 0L40.2562 22.5218V0H17.7344Z" fill="#FBB22D"/>
                  </svg>
               </div>
               <p>Weekend Classes</p>
            </div>
         </div>
      </div>
   </div>
   <div class="hero-note-wrapper">
      <div class="container">
         <div class="note-p">
            <img class="icon" src="assets/images/elements/arrow-down.svg">
            <p>90% of ODS graduates immediately landed with jobs.</p>
            <img class="icon" src="assets/images/elements/arrow-down.svg">
         </div>
      </div>
   </div>
</section>

<script src="https://unpkg.com/gsap@3.9.0/dist/gsap.min.js"></script>
    <script src="https://unpkg.com/gsap@3.9.0/dist/ScrollTrigger.min.js"></script>
    <script>
  gsap.to(".scrollimgzoom", {
  width: "100%",
  left:"0%",
  borderRadius: "20%", 
  duration: 10,
  ease: "power2.inOut", 
  scrollTrigger: {
    trigger: ".scrollimgzoom",
    start: "top 90%",
    end: "bottom 10%",
    scrub: true,
  },
});

// gsap.to(".scrollimgzoom img", {
//   scaleX: -10, // Use a negative value to reverse the direction
//   duration: 10,
//   width: "100%",
//   left:"0%",
//   ease: "power2.inOut", 
//   borderRadius: "4000px", 
//   scrollTrigger: {
//     trigger: ".scrollimgzoom",
//     start: "top 50%",
//     end: "bottom 10%",
//     scrub: true,
//   },
// });



      </script>