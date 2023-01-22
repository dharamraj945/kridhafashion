<?php
session_start();
include '../../admin/dbconfig.php';

echo '<script src="../../jquery.js"></script>';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo "<pre>";
    // print_r($_POST);
    // echo "<pre>";

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $country = $_POST['country'];
    $street_address_1 = $_POST['street-address-1'];
    $street_address_2 = $_POST['street-address-2'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $email = $_POST['email'];
    $order_notes = "";
    $shipping_charge = 59;


    $total = 0 + $shipping_charge;
    $array_value = count($_SESSION['cart']);

    foreach ($_SESSION['cart'] as $key2 => $value2) {


        $total = $total + ($value2['price'] * $value2['Qty']);
    }





    if (isset($_POST['submit_checkout'])) {

        if ($_POST['py-method'] == 1) {

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/v2/payment_requests/');
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Authorization: Bearer 5KY_I8nFmL1ogxVblQJZTf-TI_soFjt0LReJ1f4-a7U.S8Bepof6x5pItWcJuCFNs14ow3u4cZAlUx4iMcke22M'));


            $payload = array(
                'purpose' => 'KRIDHA FASHION',
                'amount' => $total,
                'buyer_name' => $firstname . ' ' . $lastname,
                'email' => $email,
                'phone' => $mobile,
                'redirect_url' => 'http://localhost/Kridha_Fashion/order_placed.php/',
                'send_email' => 'True',
                'webhook' => 'http://www.example.com/webhook/',
                'allow_repeated_payments' => 'False',
            );

            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
            $response = curl_exec($ch);
            curl_close($ch);
            $response = json_decode($response, true);
            echo "<pre>";
            print_r($response);
            echo "<pre>";

            $payment_request_id = $response['id'];


            if (($payment_request_id != "")) {
                if (isset($_SESSION['cart'])) {




                    $insert_customer = "INSERT INTO `customers`(`first_name`, `last_name`, `country`, `street-address-1`, `street-address-2`, `city`, `pincode`, `email`, `orders`, `spent`, `customer_mobile`) VALUES ('$firstname','$lastname','$country',' $street_address_1',' $street_address_2','$city','$pincode','$email','1','$total','$mobile')";
                    $insert_customer_run = $conn->query($insert_customer);
                    if ($insert_customer_run) {



                        $_SESSION['last_id'] = $conn->insert_id;
                        // echo $_SESSION['last_id'];

                        $insert_paymentt_details = "INSERT INTO `payment`(`name`, `amount`, `customer_phone`, `payment_status`, `payment_id`,`payment_request_id`, `rezorpay_order_id`, `signature`, `customer_id`) VALUES ('$firstname $lastname','$total','$mobile','PENDING',' ','$payment_request_id','','','$_SESSION[last_id]')";

                        $query_insert_customer_payment_run = $conn->query($insert_paymentt_details);
                        if ($query_insert_customer_payment_run) {
                            $longurl = $response['longurl'];
                            header("location:$longurl");
                        } else {
                            echo "<Script>alert('Error Redirection Failed');</script>";
                        }
                    } else {

                        echo "<script>alert('Server Error');</script>";
                    }
                }
            } else {
                echo "<script>
                  alert('Server Error !');

            // history.back(-1);
            </script>";
            }
        } else {

            echo "<script>
            alert('please Select Payment Method');
            history.back(-1);
            </script>";
        }
    }
}
