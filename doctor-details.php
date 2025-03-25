<?php

error_reporting(0);

include('admin/config/config.php');?>
<?php include "include/header.php";


$blg_id=$_GET['id'];



?>

 <?php 
            $slt_blg="select * from blog where id='$blg_id'";
            $qst_slt_blg=$db->query($slt_blg);
            
        $clct_slt_blg=$qst_slt_blg->fetch_assoc();
                $blg_img=$clct_slt_blg['image'];
                $blg_ttl=$clct_slt_blg['title'];
                $blg_cncnct=$clct_slt_blg['content'];
              

            ?>
    <!-- ======================================= 
        ==End Header section==  
    =======================================-->


    <!-- ======================================= 
        ==Start banner section== 
    =======================================-->
    <section class="banner-section blog-banner">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content">
                        <h4 class="fw-500 color-ff">Our Doctors</h4>
                        <p class="color-ff">Welcome to Cabelo, where you can relax and enjoy life.</p>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active"><?php echo $blg_ttl;?> details</li>
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
    <section class="blog-section blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="blog-details-wrapper">
                        <img src="admin/blog_image/<?php echo $blg_img;?>" alt="blog-details-img" class="img-fluid" style="width:100%;height:300px;"/>
                        <h5 class="title color-d5"><?php echo $blg_ttl;?></h5>
                    

               <?php echo $blg_cncnct;?>

                    </div>
                    <!--/blog post wrapper-->

                    <!--/comment-form-section-->
                </div>
                <!--/col-->
<div class='col-lg-2'>
  </div>
                <div class="col-lg-5">
                    <aside class="blog-sidebar clearfix">
                       <!-- <div class="search-widget single-widget">
                            <form action="#" method="post">
                                <input type="text" name="search" placeholder="Search here..">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>-->

                        <div class="latest-blog-area single-widget">
                            <h5 class="widget-title fw-500 pos-relative">Other Doctors</h5>

                            <!--latest post-1-->
                     
                     
                      <?php 
            $ssdlt_blg="select * from blog";
            $qst_ssdlt_blg=$db->query($ssdlt_blg);
            
        while($clct_sltsd_blg=$qst_ssdlt_blg->fetch_assoc())
        {
                $blg_isdmg=$clct_sltsd_blg['image'];
                $blg_tsdtl=$clct_sltsd_blg['title'];
                $blg_csdncnct=$clct_sltsd_blg['content'];
              $blbllbl_id=$clct_sltsd_blg['id'];

            ?>
                     
                            <div class="single-latest-post">
                                <a href="blog-details.php?id=<?php echo $blbllbl_id;?>"><img src="admin/blog_image/<?php echo $blg_isdmg;?>" alt="latest-blog" style="height:100px;width:100px;"></a>
                                <ul>
                                    <li>
                                        <h6><a href="blog-details.php?id=<?php echo $blbllbl_id;?>"><?php echo $blg_tsdtl;?></a></h6>
                                    </li>
                                   <!-- <li><a href="#">Beauty & Skin</a></li>-->
                                   <!-- <li>26 Oct 2020</li>-->
                                </ul>
                            </div>
<?php
}
?>
                      
                            <!-- /single latest blog-->
                        </div>
                        <!-- /latest blog area-->

                   
                        <!--/instagram gallery-->
                    </aside>
                </div>
                <!--/col-->
            </div>
            <!--/row-->
        </div>
    </section>
    <!-- ======================================= 
            ==End blog section== 
    =======================================-->


  <?php include "include/footer.php"?>