<?php

include_once 'header.php';

include_once 'header2.php';

?>

    
    
    <div class="main-content">
    <section class="divider bg-silver-deep">
      <div class="container pt-50 pb-40">
        <div class="row">
         <div class="col-xs-12 col-sm-7 col-md-7 mb-sm-30 pr-20 text-justify">
         	 <p style="font-size: 16px;">
             <span style="font-size: 20px;color: #1695ce;"><strong>WORLD BRIGHTER CHAMPIONS</strong></span> is a wonderful plan to earn online. You can join our company by choosing any Plan.</p>
         	 <p style="font-size: 16px;">JOIN IT NOW... and see how your income is growing.For more details,VISIT our <a href="plan.php" style="color:#030f4f;text-decoration:underline;">BUSINESS PLAN</a> page.</p>
         	 <p style="font-size: 16px;text-align: justify;">  The person who believes in his/her work and believes in him/her self can do something diffenrent in the world.But 90% people fail why? Because <br><strong>1. Lack of Guidance.</strong><br><strong> 2. No Opportunity.</strong></p>
 			 <p style="font-size: 16px;text-align: justify;"><strong>World Brighter Champions</strong> helps you to Enhance your knowledge and build up your strength.Improving weakness and overall personality providing you better Life Style.</p>
         </div>
         <div class="col-xs-12 col-sm-5 col-md-5 mb-sm-30 pl-50">
             
			 <form id="register_form" name="register_form" class="register_form mb-0 bg-silver-deep" method="post" action="do_login.php" style="border:2px solid #030f4f;padding: 5px;">
		            <h3 class="text-center mt-0">Login with us</h3>
		            <input type="hidden" name="_token" value="bkExWRLKYtGwRJ7eCZmCSXImD6uI3ZpY6yaSuVhj">
		            <div class="row">
		              <div class="col-sm-12">
		                <div class="form-group">
		                  <input placeholder="Username" name="login_username" id="login_username" class="form-control" type="text" required>
		                </div>
		              </div> 
					  
		              <div class="col-sm-12">
		                <div class="form-group">
		                  <input placeholder="Password" name="login_pass" id="login_pass" required class="form-control" type="password">
		                </div>
		              </div>
					   
		              <div class="col-sm-12">
		                <p class="error" style="color: red"></p>
		                <div class="form-group mb-0 mt-0">
		                  <button type="submit" class="btn btn-colored btn-block btn-theme-colored2 text-white btn-lg btn-flat" data-loading-text="Please wait..." id="regsubmit">Login Now</button>
		                </div>
		              </div>
		              <div class="col-sm-12">
		                <div class="form-group mt-15 text-center">
		                  <p>Don't have an account? <a href="register.php" class="text-theme-colored2 text-underline">Register Here</a> </p>
		                </div>
		              </div>
		            </div>
		          </form>
            </div>
         </div>
      </div>
    </section>
    <section id="pricing">
      <div class="container pt-90">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30">
              <div class="pricing-table bg-silver-deep text-center maxwidth400 p-10" style="background: #5b0e2d;">
                <h2 class="package-type text-uppercase line-bottom-centered mb-50" style="color: #fff;">Knowledge Enhance</h2>
                 <p style="font-size: 16px;color: #fff"><strong>World Brighter Champions</strong> providing a four week ground performance to enhance your knowledge and skills by practical field.</p>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30">
              <div class="pricing-table bg-silver-deep text-center maxwidth400 p-10" style="background: #f15523;">
                <h2 class="package-type text-uppercase line-bottom-centered mb-50" style="color: #fff;">Improve Your Weakness</h2>
                <p style="font-size: 16px;color: #fff;"><strong>World Brighter Champions</strong> provides opportunity to discuss your weak points and provides training and Personality Development.</p>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 hvr-float-shadow mb-sm-30">
              <div class="pricing-table bg-silver-deep text-center maxwidth400 p-10" style="background: #1695ce;">
                <h2 class="package-type text-uppercase line-bottom-centered mb-50" style="color:#fff; ">Build Up Your Strength</h2>
                <p style="font-size: 16px;color:#fff;"><strong>World Brighter Champions</strong> provides coaching and training in different Sports Categories at different Sports Stadiums and Grounds.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>	
    <section style="background: #030f4f;">
      <div class="container pb-70">
        <div class="section-content">
          <div class="row">
            <div class="col-md-4 bg-silver-deep" style="background: #77b5fe;">
               <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">Top<span class="text-theme-colored2" style="color: #fff !important;"> Earners </span></h2>
               <marquee height="200" direction="up" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
                   <table cellspacing="0" cellpadding="5" width="80%" align="center">
                     <tbody>
		            <? 
                    $sql_recentearner = mysqli_query($db, "select users.fname, sum(user_payment.payment) as totalpay from users INNER JOIN user_payment on users.user_name = user_payment.id_for_payment group by user_payment.id_for_payment order by user_payment.id desc limit 10");    
                     while($data_recentearner = mysqli_fetch_assoc($sql_recentearner))
                     {
                        ?> 
	                   <tr>
				          <td style="color:#fff; background-color:#030f4f; border-radius:5px;" align="center"><i class="fa fa-user fa-5x" aria-hidden="true"></i></td>
				          <td style="color:#fff; background-color:#030f4f; border-radius:5px;" align="center"><?=$data_recentearner['fname']?><br>Amount Earned: Rs.<?=$data_recentearner['totalpay']?></td>
				        </tr> 
				        <tr>
				         <td>&nbsp;</td>
				        </tr>
						<?php } ?>  
                       
                    </tbody>
			       </table>
			     </marquee>
              
            </div>
            <div class="col-md-4" style="background: #77b5fe;border-right: 2px solid #fff;border-left: 2px solid #fff;">
              <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30" style="color: #fff;">Recently Joined Users</h2>
                  <marquee height="200" direction="up" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
                   <table cellspacing="0" cellpadding="5" width="80%" align="center">
                     <tbody>
                        <? 
                    $sql_userlist = mysqli_query($db, "select fname, toj from users order by id desc limit 10");    
                     while($data_userlist = mysqli_fetch_assoc($sql_userlist))
                     {
                        ?> 
					   <tr>
				         <td style="color:#1F0733; background-color:#FFFFFF; border-radius:5px;" align="center"><i class="fa fa-user fa-5x" aria-hidden="true"></i></td>
				        <td style="color:#1F0733; background-color:#FFFFFF; border-radius:5px;" align="center"><?=ucwords($data_userlist['fname']) ?><br>Joined On:<?=date('d-m-Y',$data_userlist['toj'])?></td>
				       </tr> 
				       <tr>
				         <td>&nbsp;</td>
				       </tr>
                       <? } ?>
                     </tbody>
			      </table>
			     </marquee>
             </div>
            <div class="col-md-4 bg-silver-deep" style="background: #77b5fe;">
              <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">Recent<span class="text-theme-colored2" style="color: #fff !important;"> Earners</span></h2>
                <marquee height="200" direction="up" scrollamount="3" onmouseover="this.stop();" onmouseout="this.start();">
                   <table cellspacing="0" cellpadding="5" width="80%" align="center">
                     <tbody>
					<? 
                    $sql_recentearner = mysqli_query($db, "select users.fname, user_payment.payment from users INNER JOIN user_payment on users.user_name = user_payment.id_for_payment order by user_payment.id desc limit 10");    
                     while($data_recentearner = mysqli_fetch_assoc($sql_recentearner))
                     {
                        ?> 
	                   <tr>
				         <td style="color:#fff; background-color:#030f4f; border-radius:5px;" align="center"><i class="fa fa-user fa-5x" aria-hidden="true"></i></td>
				         <td style="color:#fff; background-color:#030f4f; border-radius:5px;" align="center"><?=$data_recentearner['fname']?><br>Rs.<?=$data_recentearner['payment']?></td>
				       </tr> 
				       <tr>
				         <td>&nbsp;</td>
				       </tr>
						<?php } ?> 
                    </tbody>
			      </table>
			   </marquee>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="divider bg-silver-deep">
      <div class="container pt-50 pb-60">
        <div class="row">
           <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-30">
            <a href="inspiration.php">   
            <div class="feature-box text-center">
              <div class="feature-icon">
              	<i class="fa fa-user-plus" style="font-size: 65px;color:#030f4f;"></i>
              </div>
              <div class="feature-title">
              	<h3>Play and<br> Earn</h3>
              </div>
            </div>
               </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4 mb-sm-30">
            <a href="sports-facilities.php">  
            <div class="feature-box text-center">
              <div class="feature-icon">
              	<i class="fa fa-futbol-o" style="font-size: 65px;color:#030f4f;"></i>
              </div>
              <div class="feature-title">
              	<h3>Sports Facilities</h3>
              </div>
            </div>
              </a>    
          </div>
          <div class="col-xs-12 col-sm-6 col-md-4">
            <a href="be-a-leader.php"> 
            <div class="feature-box text-center">
              <div class="feature-icon">
              	<i class="fa fa-graduation-cap" style="font-size: 65px;color:#030f4f;"></i>
              </div>
              <div class="feature-title">
              	<h3>Be <br>a Leader</h3>
              </div>
            </div>
                </a> 
          </div>
        </div>
      </div>
    </section>
     <!-- Section: About -->
    <section>
      <div class="container pb-70">
        <div class="section-content">
          <div class="row">
            <div class="col-md-5">
              <img class="img-fullwidth maxwidth500" src="images/allsports.jpg" alt="">
            </div>
            <div class="col-md-7">
              <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">About <span class="text-theme-colored2">Us</span></h2>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p>World Brighter Champions is especially created for student-athletes with the ambition to get the best out of their sports career in addition to getting a good physical fitness. World Brighter Champions offers the unique possibility to be in a high quality sports coaching.</p>
              <p class="hidden-md">World Brighter Champions was founded to benefit both students and members through various popular sports activities like Cricket, Basket Ball, Tennis, Volley Ball, Football and so on.The purpose of the World Brighter Champions Team is to promote and protect the interests of sports and physical activities of people to strengthen them ...  </p>
             
              <a href="about-us.php" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-15">Read More</a>
            </div>
           </div>
        </div>
      </div>
    </section>
        
    <!-- Section: Courses -->
    <section id="courses" class="bg-silver-deep">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">Popular <span class="text-theme-colored2" style="color: #030f4f !important;">Sports</span></h2>              
              <p class="text-uppercase mb-0">Choose Your Desired Sports</p>
			   <div class="double-line-bottom-theme-colored-2"></div>
			 </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="owl-carousel-3col" data-nav="true">
           <?php
            $spo_res=mysqli_query($db,"select * from topic order by id ASC");
            while($spo_r=mysqli_fetch_assoc($spo_res)){
          ?>
            <div class="item">
              <div class="course-single-item bg-white border-1px clearfix mb-30">
                <div class="course-thumb">
                  <img class="img-fullwidth" alt="" src="uploads/sports/<?=$spo_r['icon']?>">
                </div>
                <div class="course-details clearfix p-20 pt-15">
                  <div class="course-top-part pull-left mr-40">
                    <a href="page-course-details.php?id=<?=$spo_r['id']?>&sports=<?=$spo_r['game']?>"><h4 class="mt-0 mb-5"><?=$spo_r['game']?></h4></a>
                  </div>
                   <div class="clearfix"></div>
                 </div>
              </div>
            </div>
            <?php } ?>        
           </div>
        </div>
      </div>
    </section>    
        
 	<section style="background: #030f4f;">
      <div class="container pb-70">
        <div class="section-content">
          <div class="row">
		     <h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30" style="color: #fff;">Videos</h2>
              <div class="double-line-bottom-theme-colored-2"></div>
			
               <? 
			  
			  $sql_image = mysqli_query($db, "select * from tasks order by id desc limit 6");
			  if(mysqli_num_rows($sql_image)>0)
			  {
			  while($data_image = mysqli_fetch_assoc($sql_image))
			  {
			     $link = explode('?v=' , $data_image['link']);
                  $link1 = $link[1];
			  ?>
              
              <div class="col-md-4" style="margin-bottom:20px;">
	           <div class="box-hover-effect about-video">
                <div class="effect-wrapper">
                  <div class="thumb">
                    <img class="img-fullwidth" src="http://img.youtube.com/vi/<?=$link1 ?>/mqdefault.jpg" alt="project">
                  </div>
                  <div class="video-button"></div>
                  <a class="hover-link" data-lightbox-gallery="youtube-video" href="https://www.youtube.com/watch?v=<?=$link1 ?>" title="Youtube Video">Youtube Video</a>
                </div>
              </div>
			 </div>
               <? } ?> 
              
              <div class="col-md-12 text-center">
			    <a href="videos.php" class="btn btn-colored btn-theme-colored2 text-white btn-lg pl-40 pr-40 mt-15" style="background: #fff;color: #030f4f !important;">View All</a>
			 </div>
              <? } ?>
              
           </div>
        </div>
      </div>
    </section>
    
    <section>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<h2 class="text-uppercasetext-theme-colored mt-0 mt-sm-30">Members<span class="text-theme-colored2"> Review </span></h2>
		               <div class="owl-carousel-1col boxed" data-dots="true">
			              <div class="item">
			                <div class="testimonial pt-10">
			                   <div class="testimonial-content gstesti">
			                    <div class="col-md-2 text-center">
					              <div class="feature-icon">
					              	<i class="fa fa-user fa-5x" aria-hidden="true" style="font-size: 100px;color:#030f4f;"></i>
					              </div>
 					             </div>
					             <div class="col-md-8">
					             	<p class="mt-0 font-weight-300">Wow! I have earned Rs.3775 from WorldBrighterChampions. Thanks for this wonderful platform. i am recommended this platform for my friend and family members.</p>
					             	<div class="feature-title" style="padding:0px;float: left;margin-left: 10px;">
					              	<h4>Gaurav Kumar</h4>
					              	<p>Ludhiana - Punjab</p>
					              </div>
					             </div>
			                     
			                   
			                  </div>
			                </div>
			              </div>
			              <div class="item">
			                <div class="testimonial pt-10">
			                  <div class="testimonial-content gstesti">
			                    <div class="col-md-2 text-center">
					              <div class="feature-icon">
					                <i class="fa fa-user fa-5x" aria-hidden="true" style="font-size: 100px;color:#030f4f;"></i>
					              </div>
					              
					             </div>
			                     <div class="col-md-8">
			                     	<p class="mt-0 font-weight-300">Hello friends so very happy wonderful paltfrom safe WorldBrighterChampions and Mai is platform Mai kam karke bahut enjoy feel kar Raha hoon so aap bhi joining kijiye our money earnig kijiye thank so for safe income platform</p>
			                     	<div class="feature-title" style="padding:0px;float: left;margin-left: 10px;">
					              	<h5 class="mt-10 font-16 mb-0">Rahul Chaudary</h5>
			                       <h6 class="mt-5">Jalandhar - Punjab</h6>
					              </div>
			                     </div>
			                    
			                    
			                  </div>
			                </div>
			              </div>
			              <div class="item">
			                <div class="testimonial pt-10">
			                  <div class="testimonial-content gstesti">
			                    <div class="col-md-2 text-center">
					              <div class="feature-icon">
					              	<i class="fa fa-user fa-5x" aria-hidden="true" style="font-size: 100px;color:#030f4f;"></i>
					              </div>
					              
					             </div>
					             <div class="col-md-8">
			                       <p class="mt-0 font-weight-300">Wow ... Yesterday. Joining .. I gets ₹2193.75.Thanks to all my support team. Thanks to WorldBrighterChampions.</p>
			                      <div class="feature-title" style="padding:0px;float: left;margin-left: 10px;">
					              	<h5 class="mt-10 font-16 mb-0">Harjeet Singh</h5>
			                        <h6 class="mt-5">Amritsar - Punjab</h6>
					               </div>
					            </div>
		 	                  </div>
			                </div>
			              </div>
		              </div> 
    			</div>
    		</div>
    	</div>
    </section>
   </div>
 
<?php include_once 'footer.php'; ?>