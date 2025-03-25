<?php 
error_reporting(0);
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
$slt_glry_dtl="select * from job_header_image where id='1'";
$qst_slt_glry_dtl=$db->query($slt_glry_dtl);
$clct_slt_glry_dtl=$qst_slt_glry_dtl->fetch_assoc();

$glry_imgg=$clct_slt_glry_dtl['image'];
?>
<img src='admin/job_header_image/<?php echo $glry_imgg;?>' style='width:100%;height:400px;'>
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
          
				
                <div class="col-xl-12 col-lg-12">
                    <div class="info-content">
				  <!-- details-->
					<h5 class="section-title color-72 fw-700 pos-relative pb-30 mt-2">Join Our Team</h5>
				<?php 



    $usr_lst="select * from job_top_content where id='1'";
    $qst_usr_lst=$db->query($usr_lst);

$clct_usr_lst=$qst_usr_lst->fetch_assoc();
echo $abt_cnct=$clct_usr_lst['content'];
     
     ?>
					</div>
                    <!--/content-->
                </div>
                <!--/col-->
			</div>
    </section>
    <!-- ======================================= 
        ==End Treatment Hair_fall section== 
    =======================================-->


 <!-- ======================================= 
        ==Start Initial Investment services section==  
    =======================================-->
    <section class="related-service-section  career pb-0">
        <div class="container">
           
            <div class="row">
			<!-- cabeloclinic center-->
			 <div class="col-md-7 first-table-sec">
			 <h5 class="career-table">CURRENT OPENINGS</h5>
		
		<!-- accordion start-->
	<div id="accordion">
<?php 
$usr_lst="select * from current_opening";
$qst_usr_lst=$db->query($usr_lst);
$sno=1;
while($clct_usr_lst=$qst_usr_lst->fetch_assoc())
{
$jb_cnct=$clct_usr_lst['content'];

$prd_id=$clct_usr_lst['id'];
$rest_ttl=$clct_usr_lst['title'];

?>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed text-dark font-weight-bold" data-toggle="collapse" data-target="#collapseThree<?php echo $prd_id?>" aria-expanded="false" aria-controls="collapseThree<?php echo $prd_id?>">
          <?php echo $rest_ttl;?>
        </button>
      </h5>
    </div>
    <div id="collapseThree<?php echo $prd_id?>" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
       <?php echo $jb_cnct;?>
      </div>
    </div>
  </div>
  
<?php 
}
?>
</div>

