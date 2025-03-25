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
				    <?php 
$slt_glry_dtl="select * from frenchise_header_image where id='1'";
$qst_slt_glry_dtl=$db->query($slt_glry_dtl);
$clct_slt_glry_dtl=$qst_slt_glry_dtl->fetch_assoc();

$glry_imgg=$clct_slt_glry_dtl['image'];
?>
<img src='admin/frenchise_header_image/<?php echo $glry_imgg;?>' style='width:100%;height:400px;'>				   </div>
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
            <div class="card card-outline-secondary" style="background:#B7E8F1;">
              <div class="card-body">
               <!-- <h5 class="text-center text-white">I'd like to book an</h5>-->
				<h4 class="text-center text-dark font-weight-bold">ENQUIRE NOW</h4>
                <hr>
               
                <form action='' method='POST'>
                  <div class="form-group my-0 py-0">
                   <input class="form-control" name="name" required="required" placeholder="Enter Your Name* " title="Enter Your Name" type="text">
                  </div>
				  
				  <div class="d-flex">
				<label class="radio-inline text-dark" style="padding-left:0px;"><span style="font-size:20px;"> Gender: </span></label>
				
				<label class="radio-inline d-flex align-items-center text-dark" style="width: 83px;"><input type="radio" name="gender" id="inlineRadio1" value="Male" class="m-0 " checked> Male </label>
				<label class="radio-inline d-flex align-items-center text-dark" style="width: 83px;"><input type="radio" name="gender" id="inlineRadio1" value="Male" class="m-0 "> Female </label>
				</div>
                  
				  <div class=" row">
					<div class="col-md-6 my-0">
                    <div class="form-group  my-1">
                    <input class="form-control" maxlength="10" required="" title="Enter  Number"  placeholder="Enter  Number" type="number" name='number'>
					</div>
                  </div>
					
					<div class="col-md-6 my-0">
                     <div class="form-group my-1">
                    <input autocomplete="off" class="form-control"  required="" title="Enter  Email" name="emnl" placeholder="Enter  Email" type="Email">
					</div>
                    </div>
				  </div>
				  
				   <div class="form-group ">
                    <select class="form-control w-100 my-2" name="ctgy" size="0">
                       <option selected="">Select Category</option>
                       <option value="facial">Facials</option>
                       <option value="nailCare">Nail Care</option>
                       <option value="eyeCare">Eye Care</option>
                       <option value="waxing">Waxing</option>
                       <option value="makeup">Make-Up</option>
					   </select>
				  </div>
				  
				  <div class="form-group">
                    <select class="form-control w-100 my-2" name="srvcc" >
                     <option value="" disable="" selected="">Select Services</option>
					   <option value="Hair Fall">Hair Fall</option>
					   <option value="Hair Transplant">Hair Transplant</option>
					   <option value="Laser Hair Reduction">Laser Hair Reduction</option>
					   <option value="Skin Lightning">Skin Lightning</option>
					   <option value="Medical Facial / HydraFacial">Medical Facial / HydraFacial</option>
					   <option value="Anti Ageing">Anti Ageing</option>
					   <option value="Pigmentation Treatment">Pigmentation Treatment</option>
					   <option value="Acne Treatment">Acne Treatment</option>
					   <option value="Scar Revision">Scar Revision</option>
					   <option value="Stretch Marks">Stretch Marks</option>
					   <option value="Tattoo Removal">Tattoo Removal</option>
					   
					</select>
				  </div>
				  
				  <div class="form-group">
                    <select class="form-control w-100 my-2" name="cty" size="0">
                      <option value="" disable="" selected="">Select City</option>
					   <option value="Kota">Kota</option>
					   <option value="Jaipur">Jaipur</option>
					   <option value="Udaipur">Udaipur</option>
					   <option value="Jodhpur">Jodhpur</option>
					   <option value="Bikaner">Bikaner</option>
					</select>
				  </div>
				  
				  <button type="submit" class="btn btn-light" name='frch_sbmt'> Submit</button>
				  
                 </form>
                 <?php 
                 if(isset($_POST['frch_sbmt']))
                 {
                     $nemm=$_POST['name'];
                     $gndder=$_POST['gender'];
                     $mbl_nbber=$_POST['number'];
                     $eeml=$_POST['emnl'];
                     $cty=$_POST['ctgy'];
                     $srvvc=$_POST['srvcc'];
                     $cctyy=$_POST['cty'];
                  
                       

$ad_frsc_enq="insert into frenchise_enquiry set
name='$nemm',
gender='$gndder',
number='$mbl_nbber',
email='$eeml',
category='$cty',
service='$srvvc',
city='$cctyy'";


$qst_ad_frsc_enq=$db->query($ad_frsc_enq);

if($qst_ad_frsc_enq)
{
    echo "<script>window.alert('Enquiry Send Successfully');window.location='';</script>";
    
}
                     
                     
                 }
                 ?>
                 
                 
                 
              </div>
            </div>
			<!-- /form card cc payment -->
                </div>
				
                <div class="col-xl-8 col-lg-12">
                    
                    <?php 
                    
                    $slt_frnchsz="select * from frenchise where id='1'";
                    $qst_slt_frnchsz=$db->query($slt_frnchsz);
                    $clct_slt_frnchsz=$qst_slt_frnchsz->fetch_assoc();
                    
                    $frch_cnct=$clct_slt_frnchsz['content'];
                    ?>
                    
                    
                    <div class="info-content">
                        <?php 
                        
                        echo $frch_cnct;
                        ?>
                        
                        
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
        ==Start Initial Investment services section==  
    =======================================-->
  <!--  <section class="related-service-section ">
        <div class="container">
            <h5 class="section-title color-72 fw-700 pos-relative pb-30">A Ready Recknor to Franchise Fee, Initial Investment and Royalty Payments</h5>
            <div class="row">

			 <div class="col-md-6 first-table-sec">
			 <h5 class="heading-table">Cabeloclinic slimming and wellness centre</h5>
			 <div class="body-block">
                   <div class="row py-1">
				   <div class="col-md-6">
					<p>Area Required</p>
				   </div>
				    <div class="col-md-6">
				   <p>1800-2200 Sq. Ft. (Carpet Area)</p>
				   </div>
				   </div>
				   
				     <div class="row py-1">
				   <div class="col-md-6">
					<p>Franchise Fee</p>
				   </div>
				    <div class="col-md-6">
				   <p>INR 15,00,000 Onwards</p>
				   </div>
				   </div>
				   
				   <div class="row py-1">
				   <div class="col-md-6">
					<p>Equipment</p>
				   </div>
				    <div class="col-md-6">
				   <p>INR 18,00,000 – 20,00,000</p>
				   </div>
				   </div>
				   
				     <div class="row py-1">
				   <div class="col-md-6">
					<p>Interiors & Fixtures</p>
				   </div>
				    <div class="col-md-6">
				   <p>INR 29,00,000 – 32,00,000</p>
				   </div>
				   </div>
				   
				   </div>
                </div>
				
				
	
			 <div class="col-md-6 first-table-sec">
			 <h5 class="heading-table">Cabeloclinic Slimming</h5>
			 <div class="body-block">
                   <div class="row py-1">
				   <div class="col-md-6">
					<p>Area Required</p>
				   </div>
				    <div class="col-md-6">
				   <p>1100 - 1250 Sq. Ft. (Carpet Area)</p>
				   </div>
				   </div>
				   
				     <div class="row py-1">
				   <div class="col-md-6">
					<p>Franchise Fee</p>
				   </div>
				    <div class="col-md-6">
				   <p>INR 8,00,000 Onwards</p>
				   </div>
				   </div>
				   
				    <div class="row py-1">
				   <div class="col-md-6">
					<p>Equipment</p>
				   </div>
				    <div class="col-md-6">
				   <p>INR 10,00,000 - 11,00,000</p>
				   </div>
				   </div>
				   
				     <div class="row py-1">
				   <div class="col-md-6">
					<p>Interiors & Fixtures</p>
				   </div>
				    <div class="col-md-6">
				   <p>INR 16,00,000 - 18,00,000</p>
				   </div>
				   </div>
				   
				   </div>
				 </div>


            </div>
        </div>
    </section>-->
    <!-- ======================================= 
        ==End Initial Investmentservices section==  
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