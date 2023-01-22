<?php
include './header.php';
?>
<div class="hiraola-slider_area-2 hiraola-slider_area-3 color-white">
    <div class="main-slider">

        <div class="single-slide animation-style-01 bg-6">
            <div class="container">
                <div class="slider-content slider-content-2">

                    <h5><span>End of Year</span> Sale</h5>
                    <h2>Kridha Fashion</h2>


                    <h3>Best Collect For All Time</h3>





                    <h4>Starting at <span>₹ 19 </span></h4>





                    <div class="hiraola-btn-ps_center slide-btn">





                        <a class="hiraola-btn" href="">Shopping Now</a>





                    </div>





                </div>





                <div class="slider-progress"></div>





            </div>





        </div>





        <!-- Single Slide Area End Here -->





        <!-- Begin Single Slide Area -->





        <div class="single-slide animation-style-02 bg-7">





            <div class="container">





                <div class="slider-content">





                    <h5><span>-10% Off</span> This Week</h5>





                    <h2>Kridha Fashion</h2>





                    <h3>Best Collect For All Time</h3>





                    <h4>Starting at <span>₹ 19 </span></h4>





                    <div class="hiraola-btn-ps_center slide-btn">





                        <a class="hiraola-btn" href="">Shopping Now</a>





                    </div>





                </div>





                <div class="slider-progress"></div>





            </div>





        </div>





        <!-- Single Slide Area End Here -->





    </div>





</div>





<style>











</style>











<div class="hiraola-banner_area">





    <div class="container-fluid">





        <div class="row">





            <div class="col-lg-4 col-md-6">





                <div class="banner-item img-hover_effect">





                    <a href="products.php?wxyz=13">





                        <img class="img-full" src="assets/images/banner/3_1.jpg" alt="Hiraola's Banner">





                    </a>





                </div>





            </div>





            <div class="col-lg-4 col-md-6">





                <div class="banner-item img-hover_effect">





                    <a href="products.php?wxyz=14">





                        <img class="img-full" src="assets/images/banner/3_2.jpg" alt="Hiraola's Banner">





                    </a>





                </div>





            </div>





            <div class="col-lg-4 col-md-6">





                <div class="banner-item img-hover_effect">





                    <a href="products.php?wxyz=16">





                        <img class="img-full" src="assets/images/banner/3_3.jpg" alt="Hiraola's Banner">





                    </a>





                </div>





            </div>





        </div>





    </div>





</div>











<!-- Begin Hiraola's Product Area -->







<div class="hiraola-product_area">





    <div class="container">





        <div class="row">





            <div class="col-lg-12">





                <div class="hiraola-section_title">





                    <h4>Latest In Store</h4>





                </div>





            </div>





            <div class="col-lg-12">





                <div class="hiraola-product_slider">





                    <!-- Begin Hiraola's Slide Item Area -->











                    <?php





                    $show_latest_product = "SELECT * FROM `product_page` WHERE `status`=0";





                    $show_latest_product_run = $conn->query($show_latest_product);





                    if ($show_latest_product_run) {











                        if (mysqli_num_rows($show_latest_product_run) > 0) {











                            while ($data_latest_product = mysqli_fetch_assoc($show_latest_product_run)) { ?>





                                <div class="slide-item">





                                    <div class="single_product">





                                        <div class="product-img">





                                            <a href="product/<?php echo $data_latest_product['url_handler'] ?>" class="mb-3">





                                                <img class="primary-img" src="./admin/assets/images/product_images/<?php echo $data_latest_product['product_img'] ?>" alt="Hiraola's Product Image">





                                                <img class="secondary-img" src="./admin/assets/images/product_images/<?php echo $data_latest_product['product_img2'] ?>" alt="Hiraola's Product Image">





                                            </a>





                                            <span class="sticker">New</span>











                                        </div>





                                        <div class="hiraola-product_content">





                                            <div class="product-desc_info">





                                                <h6><a class="product-name" href="product/<?php echo $data_latest_product['url_handler'] ?>"> <?php











                                                                                                                                                if (strlen($data_latest_product['product_name']) < 25) {





                                                                                                                                                    echo $data_latest_product['product_name'];
                                                                                                                                                } else {





                                                                                                                                                    echo substr($data_latest_product['product_name'], 0, 25) . '....';
                                                                                                                                                }

















                                                                                                                                                ?></a></h6>





                                                <div class="price-box">





                                                    <span class="new-price"> &#8377; <?php echo $data_latest_product['price']; ?></span>





                                                </div>





                                                <div class="additional-add_action">





                                                    <ul>





                                                        <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>





                                                        </li>





                                                    </ul>





                                                </div>





                                                <div class="rating-box">





                                                    <ul>





                                                        <li><i class="fa fa-star-of-david"></i></li>





                                                        <li><i class="fa fa-star-of-david"></i></li>





                                                        <li><i class="fa fa-star-of-david"></i></li>





                                                        <li><i class="fa fa-star-of-david"></i></li>





                                                        <li class="silver-color"><i class="fa fa-star-of-david"></i></li>





                                                    </ul>





                                                </div>





                                            </div>





                                        </div>





                                    </div>





                                </div>





                    <?php }
                        } else {





                            echo 'No Product Found';
                        }
                    }











                    ?>





























                </div>





            </div>





        </div>





    </div>





</div>





<!-- Hiraola's Product Area End Here -->





