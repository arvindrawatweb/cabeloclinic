<?php include "include/header.php"?>

    <!-- ======================================= 
        ==start cart section==  
    =======================================-->
    <section class="beauty-thankyou" style="padding:20px 0px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <header class="entry-header">
                        <h1 class="entry-title">Order received</h1>
                    </header>

                    <div class="entry-content">
                        <div class="woocommerce">
                            <div class="woocommerce-order">
                                <p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received">Thank you. Your order has been received.</p>

                                <ul class="woocommerce-order-overview woocommerce-thankyou-order-details order_details">
                                    <li class="woocommerce-order-overview__order order">
                                        Order number: <strong>60</strong>
                                    </li>
                                    <li class="woocommerce-order-overview__date date">
                                        Date: <strong>October 28, 2020</strong>
                                    </li>
                                    <li class="woocommerce-order-overview__email email">
                                        Email: <strong><a href="mailto:Cabelokota@Gmail.Com">Cabelokota@Gmail.Com</a></strong>
                                    </li>
                                    <li class="woocommerce-order-overview__total total">Total: 
                                        <strong>
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi>
                                                    <span class="woocommerce-Price-currencySymbol">₹</span>20
                                                </bdi>
                                            </span>
                                        </strong>
                                    </li>
                                    <li class="woocommerce-order-overview__payment-method method">
                                        Payment method: <strong>Cash on delivery</strong>
                                    </li>
                                </ul>

                                <section class="woocommerce-order-details">
                                    <h2 class="woocommerce-order-details__title">Order details</h2>
                                    <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">
                                        <thead>
                                            <tr>
                                                <th class="woocommerce-table__product-name product-name">Product</th>
                                                <th class="woocommerce-table__product-table product-total">Total</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr class="woocommerce-table__line-item order_item">
                                                <td class="woocommerce-table__product-name product-name">
                                                    <a href="#">Single</a>
                                                    <strong class="product-quantity">×&nbsp;1</strong> 
                                                </td>

                                                <td class="woocommerce-table__product-total product-total">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>
                                                            <span class="woocommerce-Price-currencySymbol">₹</span>2
                                                        </bdi>
                                                    </span>
                                                </td>
                                            </tr>

                                            <tr class="woocommerce-table__line-item order_item">
                                                <td class="woocommerce-table__product-name product-name">
                                                    <a href="#">T-Shirt with Logo</a> 
                                                    <strong class="product-quantity">×&nbsp;1</strong>
                                                </td>

                                                <td class="woocommerce-table__product-total product-total">
                                                    <span class="woocommerce-Price-amount amount">
                                                        <bdi>
                                                            <span class="woocommerce-Price-currencySymbol">₹</span>18
                                                        </bdi>
                                                    </span>
                                                </td>
                                            </tr>
                                        </tbody>

                                        <tfoot>
                                            <tr>
                                                <th scope="row">Subtotal:</th>
                                                <td>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">₹</span>20
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Shipping:</th>
                                                <td>Free shipping</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Payment method:</th>
                                                <td>Cash on delivery</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Total:</th>
                                                <td>
                                                    <span class="woocommerce-Price-amount amount">
                                                        <span class="woocommerce-Price-currencySymbol">₹</span>20
                                                    </span>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </section>

                                <section class="woocommerce-customer-details">
                                    <section class="woocommerce-columns woocommerce-columns--2 woocommerce-columns--addresses col2-set addresses">
                                        <div class="woocommerce-column woocommerce-column--1 woocommerce-column--billing-address col-1">
                                            <h2 class="woocommerce-column__title"> Billing address</h2>

                                            <address>
                                                Jhone Doe<br>
                                                california<br>
                                                WC<br>
                                                India
                                                <p class="woocommerce-customer-details--phone"> 92000000124</p>
                                                <p class="woocommerce-customer-details--email"><a href="mailto:Cabelokota@Gmail.Com"> Cabelokota@Gmail.Com</a></p>
                                            </address>
                                        </div><!-- /.col-1 -->

                                        <div class="woocommerce-column woocommerce-column--2 woocommerce-column--shipping-address col-2">
                                            <h2 class="woocommerce-column__title">Shipping address</h2>
                                            <address>
                                                Jhon Smith<br>
                                                Sidny<br>
                                                WC<br>
                                                India
                                            </address>
                                        </div><!-- /.col-2 -->
                                    </section><!-- /.col2-set -->
                                </section>
                                <!-- /.woocommerce-customer-details -->
                            </div>
                        </div>
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
    <section class="footer-widget">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-widget contact-widget">
                        <a href="index.html"><img alt="logo" src="images/widget-logo.png"></a>
                        <p>The beauty lab is a luxury beauty &amp; spa solution. The beauty spa strives to deliver top
                            class.</p>
                        <address>
                            <p class="address"><i class="fa fa-home"></i><span>Address:</span> 121 King St, Melbourne
                                Vic 3000, Australia.</p>
                            <p class="phone"><i class="fa fa-phone"></i><span>Phone:</span> +66 1800-111-333</p>
                            <p class="email"><i class="fa fa-envelope"></i><span>Email:</span> <a
                                    href="mail to:Cabelokota@Gmail.Com">Cabelokota@Gmail.Com</a></p>
                            <p class="web"><i class="fa fa-globe"></i><span>Web:</span> <a href="https://www.cabeloclinic.com/"
                                    target="_blank">cabeloclinic.com</a></p>
                        </address>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-widget recent-post-widget">
                        <h5>Recent Posts</h5>
                        <ul>
                            <li>
                                <p>The power of golden ratio typography cannot be understated. By choosing the..</p>
                                <span>July 25, 2020</span>
                                <a href="#">read more</a>
                            </li>
                            <li>
                                <p>The power of golden ratio typography cannot be understated. By choosing the..</p>
                                <span>July 23, 2020</span>
                                <a href="#">read more</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="single-widget newsletter-widget">
                        <h5>Newsletter</h5>
                        <form action="#" method="post" class="clearfix">
                            <input type="text" placeholder="Name" id="name" class="form-control">
                            <input type="email" placeholder="Email" id="email" class="form-control">
                            <button type="submit">Send</button>
                        </form>
                    </div>
                </div>
                <!--/col-->
            </div>
        </div>
    </section>
    <!-- ======================================= 
            ==End footer widget section== 
    =======================================-->


    <!-- ======================================= 
            ==Start footer section==  
    =======================================-->
	
   <?php include"include/footer.php"?>