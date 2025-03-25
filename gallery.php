<?php
error_reporting(0);
include("admin/config/config.php");
?>

<?php include "include/header.php"?>
    <!-- ======================================= 
        ==End Header section==  
    =======================================-->

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
$slt_glry_dtl="select * from gallery_header_image where id='1'";
$qst_slt_glry_dtl=$db->query($slt_glry_dtl);
$clct_slt_glry_dtl=$qst_slt_glry_dtl->fetch_assoc();

$glry_imgg=$clct_slt_glry_dtl['image'];
?>
<img src='admin/gallery_header_image/<?php echo $glry_imgg;?>' style='width:100%;height:400px;'>
	   </div>
                   </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End banner section==  
    =======================================-->


    <!-- ======================================= 
            ==Start beauty lab gallery section==  
    =======================================-->
    <section class="beautyLab-gallery photo-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title mb-60 text-center">
                        <h3 class="color-d5 fw-500 pb-10">our photos and videos gallery</h3>
                      <!--  <p class="color-51">Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore etc</p> --> 
                    </div>
                </div>
            </div>
            <!--/row-->

            <div class="row">
                <div class="col-12">
                    <ul class="filtering-menu">
                        <li data-filter="*" class="is-checked">All</li>
                        <li data-filter=".Kota"> Kota</li>
                        <li data-filter=".Jaipur"> Jaipur</li>
						<li data-filter=".Udaipur"> Udaipur</li>
                        <li data-filter=".Jodhpur"> Jodhpur</li>
						<li data-filter=".Bikaner"> Bikaner</li>
                       </ul>
                </div>
            </div>

            <div class="row gallery-wrapper">
					

				<!--video sections start-->

				<!--gallery-1-->
				

	<?php 
$usrs_lst="select * from our_video_gallery where city='Kota'";
$qst_ussr_lst=$db->query($usrs_lst);

while($clct_ussr_lst=$qst_ussr_lst->fetch_assoc())
{
    $ggllr_img=$clct_ussr_lst['image'];
      $ggllr_vdo=$clct_ussr_lst['vedio_link'];
    
    ?>

                <div class="col-lg-3 col-md-4 mix Kota">
                    <div class="single-gallery">
                        <img src="admin/gallery_video_image/<?php echo $ggllr_img;?>" alt="gallery image" class="img-fluid" />
                        <div class="img-overlay">
                            <a href="<?php echo $ggllr_vdo;?>"  data-vbtype="video" data-autoplay="true" class="venobox vbox-item" data-gall="gallery1"><i class="fa fa-play-circle-o"></i></a>
                        </div>
                    </div>
                </div>
                <!--gallery-7-->
                
<?php 
}
?> 
            
                			<?php 
$usr_lst="select * from our_photo_gallery where city='Kota'";
$qst_usr_lst=$db->query($usr_lst);

while($clct_usr_lst=$qst_usr_lst->fetch_assoc())
{
    $ggllr_img=$clct_usr_lst['image'];
    
    ?>
                
                
                
                <div class="col-lg-3 col-md-4 mix Kota">
                    <div class="single-gallery">
                        <img src="admin/gallery_photo_image/<?php echo $ggllr_img;?>" alt="gallery image" class="img-fluid" />
                        <div class="img-overlay">
                            <a href="admin/gallery_photo_image/<?php echo $ggllr_img;?>" class="venobox vbox-item" data-gall="gallery1"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>

              <?php
}
              ?>

                <!--gallery-15-->
                

                			<?php 
$usr_jprlst="select * from our_photo_gallery where city='Jaipur'";
$qst_usr_jpr_lst=$db->query($usr_jprlst);

