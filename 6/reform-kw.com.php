<?php
   include_once 'header.php';
   ?>
<div class="clear"></div>
<header>
   <div id="carouselExampleIndicators" class="carousel slide d-block d-sm-none" data-ride="carousel">
      <ol class="carousel-indic ators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
         <!-- Slide One - Set the background image for this slide in the line below -->
         <div class="carousel-item" style="background-image: url('	')">
         </div>
         <div class="carousel-item active" style="background-image: url('include/img/slide-1.jpg')">
         </div>
         <!-- Slide Two - Set the background image for this slide in the line below -->
         <!-- Slide Three - Set the background image for this slide in the line below -->
         <div class="carousel-item" style="background-image: url('include/img/slide-3.jpg')">
         </div>
      </div>
   </div>
</header>
<video class="d-none d-sm-block" id="slide-video" poster="include/img/reform-hero.jpg" preload="auto" loop autoplay muted>
   <source src='include/img/reform-video.webm' type='video/webm' />
   <source src='include/img/reform-video.mp4' type='video/mp4' />
</video>
<div class="clear"></div>
<div class="container">
   <div class="row " style="background:#000;">
      <div class="col-lg-6">
         <img src="include/img/reform-gym-view.jpg" class="img-fluid">
      </div>
      <div class="col-lg-6 p-4">
         <div class="shadow p-3 mb-5 rounded">
            <h3 class="text-white">ENQUIRY FORM</h3>
            <form id="contact-form" name="contact-form" action="javascript:void(0)" method="post">
               <div class="row">
                  <div class="col-lg-6">
                     <label for="buiss_name" class="t400">Contact person name:</label>
                     <input type="text" id="buiss_name1" name="name" value="" class="form-control" required/>
                  </div>
                  <div class="col-lg-6">
                     <label for="buiss_name" class="t400">Subject:</label>
                     <input type="text" id="buiss_name" name="subject" value="" class="form-control" required/>
                  </div>
                  <div class="col-lg-6">
                     <label for="contact_number" class="t400">Contact number:</label>
                     <input type="number" id="contact_number1" name="phone" value="" class="form-control" required/>
                  </div>
                  <div class="col-lg-6">
                     <label for="email_id" class="t400">Email ID:</label>
                     <input type="email" id="email_id1" name="email" value="" class="form-control" required/>
                  </div>
                  <div class="col-lg-12">
                     <label for="email_id" class="t400">Message / Comments</label>
                     <textarea name="message" cols="40" rows="6" class="form-control" aria-invalid="false" placeholder=""></textarea>
                  </div>
                  <br>
                  <div class="col-lg-12 mt-3">
                     <input type="button"  class="btn white-button mt-4" onclick="submit_form()" id="submit-btn" name="submit-btn" value="Submit">
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<div class="clear"></div>
<div class="row no-gutters">
   <!-- <div class="col-lg-3 col-6">
      <img src="include/img/one.jpg" class="img-fluid">
   </div>
   <div class="col-lg-3 col-6">
      <img src="include/img/reform2.jpg" class="img-fluid">
   </div>
   <div class="col-lg-3 col-6">
      <img src="include/img/two.jpg" class="img-fluid">
   </div>
   <div class="col-lg-3 col-6">
      <img src="include/img/reform4.jpg" class="img-fluid">
   </div> -->
   <div class="owl-carousel owl-theme">
      <div><img src="include/img/tredmill.jpg"></div>
      <div><img src="include/img/reform2.jpg"></div>
      <div><img src="include/img/two.jpg"> </div>
      <div><img src="include/img/reform4.jpg"></div>
      <div><img src="include/img/tredmill.jpg"></div>
      <div><img src="include/img/reform2.jpg"></div>
      <div><img src="include/img/two.jpg"> </div>
      <div><img src="include/img/reform4.jpg"></div>
   </div>
</div>
<div class="clear"></div>
<div class="">
	<div class="">
		<div class=" row no-gutters" style="background:url(include/img/diet.jpg); background-size:cover; padding:100px 0;"  >
         <div class="col-lg-8 p-5"></div>
         <div class="col-lg-4 p-5">
            <h3 class="text-white">Join us </h3>
            <p  class="text-white">We help you at every step and keep you motivated to achieve your fitness goals. We offer world-class amenities, professional trainers, and state-of-the-art gym facilities.</p>
         </div>
      </div>
	</div>
