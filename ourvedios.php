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
                        <h3 class="color-72 fw-500 pb-10">Our Videos</h3>
						<!--<h5>Wellness, Weight management And Body Contouring Offers</h5>-->
                       <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et.</p>-->
                    </div>
                </div>
            </div>
            <!--/row-->
		
            <div class="row">
                
             
                <?php 
                $slt_vdo_dtl="select * from our_video ";
                $qst_slt_vdo_dtl=$db->query($slt_vdo_dtl);
                while($clct_slt_vdo_dtl=$qst_slt_vdo_dtl->fetch_assoc())
                {
                
                $vdo_lnk=$clct_slt_vdo_dtl['video_link'];
                $vdo_img=$clct_slt_vdo_dtl['image'];
                     $vdo_ttel=$clct_slt_vdo_dtl['title'];
                ?>
                
                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="blog-img pos-relative">
                            <div class="img-area">
                               
                              <a href="<?php echo $vdo_lnk;?>" data-vbtype="video" data-autoplay="true" class="venobox vbox-item">
<img src="admin/video_image/<?php echo $vdo_img;?>" alt="images/offers/1.jpg" class="img-fluid">
                              </a>
                            </div>
                         
                        </div>
                        <div class="blog-content">
                            <a href="#" class="title fw-500 pt-20"><?php echo $vdo_ttel?></a>
                         <!--   <a href="#" class="readmore" title="Read More for Details" target="-blank">Read More <i class="fa fa-angle-right"></i></a>-->
                        </div>
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