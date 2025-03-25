<?php 
session_start();
include("admin/config/config.php");
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
				  <?php 
                     
$glr_hdr_dtl="select * from our_services_header_image where id='1'";
$qst_glr_hdr_dtl=$db->query($glr_hdr_dtl);
$clct_glr_hdr_dtl=$qst_glr_hdr_dtl->fetch_assoc();

$glr_hdr_immg=$clct_glr_hdr_dtl['image'];


                     ?>
<img src='admin/our_services_header_image/<?php echo $glr_hdr_immg;?>' style="height:400px; width:100%;">
                  </div>
                   </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End banner section==  
    =======================================-->



    <!-- ======================================= 
        ==Start Treatment Hair_fall section== 
    =======================================-->
    <section class="treatment-info-section">
        <div class="container">
             <?php 
                $slt_rcgntn="select * from reward_and_recogenization";
                $qst_slt_rcgntn=$db->query($slt_rcgntn);
                while($clct_slt_rcgntn=$qst_slt_rcgntn->fetch_assoc())
                {
$wrd_title=$clct_slt_rcgntn['title'];
$wrd_img=$clct_slt_rcgntn['image'];
$wrd_id=$clct_slt_rcgntn['id'];
$wrd_ddtl=$clct_slt_rcgntn['description'];
$wrd_brchr=$clct_slt_rcgntn['broucher'];

                ?>
                <?php 
                if($wrd_id%2==0)
                {
                ?>
            <div class="row mt-4 bg-light">
                <div class="col-xl-6 col-lg-7 order-2">
                    <div class="info-content">
					<a href="services-details.php">
                        <h5 class="section-title color-72 fw-700 pos-relative pb-30"><?php echo $wrd_title;?></h5>
                       </a>
					  <?php 
					  echo $wrd_ddtl;
					  ?>
                        <div class="quick-support-wrapper clearfix">
                          
                                <a data-toggle="modal" class="booking-now btn btn-danger w-25" data-target="#Hair_Fall<?php echo $wrd_id?>" style="cursor:pointer;">Book</a>   
                                
                                
                                 <a href="admin/broucher/<?php echo $wrd_brchr;?>" class="brochure color-d5 fw-700" style='float:right' download><i class="fa fa-file-pdf-o" ></i> Download Brochure</a>
                             
                        </div>
                        <!--/wrapperr-->
                    </div>
                    <!--/content-->
                </div>
                <!--/col-->

                <div class="col-xl-5 offset-xl-1 col-lg-5 order-1 order-md-12">
                    <div class="treatment-info-img pos-relative">
                      <a href="services-details.php">  <img src="admin/service_image/<?php echo $wrd_img?>" alt="spa-treatments" class="img-fluid"></a>
                    </div>
                </div>
            </div>
            
            
            
            
     <!--------modal start-------->       
            
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
            <!-------modal end-------->
            
            
            
<?php 
}
else
{
    ?>
  <div class="row mt-4">
                <div class="col-xl-6 col-lg-7 order-2">
                    <div class="info-content">
					<a href="services-details.php">
                        <h5 class="section-title color-72 fw-700 pos-relative pb-30"><?php echo $wrd_title;?></h5>
                       </a>
					  <?php 
					  echo $wrd_ddtl;
					  ?>
                        <div class="quick-support-wrapper clearfix">
                          
                                 <a data-toggle="modal" class="booking-now btn btn-danger w-25" data-target="#Hair_Fall<?php echo $wrd_id?>" style="cursor:pointer;">Book</a>   
                                 
                                 
                                  <a href="admin/broucher/<?php echo $wrd_brchr;?>" class="brochure color-d5 fw-700" style='float:right' download ><i class="fa fa-file-pdf-o" ></i> Download Brochure</a>
                        </div>
                        <!--/wrapperr-->
                    </div>
                    <!--/content-->
                </div>
                <!--/col-->

                <div class="col-xl-5 offset-xl-1 col-lg-5 order-1 order-md-12">
                    <div class="treatment-info-img pos-relative">
                      <a href="services-details.php">  <img src="images/services/Hair_fall.jpg" alt="spa-treatments" class="img-fluid"></a>
                    </div>
                </div>
            </div>
            
            
            
            
            
            
            
            
            
            
                <!--------modal start-------->       
            
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
            <!-------modal end-------->
            
            
            
            
            
            
            
            
            
            
            
            
    <?php
    
}
                    
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



        </div>
    </section>
    <!-- ======================================= 
        ==End Treatment Hair_fall section== 
    =======================================-->




    <!-- ======================================= 
        ==Start Treatment details section==  
    =======================================-->
 
    <!-- ======================================= 
        ==End Treatment details section==  
    =======================================-->


    <!-- ======================================= 
        ==Start related services section==  
    =======================================-->

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