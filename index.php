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
   </div>
</div>

<?php require_once './footer.php'; ?>
