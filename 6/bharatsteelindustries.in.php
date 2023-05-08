<?php 
    include_once './includes/constants.php';
    require_once './includes/db_include.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
<?php
    include_once './header.php';
?>
                
<!-- Slider
		============================================= -->
		<section id="slider" class="swiper_wrapper full-screen clearfix" data-loop="true" data-autoplay="5000">

			<div class="swiper-container swiper-parent">
				<div class="swiper-wrapper">
					<div class="swiper-slide" style="background-image: url('demos/medical/images/slider/1.jpg');">
						<div class="container clearfix">
							<div class="slider-caption " style="max-width: 700px;">
								<h2 data-caption-animate="flipInX" style="color:#fff;">Bharat Steel Industries<span>.</span></h2>
								<p data-caption-animate="flipInX" data-caption-delay="500" style="color:#fff;">Manufacturer of Hydraulic, Auto, Tractor, Rotavator Spare Parts
								<br>& all agricultural implements.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide" style="background-image: url('demos/medical/images/slider/2.jpg');">
						<div class="container clearfix">
							<div class="slider-caption">
								<h2 data-caption-animate="zoomIn" style="color:#fff;">Bharat Steel Industries.</h2>
								<p data-caption-animate="zoomIn" style="color:#fff;" data-caption-delay="500">Partner in your sucess<br>Lets grow together.</p>
							</div>
						</div>
					</div>
					<div class="swiper-slide" style="background-image: url('demos/medical/images/slider/3.jpg');">
						<div class="container clearfix">
							<div class="slider-caption">
								<h2 data-caption-animate="zoomIn" style="color:#fff;">Ratovator Spares</h2>
								<p data-caption-animate="zoomIn" style="color:#fff;" data-caption-delay="500">Partner in your success<br>Lets grow together.</p>
							</div>
						</div>
					</div>
				</div>

			</div>

		</section><!-- #slider end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col-lg-4">
						<a href="http://bharatsteelindustries.in/products-categories?category_data=24070"><img src="img/farm-equipments.jpg" class="img-responsive"></a>
						<div style="padding:10px; background:#005f21; text-align:center;">
							<h4 style="color:#fff;">Farm Equipments</h4>
							<p></p>
						</div>
					</div>
					<div class="col-lg-4">
						<a href="http://bharatsteelindustries.in/products-categories?category_data=24042"><img src="img/engineering-parts.jpg" class="img-responsive"></a>
						<div style="padding:10px; background:#005f21; text-align:center;">
							<h4 style="color:#fff;">Engineering Parts</h4>
							<p></p>
						</div>
					</div>
<div class="col-lg-4">
						<a href="http://bharatsteelindustries.in/products-categories?category_data=24084"><img src="img/raw-material.jpg" class="img-responsive"></a>
						<div style="padding:10px; background:#005f21; text-align:center;">
							<h4 style="color:#fff;">Raw Materials</h4>
							<p></p>
						</div>
					</div>
					

					

					<div class="clear"></div>

				

				</div>

				<div class="section nopadding common-height dark topmargin-sm">
					<div class="col-md-6" data-height-lg="597" data-height-md="614" data-height-sm="400" data-height-xs="300" data-height-xxs="200" style="background: url('img/tractor.jpg') center center no-repeat; background-size: cover;">
						<div>&nbsp;</div>
					</div>
					<div id="booking-appointment-form" class="col-md-6 nopadding">
						<div class="bgcolor col-padding">
							<h2>Company Profile</h2>
							<p class="text-justify">
							Incepted in the year 1969, our MD Mr.Satish Bansal & now his son Rishab Bansal thriving on more than decades of rich experience & cutting edge technology, we are a one-stop shop catering to the need of globe agriculture & automotive industries. We manufacture and supply a wide assortment of agricultural and automotive parts including rotavator gear , axle set, housing set, yokes, PTO shafts, bevel gear & pinion, side plate gear drive, side plate chain drive, all disc flow spare parts. Being a technology driven organization, we leverage upon our streamlined infrastructure & CAD/ CAM facility, which enables us to develop the innovation components & designs as per the suggestions of our well established R&D wing & customized specifications of clients. Since our inception in the year 1969, we are continuously pursuing the approach of total customer satisfaction.
							</p>

						</div>
					</div>
				</div>

				<div class="container clearfix">
					<div class="heading-block center nomargin">
							<h3>Our product range</h3>
						</div>

						
					<div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="5">

                                            <?php
                                                $sql = "SELECT p.product_name,p.id as pid,p.product_cat_id as cat_id,p.id_text,p.featured_image as image,pb.name as brand_name,pv.id as pvid,pv.sale_price,pv.discount,pv.variation_1_id,pv.variation_2_id "
                                                    . "FROM `products_variations` pv "
                                                    . "INNER join `products` p on pv.product_id=p.id "
                                                    . "INNER join `product_brands` pb on pb.id=p.product_brand_id "
                                                    . "where pv.status=:pv_sts AND p.status=:p_sts group by pv.product_id order by p.id desc limit 8";
                                                $product = query_by_id($sql,["pv_sts"=>1,"p_sts"=>1], $conn);
                                                foreach($product as $row) { 
                                            ?>
						<div class="oc-item text-center">
                                                    <a href="<?=SITE_ROOT?>ajax/quick_view?v_data=<?=encrypt_url($row['pvid'])?>" class="item-quick-view" data-lightbox="ajax"><img src="<?=SITE_ROOT.$row['image']?>" alt="Bharat steels:<?=$row['product_name']?>"></a>
                                                    <h5><?=$row['product_name']?></h5>
						</div>
                                                <?php } ?>

					</div>


				</div>


			</div>

		</section><!-- #content end -->
<?php include_once './footer.php'; ?>
<script>
    function register_existing(mobile_id,email_id){
        var mobile = $(mobile_id).val();
        var email = $(email_id).val();
        if(mobile!='' && email!=''){
            $.ajax({
                url: '<?=SITE_ROOT?>register_existing',
                type: 'POST',
                data: {email: email,mobile:mobile,action:'reg_exc_dis'},
                success: function (data) {
                    var res = JSON.parse(data);
                    if(res['success']=='0'){
                        toastr.warning(res['msg']);
                    }else if(res['success']=='1'){
                        toastr.success('Registered Successfully');
                        window.location = res['url'];
                    }
                }
            });
        }else{
            toastr.warning('Please enter required details');
        }
    }
</script>

</body>
</html>