<?php

include './header.php';



?>




<?php


if (isset($_SESSION['cart'])) {


    $array_count = count($_SESSION['cart']);
}

if (isset($array_count)) { ?>




    <div class="hiraola-cart-area">



        <div class="container">



            <div class="row">



                <div class="col-12">



                    <form action="javascript:void(0)">



                        <div class="table-content table-responsive">



                            <table class="table">



                                <thead>



                                    <tr>



                                        <th class="hiraola-product-remove">remove</th>



                                        <th class="hiraola-product-thumbnail">images</th>



                                        <th class="cart-product-name">Product</th>



                                        <th class="hiraola-product-price">Unit Price</th>



                                        <th class="hiraola-product-quantity">Quantity</th>



                                        <th class="hiraola-product-subtotal">Total</th>



                                    </tr>



                                </thead>




                                <tbody>

                                    <?php



                                    foreach ($_SESSION['cart'] as $key => $value) { ?>

                                        <?php


                                        ?>
                                        <form action="./assets/manage-files/cart-manage.php" method="post">



                                        </form>


                                        <tr>



                                            <form action="./assets/manage-files/cart-manage.php" method="post">

                                                <input value="<?php echo $value['productsno'] ?>" type="hidden"
                                                    name="productsno">



                                                <td class="hiraola-product-remove"> <button onclick="this.form.submit()"
                                                        class="btn btn-danger" type="submit" name="remove_cart"> Remove
                                                        Item</button></td>



                                            </form>





                                            <td class="hiraola-product-thumbnail"><a href="javascript:void(0)"><img width="80px"
                                                        src="./admin/assets/images/product_images/<?php echo $value['img'] ?>"
                                                        alt="Hiraola's Cart Thumbnail"></a></td>



                                            <td class="hiraola-product-name"><a href="javascript:void(0)">
                                                    <?php echo $value['product_name'] ?>
                                                </a></td>



                                            <td class="hiraola-product-price"><span class="amount iprice">&#8377; <?php echo $value['price'] ?></span></td>

                                            <input type="hidden" class="iprice" value="<?php echo $value['price'] ?>">



                                            <td class="quantity">



                                                <label>Quantity</label>



                                                <form action="./assets/manage-files/cart-manage.php" method="post">

                                                    <div class="">





                                                        <input readonly name="Mod_qty" max="9" min="1"
                                                            onchange="this.form.submit();" class="form-control  iquantity"
                                                            type="number" value=<?php echo $value['Qty'] ?>>
                                                        <button class="mx-2 dec qtybutton" onclick="this.form.submit();"
                                                            class="dec qtybutton"><svg xmlns="http://www.w3.org/2000/svg"
                                                                width="16" height="16" fill="currentColor"
                                                                class="bi bi-dash-circle-fill" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z" />
                                                            </svg></i></button>
                                                        <button onclick="this.form.submit();" class="inc qtybutton"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                                fill="currentColor" class="bi bi-plus-circle-fill"
                                                                viewBox="0 0 16 16">
                                                                <path
                                                                    d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                                                            </svg></button>
                                                    </div>
                                                    <input name="productsno" type="hidden"
                                                        value="<?php echo $value['productsno']; ?>">



                            </div>

                        </form>

                        </td>



                        <td class="product-subtotal"><span class="amount">&#8377; <?php

                        echo $value['Qty'] * $value['price'];

                        ?></span></td>



                        </tr>



                        <?php











                        ?>





                    <?php }

                                    ?>





                    <?php

                    $total_price = 0;

                    $price_single = 0;

                    foreach ($_SESSION['cart'] as $key => $value_price) {



                        $price_single = $price_single + $value_price['Qty'] * $value_price['price'];
                    }

                    $total_price = $total_price + $price_single;

                    ?>







                    </tbody>



                    </table>





                </div>



                <div class="row">



                    <div class="col-12">



                        <div class="coupon-all">



                            <div class="coupon">



                                <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                    placeholder="Coupon code" type="text">



                                <input class="button" name="apply_coupon" value="Apply coupon" type="submit">



                            </div>



                            <div class="coupon2">

                                <form action="#" method="POST">

                                    <input class="button" name="update_cart_clear" value="clear Cart" type="submit">

                                </form>

                            </div>
                            <?php

                            if (isset($_POST['update_cart_clear'])) {
                                unset($_SESSION['cart']);
                                echo "<script>window.location.href='./cart.php'</script>";
                            }

                            ?>



                        </div>



                    </div>



                </div>



                <div class="row">



                    <div class="col-md-5 ml-auto">



                        <div class="cart-page-total">



                            <h2>Cart totals</h2>



                            <ul>



                                <li>Subtotal <span id=""> <?php echo $total_price; ?></span></li>



                                <li>Total <span> &#8377;<?php echo $total_price; ?></span></li>



                            </ul>



                            <a href="./checkout.php">Proceed to checkout</a>



                        </div>



                    </div>



                </div>



                </form>



            </div>



        </div>



    </div>





<?php } else { ?>



    <div class="hiraola-cart-area">

        <div class="caontainer">

            <div class="row text-center">
                <div class="py-5">
                    <h1 style="color:#dc3545;">Cart is Empty</h1>
                    <br>
                    <h3>Add Some Items To Make Me Happy </h3>
                </div>

                <div class="row" style="display: flex; justify-content: center;">
                    <img style="width:500px;" src="./assets/images/default-cart.png" alt="">
                </div>
                <div class="py-5">
                    <button onclick="window.location.href='./'" class="btn btn-primary">Continue Shopping</button>
                </div>
            </div>

        </div>

    </div>




<?php }

?>




</div>



<!-- Hiraola's Cart Area End Here -->



<!-- Begin Hiraola's Footer Area -->





<!-- Hiraola's Footer Area End Here -->







</div>







<!-- JS



============================================ -->







<!-- jQuery JS -->



<?php

include './footer.php';





?>

<!-- <script src="assets/js/main.min.js"></script> -->







</body>











<!-- Mirrored from htmldemo.net/HIRAOLA/HIRAOLA/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Nov 2022 17:50:35 GMT -->



</html>