while($clct_usr_jpr_lst=$qst_usr_jpr_lst->fetch_assoc())
{
    $ggllr_jpr_img=$clct_usr_jpr_lst['image'];
    
    ?>
                
                <div class="col-lg-3 col-md-4 mix Jaipur">
                    <div class="single-gallery">
                        <img src="admin/gallery_photo_image/<?php echo $ggllr_jpr_img;?>" alt="gallery image" class="img-fluid" />
                        <div class="img-overlay">
                            <a href="admin/gallery_photo_image/<?php echo $ggllr_jpr_img;?>" class="venobox vbox-item" data-gall="gallery1"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
<?php 
}
?>



	<?php 
$usrsjpr_vdo_lst="select * from our_video_gallery where city='Jaipur'";
$qst_ussr_vdo_lst=$db->query($usrsjpr_vdo_lst);

while($clct_ussr_vdo_lst=$qst_ussr_vdo_lst->fetch_assoc())
{
    $ggllr_vdo_img=$clct_ussr_vdo_lst['image'];
      $ggllr_lnk_vdo=$clct_ussr_vdo_lst['vedio_link'];
    
    ?>

           <div class="col-lg-3 col-md-4 mix Jaipur">
                    <div class="single-gallery">
                        <img src="admin/gallery_video_image/<?php echo $ggllr_vdo_img;?>" alt="gallery image" class="img-fluid" />
                        <div class="img-overlay">
                            <a href="<?php echo $ggllr_lnk_vdo;?>"  data-vbtype="video" data-autoplay="true" class="venobox vbox-item" data-gall="gallery1"><i class="fa fa-play-circle-o"></i></a>
                        </div>
                    </div>
                </div>
                <!--gallery-7-->
                
<?php 
}
?> 














                			<?php 
$usr_udprlst="select * from our_photo_gallery where city='Udaipur'";
$qst_usr_udpr_lst=$db->query($usr_udprlst);

while($clct_usr_udpr_lst=$qst_usr_udpr_lst->fetch_assoc())
{
    $ggllr_udpr_img=$clct_usr_udpr_lst['image'];
    
    ?>
                
                <div class="col-lg-3 col-md-4 mix Udaipur">
                    <div class="single-gallery">
                        <img src="admin/gallery_photo_image/<?php echo $ggllr_udpr_img;?>" alt="gallery image" class="img-fluid" />
                        <div class="img-overlay">
                            <a href="admin/gallery_photo_image/<?php echo $ggllr_udpr_img;?>" class="venobox vbox-item" data-gall="gallery1"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
<?php 
}
?>


	<?php 
$usrsudpr_vdo_lst="select * from our_video_gallery where city='Udaipur'";
$qst_udpr_vdo_lst=$db->query($usrsudpr_vdo_lst);

while($clct_yudprr_vdo_lst=$qst_udpr_vdo_lst->fetch_assoc())
{
    $gglludpr_do_img=$clct_yudprr_vdo_lst['image'];
      $ggllr_udpr_lnk_vdo=$clct_yudprr_vdo_lst['vedio_link'];
    
    ?>

           <div class="col-lg-3 col-md-4 mix Udaipur">
                    <div class="single-gallery">
                        <img src="admin/gallery_video_image/<?php echo $gglludpr_do_img;?>" alt="gallery image" class="img-fluid" />
                        <div class="img-overlay">
                            <a href="<?php echo $ggllr_udpr_lnk_vdo;?>"  data-vbtype="video" data-autoplay="true" class="venobox vbox-item" data-gall="gallery1"><i class="fa fa-play-circle-o"></i></a>
                        </div>
                    </div>
                </div>
                <!--gallery-7-->
                
<?php 
}
?> 















                			<?php 
$usr_jdhprlst="select * from our_photo_gallery where city='Jodhpur'";
$qst_usr_jdpr_lst=$db->query($usr_jdhprlst);

