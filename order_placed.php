<?php
session_start();
include './admin/dbconfig.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Placed</title>
</head>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
<style type="text/css">
    body {
        background: #f2f2f2;
    }

    .payment {
        border: 1px solid #f2f2f2;
        height: auto;
        border-radius: 20px;
        background: #fff;
        padding-bottom: 10px;
    }

    .payment_header {
        background: rgba(0, 152, 12);
        padding: 20px;
        border-radius: 20px 20px 0px 0px;

    }

    .check {
        margin: 0px auto;
        width: 50px;
        height: 50px;
        border-radius: 100%;
        background: #fff;
        text-align: center;
    }

    .check i {
        vertical-align: middle;
        line-height: 50px;
        font-size: 30px;
    }

    .content {
        text-align: center;
    }

    .content h1 {
        font-size: 25px;
        padding-top: 25px;
    }

    .content a {
        width: 200px;
        height: 35px;
        color: #fff;
        border-radius: 30px;
        padding: 5px 10px;
        background: rgba(0, 152, 12);
        transition: all ease-in-out 0.3s;
    }

    .content a:hover {
        text-decoration: none;
        background: #000;
    }

    @media (min-width: 1025px) {
        .h-custom {
            height: 100vh !important;
        }
    }

    .horizontal-timeline .items {
        border-top: 2px solid #ddd;
    }

    .horizontal-timeline .items .items-list {
        position: relative;
        margin-right: 0;
    }

    .horizontal-timeline .items .items-list:before {
        content: "";
        position: absolute;
        height: 8px;
        width: 8px;
        border-radius: 50%;
        background-color: #ddd;
        top: 0;
        margin-top: -5px;
    }

    .horizontal-timeline .items .items-list {
        padding-top: 15px;
    }
</style>

<body>

    <?php


    if (!isset($_SESSION['last_id'])) {

        echo "<script>
        window.location.href='https://kridhafashion.com';
        
        </script>";
    }

    ?>
    <?php

    $Payment_id = $_GET['payment_id'];
    $Payment_status = $_GET['payment_status'];
    $Payment_request_id = $_GET['payment_request_id'];



    if (isset($Payment_id) && $_SESSION['last_id']) {


        $query_update_payment_id = " UPDATE `payment` SET`payment_id`='$Payment_id',`payment_status`='SUCCESSFULL' WHERE `customer_id`=$_SESSION[last_id]";

        // echo $query_update_payment_id;

        $conn->query($query_update_payment_id);


        $check_last_oreder_id = "SELECT * FROM `orders`";

        $check_last_oreder_id_run = $conn->query($check_last_oreder_id);



        $last_order_id = mysqli_num_rows($check_last_oreder_id_run);




        if ($last_order_id == 0) {

            $order_id = 1000;
        } else {



            $result = "SELECT MAX(order_id) FROM orders";

            $result_run = $conn->query($result);

            $data_result = mysqli_fetch_assoc($result_run);







            $data_result_fetch = $data_result['MAX(order_id)'];





            $order_id = $data_result_fetch + 1;
        }

        if (isset($_SESSION['cart'])) {


            foreach ($_SESSION['cart'] as $key => $value_data) {





                $date = date("l jS \of F Y h:i:s A");



                $insert_order = "INSERT INTO `orders`(`order_id`, `product_id`, `product_name`, `order_method`, `customer_id`, `order_iteams`, `order_qty`, `order_price`,`order_notes`, `order_date`) VALUES ('$order_id','$value_data[productsno]','$value_data[product_name]','Online Payment','$_SESSION[last_id]','1','$value_data[Qty]','$value_data[price]','','$date')";



                echo "<br>";

                $insert_order_run = $conn->query($insert_order);

                if ($insert_order_run) {

                    // echo "success";





                    unset($_SESSION['cart']);
                } else {

                    echo "fail";
                }
            }
        }
    }


    ?>


    <?php


    $show_placed_order = "SELECT * FROM `orders` WHERE `customer_id`=$_SESSION[last_id]";
    $show_cat_product_run = $conn->query($show_placed_order);

    if ($show_cat_product_run) {

        $num_rows = mysqli_num_rows($show_cat_product_run);
        if ($num_rows > 0) {

            $data_order_placed = mysqli_fetch_assoc($show_cat_product_run);
        }
    }


    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto mt-5">
                <div class="payment">
                    <div class="payment_header">
                        <div class="check"><i class="fa fa-check text-success" aria-hidden="true"></i></div>
                    </div>
                    <div class="content mb-3">
                        <h1>Payment Success !</h1>
                        <p class="mb-4">We received your purchase request;
                            we'll be in touch shortly!</p>

                        <a href="">Go to Home</a>


                    </div>

                    <div class="card-body p-5">

                        <p class="lead fw-bold mb-5" style="color: rgba(0, 152, 12);"><strong> Purchase Reciept</strong>
                        </p>


                        <div class="row">
                            <div class="col mb-3">
                                <p class="small text-muted mb-1"> <strong> Date</strong></p>
                                <p>
                                    <?php echo $data_order_placed['order_date']; ?>
                                </p>
                            </div>
                            <div class="col mb-3">
                                <p class="small text-muted mb-1"> <strong> Order No.</strong></p>
                                #<?php echo $data_order_placed['order_id']; ?>
                            </div>
                        </div>

                        <div class="mx-n5 px-5 py-4">

                            <?php


                            $show_placed_details = "SELECT * FROM `orders` WHERE `customer_id`=$_SESSION[last_id]";
                            $show_placed_details_run = $conn->query($show_placed_details);
                            $total_price = 0;
                            if (mysqli_num_rows($show_placed_details_run) > 0) {

                                while ($data_order_details = mysqli_fetch_assoc($show_placed_details_run)) { ?>

                                    <div class="row">
                                        <div class="col-md-8 col-lg-9">
                                            <p> <strong>
                                                    <?php echo $data_order_details['product_name'] . ' X ' . $data_order_details['order_qty'] ?>
                                                </strong> </p>
                                        </div>
                                        <div class="col-md-4 col-lg-3">
                                            <p> <strong> &#8377;<?php echo $data_order_details['order_price'] * $data_order_details['order_qty'] . '.00' ?></strong></p>
                                            <?php $total_price = $total_price + $data_order_details['order_price'] * $data_order_details['order_qty']; ?>
                                        </div>
                                    </div>

                            <?php }
                            }
                            ?>



                            <div class="row">
                                <div class="col-md-8 col-lg-9">
                                    <p class="mb-0"> <strong> Shipping</strong></p>
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <p class="mb-0"> <strong> &#8377;69.00</strong></p>
                                </div>
                            </div>
                        </div>

                        <div class="row my-4">
                            <div class="col-md-8 col-lg-9">
                                <p class="mb-0"> <strong> Total</strong></p>
                            </div>
                            <div class="col-md-4 col-lg-3">
                                <p class="mb-0"> <strong> &#8377;<?php echo $total_price + 69; ?></strong></p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>

    </div>



    <?php unset($_SESSION['last_id']); ?>

</body>

</html>