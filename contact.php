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
               <div class="svg-icon">
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
               <div class="svg-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                    <path d="M20.0155 0L20.0194 19.9803L27.6692 1.5224L20.0267 19.9834L34.1576 5.85787L20.0321 19.9889L38.4931 12.3463L20.0352 19.9961L40.0155 20L20.0352 20.0039L38.4931 27.6537L20.0321 20.0111L34.1576 34.1421L20.0267 20.0166L27.6692 38.4776L20.0194 20.0197L20.0155 40L20.0117 20.0197L12.3618 38.4776L20.0044 20.0166L5.8734 34.1421L19.9989 20.0111L1.53794 27.6537L19.9959 20.0039L0.0155334 20L19.9959 19.9961L1.53794 12.3463L19.9989 19.9889L5.8734 5.85787L20.0044 19.9834L12.3618 1.5224L20.0117 19.9803L20.0155 0Z" stroke="#628BFF" stroke-width="2.78"/>
                  </svg>
               </div>
               <p>Interactive project discussions and Q&A</p>
            </div>
            <div class="ods-col">
               <div class="svg-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.400848 0H0.542545L40.4008 39.8583V40H25.0182L0.400848 15.3827V0ZM17.7344 0L40.2562 22.5218V0H17.7344Z" fill="#FBB22D"/>
                  </svg>
               </div>
               <p>Weekend Classes</p>
            </div>
         </div> 
     
</section>
<section class="contact-form-wrapper">
   <h2>Register now <img src="assets/images/contact/form-head.png"></h2>
   <form id="submitForm" class="ods-form">
      <div class="form-groups">
   <input id="studentname" name="name" type="text" class="input-field" placeholder="Enter your name">
   <img src='assets/images/contact/cross.svg' class="cross-img" onclick="handleClick('name')"></div>
   <p class="error-text error-text-name">Please enter your name</p>
   <div class="form-groups">

   <input id="studentphone" name="phone" type="text" class="input-field" placeholder="Enter your phone number">
   <img src='assets/images/contact/cross.svg' class="cross-img" onclick="handleClick('phone')"></div>

	<p class="error-text error-text-phone">Please enter your phone number</p>
	<p class="error-text error-invalid-text-phone">Please enter valid phone number</p>
   <div class="form-groups">

   <input id="studentemail" name="email" type="text" class="input-field" placeholder="Enter your email address">
   <img src='assets/images/contact/cross.svg' class="cross-img" onclick="handleClick('email')"></div>

   <p class="error-text error-text-email">Please enter your email address</p>
	<p class="error-text error-invalid-text-email">Please enter valid email address</p>
   <button><div class="cta-wrapper">
					<a href="#" class="bttn bttn-primary bttn-primary-dark">
						<span>SUBMIT</span>
					</a>
				</div></button>
			</div>
   <!-- <button>SUBMIT</button> -->
</form>

</section>
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
	   //   successFun()
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
console.log(value,"value")
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
//   const successFun=()=>{
// 	const formDiv = document.getElementById('submitForm');
// 	formDiv.style.display="none"
// 	const successText=document.querySelector('.success-text');
// 	console.log(successText,"success")
// 	successText.style.display="flex"                             //to control what happens after form submission
//   }

  const form = document.getElementById('submitForm');
  form.addEventListener('submit', handleSubmit);



</script>