while($clct_usr_jdpr_lst=$qst_usr_jdpr_lst->fetch_assoc())
{
    $ggllr_jdpr_img=$clct_usr_jdpr_lst['image'];
    
    ?>
                
                <div class="col-lg-3 col-md-4 mix Jodhpur">
                    <div class="single-gallery">
                        <img src="admin/gallery_photo_image/<?php echo $ggllr_jdpr_img;?>" alt="gallery image" class="img-fluid" />
                        <div class="img-overlay">
                            <a href="admin/gallery_photo_image/<?php echo $ggllr_jdpr_img;?>" class="venobox vbox-item" data-gall="gallery1"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
<?php 
}
?>


	<?php 
$usrsjdpr_vdo_lst="select * from our_video_gallery where city='Jodhpur'";
$qst_jdpr_vdo_lst=$db->query($usrsjdpr_vdo_lst);

while($clct_jdprrr_vdo_lst=$qst_jdpr_vdo_lst->fetch_assoc())
{
    $gglljdpr_do_img=$clct_jdprrr_vdo_lst['image'];
      $ggllr_jdpr_lnk_vdo=$clct_jdprrr_vdo_lst['vedio_link'];
    
    ?>

           <div class="col-lg-3 col-md-4 mix Jodhpur">
                    <div class="single-gallery">
                        <img src="admin/gallery_video_image/<?php echo $gglljdpr_do_img;?>" alt="gallery image" class="img-fluid" />
                        <div class="img-overlay">
                            <a href="<?php echo $ggllr_jdpr_lnk_vdo;?>"  data-vbtype="video" data-autoplay="true" class="venobox vbox-item" data-gall="gallery1"><i class="fa fa-play-circle-o"></i></a>
                        </div>
                    </div>
                </div>
                <!--gallery-7-->
                
<?php 
}
?> 
















                			<?php 
$usr_bknrrlst="select * from our_photo_gallery where city='Bikaner'";
$qst_usr_bknr_lst=$db->query($usr_bknrrlst);

while($clct_usr_bknr_lst=$qst_usr_bknr_lst->fetch_assoc())
{
    $ggllr_bknr_img=$clct_usr_bknr_lst['image'];
    
    ?>
                
                <div class="col-lg-3 col-md-4 mix Bikaner">
                    <div class="single-gallery">
                        <img src="admin/gallery_photo_image/<?php echo $ggllr_bknr_img;?>" alt="gallery image" class="img-fluid" />
                        <div class="img-overlay">
                            <a href="admin/gallery_photo_image/<?php echo $ggllr_bknr_img;?>" class="venobox vbox-item" data-gall="gallery1"><i class="fa fa-picture-o"></i></a>
                        </div>
                    </div>
                </div>
<?php 
}
?>


	<?php 
$usrsbknr_vdo_lst="select * from our_video_gallery where city='Bikaner'";
$qst_bknr_vdo_lst=$db->query($usrsbknr_vdo_lst);

while($clct_bknr_vdo_lst=$qst_bknr_vdo_lst->fetch_assoc())
{
    $ggllbknr_do_img=$clct_bknr_vdo_lst['image'];
      $ggllr_bknr_lnk_vdo=$clct_bknr_vdo_lst['vedio_link'];
    
    ?>

           <div class="col-lg-3 col-md-4 mix Bikaner">
                    <div class="single-gallery">
                        <img src="admin/gallery_video_image/<?php echo $ggllbknr_do_img;?>" alt="gallery image" class="img-fluid" />
                        <div class="img-overlay">
                            <a href="<?php echo $ggllr_bknr_lnk_vdo;?>"  data-vbtype="video" data-autoplay="true" class="venobox vbox-item" data-gall="gallery1"><i class="fa fa-play-circle-o"></i></a>
                        </div>
                    </div>
                </div>
                <!--gallery-7-->
                
<?php 
}
?> 

























			
            </div>
            <!--/row-->
        </div>
    </section>
    <!-- ======================================= 
            ==End beauty lab gellary section== 
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
                        <p>Book a session and get up to <compnay_imagesn class="color-d5">25%</compnay_imagesn> discount!</p>
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