<?php
$page_details = [
   'body_class' => 'home-page',
   'title' => ''
];
require_once './header.php';
?>
<div class="page-wrapper" id="smooth-content">
   <div class="homepage-container">
      <div class="template-import template-hero">
         <?php include './include/hero.php'; ?>
      </div>
      
      <div class="template-import template-mentors">
         <?php include './include/mentors.php'; ?>
      </div>

      <div class="template-import template-who-can-apply">
         <?php include './include/apply.php'; ?>
      </div>

      <!-- <div class="static-curriculum-main-container">
		<div id="card" class="card card1">
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
</div> -->
      <div class="template-import template-curriculum">
         <?php include './include/curriculum.php'; ?>
      </div>

      <div class="template-import template-learning">
         <?php include './include/start-learning-now.php'; ?>
      </div>

      <div class="template-import template-testimonials">
         <?php include './include/testimonials.php'; ?>
      </div>

      <div class="template-import template-faq">
         <?php include './include/faq.php'; ?>
      </div>

      <div class="template-import template-contact">
         <?php include './include/contact-us-strip.php'; ?>
      </div>
   </div>
</div>

<?php require_once './footer.php'; ?>