<div class="static-banner_area static-banner_area-2">





    <div class="container">





        <div class="row">





            <div class="col-lg-12">





                <div class="static-banner-image static-banner-image-2">





                    <div class="static-banner-content">





                        <p><span>-25% Off</span>This Week</p>





                        <h2>Featured Product</h2>





                        <h3>Latest Accessories 2023</h3>





                        <p class="schedule">





                            Starting at





                            <span> ₹ 19</span>





                        </p>





                        <div class="hiraola-btn-ps_left">





                            <a href="products.php?wxyz=11" class="hiraola-btn">Shopping Now</a>





                        </div>





                    </div>





                </div>





            </div>





        </div>





    </div>





</div>






<div class="hiraola-product_area">





    <div class="container">




        <?php





        $show_cat = " SELECT *  FROM `collection_page` ";





        $show_cat_run = $conn->query($show_cat);





        if ($show_cat_run) {











            if (mysqli_num_rows($show_cat_run) > 0) {





























                while ($data_cat = mysqli_fetch_assoc($show_cat_run)) { ?>























                    <div class="row">























                        <div class="col-lg-12">











                            <div class="hiraola-section_title">





                                <h4><?php echo $data_cat['Category_Name'] ?></h4>





                            </div>





                        </div>





                        <div class="col-lg-12">





                            <div class="hiraola-product_slider">





                                <!-- Begin Hiraola's Slide Item Area -->











                                <?php





                                $show_cat_product = " SELECT *  FROM `product_page` INNER JOIN `collection_page` on product_page.collection_id=collection_page.id WHERE `collection_id`= $data_cat[id] AND `status`=0 ";





                                $show_cat_product_run = $conn->query($show_cat_product);





                                if ($show_cat_product_run) {











                                    if (mysqli_num_rows($show_cat_product_run) > 0) {











                                        while ($data_cat_product = mysqli_fetch_assoc($show_cat_product_run)) { ?>





                                            <div class="slide-item">





                                                <div class="single_product">





                                                    <div class="product-img">





                                                        <a href="product/<?php echo $data_cat_product['url_handler'] ?>" class="mb-3">





                                                            <img class="primary-img" src="./admin/assets/images/product_images/<?php echo $data_cat_product['product_img'] ?>" alt="Hiraola's Product Image">





                                                            <img class="secondary-img" src="./admin/assets/images/product_images/<?php echo $data_cat_product['product_img2'] ?>" alt="Hiraola's Product Image">





                                                        </a>





                                                        <span class="sticker">New</span>











                                                    </div>





                                                    <div class="hiraola-product_content">





                                                        <div class="product-desc_info">





                                                            <h6><a class="product-name" href="product/<?php echo $data_cat_product['url_handler'] ?>"> <?php











                                                                                                                                                        if (strlen($data_cat_product['product_name']) < 25) {





                                                                                                                                                            echo $data_cat_product['product_name'];
                                                                                                                                                        } else {





                                                                                                                                                            echo substr($data_cat_product['product_name'], 0, 25) . '....';
                                                                                                                                                        }

















                                                                                                                                                        ?></a></h6>





                                                            <div class="price-box">





                                                                <span class="new-price"> &#8377; <?php echo $data_cat_product['price']; ?></span>





                                                            </div>





                                                            <div class="additional-add_action">





                                                                <ul>





                                                                    <li><a class="hiraola-add_compare" href="wishlist.html" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>





                                                                    </li>





                                                                </ul>





                                                            </div>





                                                            <div class="rating-box">





                                                                <ul>





                                                                    <li><i class="fa fa-star-of-david"></i></li>





                                                                    <li><i class="fa fa-star-of-david"></i></li>





                                                                    <li><i class="fa fa-star-of-david"></i></li>





                                                                    <li><i class="fa fa-star-of-david"></i></li>





                                                                    <li class="silver-color"><i class="fa fa-star-of-david"></i></li>





                                                                </ul>





                                                            </div>





                                                        </div>





                                                    </div>





                                                </div>





                                            </div>





                                <?php }
                                    } else {





                                        echo 'No Product Found';
                                    }
                                }











                                ?>





























                            </div>





                        </div>





                    </div>





                    <?php





                    if (mysqli_num_rows($show_cat_product_run) > 0) { ?>





                        <div class="row my-5 " style="text-align: center; display: flex; align-items: center; justify-content: center;">











                            <input onclick="window.location.href='collection/<?php echo $data_cat['collection_url_handler']; ?>'" style=" width:200px;" class="btn btn-primary " type="button" value="View All">





                        </div>











                    <?php      } else {
                    }





                    ?>























        <?php  }
            } else {





                echo "No Data Found";
            }
        }











        ?>











    </div>





</div>





<!-- Hiraola's Product Tab Area End Here -->











<div class="hiraola-banner_area-2 hiraola-banner_area-7">





    <div class="container">





        <div class="row">





            <div class="col-lg-6">





                <div class="banner-item img-hover_effect">





                    <a href="collection/necklace-with-earrings">





                        <img class="img-full" src="assets/images/banner/3_4.jpg" alt="Hiraola's Banner">





                    </a>





                </div>





            </div>





            <div class="col-lg-6">





                <div class="banner-item img-hover_effect">





                    <a href="collection/anklets">





                        <img class="img-full" src="assets/images/banner/3_5.jpg" alt="Hiraola's Banner">





                    </a>





                </div>





            </div>





        </div>





    </div>





</div>



<div class="brand-area">


</div>


<?php


include './footer.php';











?>










</div>











<!-- JS





============================================ -->











<!-- jQuery JS -->











<!-- <script src="assets/js/main.min.js"></script> -->











</body>











</html>