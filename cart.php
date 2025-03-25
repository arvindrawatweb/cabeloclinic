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
                        <h1 class="entry-title">Cart</h1>
                    </header>

                    <div class="entry-content">
                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>
                            <form class="woocommerce-cart-form" action="#" method="post">
                                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
$slt_cccrt_dtl="select * from cart where usr_mbl='$uuusr_mmbl'";
$qst_slt_cccrt_dtl=$db->query($slt_cccrt_dtl);
$ttlt=0;
while($clct_slt_cccrt_dtl=$qst_slt_cccrt_dtl->fetch_assoc())
{
$crt_prdt_id=$clct_slt_cccrt_dtl['product_id'];
$crt_prdt_prce=$clct_slt_cccrt_dtl['price'];
$crt_prdt_qty=$clct_slt_cccrt_dtl['qty'];
$ccrt_id=$clct_slt_cccrt_dtl['id'];


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
<a href="dlt_cccrt.php?id=<?php echo $ccrt_id;?>" class="remove" aria-label="Remove this item" data-product_id="26" data-product_sku="woo-single">×</a> 
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
<input type="number" id="" class="input-text qty text" step="1" min="0" max="" name="" value="<?php echo $crt_prdt_qty;?>" title="Qty" size="4" placeholder="" readonly>
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
                                <div class="cart_totals ">
                                    <h2>Cart totals</h2>
                                    <table cellspacing="0" class="shop_table shop_table_responsive">

                                        <tbody>
                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td data-title="Subtotal">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>
                                                            <span class="woocommerce-Price-currencySymbol">₹&nbsp;</span><?php echo $ttlt;?>
                                                        </bdi>
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td data-title="Total">
                                                    <strong>
                                                        <span class="woocommerce-Price-amount amount">
                                                            <bdi>
                                                                <span class="woocommerce-Price-currencySymbol">₹&nbsp;</span><?php echo $ttlt;?>
                                                            </bdi>
                                                        </span>
                                                    </strong>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>

                                    <div class="wc-proceed-to-checkout">
                                        
                                        <form action='' method='POST'>

                                        <button type='submit' name='chk_sbmt' class="checkout-button button alt wc-forward">
                                            Proceed to checkout
                                        </button>



                                        </form>
                                        
                                        <?php 
if(isset($_POST['chk_sbmt']))
{
$slt_cccrt_dtl="select * from cart where usr_mbl='$uuusr_mmbl'";
$qst_slt_cccrt_dtl=$db->query($slt_cccrt_dtl);
$ttlt=0;
while($clct_slt_cccrt_dtl=$qst_slt_cccrt_dtl->fetch_assoc())
{
$crt_prdt_id=$clct_slt_cccrt_dtl['product_id'];
$crt_prdt_prce=$clct_slt_cccrt_dtl['price'];
$crt_prdt_qty=$clct_slt_cccrt_dtl['qty'];


$prd_dtl="select * from our_products where id='$crt_prdt_id'";
$qst_prd_dtl=$db->query($prd_dtl);
$clct_prd_dtl=$qst_prd_dtl->fetch_assoc();

$prd_img=$clct_prd_dtl['image'];
$prd_nem=$clct_prd_dtl['product_name'];

$sbttl=$crt_prdt_prce*$crt_prdt_qty;



$prsc_chkot="insert into product_orders set
product_id='$crt_prdt_id',
product_name='$prd_nem',
price='$crt_prdt_prce',
quantity='$crt_prdt_qty',
subtotal='$sbttl',
user_mobile='$uuusr_mmbl'";

$qst_prsc_chkot=$db->query($prsc_chkot);
}

if($qst_prsc_chkot)
{
    echo "<script>window.location='index.php';window.alert('Order Placed Successfully');</script>";
    $dlt_crtt="delete from cart where usr_mbl='$uuusr_mmbl'";
    $qst_dlt_crtt=$db->query($dlt_crtt);
    
    
}
}
?>
                                        
                                        
                                        
                                    </div>

                                </div>
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