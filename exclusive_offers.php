<?php
//
error_reporting(0);
include('admin/config/config.php');
include "include/header.php";

?>

<?php 

$ofr_id=$_GET['id'];



?>

<?php 
$slt_ofr_dtl="select * from offer_this_month where id='$ofr_id'";
$qst_slt_ofr_dtl=$db->query($slt_ofr_dtl);

$clct_slt_ofr_dtl=$qst_slt_ofr_dtl->fetch_assoc();
$ofr_img=$clct_slt_ofr_dtl['image'];
$ofr_ttl=$clct_slt_ofr_dtl['title'];
$ofr_id=$clct_slt_ofr_dtl['id'];
$ofr_dscptn=$clct_slt_ofr_dtl['description'];
            
?>




    <!-- ======================================= 
        ==Start banner section== 
    =======================================-->
    <section class="banner-section service-banner">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content">
                        <h4 class="fw-500 color-ff">Exclusive Offers of the Month</h4>
                    <!--    <p class="color-ff">Welcome to Cabelo  , where you can relax and enjoy life.</p>-->
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="#">Exclusive Offers</a></li>
                        <li class="active"><?php echo $ofr_ttl;?></li>
                    </ol>
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
    <section class="treatment-info-section pb-0">
        <div class="container">
            <div class="row mt-4">
			
			  <div class="col-xl-4 col-lg-12">
                     <!-- form card cc payment -->
            <div class="card card-outline-secondary" style="background:#e36714;">
              <div class="card-body">
                <h5 class="text-center text-white">I'd like to book an</h5>
				<h4 class="text-center text-white font-weight-bold">APPOINTMENT</h4>
                <hr>
               
                <form autocomplete="off" class="form" action='' method='POST'>
                  <div class="form-group my-0 py-0">
                   <input class="form-control" id="cc_name" name='nemme' required="required" placeholder="Enter Your Name* " title="Enter Your Name" type="text">
                  </div>
				  
				  <div class="d-flex">
				<label class="radio-inline text-white" style="padding-left:0px;"><span style="font-size:20px;"> Gender: </span></label>
				
				<label class="radio-inline d-flex align-items-center text-white" style="width: 83px;"><input type="radio" name="gender" id="inlineRadio1" value="Male" class="m-0 " checked> Male </label>
				<label class="radio-inline d-flex align-items-center text-white" style="width: 83px;"><input type="radio" name="gender" id="inlineRadio1" value="Male" class="m-0 "> Female </label>
				</div>
                  
				  <div class=" row">
					<div class="col-md-6 my-0">
                    <div class="form-group   my-1">
                    <input autocomplete="off" class="form-control" maxlength="10"  required="" name="mbl_nbr" title="Enter  Number"  placeholder="Enter  Number" type="number">
					</div>
                  </div>
					
					<div class="col-md-6 my-0">
                     <div class="form-group my-1">
                    <input autocomplete="off" class="form-control"  required="" title="Enter  Email" name="email" placeholder="Enter  Email" type="Email">
					</div>
                    </div>
				  </div>
				  
				  <!-- <div class="form-group ">
                    <select class="form-control w-100 my-2" name="cc_exp_yr" size="0">
                       <option value="" disable="" selected="">Select Category</option>
					   <option value="Beauty &amp; Grooming">Beauty &amp; Grooming</option>
					   <option value="Dermat - Skin Care">Dermat - Skin Care</option>
					   <option value="Hair Transplant">Hair Transplant</option>
					   </select>
				  </div>-->
				  
				  <div class="form-group">
                    <input type='text' class="form-control w-100 my-2" name="service" value="<?php echo $ofr_ttl;?>" readonly>
                      
				  </div>
				  
				  <div class="form-group">
                    <select class="form-control w-100 my-2" name="ctys" size="0">
                       <option value="" disable="" selected="">Select City</option>
                       <option value="Kota">Kota</option>
                           <option value="Jaipur" >Jaipur</option>
                             <option value="Udaipur" >Udaipur</option>
                               <option value="Jodhpur">Jodhpur</option>
                                 <option value="Bikaner">Bikaner</option>
					</select>
				  </div>
				  
				  
				  <div class="form-group mt-1">
<textarea class="form-control textarea-s" name="message" id="CR1_covernote" placeholder="Would like to enquire about '<?php echo $ofr_ttl;?>'" rows="2"></textarea>
</div>
				  <button type="submit" name="submit_appointment" class="btn btn-light"> Submit</button>
				  
                 </form>
              </div>
            </div>
			<!-- /form card cc payment -->
                </div>
				
				
				
				
				<?php 
				if(isset($_POST['submit_appointment']))
				{
				    $nesm=$_POST['nemme'];
				    $gender=$_POST['gender'];
				    $mb_nbr=$_POST['mbl_nbr'];
				    $emnl=$_POST['email'];
				    $ssrcvc=$_POST['service'];
				    $ctty=$_POST['ctys'];
				    $mmssg=$_POST['message'];
				    
				    
				    $ad_inccq="insert into enquiry set
				    name='$nesm',
				    gender='$gender',
				    mobile='$mb_nbr',
				    email='$emnl',
				    message='$mmssg',
				    city='$ctty',
				    service_name='$ssrcvc'";
				    
				    $qst_ad_inccq=$db->query($ad_inccq);
				    
				    if($qst_ad_inccq)
				    {
				        echo "<script>window.alert('Enquiry Sent Successfully');window.location='';</script>";
				    }
				    else
				    {
				        echo "<script>window.alert('Error');window.location='';</script>";
				    }
				    
				}
				
				?>
				
				
				
				
                <div class="col-xl-8 col-lg-12">
                    <div class="info-content">
				
					  
					   <h5 class="section-title color-72 fw-700 pos-relative pb-30 mt-2">cabeloclinic <?php echo $ofr_ttl;?>:</h5>
                       <?php echo $ofr_dscptn;?>
					   
					 
                        <!--/wrapperr-->
                    </div>
                    <!--/content-->
                </div>
                <!--/col-->
			</div>

        </div>
    </section>
    <!-- ======================================= 
        ==End Treatment Hair_fall section== 
    =======================================-->



    <!-- ======================================= 
        ==Start related services section==  
    =======================================-->
<!--    <section class="related-service-section mt-2">
        <div class="container">
            <h5 class="section-title color-72 fw-700 pos-relative pb-30">Related Services </h5>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-service pos-relative">
                        <img src="images/service-img7.jpg" alt="service img" class="img-fluid">
                        <div class="link-hover"><a href="#"><i class="fa fa-link color-ff"></i></a></div>
                        <h6><a href="#" class="color-d5">Beauty Treatment</a><span class="float-right fw-500">$59</span></h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-service pos-relative">
                        <img src="images/service-img8.jpg" alt="service img" class="img-fluid">
                        <div class="link-hover"><a href="#"><i class="fa fa-link color-ff"></i></a></div>
                        <h6><a href="#" class="color-d5">Spa Process</a><span class="float-right fw-500">$70</span></h6>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="single-service pos-relative">
                        <img src="images/service-img9.jpg" alt="service img" class="img-fluid">
                        <div class="link-hover"><a href="#"><i class="fa fa-link color-ff"></i></a></div>
                        <h6><a href="#" class="color-d5">Manicure & Pedicure</a><span class="float-right fw-500">$40</span></h6>
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
    <section class="cta-section mt-5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <p>Book a session and get up to <span class="color-d5">25%</span> discount!</p>
                        <a href="booking.html">Book A Session Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
            ==End call to action section== 
    =======================================-->

<?php include "include/footer.php" ?>