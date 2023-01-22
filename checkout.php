<?php

include './header.php';

if (!$_SESSION['cart']) {

    echo "<script>

    window.location.href='./index.php';

    </script>";
}

?>

<div class="checkout-area">



    <div class="container">



        <div class="row">



            <div class="col-12">



            </div>



        </div>



        <div class="row">



            <div class="col-lg-6 col-12">



                <form action="./assets/manage-files/manage-checkout.php" method="post">



                    <div class="checkbox-form">



                        <h3>Billing Details</h3>



                        <div class="row">



                            <div class="col-md-12">



                                <div class="country-select clearfix">



                                    <label>Country <span class="required">*</span></label>



                                    <select name="country" class="myniceselect nice-select wide">



                                        <option selected data-display="INDIA">INDIA</option>







                                    </select>



                                </div>



                            </div>



                            <div class="col-md-6">



                                <div class="checkout-form-list">



                                    <label>First Name <span class="required">*</span></label>



                                    <input class="form-control" placeholder="" name="firstname" type="text" required>



                                </div>



                            </div>



                            <div class="col-md-6">



                                <div class="checkout-form-list">



                                    <label>Last Name <span class="required">*</span></label>



                                    <input class="form-control" placeholder="" name="lastname" type="text" required>



                                </div>



                            </div>







                            <div class="col-md-12">



                                <div class="checkout-form-list">



                                    <label>Address <span class="required">*</span></label>



                                    <input class="form-control" name="street-address-1" placeholder="Street address"
                                        type="text" required>



                                </div>



                            </div>



                            <div class="col-md-12">



                                <div class="checkout-form-list">



                                    <input class="form-control" name="street-address-2"
                                        placeholder="Apartment, suite, unit etc. (optional)" type="text" required>



                                </div>



                            </div>



                            <div class="col-md-12">



                                <div class="checkout-form-list">



                                    <label>Town / City <span class="required">*</span></label>



                                    <input class="form-control" name="city" type="text" required>



                                </div>



                            </div>



                            <!-- <div class="col-md-6">



                                <div class="checkout-form-list">



                                    <label>State <span class="required">*</span></label>



                                    <input placeholder="" type="text">



                                </div>



                            </div> -->



                            <div class="col-md-6">



                                <div class="checkout-form-list">



                                    <label>Postcode / Zip <span class="required">*</span></label>



                                    <input class="form-control" name="pincode" placeholder="" type="number" required>



                                </div>



                            </div>



                            <div class="col-md-6">



                                <div class="checkout-form-list">



                                    <label>Email Address <span class="required">*</span></label>



                                    <input class="form-control" name="email" placeholder="" type="email" required>



                                </div>



                            </div>



                            <div class="col-md-6">



                                <div class="checkout-form-list">



                                    <label>Phone <span class="required">*</span></label>



                                    <input class="form-control" name="mobile" type="number" required>



                                </div>



                            </div>







                        </div>







                    </div>







            </div>



            <div class="col-lg-6 col-12">



                <div class="your-order">



                    <h3>Your order</h3>



                    <div class="your-order-table table-responsive">

                        <!-- <?php print_r($_SESSION['cart']); ?> -->

                        <table class="table">



                            <thead>



                                <tr>



                                    <th class="cart-product-name">Image</th>
                                    <th class="cart-product-name">Product</th>



                                    <th class="cart-product-total">Total</th>



                                </tr>



                            </thead>



                            <tbody>



                                <?php



                                foreach ($_SESSION['cart'] as $key => $value_data) { ?>



                                    <tr class="cart_item">
                                        <td>

                                            <img width="50px"
                                                src="./admin/assets/images/product_images/<?php echo $value_data['img'] ?>"
                                                alt="">

                                        </td>



                                        <td class="cart-product-name">
                                            <?php echo substr($value_data['product_name'], 0, 15); ?> <strong
                                                class="product-quantity"> X <?php echo $value_data['Qty'] ?> </strong>
                                        </td>



                                        <td class="cart-product-total"><span class="amount">&#8377; <?php echo $value_data['price'] * $value_data['Qty'] ?></span></td>


                                    </tr>

                                <?php }





                                ?>











                            </tbody>



                            <tfoot>



                                <tr class="cart-subtotal">



                                    <th>Shipping Charge</th>



                                    <td><span class="amount">&#8377; 59</span></td>



                                </tr>



                                <tr class="order-total">



                                    <th>Order Total</th>



                                    <?php

                                    $total = 0;



                                    $sub_total = 0;

                                    foreach ($_SESSION['cart'] as $key => $value_price_cal) {



                                        $sub_total = $value_price_cal['price'] * $value_price_cal['Qty'];



                                        $total = $total + $sub_total;
                                    }



                                    ?>



                                    <td><strong><span class="amount"> &#8377; <?php echo $total + 59; ?></span></strong>
                                    </td>



                                </tr>



                            </tfoot>



                        </table>



                    </div>



                    <div class=" payment-method">



                        <div class="payment-accordion">



                            <div id="accordion">



                                <div class="card">





                                    <div class="payment-methods" id="payment_method">

                                        <h4 class="title py-2 font-weight-bold ls-25 pb-0 mb-1">Payment Methods</h4>

                                        <div class="accordion payment-accordion">



                                            <div class="card">




                                            </div>

                                            <div class="card p-relative">

                                                <div class="card-header">

                                                    <input type="radio" id="online-payment" name="py-method" value="1">

                                                    <label style="cursor:pointer ;" for="online-payment">

                                                        Online Payment (Bank, Cards, UPI ,Wallet Etc.)

                                                    </label>

                                                </div>





                                            </div>

                                        </div>

                                    </div>



                                </div>













                            </div>



                        </div>



                        <div class="order-button-payment">



                            <input name="submit_checkout" value="Proceed To Payment" type="submit">



                        </div>



                    </div>



                </div>



            </div>



        </div>



    </div>



</div>



</div>

</form>

<!-- Hiraola's Checkout Area End Here -->



<?php



include './footer.php';



?>







<!-- Mirrored from htmldemo.net/HIRAOLA/HIRAOLA/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 17:50:35 GMT -->



</html>