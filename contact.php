<?php 
error_reporting(0);
include('admin/config/config.php');


$slt_jpr_adrs="select * from contact_us where id='2'";
$qst_slt_jpr_adrs=$db->query($slt_jpr_adrs);

$clct_slt_jpr_adrs=$qst_slt_jpr_adrs->fetch_assoc();

$jpr_phne=$clct_slt_jpr_adrs['phone'];
$jpr_emnl=$clct_slt_jpr_adrs['email'];
$jpr_adrs=$clct_slt_jpr_adrs['address'];









$slt_kta_adrs="select * from contact_us where id='1'";
$qst_slt_kta_adrs=$db->query($slt_kta_adrs);

$clct_slt_kta_adrs=$qst_slt_kta_adrs->fetch_assoc();

$kta_phne=$clct_slt_kta_adrs['phone'];
$kta_emnl=$clct_slt_kta_adrs['email'];
$kta_adrs=$clct_slt_kta_adrs['address'];







$slt_ud_adrs="select * from contact_us where id='3'";
$qst_slt_ud_adrs=$db->query($slt_ud_adrs);

$clct_slt_ud_adrs=$qst_slt_ud_adrs->fetch_assoc();

$ud_phne=$clct_slt_ud_adrs['phone'];
$ud_emnl=$clct_slt_ud_adrs['email'];
$ud_adrs=$clct_slt_ud_adrs['address'];







$slt_bk_adrs="select * from contact_us where id='4'";
$qst_slt_bk_adrs=$db->query($slt_bk_adrs);

$clct_slt_bk_adrs=$qst_slt_bk_adrs->fetch_assoc();

$bk_phne=$clct_slt_bk_adrs['phone'];
$bk_emnl=$clct_slt_bk_adrs['email'];
$bk_adrs=$clct_slt_bk_adrs['address'];





?>
<?php include "include/header.php"?>
    <!-- ======================================= 
        ==End Header section==  
    =======================================-->


    <!-- ======================================= 
        ==Start banner section== 
    =======================================-->
    <section class="banner-section contact-banner" style="background:url(images/7.jpg) no-repeat fixed center center / cover !important;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content">
                        <h4 class="fw-500 color-ff">Contact Us</h4>
                        <p class="color-ff">Welcome to Cabelo , where you can relax and enjoy life.</p>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
	
    <!-- ======================================= 
        ==End banner section==  
    =======================================-->




    <!-- ======================================= 
        ==Start Contact-info section== 
    =======================================-->
	
    <section class="contact-info-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="color-72 fw-500 pb-10">Our Locations</h3>
                    <p>Cabelo In Today World Looks Matter You Most We Founded Cabelo In Simple Ideology Of Redefining Your Looks </p>   
					</div>
                </div>
            </div>
            <!--/row-->
			
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-number">
                           <h5 class="title color-d5 mb-30 pos-relative fw-500">Kota Office Address </h5>
                        <address>
                            <p class="address"><i class="fa fa-home "></i><span>Address: </span> <?php echo $kta_adrs;?></p>
                            <p class="phone"><i class="fa fa-phone"></i><span>Phone:</span> <?php echo $kta_phne;?></p>
                            <p class="email"><i class="fa fa-envelope"></i><span>Email:</span> <a href="mailto:cabelokota@gmail.com"><span><?php echo $kta_emnl;?></span></a></p>
                            <!--<p class="web"><i class="fa fa-globe"></i><span>web:</span> <a href="#">www.Beautylab.com</a></p>-->
                        </address>
                    </div>
                </div>

                <div class="col-lg-7">
                      <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3611.3315879557963!2d75.82809086432643!3d25.15827918945363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f85e6e89e36c3%3A0xbb11981cc72459f7!2sCabelo%20Skin%20%26%20Hair%20Transplant%20Clinic!5e0!3m2!1sen!2sin!4v1644064417595!5m2!1sen!2sin" width="630" height="310" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
			
			<div class="row">
					<div class="col-lg-6">
                    <div class="contact-number  mt-2">
                        <h5 class="title color-d5 mb-30 pos-relative fw-500">Jaipur Office Address</h5>
                        <address>
                            <p class="address"><i class="fa fa-home "></i><span>Address:</span> Jaipur : <?php echo $jpr_adrs;?></p>
                            <p class="phone"><i class="fa fa-phone"></i><span>Phone:</span> <?php echo $jpr_phne;?></p>
                            <p class="email"><i class="fa fa-envelope"></i><span>Email:</span> <a href="mailto:<?php echo $jpr_emnl;?>"><span><?php echo $jpr_emnl;?></span></a></p>
                           <!--<p class="web"><i class="fa fa-globe"></i><span>web:</span> <a href="#">www.Beautylab.com</a></p>-->
                        </address>
                    </div>
					</div>

				 <div class="col-lg-6">
                    <div class="contact-number mt-2">
                        <h5 class="title color-d5 mb-30 pos-relative fw-500">Udaipur Office Address</h5>
                        <address>
                            <p class="address"><i class="fa fa-home"></i><span>Address:</span> Udaipur: <?php echo $ud_adrs;?></p>
                            <p class="phone"><i class="fa fa-phone"></i><span>Phone:</span> <?php echo $ud_phne;?></p>
                            <p class="email"><i class="fa fa-envelope"></i><span>Email:</span> <a href="mailto:<?php echo $ud_emnl;?>"><span><?php echo $ud_emnl;?></span></a></p>
                            <!--<p class="web"><i class="fa fa-globe"></i><span>web:</span> <a href="#">www.Beautylab.com</a></p>-->
                        </address>
                    </div>
                </div>
                
                
                
                	 <div class="col-lg-6">
                    <div class="contact-number mt-2">
                        <h5 class="title color-d5 mb-30 pos-relative fw-500">Bikaner Office Address</h5>
                        <address>
                            <p class="address"><i class="fa fa-home"></i><span>Address:</span> <?php echo $bk_adrs;?></p>
                            <p class="phone"><i class="fa fa-phone"></i><span>Phone:</span> <?php echo $bk_phne;?></p>
                            <p class="email"><i class="fa fa-envelope"></i><span>Email:</span> <a href="mailto:<?php echo $bk_emnl;?>"><span><?php echo $bk_emnl;?></span></a></p>
                            <!--<p class="web"><i class="fa fa-globe"></i><span>web:</span> <a href="#">www.Beautylab.com</a></p>-->
                        </address>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End Contact-info section==  
    =======================================-->


    <!-- ======================================= 
        ==Start get in touch section==  
    =======================================-->
    <section class="getin-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="get-in">
                        <h5 class="title color-d5 mb-30 pos-relative fw-500">Get In Touch</h5>

                        <!-- new start -->
