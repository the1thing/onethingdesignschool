
<section class="intern-wrapper">
  <div class="intern-main-container">
<div class="intern-container">
        <section class="content-section">
         <h3 class="section-heading">A chance to work with us</h3>
         <p class="section-p">An opportunity to get placed at Onething alongside many other top design agencies and product companies.</p>
       <a href="#" class="bttn bttn-primary bttn-primary-dark">
           <span>Contact us</span>
       </a>
     
        </section>
        <section class="animation-section">
       
            <div id="gallery" class="image-section1">
              
             <img src="assets/images/intern/sliding1.png" class="scrolling-image">
             <img src="assets/images/intern/sliding2.png" class="scrolling-image">
             <img src="assets/images/intern/sliding3.png" class="scrolling-image">
             <img src="assets/images/intern/sliding1.png" class="scrolling-image">
             <img src="assets/images/intern/sliding2.png" class="scrolling-image">
             <img src="assets/images/intern/sliding3.png" class="scrolling-image">
             <img src="assets/images/intern/sliding1.png" class="scrolling-image">
    <img src="assets/images/intern/sliding2.png" class="scrolling-image">
    <img src="assets/images/intern/sliding3.png" class="scrolling-image">

</div>
            <div id="gallery-phone" dir="rtl" class="phone-image-section1"> 
             <img src="assets/images/intern/phone-img1.png" class="phone-scrolling-image">
             <img src="assets/images/intern/phone-img2.png" class="phone-scrolling-image">
             <img src="assets/images/intern/phone-img3.png" class="phone-scrolling-image">
             <img src="assets/images/intern/phone-img4.png" class="phone-scrolling-image">
            </div>
            <div id="gallery2"  class="image-section2 scroller">
              <div class="scroller-inner">
             <img src="assets/images/intern/sliding4.png" class="upscroll-image">
             <img src="assets/images/intern/sliding5.png" class="upscroll-image">
             <img src="assets/images/intern/sliding6.png" class="upscroll-image">
             <img src="assets/images/intern/sliding4.png" class="upscroll-image">
             <img src="assets/images/intern/sliding5.png" class="upscroll-image">
             <img src="assets/images/intern/sliding6.png" class="upscroll-image">
              </div>
            </div>
            <div id="gallery-phone2" class="phone-image-section2">
                <img src="assets/images/intern/phone-img4.png" class="phone-upscroll-image">
             <img src="assets/images/intern/phone-img3.png" class="phone-upscroll-image">
             <img src="assets/images/intern/phone-img2.png" class="phone-upscroll-image">
             <img src="assets/images/intern/phone-img1.png" class="phone-upscroll-image">
             <img src="assets/images/intern/phone-img4.png" class="phone-upscroll-image">
             <img src="assets/images/intern/phone-img3.png" class="phone-upscroll-image">

            </div>
        </section>
       
      </div>
     <img class="group-pattern"  src="assets/images/intern/group-pattern.png">
     <img class="phone-group-pattern" src="assets/images/intern/phone-group.png">

</div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<!-- <script src="assets/vendors/slick-code.js"></script> -->

<script>
   $('#gallery').slick({
    vertical:true,
        verticalSwiping:true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed:4000,
        cssEase: 'linear',
        infinite: true,
        arrows:false,
        touchMove:true,
        swipeToSlide:true,
        swipe:true,
        pauseOnHover: false
       
});
// $('#gallery2').slick({
//   vertical:true,
//         verticalSwiping:true,
//         slidesToShow: 3,
//         slidesToScroll: 1,
//         autoplay: true,
//         autoplaySpeed: 0,
//         speed:4000,
//         cssEase: 'linear',
//         infinite: true,
//         arrows:false,
//         touchMove:true,
//         swipeToSlide:true,
//         swipe:true,  
//       verticalReverse:true  
// });
$('#gallery-phone').slick({
  
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed:4000,
        cssEase: 'linear',
        infinite: true,
        arrows:false,
        touchMove:true,
        swipeToSlide:true,
        swipe:true,
        rtl:true,
        responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 1008,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
  ],
});
$('#gallery-phone2').slick({
  // vertical:true,
  //       verticalSwiping:true,
        slidesToShow: 2,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed:4000,
        cssEase: 'linear',
        infinite: true,
        arrows:false,
        touchMove:true,
        swipeToSlide:true,
        swipe:true,
        responsive: [
    {
      breakpoint: 1200,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 1008,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
      },
    },
    {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      },
    },
   
  ],
});
</script>

<script>
  const scrollers=document.querySelectorAll('.scroller')
  
  if(!window.matchMedia("(prefers-reduced-motion:reduced)").matches){
    addAnimation()
  }
  function addAnimation(){
  scrollers.forEach(scroller=>{
    scroller.setAttribute('data-animated',true)

    const scrollerInner=scroller.querySelector('.scroller-inner')
    const scrollContent=Array.from(scrollerInner.children)
    scrollContent.forEach(item=>{
      const duplicatedItem=item.cloneNode(true)
      duplicatedItem.setAttribute("aria-hidden",true)
      scrollerInner.appendChild(duplicatedItem)
      
    })
  })
  }
    </script>