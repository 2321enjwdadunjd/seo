<?php
	include_once 'header.php';
?>
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
         <div class="carousel-item" style="background-image: url('img/slide-2.jpg')">
          
        </div>
		
		<div class="carousel-item active" style="background-image: url('img/slide-1.jpg')">
         
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
       
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('img/slide-3.jpg')">
          
        </div>
      </div>
     
    </div>
  </header>


<div class="row no-gutters" style="background:#000;">
  
  <div class="col-lg-6">
  
  <div class="row no-gutters">
		
		
		
			<div class="col-lg-6" style="background:url(img/icon2.jpg); background-size:cover;">
			
				<div class="usp-icon text-center">
					<i class="fas fa-dumbbell"></i>
					<h3  class="text-white">Body Building </h3>
				</div>
			
			</div>
			<div class="col-lg-6" style="background:url(img/icon3.jpg); background-size:cover;">
			
				<div class="usp-icon text-center">
					<i class="far fa-heart"></i>
					<h3  class="text-white">Yoga</h3>
				</div>
			
			</div>
			<div class="col-lg-6" style="background:url(img/icon4.jpg); background-size:cover;">
			
				<div class="usp-icon text-center">
					<i class="fas fa-users"></i>
					<h3  class="text-white">Fitness</h3>
				</div>
			
			</div>
			<div class="col-lg-6" style="background:url(img/icon5.jpg) ; background-size:cover;">
			
				<div class="usp-icon text-center">
					<i class="fas fa-weight"></i>
					<h3 class="text-white">Weight Loss</h3>
				</div>
			
			</div>
		
		
		</div>
		
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

