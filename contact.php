<?php
$page_details = [
   'body_class' => 'home-page',
   'title' => ''
];
require_once './header.php';
?>
<div class="contact-page-wrapper" id="smooth-content">
      <section class="contact-hero-wrapper">
      <div class="contact-main-container">
      <div class="contact-big-text">
         <span class="contact-text-span type-span-1">Next best</span>
         <span class="contact-text-span type-span-2">Industry leaders</span>
         <span class="contact-text-span type-span-3">in making</span>
      </div>
     <img src="assets/images/contact/icon1.png" class="icon1">
      <img src="assets/images/contact/icon2.png" class="icon2">
     <img src="assets/images/contact/icon3.png" class="icon3">

   </div>

  
   <div class="hero-stats-wrapper">
    
            <div class="ods-col">
               <p class="stats_num yellow-stats">200+</p>
               <p>Students</p>
            </div>
            <div class="ods-col">
            <p class="stats_num blue-stats">10+</p>
               <p>Mentors</p>
            </div>
            <div class="ods-col">
            <p class="stats_num pink-stats">400+</p>
               <p>Hours Taught</p>
            </div>
         </div> 
     
</section>
<section class="contact-form-wrapper">
   <h2 class="register">Register now <img src="assets/images/contact/form-head.png"></h2>
   <form id="submitForm" class="ods-form">
      <div class="form-groups">
   <input id="studentname" onfocus="handleFocus('name')" onblur="handleBlur('name')" name="name" type="text" class="input-field" placeholder="Enter your name">
   <img id="nameCross" src='assets/images/contact/cross.svg' class="cross-img" onclick="handleClick('name')"></div>
   <p class="error-text error-text-name">Please enter your name</p>
   <div class="form-groups">

   <input id="studentphone" onfocus="handleFocus('phone')" onblur="handleBlur('phone')"  name="phone" type="text" class="input-field" placeholder="Enter your phone number">
   <img id="phoneCross" src='assets/images/contact/cross.svg' class="cross-img" onclick="handleClick('phone')"></div>

	<p class="error-text error-text-phone">Please enter your phone number</p>
	<p class="error-text error-invalid-text-phone">Please enter valid phone number</p>
   <div class="form-groups">

   <input id="studentemail" onfocus="handleFocus('email')" onblur="handleBlur('email')" name="email" type="text" class="input-field" placeholder="Enter your email address">
   <img id="emailCross" src='assets/images/contact/cross.svg' class="cross-img" onclick="handleClick('email')"></div>

   <p class="error-text error-text-email">Please enter your email address</p>
	<p class="error-text error-invalid-text-email">Please enter valid email address</p>
   <button><div class="cta-wrapper">
					<a href="#" class="bttn bttn-primary bttn-primary-dark">
						<span>SUBMIT</span>
					</a>
				</div></button>
</form>
<div class="success-state">
<p class="success-head">We have received</p>
<h3 class="yellow-tag">your</h3>
<h3 class="blue-tag">message</h3>
<p class="success-para">Sit back and relax. One of our team members will get in touch with you very soon.</p>
<img src="assets/images/contact/success1.png" class="success-imgs success1">
<img src="assets/images/contact/success2.png" class="success-imgs success2">
<img src="assets/images/contact/success3.png" class="success-imgs success3">

</div> 


