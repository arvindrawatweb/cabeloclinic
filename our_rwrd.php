<?php 
error_reporting(0);
include('admin/config/config.php');
?>
<?php include "include/header.php"?>

    <!-- ======================================= 
        ==Start banner section== 
    =======================================-->
    <section class="banner-section">
        <div class="overlay bg-dark"></div><!--use overlay -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                   <div id="player" style="width: 100%; height: 100%;">
				   <iframe width="100%" height="400" src="https://www.youtube.com/embed/KaozVSsLlps" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
                        <h3 class="color-72 fw-500 pb-10">Our Rewards</h3>
						<!--<h5>Wellness, Weight management And Body Contouring Offers</h5>-->
                       <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et.</p>-->
                    </div>
                </div>
            </div>
            <!--/row-->
		
            <div class="row">
                
                
                <?php 
$slt_ofr_dtl="select * from reward_recogniztion ";
$qst_slt_ofr_dtl=$db->query($slt_ofr_dtl);
while($clct_slt_ofr_dtl=$qst_slt_ofr_dtl->fetch_assoc())
{
$ofr_img=$clct_slt_ofr_dtl['image'];

            
?>
                
                
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="single-service pos-relative">
                        <img src="admin/reward_image/<?php echo $ofr_img?>" alt="" class="img-fluid">
                        <div class="link-hover"><a href="#"><i class="fa fa-link color-ff"></i></a></div>
                      
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
    
    <!-- ======================================= 
            ==End call to action section== 
    =======================================-->

<?php include "include/footer.php" ?>