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
                        <h3 class="color-72 fw-500 pb-10">Our Result</h3>
						<!--<h5>Wellness, Weight management And Body Contouring Offers</h5>-->
                       <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et.</p>-->
                    </div>
                </div>
            </div>
            <!--/row-->
		
            <div class="row">
                
             
               <?php 
$usr_lst="select * from result";
$qst_usr_lst=$db->query($usr_lst);
$sno=1;
while($clct_usr_lst=$qst_usr_lst->fetch_assoc())
{
$bnr_img=$clct_usr_lst['image'];

$prd_id=$clct_usr_lst['id'];
$rest_ttl=$clct_usr_lst['title'];

?>
        
        
                <div class="col-lg-3">
                    <div class="single-blog">
                        <div class="blog-img pos-relative">
                            <div class="img-area">
                            
                                  <img src="admin/result_image/<?php echo $bnr_img;?>" alt="images/result/1.jpg" class="img-fluid">
                             
                            </div>
                         
                        </div>
                        <div class="blog-content">
                            <a href="#" class="title fw-500 pt-20"><?php echo $rest_ttl;?></a>
                             <!--  <a href="#" class="readmore" title="Read More for Details" target="-blank">Read More <i class="fa fa-angle-right"></i></a>-->
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