</section>
</div>
<?php require_once './footer.php'; ?>
<script>
	const config={
		FORM_API_URL:"https://dashboard.onething.design/wp-json/contact-form-7/v1/contact-forms/",
		ODS_FORM_ENDPOINT: "7754/feedback",
	}
	function handleSubmit(event) {
    event.preventDefault(); 
    const form = event.target;
    console.log(form.name.value,form.email.value,form.phone.value,"form")
    const formData = new FormData();
    formData.append("text-166",form.name.value)
    formData.append("email-935",form.email.value)
	formData.append("number-264",form.phone.value)

	formData.append("hidden-field","ods-contact-page")

    const pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    const phoneNumberRegex = /^[\d ()+-]*\d[\d ()+-]*$/;

    if (form.name.value && form.email.value && form.phone.value && pattern.test(form.email.value) && phoneNumberRegex.test(form.phone.value)) {
		document.querySelector('.error-text-name').style.display="none"
		document.querySelector('.error-text-phone').style.display="none"
		document.querySelector('.error-text-email').style.display="none"
		document.querySelector('.error-invalid-text-email').style.display="none"
		document.querySelector('.error-invalid-text-phone').style.display="none"

    fetch('https://dashboard.onething.design/wp-json/contact-form-7/v1/contact-forms/7754/feedback', {
    	method: 'POST',
        body: formData
      })
    .then(response => response.json())
    .then(data => {
	     successFun()
    	console.log(data);
    })
    .catch(error => {
    	console.error('Error:', error);
    });
   
  }
  else{
   if(form.name.value!==''){
		document.querySelector('.error-text-name').style.display="none"
   }
   if(form.email.value!==''){
		document.querySelector('.error-text-email').style.display="none"
   }
   if(form.phone.value!==''){
		document.querySelector('.error-text-phone').style.display="none"
   }
	if(form.name.value===''){
		document.querySelector('.error-text-name').style.display="flex"
	}
	 if(form.email.value===''){
		
		document.querySelector('.error-text-email').style.display="flex"

	}
	 if(form.phone.value==''){
		document.querySelector('.error-text-phone').style.display="flex"
	}
   if(pattern.test(form.email.value)){
		document.querySelector('.error-invalid-text-email').style.display="none"

   }
   if(pattern.test(form.phone.value)){
		document.querySelector('.error-invalid-text-phone').style.display="none"

   }
  if(!pattern.test(form.email.value) && form.email.value!=='' ){
		document.querySelector('.error-invalid-text-email').style.display="flex"
  }
  if(!phoneNumberRegex.test(form.phone.value) && form.phone.value!==''){
		document.querySelector('.error-invalid-text-phone').style.display="flex"

  }
  }
}
  
const handleClick=(value)=>{
   document.getElementById(`${value}Cross`).style.display="none"
console.log(value,"valuesss")
if(value==='name'){
   form.name.value=''
}
if(value==='email'){
   form.email.value=''
}
if(value==='phone'){
   form.phone.value=''
}

}
  const successFun=()=>{
   console.log("success")
	const formDiv = document.getElementById('submitForm');
   const register=document.querySelector('.register')
	formDiv.style.display="none"
	register.style.display="none"

	const successState=document.querySelector('.success-state');
	const contactForm=document.querySelector('.contact-form-wrapper');
   contactForm.classList.add('bg-none')
	const contactPage=document.querySelector('.contact-page-wrapper');
   contactPage.classList.add('page-bg-opacity')
   successState.style.display="flex"                             //to control what happens after form submission

	const successImages=document.querySelectorAll('.success-imgs');
   successImages.forEach(image => {
  image.style.display = 'flex';
});     
  }

  const form = document.getElementById('submitForm');
  form.addEventListener('submit', handleSubmit);

  //on focus of input field


let blurTimeout;
const handleFocus=(value)=>{
   clearTimeout(blurTimeout);
   document.getElementById(`${value}Cross`).style.display="block"
}
function handleBlur(value) {
  blurTimeout = setTimeout(() => {
    document.getElementById(`${value}Cross`).style.display = 'none';
  }, 100);
}
document.getElementById('studentname').addEventListener('focus', () => handleFocus('name'));
document.getElementById('studentname').addEventListener('blur', () => handleBlur('name'));

document.getElementById('studentphone').addEventListener('focus', () => handleFocus('phone'));
document.getElementById('studentphone').addEventListener('blur', () => handleBlur('phone'));

document.getElementById('studentemail').addEventListener('focus', () => handleFocus('email'));
document.getElementById('studentemail').addEventListener('blur', () => handleBlur('email'));



</script>