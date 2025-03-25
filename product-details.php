<?php
@ob_start();
include("admin/config/config.php");
include "include/header2.php";


$pprd_id=$_GET['id'];


$slt_prt_prd_dtl="select * from our_products where id='$pprd_id'";
$qst_slt_prt_prd_dtl=$db->query($slt_prt_prd_dtl);
$clct_slt_prt_prd_dtl=$qst_slt_prt_prd_dtl->fetch_assoc();

$prd_nem=$clct_slt_prt_prd_dtl['product_name'];
$prd_prrc=$clct_slt_prt_prd_dtl['product_price'];
$prd_iimg=$clct_slt_prt_prd_dtl['image'];
$prd_dscpttn=$clct_slt_prt_prd_dtl['description'];
$pprd_iid=$clct_slt_prt_prd_dtl['id'];

?>

    <!-- ======================================= 
        ==Start banner section== 
    =======================================-->
    <section class="banner-section shop-banner ">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-content">
                        <h4 class="fw-500 color-ff">Buy What You Like</h4>
                        <p class="color-ff">Welcome to beauty lab, where you can relax and enjoy life.</p>
                    </div>
                    <ol class="breadcrumb">
                        <li><a href="#">home</a></li>
                        <li class="active">Shop</li>
                    </ol>
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
    <section class="product-gallery with-sidebar product-details-section">
        <div class="container">

            <div class="row">

                <div class="col-lg-12 order-lg-2">

                    <div class="product-details-wrapper">
                        <div class="product-preview-area">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="pro-item1" role="tabpanel">
                                    <img src="admin/product_image/<?php echo $prd_iimg;?>" alt="product-img" class="img-fluid">
                                </div>
                             <!--   <div class="tab-pane fade" id="pro-item2" role="tabpanel">
                                    <img src="images/product2.1.jpg" alt="product-img" class="img-fluid">
                                </div>
                                <div class="tab-pane fade" id="pro-item3" role="tabpanel">
                                    <img src="images/product2.2.jpg" alt="product-img" class="img-fluid">
                                </div>
                                <div class="tab-pane fade" id="pro-item4" role="tabpanel">
                                    <img src="images/product2.3.jpg" alt="product-img" class="img-fluid">
                                </div>-->
                            </div>

                          <!--  <nav>
                                <div class="nav nav-tabs" role="tablist">
                                    <a class="active" data-toggle="tab" href="#pro-item1" role="tab" aria-selected="true">
                                        <img src="images/product2.jpg" alt="product-img" class="img-fluid">
                                    </a>
                                    <a data-toggle="tab" href="#pro-item2" role="tab" aria-selected="false">
                                        <img src="images/product2.1.jpg" alt="product-img" class="img-fluid">
                                    </a>
                                    <a data-toggle="tab" href="#pro-item3" role="tab" aria-selected="false">
                                        <img src="images/product2.2.jpg" alt="product-img" class="img-fluid">
                                    </a>
                                    <a data-toggle="tab" href="#pro-item4" role="tab" aria-selected="false">
                                        <img src="images/product2.3.jpg" alt="product-img" class="img-fluid">
                                    </a>
                                </div>
                            </nav>-->

                        </div>
                        <!--/product preview area-->

                        <!--product details content-->
                        <div class="product-details-content">
                            <h6 class="procuct-title color-d5 fw-700 text-uppercase pb-15"><?php echo $prd_nem;?></h6>
                           <!-- <ul class="rating">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>-->
                            <h4 class="price fw-700 color-72 pt-20 pb-10">₹<?php echo $prd_prrc;?></h4>
                          <?php echo $prd_dscpttn;?><br>
                                      <form action='' method='POST'> 
                              <ul class="add-cart-area pb-35">
                            
                            
                
                            
                                <li class="qty">
                                    <span class="text-uppercase color-51 fw-500 roboto mr-10">quantity :</span>
                                    <span class="decrese"><i class="fa fa-angle-left"></i></span>
                                    <input type="number" name="qty" id="number" value="1" readonly>
                                    <span class="increse"><i class="fa fa-angle-right"></i></span>
                                </li>
                                <li>
                                    <button type='submit' name='addcart' class="addtocart color-ff text-uppercase">Add to Cart</button>
                                </li>
                        
                                
                                <!--<li>
                                    <a href="#" class="favourit"><i class="fa fa-heart-o"></i></a>
                                </li>-->
                            </ul>
        </form>
        
        

<?php


if(isset($_POST['addcart']))
{

if(isset($_SESSION['usr_mbl']))
{
$uus_mmbl=$_SESSION['usr_mbl'];


$prd_qty=$_POST['qty'];


$slt_stpr="select * from cart where usr_mbl='$uus_mmbl' and product_id='$pprd_iid'";
$qst_slt_stpr=$db->query($slt_stpr);
$crt_cnt=mysqli_num_rows($qst_slt_stpr);

if($crt_cnt==0)
{
$ad_cart="insert into cart set 
usr_mbl='$uus_mmbl',
product_id='$pprd_iid',
price='$prd_prrc',
qty='$prd_qty'";
$qst_ad_cart=$db->query($ad_cart);

if($qst_ad_cart)
{
echo "<script>window.alert('Add to cart successfully');window.location='';</script>";
}
}
else
{
    echo "<script>window.alert('This Product is Already Added in the cart');</script>";
}

}

else
{
echo "<script>window.alert('Please Login ');</script>";
}



}

