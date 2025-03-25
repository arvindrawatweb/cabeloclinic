<?php 

@ob_start();

include("admin/config/config.php");

include "include/header2.php"?>
    <!-- ======================================= 
        ==End Header section==  
    =======================================-->


    <!-- ======================================= 
        ==Start banner section== 
    =======================================-->
    <section class="banner-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                   <div class="col-12">
                   <div id="player" style="width: 100%; height: 100%;">
				 	  <?php 
$slt_glry_dtl="select * from our_product_header_image where id='1'";
$qst_slt_glry_dtl=$db->query($slt_glry_dtl);
$clct_slt_glry_dtl=$qst_slt_glry_dtl->fetch_assoc();

$glry_imgg=$clct_slt_glry_dtl['image'];
?>
<img src='admin/our_product_header_image/<?php echo $glry_imgg;?>' style='width:100%;height:400px;'>
				   </div>
                   </div>
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End banner section==  
    =======================================-->


    <!-- ======================================= 
        ==Start Product gallery section== 
    =======================================-->
    <section class="product-gallery with-sidebar">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h3 class="color-72 fw-500">Products</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et.</p>
                    </div>
                </div>
            </div>
            <!--/row-->

            <div class="row">

                <div class="col-lg-12 order-lg-2">
                    <div class="row">
                        <div class="col-12">
                            <div class="filtering-area pb-0">
                                <!--<div class="view-formate">
                                    <ul>
                                        <li class="active" id="grid-view"><i class="fa fa-th"></i></li>
                                        <li id="list-view"><i class="fa fa-th-list"></i></li>
                                    </ul>
                                </div>-->

                                <!--<div class="search-product">
                                    <form action="#" class="form-inline">
                                        <select class="form-control wide" name="beauty-service" required>
                                            <option selected>Category</option>
                                            <option value="facial">Facials</option>
                                            <option value="nailCare">Nail Care</option>
                                            <option value="eyeCare">Eye Care</option>
                                            <option value="waxing">Waxing</option>
                                            <option value="makeup">Make-Up</option>
                                        </select>
                                        <div class="form-group search-wrapper">
                                            <input type="email" class="form-control" placeholder="Search here">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>-->

                              <!--  <div class="favouritCart">
                                    <ul>
                                        <li><i class="fa fa-heart-o"></i></li>
                                        <li class="pos-relative"><i class="fa fa-cart-plus"></i><span>5</span></li>
                                    </ul>
                                </div>-->
                            </div>
                            <!--/filtering wrapper-->
                        </div>
                    </div>
                    <!--/row-->

                    <div class="row">
                        <div class="col-12">
                            <div class="product-gallery-wrapper clearfix" id="product-gallery-v2">
                                <!-- product-1 -->
                                
                                <?php 
                                $slt_ddtl="select * from our_products";
                                $qst_slt_ddtl=$db->query($slt_ddtl);
                                while($clct_slt_ddtl=$qst_slt_ddtl->fetch_assoc())
                                {
                                $prd_nnem=$clct_slt_ddtl['product_name'];
                                 $prd_pprc=$clct_slt_ddtl['product_price'];
                                  $prd_iimg=$clct_slt_ddtl['image'];
                                  $prrd_iddd=$clct_slt_ddtl['id'];
                                ?>
                                
                                
                                <div class="single-product text-center pos-relative">
                                    <div class="product-img pos-relative">
                                        <img src="admin/product_image/<?php echo $prd_iimg;?>" alt="product" class="img-fluid" style="height: 280px;width: 100%;">
                                        <div class="product-hover">
                                            <ul>
                                               <li><!--<a href="#" title="Add to Cart"><i class="fa fa-cart-plus"></i></a>--></li>
                                                <li><a href="admin/product_image/<?php echo $prd_iimg;?>" class="color-ff text-capitalize roboto venobox" data-gall="gallery1" title="<?php echo $prd_nnem;?>">quick View</a></li>
                                                <li><!--<a href="#" title="Add to Favourite"><i class="fa fa-heart-o"></i></a>--></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <a href="product-details.php?id=<?php echo $prrd_iddd;?>" class="readmore fw-500 color-51 roboto" title="Read Details">read more</a>
                                        <h6 class="color-72 fw-500">₹ <?php echo $prd_pprc?></h6>
                                        <!--<p class="short-discription">Lorem ipsum dolor sit amet, duo ut utroque praesent signiferumque, aperiam interesset reformidans pro in, te primis quaerendum eam. Per ad labore oportere repudiare, mei ad officiis referrentur.</p>-->
                                        <div class="product-divider"></div>
                                        <a href="product-details.php?id=<?php echo $prrd_iddd;?>" class="roboto fw-500"><?php echo $prd_nnem;?></a>
                                    </div>
                                </div>
                                <?php 
                                }
                                ?>
                            </div>
                            <!--/wrapper-->
                        </div>
                        <!--/col-->
                    </div>
                    <!--/row-->

                    <!--pagination-->
                   <!-- <div class="row">
                        <div class="col-12">
                            <ul class="pagination pt-20">
                                <li>
                                    <a href="#"><i class="fa fa-angle-left"></i></a>
                                    <a href="#" class="current-item">1</a>
                                    <a href="#">2</a>
                                    <a href="#">3</a>
                                    <a href="#">4</a>
                                    <a href="#">5</a>
                                    <a href="#"><i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>-->
                </div>
                <!--/col-md-9-->

