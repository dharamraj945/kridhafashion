<?php
include './header.php';

?>
<!-- ./ header -->

<!-- content -->
<div class="content ">

    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">

                    <a href="./orders.php">
                        <i class="bi bi-globe2 small me-2"></i> Orders
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Order Detail</li>
            </ol>
        </nav>
    </div>


    <?php

    $order_deatils = "SELECT * FROM `orders` INNER JOIN `customers` on orders.customer_id = customers.id Where `order_id`=$_REQUEST[details] ";

    $order_deatils_run = $conn->query($order_deatils);
    if ($order_deatils_run) {

        if (mysqli_num_rows($order_deatils_run) > 0) {

            $order_details_data = mysqli_fetch_assoc($order_deatils_run);
        }
    } else {
    }

    ?>

    <div class="row">
        <div class="col-lg-8 col-md-12">
            <div class="card mb-4">
                <div class="card-body">



                    <div class="mb-5 d-flex align-items-center justify-content-between">
                        <span>Order No : <a href="javascript:void(0)">#<?php echo $order_details_data['order_id'] ?></a></span>
                        <span class="badge bg-warning">PENDING</span>
                    </div>
                    <div class="row mb-5 g-4">
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Order Recieved at</p>
                            <?php
                            echo $order_details_data['order_date'];

                            ?>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Name</p>
                            <?php
                            echo $order_details_data['first_name'] . " " . $order_details_data['last_name'];

                            ?>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Email</p>

                            <?php
                            echo $order_details_data['email'];

                            ?>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <p class="fw-bold">Contact No</p>

                            <?php
                            echo $order_details_data['customer_mobile'];

                            ?>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-body d-flex flex-column gap-3">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Delivery Address</h5>
                                        <a href="#">Edit</a>
                                    </div>
                                    <div>Name: <?php echo $order_details_data['first_name'] . " " . $order_details_data['last_name']; ?></div>
                                    <div><?php echo $order_details_data['street-address-1']; ?></div>
                                    <div><?php

                                            if ($order_details_data['street-address-2'] != "") {
                                                echo $order_details_data['street-address-2'];
                                            } else {
                                            }



                                            ?></div>
                                    <div>
                                        <i class="bi bi-telephone me-2"></i> <?php echo $order_details_data['customer_mobile'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="card">
                                <div class="card-body d-flex flex-column gap-3">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="mb-0">Billing Address</h5>
                                        <a href="#">Edit</a>
                                    </div>
                                    <div>Name: <?php echo $order_details_data['first_name'] . " " . $order_details_data['last_name']; ?></div>
                                    <div><?php echo $order_details_data['street-address-1']; ?></div>
                                    <div><?php

                                            if ($order_details_data['street-address-2'] != "") {
                                                echo $order_details_data['street-address-2'];
                                            } else {
                                            }



                                            ?></div>
                                    <div>
                                        <i class="bi bi-telephone me-2"></i> <?php echo $order_details_data['customer_mobile'] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card widget">
                <h5 class="card-header">Order Items</h5>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-custom mb-0">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php

                                $iteams_order = "SELECT * FROM `orders` WHERE order_id= $_REQUEST[details]";
                                $iteams_order_run = $conn->query($iteams_order);
                                if ($iteams_order) {

                                    if (mysqli_num_rows($iteams_order_run) > 0) {
                                        $subtotal = 0;
                                        while ($data_order_iteams = mysqli_fetch_assoc($iteams_order_run)) {

                                ?>


                                            <tr>
                                                <td>
                                                    <a href="#">

                                                        <?php $show_image_product_iteam = "SELECT * FROM `product_page` WHERE `productid`=$data_order_iteams[product_id] ";
                                                        $show_image_product_iteam_run = $conn->query($show_image_product_iteam);
                                                        if ($show_image_product_iteam_run) {

                                                            $data_product_image = mysqli_fetch_assoc($show_image_product_iteam_run);
                                                        }
                                                        ?>

                                                        <img src="./assets/images/product_images/<?php echo $data_product_image['product_img'] ?>" class="rounded" width="60" alt="...">
                                                    </a>
                                                </td>
                                                <td>

                                                    <a href="../single-product.php?productid= <?php echo $data_product_image['productid'] ?>">
                                                        <?php


                                                        if (strlen($data_order_iteams['product_name']) > 30) {

                                                            echo substr($data_order_iteams['product_name'], 0, 30) . "..";
                                                        } else {
                                                            echo $data_order_iteams['product_name'];
                                                        }

                                                        ?>
                                                    </a>
                                                </td>
                                                <td><?php echo $data_order_iteams['order_qty']; ?></td>
                                                <td> &#8377; <?php echo $data_order_iteams['order_price']; ?></td>
                                                <td>&#8377; <?php
                                                            echo $data_order_iteams['order_qty'] * $data_order_iteams['order_price'];

                                                            ?></td>

                                                <?php



                                                $single_total =  $data_order_iteams['order_qty'] * $data_order_iteams['order_price'];
                                                $subtotal = $subtotal + $single_total;




                                                ?>

                                            </tr>


                                <?php }
                                    }
                                }


                                ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class=" col-lg-4 col-md-12 mt-4 mt-lg-0">
            <div class="card mb-4">
                <div class="card-body">
                    <h6 class="card-title mb-4">Price</h6>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Sub Total :</div>
                        <div class="col-4">&#8377; <?php echo $subtotal ?></div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Shipping :</div>
                        <div class="col-4"> &#8377;69</div>
                    </div>
                    <div class="row justify-content-center mb-3">
                        <div class="col-4 text-end">Tax(18%) :</div>
                        <div class="col-4">All Tax include</div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4 text-end">
                            <strong>Total :</strong>
                        </div>
                        <div class="col-4">
                            <strong> &#8377; <?php echo $subtotal + 69;  ?></strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title mb-4">Customer Notes</h6>

                    <?php

                    echo $order_details_data['order_notes'];


                    ?>

                </div>
            </div>
        </div>
    </div>

</div>
<!-- ./ content -->

<!-- content-footer -->
<?php
include './footer.php';

?>
</body>

<!-- Mirrored from vetra.laborasyon.com/demos/default/order-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 07:05:06 GMT -->

</html>