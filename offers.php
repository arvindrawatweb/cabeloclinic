<?php 
error_reporting(0);
include('admin/config/config.php');
?>
<?php

include "include/header.php";



$slt_ofr_bnr="select * from offer_banner where id='1'";
$qst_slt_ofr_bnr=$db->query($slt_ofr_bnr);
$clct_slt_ofr_bnr=$qst_slt_ofr_bnr->fetch_assoc();
$orfff_img=$clct_slt_ofr_bnr['offer_banner'];


?>

    <!-- ======================================= 
        ==Start banner section== 
    =======================================-->
    <section class="banner-section">
        <div class="overlay bg-dark"></div><!--use overlay -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                   <div id="player" style="width: 100%; height: 100%;">
				   <img src='admin/offer_banner/<?php echo $orfff_img;?>' style="width: 100%;height:300px;">
				   </div>
                   </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End banner section==  
    =======================================-->




    <!-- ======================================= 
            ==Start Blog section==  
    =======================================-->
     <section class="related-service-section mt-2">
	  
        <div class="container">
		  <div class="row pb-30">
                <div class="col-12">
                    <div class="section-title pb-60 text-center">
                        <h3 class="color-72 fw-500 pb-10">Offers Of The Month</h3>
						<!--<h5>Wellness, Weight management And Body Contouring Offers</h5>-->
                       <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et.</p>-->
                    </div>
                </div>
            </div>
            <!--/row-->
		
            <div class="row">
                
                
                <?php 
$slt_ofr_dtl="select * from offer_this_month ";
$qst_slt_ofr_dtl=$db->query($slt_ofr_dtl);
while($clct_slt_ofr_dtl=$qst_slt_ofr_dtl->fetch_assoc())
{
$ofr_img=$clct_slt_ofr_dtl['image'];
$ofr_ttl=$clct_slt_ofr_dtl['title'];
$ofr_id=$clct_slt_ofr_dtl['id'];
            
?>
                
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="single-service pos-relative">
                        <img src="admin/offer_image/<?php echo $ofr_img?>" alt="" class="img-fluid">
                        <div class="link-hover"><a href="#"><i class="fa fa-link color-ff"></i></a></div>
                        <h6><a href="exclusive_offers.php?id=<?php echo $ofr_id;?>" class="color-d5"><?php echo $ofr_ttl;?></a><!--<span class="float-right fw-500">$59</span>--></h6>
                    </div>
                </div>

              <?php 
}
              ?>
				
                <!--/col-->
            </div>
        </div>
    </section>
    <!-- ======================================= 
            ==End blog section== 
    =======================================-->
    
	
	 


    <!-- ======================================= 
        ==Start related services section==  
    =======================================-->
    <!--<section class="related-service-section mt-2">
        <div class="container">
            <h5 class="section-title color-72 fw-700 pos-relative pb-30">Related Services </h5>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-service pos-relative">
                        <img src="images/services/Hair_fall.jpg" alt="Hair_fall.jpg" class="img-fluid">
                        <div class="link-hover"><a href="#"><i class="fa fa-link color-ff"></i></a></div>
                        <h6><a href="#" class="color-d5">Hair Fall Solution</a></h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-service pos-relative">
                        <img src="images/services/hair_transplant.jpg" alt="hair_transplant.jpg" class="img-fluid">
                        <div class="link-hover"><a href="#"><i class="fa fa-link color-ff"></i></a></div>
                        <h6><a href="#" class="color-d5">Hair Transplant</a></h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-service pos-relative">
                        <img src="images/services/Laser_Hair.jpg" alt="Laser_Hair.jpg" class="img-fluid">
                        <div class="link-hover"><a href="#"><i class="fa fa-link color-ff"></i></a></div>
                        <h6><a href="#" class="color-d5">Manicure & Pedicure</a></h6>
                    </div>
                </div>
				
				   <div class="col-lg-3 col-md-6">
                    <div class="single-service pos-relative">
                        <img src="images/services/Skin_Lightning.jpg" alt="Skin_Lightning.jpg" class="img-fluid">
                        <div class="link-hover"><a href="#"><i class="fa fa-link color-ff"></i></a></div>
                        <h6><a href="#" class="color-d5">Skin Lightning</a></h6>
                    </div>
                </div>
         
            </div>
        </div>
    </section>-->
    <!-- ======================================= 
        ==End related services section==  
    =======================================-->


    <!-- ======================================= 
            ==Start call to action section==  
    =======================================-->
    <section class="cta-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <p>Book a session and get up to <span class="color-d5">25%</span> discount!</p>
                        <a href="offers.php">Book A Session Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
            ==End call to action section== 
    =======================================-->

<?php include "include/footer.php" ?>