<?php
include './admin/dbconfig.php';
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


$pageName = basename($_SERVER['PHP_SELF']);
if ($pageName == 'index.php') {
    $meta_title = "Buy Fashion Jewellery Online In India - Kridha Fashion";
    $meta_desc = "Buy Fashion Jewellery for women online in India at lowest prices. Artificial Jewellery online lowest price from us. Check out latest artificial earrings, rings, necklace and much more.";
} elseif ($pageName == 'contact.php') {
    $meta_title = "Contact Us ";
} elseif ($pageName == 'cart.php') {
    $meta_title = "Cart";
} elseif ($pageName == 'products.php') {

    $title_category = "SELECT * FROM `collection_page` WHERE collection_url_handler='$_REQUEST[wxyz]'";

    echo $title_category;

    $title_category_run = $conn->query($title_category);

    $title_name_array = mysqli_fetch_assoc($title_category_run);
    $meta_title = $title_name_array['Category_Name'];
    $meta_desc = $title_name_array['cat_meta_description'];
} else {
    $title_name = "";

    $meta_desc = "Are you looking to buy online neck chain or necklace? Here at Kridha Fashion you will find latest collection of trendy neck chains at low price in India. Shop now!";
}

if ($pageName == 'single-product.php') {


    $show_product_title = "SELECT * FROM `product_page` WHERE url_handler='$_REQUEST[productid]'";
    $show_product_title_run = $conn->query($show_product_title);
    $product_data_get = mysqli_fetch_assoc($show_product_title_run);

    $meta_title = $product_data_get['product_name'];
    $meta_desc = $product_data_get['product_meta_description'];
}
?>
<?php
session_start();

?>



<!doctype html>



<html class="no-js" lang="en">







<head>

    <base href="http://localhost/kridhafashion/">

    <meta charset="utf-8">



    <meta http-equiv="x-ua-compatible" content="ie=edge">



    <title>Kridha Fashion - <?php echo $meta_title; ?></title>



    <meta name="robots" content="noindex, follow" />



    <meta name="description" content="<?php echo $meta_desc; ?>">
    <meta name="Keywords" content="">


    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Favicon -->



    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">



    <link rel="stylesheet" href="assets/css/bootstrap.min.css">



    <!-- Fontawesome -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/font-awesome.min.css">



    <!-- Fontawesome Star -->



    <link rel="stylesheet" href="assets/css/fontawesome-stars.css">



    <!-- Ion Icon -->



    <link rel="stylesheet" href="assets/css/ionicons.min.css">



    <!-- Slick CSS -->



    <link rel="stylesheet" href="assets/css/slick.min.css">



    <!-- Animation -->



    <link rel="stylesheet" href="assets/css/animate.min.css">



    <!-- jQuery Ui -->



    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">



    <!-- Nice Select -->



    <link rel="stylesheet" href="assets/css/nice-select.min.css">



    <!-- Timecircles -->



    <link rel="stylesheet" href="assets/css/timecircles.min.css">







    <!-- Main Style CSS -->



    <link rel="stylesheet" href="assets/css/style.css">



    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->







</head>

<script src="./jquery.js"></script>



<?php



if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')



    $url = "https://";
else



    $url = "http://";



// Append the host(domain name, ip) to the URL.   



$url .= $_SERVER['HTTP_HOST'];







// Append the requested resource location to the URL   



$url .= $_SERVER['REQUEST_URI'];











?>