</div>
<section style="background:url(include/img/blue-bg.jpg); background-size:cover; padding:50px 0;">
   <div class="container">
      <div class="row ">
         <div class="col-lg-12 col-2 text-center">
            <h1 class="text-white">Facilities</h1>
         </div>
         <div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon1.png" class="img-fluid">
            <p class="text-white">Strength training</p>
         </div>
         <div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon2.png" class="img-fluid">
            <p class="text-white">Cardio</p>
         </div>
         <div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon3.png" class="img-fluid">
            <p class="text-white">Crossfit</p>
         </div>
         <!--<div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon5.png" class="img-fluid">
            <p class="text-white">Zumba</p>
         </div>-->
         <div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon6.png" class="img-fluid">
            <p class="text-white">Functional training</p>
         </div>
         <!--<div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon7.png" class="img-fluid">
            <p class="text-white">Stepper</p>
         </div>-->
         <div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon8.png" class="img-fluid">
            <p class="text-white">HIIT</p>
         </div>
         <div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon9.png" class="img-fluid">
            <p class="text-white">TRX</p>
         </div>
         <div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon10.png" class="img-fluid">
            <p class="text-white">Core Stability Training</p>
         </div>
         <div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon12.png" class="img-fluid">
            <p class="text-white">Counselling</p>
         </div>
         <div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon13.png" class="img-fluid">
            <p class="text-white">Body Composition & Analysis</p>
         </div>
         <div class="col-lg-2 col-6 text-center">
            <img src="include/img/transform.png" class="img-fluid">
            <p class="text-white"> Transformation</p>
         </div>
         <div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon15.png" class="img-fluid">
            <p class="text-white">Personal Training</p>
         </div>
         <div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon16.png" class="img-fluid">
            <p class="text-white">Locker & Shower Facility</p>
         </div>
         <!--<div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon18.png" class="img-fluid">
            <p class="text-white"> Music & Video</p>
         </div>-->
         <div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon19.png" class="img-fluid">
            <p class="text-white">Nutritional Support</p>
         </div>
         <!--<div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon20.png" class="img-fluid">
            <p class="text-white">  Cross Functional</p>
         </div>-->
         <div class="col-lg-2 col-6 text-center">
            <img src="include/img/icon21.png" class="img-fluid">
            <p class="text-white"> Cross Training</p>
         </div>
         <div class="col-lg-2 col-6  text-center">
            <img src="include/img/icon22.png" class="img-fluid">
            <p class="text-white">   Buddy Training</p>
         </div>
      </div>
   </div>
</section>
<div style="background:#000; ">
   <div class="">
      
      <div class="clear"></div>
      <!-- /.container -->
      <div class=" row no-gutters" style="background:#d7dadc;"  >
         <div class="col-lg-6 p-5">
            <h3 class="text-dark">Body composition analysis & nutritional support</h3>
            <p class="text-dark" >Optimal nutrition is essential if you are to reach your athletic potential. We can provide analysis of your body composition providing your with information on percentage body fat, lean mass and somatotype (body type) and your current dietary intake and event feeding practices. From this we can provide recommendations on how to effectively lose weight, increase muscle mass or tailor the timing and type of nutrition around your event.</p>
         </div>
         <div class="col-lg-6 text-right">
            <img src="include/img/body-compo.jpg" class="img-fluid">
         </div>
      </div>
      <div class=" row no-gutters" style="background:#000;"  >
         <div class="col-lg-6 text-right">
            <img src="include/img/re.jpg" class="img-fluid">
         </div>
         <div class="col-lg-6 p-5">
            <h3 class="text-white"> Sports Rehab</h3>
            <p class="text-white" >We assist in overcoming movement disorders, which may have been present from birth, or acquired through accident or injury, or are the result of ageing or life-changing events.</p>
         </div>
         
      </div>
   </div>
</div>
<div class="clear"></div>
<?php
   include_once 'footer.php';
   ?>
<script>
   function submit_form() {
   formData = {
       'name': $('input[name=name]').val(),
       'email': $('input[name=email]').val(),
       'phone': $('input[name=phone]').val(),
       'subject': $('input[name=subject]').val(),
       'message': $('textarea[name=message]').val()
   };
   $.ajax({
       url: "ajax/send-contact-mail.php",
       type: "POST",
       data: formData,
       beforeSend: function(){
           $('#submit-btn').val('Please wait...');
       },
       success: function(res) {
           if(res == 'field_error'){
               alert('All fields are required');
           } else if(res == 1){
               window.location.href="thankyou.php";
               $('#submit-btn').val('Submit');
           } else {
               alert('Error occured. Please try again');
               $('#submit-btn').val('Submit');
           }
       }
   });
   
   
   }
</script>
<script>
   var video = document.getElementById("myVideo");
   var btn = document.getElementById("myBtn");
   
   function myFunction() {
     if (video.paused) {
       video.play();
       btn.innerHTML = "Pause";
     } else {
       video.pause();
       btn.innerHTML = "Play";
     }
   }
</script>
<script src="owl.carousel.min.js"></script>
   <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
         loop:true,
         margin:10,
         nav:true,
         responsive:{
            0:{
               items:1
            },
            600:{
               items:3
            },
            1000:{
                  items:4
                  }
              }
          })
   </script>