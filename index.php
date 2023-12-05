<?php
$page_details = [
   'body_class' => 'home-page',
   'title' => ''
];
require_once './header.php';
?>


<!-- <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.28/bundled/lenis.min.js"></script> 
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <div class="blob"></div> -->

<div class="page-wrapper " id="smooth-content">
   <div class="homepage-container">
      <div class="template-import template-hero">
         <?php include './include/hero.php'; ?>
      </div>
      
      <div data-aos="fade-up"  class="template-import template-mentors">
         <?php include './include/mentors.php'; ?>
      </div>

      <div data-aos="fade-up" class="template-import template-who-can-apply">
         <?php include './include/apply.php'; ?>
      </div>

    
      <div data-aos="fade-up" class="template-import template-curriculum">
         <?php include './include/curriculum.php'; ?>
      </div>

      <div data-aos="fade-up" class="template-import template-intern">
         <?php include './include/intern.php'; ?>
      </div>

      <div data-aos="fade-up" class="template-import template-client">
         <?php include './include/client-grid.php'; ?>
      </div>

      <div data-aos="fade-up" class="template-import template-learning">
         <?php include './include/start-learning-now.php'; ?>
      </div>

      <div data-aos="fade-up" class="template-import template-testimonials">
         <?php include './include/testimonials.php'; ?>
      </div>

      <div data-aos="fade-up" class="template-import template-faq">
         <?php include './include/faq.php'; ?>
      </div>

      <div  class="template-import template-contact">
         <?php include './include/contact-us-strip.php'; ?>
      </div>
   </div>
</div>

<?php require_once './footer.php'; ?>
