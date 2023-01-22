<?php
session_start();

if (!isset($_REQUEST['details'])) {
    echo "<script>window.location.href='./orders.php';</script>";
}

include './admin/dbconfig.php';
echo $_SESSION['lastid'];
echo $_POST['payment_id'];

if (isset($_POST['payment_id']) && ($_SESSION['lastid'])) {
    $query_update_payment_id = " UPDATE `payment` SET`payment_id`='$_POST[payment_id]',`payment_status`='SUCCESSFULL' WHERE `customer_id`=$_SESSION[lastid]";
    echo $query_update_payment_id;
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



        $data_result_fetch =    $data_result['MAX(order_id)'];


        $order_id = $data_result_fetch + 1;
    }
    foreach ($_SESSION['cart'] as $key => $value_data) {


        $date = date("l jS \of F Y h:i:s A");

        $insert_order = "INSERT INTO `orders`(`order_id`, `product_id`, `product_name`, `order_method`, `customer_id`, `order_iteams`, `order_qty`, `order_price`,`order_notes`, `order_date`) VALUES ('$order_id','$value_data[productsno]','$value_data[product_name]','Online Payment','$_SESSION[lastid]','1','$value_data[Qty]','$value_data[price]','$order_notes','$date')";

        echo "<br>";
        $insert_order_run = $conn->query($insert_order);
        if ($insert_order_run) {
            echo "success";


            unset($_SESSION['cart']);
        } else {
            echo "fail";
        }
    }
}
