<?php 
@ob_start();
?>
<?php 
include "include/header2.php";

if(!isset($_SESSION['usr_mbl']))
{
    echo "<script>window.location='our_products.php';window.alert('Please Login');</script>";
}



?>
    <!-- ======================================= 
        ==End Header section==  
    =======================================-->


    <!-- ======================================= 
        ==start cart section==  
    =======================================-->
    <section class="beauty-cart p-4">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">My Orders</h1>
                    </header>

                    <div class="entry-content">
                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>
                            <form class="woocommerce-cart-form" action="#" method="post">
                                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="product-name">Date</th>
                                            <th class="product-name">Image</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
$slt_cccrt_dtl="select * from product_orders where user_mobile='$uuusr_mmbl'";
$qst_slt_cccrt_dtl=$db->query($slt_cccrt_dtl);
$ttlt=0;
while($clct_slt_cccrt_dtl=$qst_slt_cccrt_dtl->fetch_assoc())
{
$crt_prdt_id=$clct_slt_cccrt_dtl['product_id'];
$crt_prdt_prce=$clct_slt_cccrt_dtl['price'];
$crt_prdt_qty=$clct_slt_cccrt_dtl['quantity'];
$ccrt_id=$clct_slt_cccrt_dtl['id'];
$ord_deeet=$clct_slt_cccrt_dtl['date'];

$prd_dtl="select * from our_products where id='$crt_prdt_id'";
$qst_prd_dtl=$db->query($prd_dtl);
$clct_prd_dtl=$qst_prd_dtl->fetch_assoc();

$prd_img=$clct_prd_dtl['image'];
$prd_nem=$clct_prd_dtl['product_name'];

$sbttl=$crt_prdt_prce*$crt_prdt_qty;


$ttlt+=$sbttl;

?>
<tr class="woocommerce-cart-form__cart-item cart_item">
<td class="product-remove">
<?= $ord_deeet;?>
</td>

<td class="product-thumbnail">
<a href="#">
<img width="300" height="300" src="admin/product_image/<?php echo $prd_img;?>"
class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
alt="" loading="lazy" srcset="">
</a> 
</td>

<td class="product-name" data-title="Product">
<a href="#"><?php echo $prd_nem?></a>
</td>

<td class="product-price" data-title="Price">
<span class="woocommerce-Price-amount amount">
<bdi>
<span class="woocommerce-Price-currencySymbol">₹&nbsp;</span><?php echo $crt_prdt_prce;?>
</bdi>
</span>
</td>

<td class="product-quantity" data-title="Quantity">
<div class="quantity">
<input type="number" id="" class="input-text qty text" step="1" min="0" max="" name="" value="<?php echo $crt_prdt_qty;?>" title="Qty" size="4" placeholder="" style="border:none" readonly>
</div>
</td>

<td class="product-subtotal" data-title="Subtotal">
<span class="woocommerce-Price-amount amount">
<bdi>
<span class="woocommerce-Price-currencySymbol">₹&nbsp;</span><?php echo $sbttl;?>
</bdi>
</span>
</td>
</tr>
<?php 
}
?>
                                      
                                        
                                        <tr>
                                            <td colspan="6" class="actions">
                                            

<!--<button type="submit" class="button" name="update_cart" value="Update cart" aria-disabled="true">Update cart</button>-->
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </form>
                            <!-- /.woocommerce-cart-form -->

                            <div class="cart-collaterals">
                     
                            </div>
                            <!-- /.cart-collaterals -->

                        </div>
                        <!-- /.woocommerce -->
                    </div>
                    <!-- /.entry-content -->
                </div>
                <!-- /.col-12 -->
            </div>
        </div>
    </section>
    <!-- ======================================= 
        ==End cart section==  
    =======================================-->


    <!-- ======================================= 
        ==Start footer widget section==  
    =======================================-->
   <?php include"include/footer.php"?>
   
   <?php 
   ob_flush();
   ?>