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

      <div class="template-import template-curriculum">
         <?php //include './include/curriculum.php'; ?>
      </div>

      <div class="template-import template-client">
         <?php include './include/client-grid.php'; ?>
      </div>

      <div class="template-import template-learning">
         <?php include './include/start-learning-now.php'; ?>
      </div>

      <div class="template-import template-testimonials">
         <?php include './include/testimonials.php'; ?>
      </div>

      <div class="template-import template-faq">
         <?php //include './include/faq.php'; ?>
      </div>

      <div class="template-import template-contact">
         <?php include './include/contact-us-strip.php'; ?>
      </div>
   </div>
</div>

<?php require_once './footer.php'; ?>