<div class="clear"></div>
 
 
 <section style="background:#c9060e; padding:50px 0;">
 
	<div class="container">
	
		<div class="row ">
		<div class="col-lg-12 text-center">
		<h1 class="text-white">Facilities</h1>
		</div>
		
		<div class="col-lg-2 text-center">
			<img src="img/icon1.png" class="img-fluid">
			<p class="text-white">Strength training</p>
		</div>
		<div class="col-lg-2 text-center">
			<img src="img/icon2.png" class="img-fluid">
			<p class="text-white">Cardio</p>
		</div>
		<div class="col-lg-2 text-center">
			<img src="img/icon3.png" class="img-fluid">
			<p class="text-white">Crossfit</p>
		</div>
		<div class="col-lg-2 text-center">
			<img src="img/icon4.png" class="img-fluid">
			<p class="text-white">Yoga</p>
		</div>
		
		
		<div class="col-lg-2 text-center">
			<img src="img/icon5.png" class="img-fluid">
			<p class="text-white">Zumba</p>
		</div>
		
		<div class="col-lg-2 text-center">
			<img src="img/icon6.png" class="img-fluid">
			<p class="text-white">Functional training</p>
		</div>
		
		<div class="col-lg-2 text-center">
			<img src="img/icon7.png" class="img-fluid">
			<p class="text-white">Stepper</p>
		</div>
		
		
		<div class="col-lg-2 text-center">
			<img src="img/icon8.png" class="img-fluid">
			<p class="text-white">HIIT</p>
		</div>
		
		
	
		
		<div class="col-lg-2 text-center">
			<img src="img/icon9.png" class="img-fluid">
			<p class="text-white">TRX</p>
		</div>
		<div class="col-lg-2 text-center">
			<img src="img/icon10.png" class="img-fluid">
			<p class="text-white">Core Stability Training</p>
		</div>
		
		
		<div class="col-lg-2 text-center">
			<img src="img/icon11.png" class="img-fluid">
			<p class="text-white">Cafeteria</p>
		</div>
		
		<div class="col-lg-2 text-center">
			<img src="img/icon12.png" class="img-fluid">
			<p class="text-white">Counselling</p>
		</div>
		
		<div class="col-lg-2 text-center">
			<img src="img/icon13.png" class="img-fluid">
			<p class="text-white">Body Composition & Analysis</p>
		</div>
		
		
		<div class="col-lg-2 text-center">
			<img src="img/icon14.png" class="img-fluid">
			<p class="text-white"> Transformation</p>
		</div>
		
		
		
		
		
		
		
		
		<div class="col-lg-2 text-center">
			<img src="img/icon15.png" class="img-fluid">
			<p class="text-white">Personal Training</p>
		</div>
		<div class="col-lg-2 text-center">
			<img src="img/icon16.png" class="img-fluid">
			<p class="text-white">Locker & Shower Facility</p>
		</div>
		
		
		<div class="col-lg-2 text-center">
			<img src="img/icon17.png" class="img-fluid">
			<p class="text-white"> Juice Bar</p>
		</div>
		
		<div class="col-lg-2 text-center">
			<img src="img/icon18.png" class="img-fluid">
			<p class="text-white"> Music & Video</p>
		</div>
		
		
		<div class="col-lg-1 text-center">
	
		</div>
		
		
		<div class="col-lg-2 text-center">
			<img src="img/icon19.png" class="img-fluid">
			<p class="text-white">Nutritional Support</p>
		</div>
		
		
		<div class="col-lg-2 text-center">
			<img src="img/icon20.png" class="img-fluid">
			<p class="text-white">  Cross Functional</p>
		</div>
		
		
		<div class="col-lg-2 text-center">
			<img src="img/icon21.png" class="img-fluid">
			<p class="text-white"> Cross Training</p>
		</div>
		
		
		<div class="col-lg-2 text-center">
			<img src="img/icon22.png" class="img-fluid">
			<p class="text-white">  Combine Training</p>
		</div>
		<div class="col-lg-2 text-center">
			<img src="img/icon23.png" class="img-fluid">
			<p class="text-white">  Spa</p>
		</div>
		
		
		
		
			
			
			
		
			
		
		
		
		
		</div>
	
	
	</div>
 
 
 </section>
 
 
 <div style="background:#000; ">
 
 <div class="">
	
	
	
	<div class=" row no-gutters" style="background:#ebe8e6;"  >
	
		
		<div class="col-lg-6 p-5">
			
			
				<h3 class="text-dark">Physiotherapist  </h3>
				<p class="text-dark" >We assist in overcoming movement disorders, which may have been present from birth, or acquired through accident or injury, or are the result of ageing or life-changing events. Our Physiotherapist will assess, diagnose and formulate a customized treatment plan based on the condition of the patient.</p>
			
		
		</div>
		
		
		<div class="col-lg-6 text-right">
			
			
				<img src="img/physiotherapist.jpg" class="img-fluid">
				
		
		</div>
		
		
		
		
		
	</div>
	
	
	
	<div class=" row no-gutters" style="background:#f5d1d8;"  >
	
		
		<div class="col-lg-6 text-left">
			
			
				<img src="img/diet.jpg" class="img-fluid">
				
		
		</div>
		
		<div class="col-lg-6 p-5">
			
			
				<h3 class="text-dark">Diet Consultation   </h3>
				<p  class="text-dark">Without a proper strategy, you can’t reach your goal. When it’s about your health, you must set a proper strategy which help you to be a healthy person. BeingFit offering you to share your health issues with a dietitian and customize a proper nutritional strategy for your fitness </p>
			
		
		</div>
		
		
		
	</div>
	
	
	<div class="clear"></div>

  <!-- /.container -->

	<div class=" row no-gutters" style="background:#d7dadc;"  >
	
		
		
		<div class="col-lg-6 p-5">
			
			
				<h3 class="text-dark">Body composition analysis & nutritional support</h3>
				<p class="text-dark" >Optimal nutrition is essential if you are to reach your athletic potential. We can provide analysis of your body composition providing your with information on percentage body fat, lean mass and somatotype (body type) and your current dietary intake and event feeding practices. From this we can provide recommendations on how to effectively lose weight, increase muscle mass or tailor the timing and type of nutrition around your event.</p>
			
		
		</div>
		
		
		<div class="col-lg-6 text-right">
			
			
				<img src="img/nutrional-support.png" class="img-fluid">
				
		
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