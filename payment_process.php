<?php



include './admin/dbconfig.php';

session_start();



// print_r($_POST);

$tz = 'Asia/Kolkata';

date_default_timezone_set($tz);





$date =    date('d m 20y');



$time = date('h:i:s A');



if (isset($_POST['firstname']) && ($_POST['lastname']) && ($_POST['number']) && ($_POST['address']) && ($_POST['state']) && ($_POST['city']) && ($_POST['pinCode']) && ($_POST['amount'])) {





    $firstname = $_POST['firstname'];

    $lastname = $_POST['lastname'];

    $number = $_POST['number'];

    $email_id = $_POST['email_id'];

    $address = $_POST['address'];

    $address2 = $_POST['address2'];

    $state = $_POST['state'];

    $city = $_POST['city'];

    $pincode = $_POST['pinCode'];

    $amount = $_POST['amount'];



    $new_amount = $amount / 100;

echo $new_amount;





    $query_insert_customer = "INSERT INTO `customers`(`first_name`, `last_name`, `country`, `street-address-1`, `street-address-2`, `city`, `pincode`, `email`, `orders`, `spent`,`customer_mobile` ) VALUES ('$firstname','$lastname','$state','$address','$address2','$city','$pincode','$email_id','1','$new_amount','$number')";

    



    $conn->query($query_insert_customer);



    $_SESSION['lastid'] = $conn->insert_id;





    $total_amount = 0;





    $custome_name = $firstname . " " . $lastname;

    $query_insert_customer_payment = "INSERT INTO `payment`( `name`, `amount`,`customer_phone`, `payment_status`, `payment_id`, `customer_id`) VALUES ('$custome_name','$new_amount','$number','PENDING','N/A','$_SESSION[lastid]')";

    $conn->query($query_insert_customer_payment);

} else {

}