<form action="" method="post" class="clearfix">
<div class="form-group">
<input type="text" name="name" value="" placeholder="Your Name">
<input type="email" name="email" value="" placeholder="Your Email" required>
<input type="text" name="subject" value="" placeholder="Subject" required>
</div>
<textarea name="message" rows="4" placeholder="Your Message"></textarea>
<button type="submit" class="send-msg" name="cnct_sbbt">send message</button>
</form>




<?php 
if(isset($_POST['cnct_sbbt']))
{
    $nnem=$_POST['name'];
     $eemnl=$_POST['email'];
      $sbjtt=$_POST['subject'];
       $nnem=$_POST['message'];
       
    
    $ad_cntnnn="insert into contact set
    
    name='$nnem',
    email='$eemnl',
    subject='$sbjtt',
    message='$nnem'";
    
    $qst_ad_cntnnn=$db->query($ad_cntnnn);
    
    
    
    if($qst_ad_cntnnn)
{
    
    echo "<script>window.alert('Thank You We will contact you Soon...');window.location='';</script>";
}
    
}

?>



                        <!-- new end -->
                    </div>
                </div>

              <!--  <div class="col-lg-4 col-md-6">
                    <div class="consultant-wrapper">
                        <h5 class="title color-d5 mb-30 pos-relative fw-500">Our Experts Consultant</h5>
                        <div class="single-consultant">
                            <img src="images/consultant1.jpg" alt="consultant">
                            <div class="content">
                                <a href="#" class="fw-500 roboto color-72">Nicky Cruse</a>
                                <p>Email: <a href="https://beautylab.themecon.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b8d6d1dbd3c1f8daddd9cdccc1d4d9da96dbd7d5">[email&#160;protected]</a></p>
                                <p>Skype: beautylab.support</p>
                            </div>
                        </div>

                        <div class="single-consultant">
                            <img src="images/consultant2.jpg" alt="consultant">
                            <div class="content">
                                <a href="#" class="fw-500 roboto color-72">Micky Bruse</a>
                                <p>Email: <a href="https://beautylab.themecon.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="85ebece6eefcc5e7e0e4f0f1fce9e4e7abe6eae8">[email&#160;protected]</a></p>
                                <p>Skype: beautylab.support</p>
                            </div>
                        </div>
                    
                    </div>
                </div>-->
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End get in touch section==  
    =======================================-->


    <!-- ======================================= 
            ==Start call to action section==  
    =======================================-->
    <section class="cta-section booking-cta-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <p>Book a session and get up to <span class="color-d5">25%</span> discount!</p>
                        <a href="#" style="background:#fff">Book A Session Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
            ==End call to action section== 
    =======================================-->


    <!-- ======================================= 
            ==Start footer widget section==  
    =======================================-->
  
<?php include "include/footer.php"?>