<?php include './header.php'; ?>

<!-- Hiraola's Header Main Area End Here -->



<!-- Begin Hiraola's Breadcrumb Area -->

<div class="breadcrumb-area">

    <div class="container">

        <div class="breadcrumb-content">

            <h2>Shop</h2>

            <ul>

                <li><a href="index.php">Home</a></li>

                <li class="active">Shop Now</li>

            </ul>

        </div>

    </div>

</div>

<!-- Hiraola's Breadcrumb Area End Here -->



<!-- Begin Hiraola's Content Wrapper Area -->

<div class="hiraola-content_wrapper">

    <div class="container">

        <div class="row">
            <div class="col-lg-12 order-1 order-lg-2">

                <div class="shop-product-wrap grid gridview-3 row">

                    <?php

                    $show_cat_product = "SELECT * FROM `product_page` WHERE collection_url_handler_2='$_REQUEST[wxyz]' AND status=0";


                    $show_cat_product_run = $conn->query($show_cat_product);

                    if ($show_cat_product_run) {

                        if (mysqli_num_rows($show_cat_product_run) > 0) {

                            while ($data_cat_product = mysqli_fetch_assoc($show_cat_product_run)) { ?>

                                <div class="col-lg-4">

                                    <div class="slide-item">

                                        <div class="single_product">

                                            <div class="product-img mb-2">

                                                <a href="product/<?php echo $data_cat_product['url_handler'] ?>">

                                                    <img class="primary-img" src="./admin/assets/images/product_images/<?php echo $data_cat_product['product_img'] ?>" alt="Hiraola's Product Image">

                                                    <img class="secondary-img" src="./admin/assets/images/product_images/<?php echo $data_cat_product['product_img2'] ?>" alt="Hiraola's Product Image">

                                                </a>

                                                <div class="add-actions">


                                                </div>

                                            </div>

                                            <div class="hiraola-product_content">

                                                <div class="product-desc_info">

                                                    <h6><a class="product-name" href="product/<?php echo $data_cat_product['url_handler'] ?>"><?php echo $data_cat_product['product_name'] ?></a></h6>

                                                    <div class="price-box">

                                                        <span class="new-price"> &#8377;<?php echo $data_cat_product['price'] ?></span>

                                                    </div>

                                                    <div class="additional-add_action">

                                                        <ul>

                                                            <li><a class="hiraola-add_compare" href="#" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>

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

                                    <div class="list-slide_item">

                                        <div class="single_product">

                                            <div class="product-img">

                                                <a href="single-product.php">

                                                    <img class="primary-img" src="assets/images/product/medium-size/1-9.jpg" alt="Hiraola's Product Image">

                                                    <img class="secondary-img" src="assets/images/product/medium-size/1-8.jpg" alt="Hiraola's Product Image">

                                                </a>

                                            </div>

                                            <div class="hiraola-product_content">

                                                <div class="product-desc_info">

                                                    <h6><a class="product-name" href="single-product.php">Flash Furniture

                                                            Alonza Se...</a></h6>

                                                    <div class="rating-box">

                                                        <ul>

                                                            <li><i class="fa fa-star-of-david"></i></li>

                                                            <li><i class="fa fa-star-of-david"></i></li>

                                                            <li><i class="fa fa-star-of-david"></i></li>

                                                            <li><i class="fa fa-star-of-david"></i></li>

                                                            <li class="silver-color"><i class="fa fa-star-of-david"></i></li>

                                                        </ul>

                                                    </div>

                                                    <div class="price-box">

                                                        <span class="new-price">£90.36</span>

                                                    </div>

                                                    <div class="product-short_desc">

                                                        <p>The effects of gold are subtle, but definitely apparent. ... It was

                                                            considered that gold possessed an energy that brought warm, soothing

                                                            vibrations to the body to aid healing, for when the body relaxes and the

                                                            blood vessels in the cells aren't as constricted, blood can move through

                                                            the tissue spaces more easily.</p>

                                                    </div>

                                                </div>

                                                <div class="add-actions">

                                                    <ul>

                                                        <li><a class="hiraola-add_cart" href="cart.php" data-bs-toggle="tooltip" data-placement="top" title="Add To Cart">Add To Cart</a></li>

                                                        <li><a class="hiraola-add_compare" href="compare.php" data-bs-toggle="tooltip" data-placement="top" title="Compare This Product"><i class="ion-ios-shuffle-strong"></i></a></li>

                                                        <li class="quick-view-btn" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><a href="javascript:void(0)" data-bs-toggle="tooltip" data-placement="top" title="Quick View"><i class="ion-eye"></i></a></li>

                                                        <li><a class="hiraola-add_compare" href="#" data-bs-toggle="tooltip" data-placement="top" title="Add To Wishlist"><i class="ion-android-favorite-outline"></i></a>

                                                        </li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>



                    <?php  }
                        }
                    }



                    ?>































                </div>

            </div>

        </div>

    </div>

    <?php

    include './footer.php';



    ?>



    </body>





    </html>