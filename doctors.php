<?php 
error_reporting(0);
include('admin/config/config.php');

?>
<?php include('include/header.php');?>

    <!-- ======================================= 
        ==Start banner section== 
    =======================================-->
    <section class="banner-section blog-banner ">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content">
                        <h4 class="fw-500 color-ff">our Doctors</h4>
                        <p class="color-ff">Welcome to beauty lab, where you can relax and enjoy life.</p>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">Doctors</li>
                    </ol>
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
    <section class="blog-section blog-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row">

                        <!--blog 1-->
                        
                        
                         <?php 
            $slt_blg="select * from blog";
            $qst_slt_blg=$db->query($slt_blg);
            
            while($clct_slt_blg=$qst_slt_blg->fetch_assoc())
            {
                $blg_img=$clct_slt_blg['image'];
                $blg_ttl=$clct_slt_blg['title'];
                $blg_cncnct=$clct_slt_blg['content'];
                $blg_id=$clct_slt_blg['id'];
                 $stringCut = substr($blg_cncnct, 0, 100);
            ?>
                        
                        
                        <div class="col-md-4">
                            <div class="single-blog">
                                <div class="blog-img pos-relative">
                                    <div class="img-area">
                                        <a href="doctor-details.php?id=<?php echo $blg_id;?>"><img src="admin/blog_image/<?php echo $blg_img;?>" alt="blog img" class="img-fluid"></a>
                                    </div>
                                   <!-- <ul class="brand">
                                        <li><i class="fa fa-heart"></i>18</li>
                                        <li><i class="fa fa-commenting-o"></i>10</li>
                                        <li><i class="fa fa-folder-open"></i>Decoration</li>
                                        <li class="gallery"><i class="fa fa-picture-o"></i></li>
                                    </ul>-->
                                   <!-- <div class="date">
                                        <h5 class="fw-700 color-ff">25</h5>
                                        <span class="fw-500 roboto color-ff text-uppercase">oct</span>
                                    </div>-->
                                </div>
                                <div class="blog-content">
                                    <a href="doctor-details.php?id=<?php echo $blg_id;?>" class="title fw-500 pt-20"><?php echo $blg_ttl;?></a>
                                    <?php echo $stringCut;?><br>
                                    <a href="doctor-details.php?id=<?php echo $blg_id;?>" class="readmore" title="Read More for Details" target="-blank">Read More <i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>

         <?php
            }
         ?>
                        <!--/col-->
                    </div>
                    <!--/row-->
           
                    <!--/row-->
                </div>
                <!--/col-->
            </div>
            <!--/row-->
        </div>
    </section>
<?php include("include/footer.php") ?>
  