<?php

session_start();


echo "<pre>";

// print_r($_SESSION);

echo "<pre>";





if ($_SERVER['REQUEST_METHOD'] === 'POST') {













    if (isset($_POST['productSubmit'])) {

        $Product_id = $_POST['Product_id'];



        $productname = $_POST['Product_name'];

        $productimg = $_POST['Product_img'];

        $productprice = $_POST['Product_price'];

        $productqty = $_POST['Product_qty'];



        if (isset($_SESSION['cart'])) {















            $myiteams = array_column($_SESSION['cart'], 'productsno');



            if (in_array($_POST['Product_id'], $myiteams)) {







                foreach ($_SESSION['cart'] as $key => $value) {















                    if ($value['productsno'] == $_POST['Product_id']) {







                        $_SESSION['cart'][$key]['Qty'] =  $_SESSION['cart'][$key]['Qty'] + 1;
                    }
                }
            } else {



                $count = count($_SESSION['cart']);



                $_SESSION['cart'][$count] = array('product_name' => $productname, 'price' => $productprice, 'img' => $productimg, 'Qty' => $productqty, 'productsno' => $Product_id);
            }
        } else {



            $_SESSION["cart"][0] = array('product_name' => $productname, 'price' => $productprice, 'img' => $productimg, 'Qty' => 1, 'productsno' => $Product_id);
        }
    }







    if (isset($_POST['remove_cart'])) {











        foreach ($_SESSION['cart'] as $key => $value) {















            if ($value['productsno'] == $_POST['productsno']) {







                unset($_SESSION['cart'][$key]);



                $_SESSION['cart'] = array_values($_SESSION['cart']);



                echo "



                <script>



                



                window.location.href='../../cart.php';



                </script>







                ";
            }
        }
    }



    if (isset($_POST['Mod_qty'])) {







        foreach ($_SESSION['cart'] as $key => $value) {















            if ($value['productsno'] == $_POST['productsno']) {







                if ($_POST['Mod_qty'] != "" && $_POST['Mod_qty'] != 0) {





                    if ($_POST['Mod_qty'] <= 10) {



                        $_SESSION['cart'][$key]['Qty'] = $_POST['Mod_qty'];











                        echo "

    

                     <script>

    

    

    

                     window.location.href='../../cart.php';

    

                     </script>

    

    

    

                    ";
                    } else {

                        $_SESSION['cart'][$key]['Qty'] = 1;



                        echo " <script> 
                        alert('Quantity must Less Than 10');
                        window.location.href='../../cart.php'; 
                        </script>";
                    }
                } else {

                    $_SESSION['cart'][$key]['Qty'] = 1;



                    echo "<script>
                    alert('Quantity must greater than 0');
                     window.location.href='../../cart.php'; </script>";
                }
            }
        }
    } else {

        echo "<script> window.location.href='../.././cart.php'; </script>";
    }
}