<body class="template-color-3">



    <div class="livechat" style="position: fixed;bottom: 40px;right: 20px;display: inline-block;background: #26d974;z-index: 201;padding: 4px 15px;border-radius: 50px;">



        <a data="https%3A%2F%2Fshoponcliq.com" href="https://api.whatsapp.com/send?phone=917834841685&amp;text= I'm interested in this product and I have a few questions. Can you help?  <?php



                                                                                                                                                                                            echo "</br>";



                                                                                                                                                                                            echo $url; ?>" target="_blank" class="chatbtn ctrlcenter btngroup8"><span style="display: inline;  "> <img style="height: 40px; color:white;" src="./admin Pannel/img/icons/whatsapp.svg" alt=""> </span> <span style="color: white;" class="fctrl wtext">Chat with us</span></a>



    </div>



    <div class="main-wrapper">



        <header class="header-main_area header-main_area-3">



            <div class="header-top_area">



                <div class="container">



                    <div class="row">



                        <div class="col-lg-12">



                            <div class="ht-left_area">



                                <div class="welcome_text">



                                    <p style="text-align: center;"><b>Free shipping on all domestic orders with coupon
                                            code</b>



                                        <span>"Earrings0920"</span>



                                    </p>



                                </div>



                            </div>



                        </div>



                    </div>



                </div>



            </div>



            <div class="header-middle_area d-none d-lg-block">



                <div class="container">



                    <div class="row">



                        <div class="col-lg-12">



                            <div class="header-middle_wrap">



                                <div class="header-logo">



                                    <a href="index ">







                                        <img src="assets/images/menu/logo/4.png" alt="Hiraola's Header Logo">



                                    </a>



                                </div>



                                <div class="header-contact_area">



                                    <div class="contact-box">



                                        <span>Location</span>



                                        <p>1st Floor, 4/45, Block-4, Geeta Colony, Delhi-110031.</p>



                                    </div>



                                    <div class="contact-box">



                                        <span>Phone Number</span>



                                        <p>+91-7834841685</p>



                                    </div>



                                </div>







                                <div class="header-right_area">



                                    <div class="hiraola-btn-ps_center slide-btn">



                                        <a class="hiraola-btn" href="products ?wxyz=11">Shopping Now</a>



                                    </div>



                                </div>



                            </div>



                        </div>



                    </div>



                </div>



            </div>



            <div class="header-bottom_area">



                <div class="container">



                    <div class="row">



                        <div class="col-md-4 col-sm-4 d-lg-none d-block">



                            <div class="header-logo">



                                <a href="index ">



                                    <img src="assets/images/menu/logo/2.png" alt="Hiraola's Header Logo">



                                </a>



                            </div>



                        </div>



                        <div class="col-lg-12 d-none d-lg-flex justify-content-center position-static">



                            <div class="main-menu_area">



                                <nav>



                                    <ul>



                                        <li class="dropdown-holder"><a href="index ">Home</a>







                                        </li>







                                        <li><a href="index ">SHOP</a>







                                            <ul class="hm-dropdown">







                                                <?php







                                                $menu_cat = " SELECT * FROM `collection_page`";



                                                $menu_cat_run = $conn->query($menu_cat);



                                                if ($menu_cat_run) {



                                                    if (mysqli_num_rows($menu_cat_run) > 0) {



                                                        while ($menu_data = mysqli_fetch_assoc($menu_cat_run)) { ?>







                                                            <li><a href="./collection/<?php echo $menu_data['collection_url_handler'] ?>">
                                                                    <?php echo $menu_data['Category_Name'] ?>
                                                                </a></li>















                                                <?php }
                                                    }
                                                }







                                                ?>







                                            </ul>



                                        </li>



                                        <li><a href="#">About Us</a></li>



                                        <li><a href="#">What Our Client Says</a></li>



                                        <li><a href="contact ">Contact</a></li>



                                    </ul>



                                </nav>



                            </div>

                            <div class="col-lg-3 col-md-8 col-sm-8">



                                <div class="header-right_area">



                                    <ul>



                                        <li>



                                            <a href="wishlist " class="wishlist-btn">



                                                <i class="ion-android-favorite-outline"></i>



                                            </a>



                                        </li>



                                        <li>



                                            <button href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white d-lg-none d-block">



                                                <i class="ion-navicon"></i>



                                            </button>



                                        </li>



                                        <li style="cursor: pointer;">



                                            <a onclick="window.location.href='./cart  '" class="minicart-btn toolbar-btn">



                                                <i class="ion-bag"></i>



                                            </a>



                                        </li>



                                    </ul>



                                </div>



                            </div>

                        </div>





                    </div>



                </div>



            </div>



            <!-- sticky  -->



            <div class="header-bottom_area header-bottom_area-2 header-sticky stick white--color">



                <div class="container">



                    <div class="row">



                        <div class="col-lg-3 col-md-4 col-sm-4">



                            <div class="header-logo">



                                <a href="index  ">



                                    <img src="assets/images/menu/logo/2.png" alt="Hiraola's Header Logo">



                                </a>



                            </div>



                        </div>



                        <div class="col-lg-7 d-none d-lg-block position-static">



                            <div class="main-menu_area">



                                <nav>



                                    <ul>



                                        <li class="dropdown-holder"><a href="index  ">Home</a>







                                        </li>







                                        <li><a href="index  ">SHOP</a>







                                            <ul class="hm-dropdown">







                                                <?php







                                                $menu_cat = " SELECT * FROM `collection_page`";



                                                $menu_cat_run = $conn->query($menu_cat);



                                                if ($menu_cat_run) {



                                                    if (mysqli_num_rows($menu_cat_run) > 0) {



                                                        while ($menu_data = mysqli_fetch_assoc($menu_cat_run)) { ?>







                                                            <li><a href="collection/<?php echo $menu_data['collection_url_handler'] ?>">
                                                                    <?php echo $menu_data['Category_Name'] ?>
                                                                </a></li>















                                                <?php }
                                                    }
                                                }







                                                ?>







                                            </ul>



                                        </li>



                                        <li><a href="#">About Us</a></li>



                                        <li><a href="#">What Our Client Says</a></li>



                                        <li><a href="contact ">Contact</a></li>



                                    </ul>



                                </nav>



                            </div>



                        </div>



                        <div class="col-lg-2 col-md-8 col-sm-8">



                            <div class="header-right_area">



                                <ul>



                                    <li>



                                        <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn color--white d-lg-none d-block">



                                            <i class="ion-navicon"></i>



                                        </a>



                                    </li>



                                </ul>



                            </div>



                        </div>



                    </div>



                </div>



            </div>



            <div class="offcanvas-minicart_wrapper" id="miniCart">



                <div class="offcanvas-menu-inner">



                    <a href="#" class="btn-close"><i class="ion-android-close"></i></a>



                    <div class="minicart-content">



                        <div class="minicart-heading">



                            <h4>Shopping Cart</h4>



                        </div>



                        <ul class="minicart-list">



                            <?php

                            $total = 0;

                            foreach ($_SESSION['cart'] as $key => $value) { ?>





                                <li class="minicart-product">



                                    <a class="product-item_remove" href="javascript:void(0)"><i class="ion-android-close"></i></a>



                                    <div class="product-item_img">



                                        <img src="./admin/assets/images/product_images/<?php echo $value['img'] ?>" alt="Hiraola's Product Image">



                                    </div>



                                    <div class="product-item_content">



                                        <a class="product-item_title" href="product/<?php echo $value['productsno'] ?>">
                                            <?php echo $value['product_name'] ?>
                                        </a>



                                        <span class="product-item_quantity">
                                            <?php echo $value['Qty'] ?> x <?php echo $value['price'] ?>
                                        </span>



                                    </div>



                                </li>



                                <?php $total = $total + $value['Qty'] * $value['price']; ?>





                            <?php }





                            ?>











                        </ul>



                    </div>



                    <div class="minicart-item_total">



                        <span>Subtotal</span>



                        <span class="ammount"> &#8377; <?php echo $total ?></span>



                    </div>



                    <div class="minicart-btn_area">



                        <a href="cart " class="hiraola-btn hiraola-btn_dark hiraola-btn_fullwidth">View Cart</a>



                    </div>



                    <div class="minicart-btn_area">



                        <a href="checkout " class="hiraola-btn hiraola-btn_dark hiraola-btn_fullwidth">Checkout</a>



                    </div>



                </div>



            </div>



            <div class="offcanvas-search_wrapper" id="searchBar">



                <div class="offcanvas-menu-inner">



                    <div class="container">



                        <a href="#" class="btn-close"><i class="ion-android-close"></i></a>



                        <!-- Begin Offcanvas Search Area -->



                        <div class="offcanvas-search">



                            <form action="#" class="hm-searchbox">



                                <input type="text" placeholder="Search for item...">



                                <button class="search_btn" type="submit"><i class="ion-ios-search-strong"></i></button>



                            </form>



                        </div>



                        <!-- Offcanvas Search Area End Here -->



                    </div>



                </div>



            </div>



            <div class="mobile-menu_wrapper" id="mobileMenu">



                <div class="offcanvas-menu-inner">



                    <div class="container">



                        <nav class="offcanvas-navigation">



                            <ul class="mobile-menu">



                                <li class="menu-item-has-children active"><a href="index "><span class="mm-text">Home</span></a>







                                </li>



                                <li>

                                    <h5>Our Products</h5>







                                    <ul class="hm-dropdown">







                                        <?php







                                        $menu_cat = " SELECT * FROM `collection_page`";



                                        $menu_cat_run = $conn->query($menu_cat);



                                        if ($menu_cat_run) {



                                            if (mysqli_num_rows($menu_cat_run) > 0) {



                                                while ($menu_data = mysqli_fetch_assoc($menu_cat_run)) { ?>







                                                    <li><a href="collection/<?php echo $menu_data['collection_url_handler'] ?>">
                                                            <?php echo $menu_data['Category_Name'] ?>
                                                        </a></li>















                                        <?php }
                                            }
                                        }







                                        ?>







                                    </ul>



                                </li>



                                <li><a href="#">About Us</a></li>



                                <li><a href="#">What Our Client Says</a></li>



                                <li><a href="contact ">Contact</a></li>



                            </ul>



                            </li>



                            </ul>



                        </nav>







                    </div>



                </div>



            </div>



        </header>