<!-- accordion close-->
	</div>
				
				
			<!-- cabeloclinic center-->
			 <div class="col-md-5 first-table-sec">
			 <h5 class="career-table">CAREER FORM</h5>
			    <!-- form card cc payment -->
            <div class="card card-outline-secondary" style="background:#d0e1cf;">
              <div class="card-body">
               <!-- <h5 class="text-center text-white">I'd like to book an</h5>-->
				<h5 class="text-center text-dark font-weight-bold">Please fill in your details. You will be contacted soon.</h5>
                <hr>
               
    <form autocomplete="off" class="form" role="form" action='' method="POST" enctype='multipart/form-data'>
                  <div class="form-group my-0 py-0">
                   <input class="form-control" name="name"  required="required" placeholder="Enter Your Name* " title="Enter Your Name" type="text">
                  </div>
				  
				
                  
				  <div class=" row">
					<div class="col-md-6 my-0">
                    <div class="form-group   my-1">
                    <input autocomplete="off" class="form-control" maxlength="10" required="" title="Enter  Number"  placeholder="Enter  Number" type="number" name="nmbr">
					</div>
                  </div>
					
					<div class="col-md-6 my-0">
                     <div class="form-group my-1">
                    <input autocomplete="off" class="form-control"  required="" title="Enter  Email" placeholder="Enter  Email" type="Email" name='emnl'>
					</div>
                    </div>
				  </div>
				  
				  <div class=" row">
					<div class="col-md-6 my-0">
                    <div class="form-group   my-1">
                    <input autocomplete="off" class="form-control" required="" title="Location"  placeholder="Location" type="text" name="lctn">
					</div>
                  </div>
					
					<div class="col-md-6 my-0">
                     <div class="form-group my-1">
                    <input autocomplete="off" class="form-control"  required="" title="Preferred Locatior" placeholder="Preferred Locatior" type="text" name="prfd_lctn">
					</div>
                    </div>
				  </div>
				  
				   <div class=" row">
					<div class="col-md-6 my-0">
                    <div class="form-group   my-1">
                    <input autocomplete="off" class="form-control" required="" title="Location"  name="ttl_expr" placeholder="Total Exp" type="text">
					</div>
                  </div>
					
					<div class="col-md-6 my-0">
                     <div class="form-group my-1">
                    <input autocomplete="off" class="form-control"  required="" title="Preferred Locatior" placeholder="Relevant Work Exp" type="text" name="rlvnt_word">
					</div>
                    </div>
				  </div>
				  
				   <div class=" row">
					<div class="col-md-6 my-0">
                    <div class="form-group   my-1">
                    <input autocomplete="off" class="form-control" required="" title="Location"  name="jb_ctgy" placeholder="Job Category" type="text">
					</div>
                  </div>
					
					<div class="col-md-6 my-0">
                     <div class="form-group my-1">
                    <input autocomplete="off" class="form-control"  required="" title="Position" placeholder="Position" type="text" name="pstn">
					</div>
                    </div>
				  </div>
				  
				  <div class="row">
                        <div class="col-md-3">
                            <div class="form-group font-weight-bold">
                                <label>Attach CV</label>
                            </div>
                        </div> 
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="file" name="cvcccv" id="CR1_resume" class="p-0" placeholder="Attach CV" required="">

                            </div>
                        </div> 
                        <div class="col-md-12">
                         <p class="font-weight-bold"> You can upload files with these file extensions only (.docx,pdf )</p>
                     </div>
                    </div>
					
				  
				  <div class="row">
				 <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control textarea-s" name="overview" id="CR1_covernote" placeholder="Cover note" rows="5"></textarea>
                            </div>
                        </div>
						</div>
				  
				  <button type="submit" name="aply_jb" class="btn btn-light"> Submit</button>
				  
                 </form>
<?php 
if(isset($_POST['aply_jb']))
{
$nem=$_POST['name'];
$nbr=$_POST['nmbr'];
$eml=$_POST['emnl'];
$lcttn=$_POST['lctn'];
$prf_lcn=$_POST['prfd_lctn'];
$ttl_exrp=$_POST['ttl_expr'];
$rlvt_work=$_POST['rlvnt_word'];
$jeb_ctgyy=$_POST['jb_ctgy'];
$psttn=$_POST['pstn'];
$ovr_vww=$_POST['overview'];

$filename6 = $_FILES["cvcccv"]["name"];
$tempname6 = $_FILES["cvcccv"]["tmp_name"];    
$folder6= "admin/user_cv/".$filename6;
move_uploaded_file($tempname6, $folder6);


$ad_rsme="insert into career set 
name='$nem',
mobile='$nbr',
email='$eml',
location='$lcttn',
preffered_location='$prf_lcn',
total_experience='$ttl_exrp',
relivant_work_experience='$rlvt_work',
job_category='$jeb_ctgyy',
position='$psttn',
cv='$filename6',
cover_note='$ovr_vww'";

$qst_ad_rsme=$db->query($ad_rsme);
if($qst_ad_rsme)
{
    echo "<script>window.alert('job Applied Successfully we will Contact you soon');window.location='';</script>";
}


}

?>
                 
                 
                 
              </div>
            </div>
			<!-- /form card cc payment -->
				 </div>

                
                <!--/col-->
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End Initial Investmentservices section==  
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
    <section class="cta-section mt-5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <p>Book a session and get up to <span class="color-d5">25%</span> discount!</p>
                        <a href="offers.php" style="background:#fff">Book A Session Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
            ==End call to action section== 
    =======================================-->

<?php include "include/footer.php" ?>