<!--                 <div class="col-lg-3">
                    <aside class="sidebar order-lg-1">
                        <div class="single-block categorie">
                            <h6 class="text-uppercase fw-700 color-ff">Categories</h6>
                            <div class="panel-group" id="accordion">
                                <div class="accordion" id="product-categorie">
                                    <div class="card">
                                        <div class="card-header">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cat1" aria-expanded="false" aria-controls="cat1">Hair Fall Solution <span>(4)</span></button>
                                        </div>

                                        <div id="cat1" class="collapse" data-parent="#product-categorie">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Meso Therapy</a></li>
                                                    <li><a href="#">PRP Hair Regrowth Treatment</a></li>
                                                    <li><a href="#">Derma Roller - Scalp</a></li>
													<li><a href="#">Threading</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cat2" aria-expanded="false" aria-controls="cat2"> Hair Transplant  <span>(4)</span></button>
                                        </div>
                                        <div id="cat2" class="collapse" data-parent="#product-categorie">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">FUE hair transplant </a></li>
                                                    <li><a href="#">Bio FUE Hair transplant  </a></li>
                                                    <li><a href="#">FUT Hair transplant </a></li>
                                                    <li><a href="#">Direct Implant  </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cat3" aria-expanded="false" aria-controls="cat3">Laser <span>(15)</span></button>
                                        </div>
                                        <div id="cat3" class="collapse" data-parent="#product-categorie">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Facial hair reduction </a></li>
                                                    <li><a href="#">Under arm hair laser</a></li>
                                                    <li><a href="#">Full Body Laser</a></li>
													<li><a href="#">Bikini line laser</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cat4" aria-expanded="false" aria-controls="cat4"> Skin Care <span>(4)</span></button>
                                        </div>
                                        <div id="cat4" class="collapse" data-parent="#product-categorie">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Skin Lightning</a></li>
                                                    <li><a href="#">Acne treatment </a></li>
                                                    <li><a href="#">Lip lighting </a></li>
                                                    <li><a href="#">Moles tag removal</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cat5" aria-expanded="false" aria-controls="cat5"> Medi Facial <span>(4)</span></button>
                                        </div>
                                        <div id="cat5" class="collapse" data-parent="#product-categorie">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Hydra facial </a></li>
                                                    <li><a href="#">CO2O2 Facial </a></li>
                                                    <li><a href="#">Carbon Facial</a></li>
													<li><a href="#">Diamond dermaBrasion</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cat6" aria-expanded="false" aria-controls="cat6">Anti Ageing <span>(4)</span></button>
                                        </div>
                                        <div id="cat6" class="collapse" data-parent="#product-categorie">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Vampire face lift</a></li>
                                                    <li><a href="#">Botox</a></li>
													<li><a href="#">Fillers </a></li>
													<li><a href="#">RF Micro Needling </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cat7" aria-expanded="false" aria-controls="cat7"> Pigmentation <span>(4)</span></button>
                                        </div>
                                        <div id="cat7" class="collapse" data-parent="#product-categorie">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Chemical Peels</a></li>
                                                    <li><a href="#">Q-Switch Laser </a></li>
                                                    <li><a href="#">Dermaplaning  </a></li>
													<li><a href="#">Crystal dermabrasion  </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cat8" aria-expanded="false" aria-controls="cat8"> Others <span>(4)</span></button>
                                        </div>
                                        <div id="cat8" class="collapse" data-parent="#product-categorie">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Tattoo Removal</a></li>
                                                    <li><a href="#">Stretch Marks Removal  </a></li>
                                                    <li><a href="#">Skin Lightning</a></li>
                                                    <li><a href="#">Hyperhidrosis</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                   <!-- <div class="card">
                                        <div class="card-header">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cat9" aria-expanded="false" aria-controls="cat9"> Scar Revision <span>(08)</span></button>
                                        </div>
                                        <div id="cat9" class="collapse" data-parent="#product-categorie">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">Fitness Equipment-1</a></li>
                                                    <li><a href="#">Fitness Equipment-2</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>-->
									
									

                                </div>
                                <!--/panel-->
                            </div>
                            <!--/accordion-->
                        </div>
                        <!--/categorie-->

                     <!--   <div class="single-block price">
                            <h6 class="text-uppercase fw-700 color-ff">price</h6>
                            <div id="range" class="mb-20"></div>
                            <p class="price"><span>Price : </span> ₹
                                <span id="minVal"></span> &#8212; ₹
                                <span id="maxVal"></span>
                            </p>
                        </div>-->
                        <!--/price filter-->

                       <!-- <div class="single-block special-offer pos-relative">
                            <img src="images/offer.jpg" alt="offer product" class="img-fluid">
                            <div class="offer-text text-center">
                                <p>Exclusive<span class="fw-700 roboto text-uppercase">Discounts & Offers</span>Especially For You</p>
                                <a href="#" title="Shop Now">Shop Now</a>
                            </div>
                        </div>-->
                        <!--/special offer-->

                      <!--  <div class="single-block tag">
                            <h6 class="text-uppercase fw-700 color-ff">tag</h6>
                            <ul class="pt-15">
                                <li><a href="#">Fitness</a></li>
                                <li><a href="#">Medical equipment</a></li>
                                <li><a href="#">Women's Health</a></li>
                                <li><a href="#">Anti-allergy</a></li>
                                <li><a href="#">Herbal</a></li>
                                <li><a href="#">weight gain</a></li>
                                <li><a href="#">care</a></li>
                            </ul>
                        </div>-->
                        <!--/tags-->
                  <!--  </aside>
                </div>-->
                <!--/sidebar-->
               

            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End Product gallery section== 
    =======================================-->


    <!-- ======================================= 
            ==Start call to action section==  
    =======================================-->
    <section class="cta-section booking-cta-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content">
                        <p>Join our mailing list & get up to <span class="color-d5">25% off</span> on every service!</p>
                        <div class="mail-form">
                           
                        </div>
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
  <?php 
  include('include/footer.php');
  
  ?>
<?php ob_flush();?>
