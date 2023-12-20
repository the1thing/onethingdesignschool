<section class="ods-hero-wrapper" id="zoomBg">
   <div class="left-container">
      <h1 class="hero-big-text">

         <span  class="text-span type-span-1">Design Your</span>
         <div class="hero-head-div">
         <span class="text-span type-span-2">Future with</span>
         <span class="text-span type-span-4">Onething</span>

</div>
         <span  class="text-span type-span-3">Design School.</span>
         <img   src="assets/images/elements/star-pink.svg" class="elem1">
         <img data-aos="fade-up" data-aos-duration=2000 src="assets/images/elements/rectangle.svg" class="elem2">

      </h1>
   </div>
   <div class="hero-video-wrapper">
   <section class="animate three">
        <div class="container">
                    <!-- <div class="scrollimgzoomcontainer"> -->
                        <!-- <div class="scrollimgzoom" style="background: url(assets/images/home/hero-circle.png)"></div>  -->
                        <div class="video-container scrollimgzoomcontainer">
  <!-- <video src="assets/images/home/video3.mp4"  autoplay muted class="scrollimgzoom"></video> -->
                        <div class="scrollimgzoom" style="background: url(assets/images/home/main-img.png);background-position:35% 0%;background-repeat:no-repeat;background-size: cover;"></div> 

</div>                  
                    <!-- </div> -->
        </div>
    </section>
    <img src="assets/images/home/samp-img.png"  class="hero-img">
   </div>
   <div class="hero-stats-wrapper">
      <div class="container">
         <div class="grid-content">
            <div class="ods-col hover-effect">
               <div class="svg-icon">
                  <div class="triangle-div">
                 <img src="assets/images/home/triangle.svg" class="triangle one">
                 <img src="assets/images/home/triangle.svg" class="triangle two">
                 <img src="assets/images/home/triangle.svg" class="triangle three">
                 <img src="assets/images/home/triangle.svg" class="triangle four">
           </div>
               </div>
               <p>Beginner friendly UX Design course</p>
            </div>
            <div class="ods-col star-hover">
               <div class="svg-icon star">
                  <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                    <path d="M20.0155 0L20.0194 19.9803L27.6692 1.5224L20.0267 19.9834L34.1576 5.85787L20.0321 19.9889L38.4931 12.3463L20.0352 19.9961L40.0155 20L20.0352 20.0039L38.4931 27.6537L20.0321 20.0111L34.1576 34.1421L20.0267 20.0166L27.6692 38.4776L20.0194 20.0197L20.0155 40L20.0117 20.0197L12.3618 38.4776L20.0044 20.0166L5.8734 34.1421L19.9989 20.0111L1.53794 27.6537L19.9959 20.0039L0.0155334 20L19.9959 19.9961L1.53794 12.3463L19.9989 19.9889L5.8734 5.85787L20.0044 19.9834L12.3618 1.5224L20.0117 19.9803L20.0155 0Z" stroke="#628BFF" stroke-width="2.78"/>
                  </svg>
               </div>
               <p>Interactive project discussions and Q&A</p>
            </div>
            <div class="ods-col square-hover">
               <div class="svg-icon">
                 
                  <img class="square-img" src="assets/images/home/square.svg">
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
    <script src="https://unpkg.com/splitting/dist/splitting.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Flip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollToPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/TextPlugin.min.js"></script>

    
    <script>
//   gsap.to(".scrollimgzoom", {
//   width: "100%",
//   left:"0%",
//   borderRadius: "80%", 
//   duration: 10,
//   ease: "power2.inOut", 
//   scrollTrigger: {
//     trigger: ".scrollimgzoom",
//     start: "top 50%",
//     end: "bottom 50%",
//     scrub: true,
//   },
// });

gsap.to(".scrollimgzoom", {
//   width: "100%",
width:"1044px",
//   height:"544px",
height:"595px",
//   left:"0%",          //new-animation
  borderRadius: "40px",
  duration: 10,
  ease: "power2.inOut", 
  scrollTrigger: {
    trigger: ".scrollimgzoom",
    start: "top 110%",
    end: "bottom 80%",
    scrub: true,
  },
});



      </script>
      <script>
    const squareHover = document.getElementById('squareHover');
    const squareImage = document.getElementById('squareImage');

    // Define the paths for the images
    const originalImagePath = 'assets/images/home/square.svg';
    const hoverImagePath = 'assets/images/home/square-hover.svg';

    // Add event listeners
    squareHover.addEventListener('mouseover', () => {
      squareImage.style.opacity = '0'; // Optionally fade out the original image
      squareImage.src = hoverImagePath;
      squareImage.style.opacity = '1'; // Optionally fade in the new image
    });

    squareHover.addEventListener('mouseout', () => {
      squareImage.style.opacity = '0'; // Optionally fade out the hover image
      squareImage.src = originalImagePath;
      squareImage.style.opacity = '1'; // Optionally fade in the original image
    });
  </script>
  <!-- <script>
   const width=document.querySelector('.width')
   width.innerHTML=window.innerHeight
   </script> -->
   <script>
    window.addEventListener('scroll', function() {
      // Get the scroll position
      var scrollPos = window.scrollY || window.scrollTop || document.documentElement.scrollTop;
      var newSize
      // Calculate the new background size based on the scroll position
      if(window.innerWidth>1000){
         newSize = 120 + scrollPos * 0.1;
      }
      if(window.innerWidth<1000){
         newSize = 200 + scrollPos * 0.1;

      }
        // Adjust the factor based on your preference

      // Update the background size
      document.getElementById('zoomBg').style.backgroundSize = newSize + '% ' + newSize + '%';
    });
  </script>