?>

                         <!--   <div class="product-type ptb-20">
                                <table>
                                    <tr class="category">
                                        <td>Category :</td>
                                        <td><a href="#">HP21</a>, <a href="#">Drug</a>, <a href="#">Store</a></td>
                                    </tr>
                                    <tr class="tags">
                                        <td>Tags :</td>
                                        <td><a href="#">Drag,</a> <a href="#">Medicine</a></td>
                                    </tr>
                                    <tr>
                                        <td>Product ID :</td>
                                        <td>nh028</td>
                                    </tr>
                                </table>
                            </div>-->

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
                    <!--/wrapper-->

                    <div class="product-review-tab">
                        <nav>
                            <div class="nav nav-tabs" role="tablist">
                                <a class="active" data-toggle="tab" href="#desription" role="tab" aria-selected="true">Description</a>
                              <!--  <a data-toggle="tab" href="#review" role="tab" aria-selected="false">Reviews <span>(2)</span></a>-->
                            </div>
                        </nav>

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="desription" role="tabpanel">
                                <h6 class="fw-700 color-d5 text-uppercase">Product Description</h6>
                               <?php echo $prd_dscpttn;?>
                            </div>

                          <!--  <div class="tab-pane fade" id="review" role="tabpanel">
                                <div class="review">
                                    <div class="single-review pos-relative">
                                        <img src="images/reviewer-img1.jpg" alt="reviewar img" class="author-img">
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <ul class="author-name display-inline ptb-5">
                                            <li class="name">james franklin</li>
                                            <li class="date">oct 8 2020 at 2.00 pm</li>
                                        </ul>
                                        <p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dicta excepturi expedita facere voluptas soluta debitis voluptatum necessitatibus, alias</p>
                                    </div>

                                    <div class="single-review pos-relative">
                                        <img src="images/reviewer-img2.jpg" alt="reviewar img" class="author-img">
                                        <p class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </p>
                                        <ul class="author-name display-inline ptb-5">
                                            <li class="name">jone doe</li>
                                            <li class="date">oct 5 2020 at 2.00 pm</li>
                                        </ul>
                                        <p class="comment">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dicta excepturi expedita facere voluptas soluta debitis voluptatum necessitatibus, alias</p>
                                    </div>
                        

                                    <div class="review-form pt-20">
                                        <h6 class="fw-600 color-d5 text-uppercase">leave a review</h6>
                                        <p class="rating-o pb-25">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </p>
                                        <form action="#">
                                            <div class="form-group">
                                                <textarea name="msg"></textarea>
                                            </div>
                                            <div class="form-group clearfix">
                                                <input type="text" name="name" placeholder="Name">
                                                <input type="email" name="email" placeholder="Email">
                                            </div>
                                            <button type="submit">post review</button>
                                        </form>
                                    </div>
                                </div>

                            </div>-->
                        </div>
                    </div>
                    <!--/product review tab-->

                    <!---related product-->
                    <h6 class="related-product-title text-uppercase color-d5 fw-500">you may also like this products</h6>
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
                                        <img src="admin/product_image/<?php echo $prd_iimg;?>" alt="product" class="img-fluid">
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
                </div>
                <!--/col-md-9-->

             <!--   <div class="col-lg-3">
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
                                                    <li><a href="#">( platelet rich plasma ) </a></li>
                                                    <li><a href="#">Scalp Monothreds</a></li>
													<li><a href="#">Hair fall Laser Therapy </a></li>
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
                                                    <li><a href="#">Bio FUE Hair transplant </a></li>
                                                    <li><a href="#">FUT Hair transplant </a></li>
                                                    <li><a href="#">Direct Implant  </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cat3" aria-expanded="false" aria-controls="cat3">Laser <span>(4)</span></button>
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
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cat4" aria-expanded="false" aria-controls="cat4"> Skin Care  <span>(4)</span></button>
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
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cat5" aria-expanded="false" aria-controls="cat5">Medi Facial <span>(4)</span></button>
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
											<li><a href="#">Fillers  </a></li>
											<li><a href="#">RF Micro Needling </a></li>
											</ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cat7" aria-expanded="false" aria-controls="cat7">Pigmentation <span>(4)</span></button>
                                        </div>
                                        <div id="cat7" class="collapse" data-parent="#product-categorie">
                                            <div class="card-body">
                                             <ul>
											<li><a href="#">Chemical Peels</a></li>
											<li><a href="#">Q-Switch Laser </a></li>
											<li><a href="#">Dermaplaning  </a></li>
											<li><a href="#">Crystal dermabrasion</a></li>
											</ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#cat8" aria-expanded="false" aria-controls="cat8">Others<span>(0)</span></button>
                                        </div>
                                        <div id="cat8" class="collapse" data-parent="#product-categorie">
                                            <div class="card-body">
                                                <ul>
                                                    <li><a href="#">1st Services</a></li>
                                                 </ul>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                              
                            </div>
                            
                        </div>
                        

                        <div class="single-block price">
                            <h6 class="text-uppercase fw-700 color-ff">price</h6>
                            <div id="range" class="mb-20"></div>
                            <p class="price"><span>Price : </span> ₹
                                <span id="minVal"></span> &#8212; ₹
                                <span id="maxVal"></span>
                            </p>
                        </div>
                        

                        <div class="single-block special-offer pos-relative">
                            <img src="images/offer.jpg" alt="offer product" class="img-fluid">
                            <div class="offer-text text-center">
                                <p>Exclusive<span class="fw-700 roboto text-uppercase">Discounts & Offers</span>Especially For You</p>
                                <a href="#" title="Shop Now">Shop Now</a>
                            </div>
                        </div>
                        

                        <div class="single-block tag">
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
                        </div>
                        
                    </aside>
                </div>-->
                <!--/sidebar-->

            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End Product gallery section== 
    =======================================-->

<?php
include "include/footer.php";

ob_flush();

?>