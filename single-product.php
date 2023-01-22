<?php include './header.php'; ?>








<?php







$show_product = " SELECT *  FROM `product_page` INNER JOIN `collection_page` on product_page.collection_id=collection_page.id WHERE `url_handler`= '$_REQUEST[productid]'";








$show_product_run = $conn->query($show_product);







if (mysqli_num_rows($show_product_run) > 0) {



    $show_product_data = mysqli_fetch_assoc($show_product_run);
}







?>







<!-- Hiraola's Breadcrumb Area End Here -->







<!-- Begin Hiraola's Single Product Area -->







<?php















?>



<style>
    .cart-indicator {

        /* border: 2px solid green; */

        border-radius: 10px;

        background-color: lightgreen;

        width: 50%;

        text-align: center;



        display: flex;

        justify-content: space-between;

        align-items: center;

        padding: 10px;

        margin: 10px;



    }



    .cart-indicator h1 {

        color: white;

    }
</style>





<div class="sp-area">



    <div class="container">



        <div class="sp-nav">





            <div class="row">



                <div class="col-lg-5 col-md-5">



                    <div class="sp-img_area">



                        <div class="zoompro-border">


                            <?php


                            ?>



                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">

                                        <?php

                                        if ($show_product_data['product_img'] != "") { ?>
                                            <img class="d-block w-100" src="./admin/assets/images/product_images/<?php echo $show_product_data['product_img'] ?>" alt="First slide">

                                        <?php }

                                        ?>
                                    </div>
                                    <div class="carousel-item">
                                        <?php

                                        if ($show_product_data['product_img2'] != "") { ?>
                                            <img class="d-block w-100" src="./admin/assets/images/product_images/<?php echo $show_product_data['product_img2'] ?>" alt="First slide">

                                        <?php }

                                        ?>
                                    </div>
                                    <!-- <div class="carousel-item">
                                        <?php

                                        if ($show_product_data['product_img3'] != "") { ?>
                                            <img class="d-block w-100" src="./admin/assets/images/product_images/<?php echo $show_product_data['product_img3'] ?>" alt="First slide">

                                        <?php }

                                        ?>
                                    </div>
                                    <div class="carousel-item">
                                        <?php

                                        if ($show_product_data['product_img4'] != "") { ?>
                                            <img class="d-block w-100" src="./admin/assets/images/product_images/<?php echo $show_product_data['product_img4'] ?>" alt="First slide">

                                        <?php }

                                        ?>
                                    </div> -->

                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>



                        </div>

                    </div>



                </div>



                <div class="col-lg-7 col-md-7">



                    <div class="sp-content">



                        <div class="sp-heading">



                            <h5><a href="#"><?php echo $show_product_data['product_name'] ?></a></h5>



                        </div>



                        <span class="reference"><?php echo $show_product_data['Category_Name'] ?></span>



                        <div class="rating-box">



                            <ul>



                                <li><i class="fa fa-star-of-david"></i></li>



                                <li><i class="fa fa-star-of-david"></i></li>



                                <li><i class="fa fa-star-of-david"></i></li>



                                <li><i class="fa fa-star-of-david"></i></li>



                                <li class="silver-color"><i class="fa fa-star-of-david"></i></li>



                            </ul>



                        </div>



                        <div class="sp-essential_stuff">



                            <ul>



                                <li>Price<a href="javascript:void(0)"><span> &#8377;<?php echo $show_product_data['price'] ?></span></a></li>















                                <li>Availability: <a href="javascript:void(0)">In Stock</a></li>



                            </ul>



                        </div>





                        <div class="tab-content hiraola-tab_content py-3">

                            <h3> Product Description</h3>

                            <hr>



                            <div id="description" class="tab-pane active show" role="tabpanel">



                                <div class="product-description">







                                    <p>Beautiful Ring with silver Stones<br>-Adjustable<br>-Best Quality Products<br>-Non Corrosive<br>-Anti Tarnish<br>-Best Price Assurance</p>





                                </div>



                            </div>











                        </div>





                        <div class="fix-bottom product-sticky-content ">

                            <div class="product-form container">

                                <div class="mb-1 mr-1">



                                </div>





                                <input value="<?php echo $show_product_data['productid'] ?>" id="cart_id" type="hidden" name="cart_id">

                                <input value="<?php echo $show_product_data['product_name'] ?>" id="cart_name" type="hidden" name="cart_name">

                                <input value="<?php echo $show_product_data['product_img'] ?>" id="cart_img" type="hidden" name="cart_img">



                                <input value="<?php echo $show_product_data['price'] ?>" id="cart_price" type="hidden" name="cart_price">



                                <input value="1" id="cart_qty" type="hidden" name="cart_qty">

                                <button onclick="show_indicatore()" style="color:white; width:150px;" value="submit" name="submit" id="ajax-cart" class=" btn btn-primary btn-cart">

                                    <i class="w-icon-cart"></i>

                                    <span>Add to Cart</span>

                                </button>

                            </div>

                        </div>

                        <?php





                        ?>

                        <script>
                            $(document).ready(function() {









                                $("#ajax-cart").click(function() {







                                    var ProductId = $('#cart_id').val();

                                    var ProductName = $('#cart_name').val();

                                    var ProductImg = $('#cart_img').val();

                                    var ProductPrice = $('#cart_price').val();

                                    var ProductQty = $('#cart_qty').val();

                                    var Productsubmit = $('#ajax-cart').val();









                                    if (ProductId != "") {

                                        $.ajax({



                                            url: "./assets/manage-files/cart-manage.php",

                                            type: "POST",

                                            data: {

                                                Product_id: ProductId,

                                                Product_name: ProductName,

                                                Product_img: ProductImg,

                                                Product_price: ProductPrice,

                                                Product_qty: ProductQty,

                                                productSubmit: Productsubmit

                                            },

                                            success:



                                                function(datasave) {

                                                    // alert("data saved");





                                                    // document.getElementById('show_id').innerText = datasave;



                                                }











                                        });



                                    }



                                });



                            });
                        </script>







                        <div class="hiraola-social_link">



                            <ul>



                                <li class="facebook">



                                    <a href="https://www.facebook.com/" data-bs-toggle="tooltip" target="_blank" title="Facebook">



                                        <i class="fab fa-facebook"></i>



                                    </a>



                                </li>



                                <li class="twitter">



                                    <a href="https://twitter.com/" data-bs-toggle="tooltip" target="_blank" title="Twitter">



                                        <i class="fab fa-twitter-square"></i>



                                    </a>



                                </li>



                                <li class="youtube">



                                    <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">



                                        <i class="fab fa-youtube"></i>



                                    </a>



                                </li>



                                <li class="google-plus">



                                    <a href="https://www.plus.google.com/discover" data-bs-toggle="tooltip" target="_blank" title="Google Plus">



                                        <i class="fab fa-google-plus"></i>



                                    </a>



                                </li>



                                <li class="instagram">



                                    <a href="https://rss.com/" data-bs-toggle="tooltip" target="_blank" title="Instagram">



                                        <i class="fab fa-instagram"></i>



                                    </a>



                                </li>



                            </ul>



                        </div>



                    </div>



                </div>



            </div>



        </div>



    </div>



</div>



<!-- Hiraola's Single Product Area End Here -->

<div style="text-align:center;">



    <div class="row " id="cart-indicator-row" style="display: none;     justify-content: center; ">

        <div class="cart-indicator">

            <div>

                <h1>Item Added </h1>

            </div>

            <div>

                <button onclick="window.location.href='./cart.php'" class="btn btn-primary">View Cart</button>

            </div>



        </div>





    </div>

</div>

<!-- Begin Hiraola's Single Product Tab Area -->



<div class="hiraola-product-tab_area-2 sp-product-tab_area">



    <div class="container">





        <div class="row">



            <div class="col-lg-12">



                <div class="sp-product-tab_nav ">



                    <div class="product-tab">



                        <ul class="nav product-menu">



                            <li><a class="active" data-bs-toggle="tab" href="#description"><span>Description</span></a>



                            </li>







                            <li><a data-bs-toggle="tab" href="#reviews"><span>Reviews (1)</span></a></li>



                        </ul>



                    </div>



                    <div class="tab-content hiraola-tab_content">



                        <div id="description" class="tab-pane active show" role="tabpanel">



                            <div class="product-description">







                                <?php echo $show_product_data['product_desc']   ?>



                            </div>



                        </div>







                        <div id="reviews" class="tab-pane" role="tabpanel">



                            <div class="tab-pane active" id="tab-review">



                                <form class="form-horizontal" id="form-review">



                                    <div id="review">



                                        <table class="table table-striped table-bordered">



                                            <tbody>



                                                <tr>



                                                    <td style="width: 50%;"><strong>Customer</strong></td>



                                                    <td class="text-right">25/04/2022</td>



                                                </tr>



                                                <tr>



                                                    <td colspan="2">



                                                        <p>Good product! Thank you very much</p>



                                                        <div class="rating-box">



                                                            <ul>



                                                                <li><i class="fa fa-star-of-david"></i></li>



                                                                <li><i class="fa fa-star-of-david"></i></li>



                                                                <li><i class="fa fa-star-of-david"></i></li>



                                                                <li><i class="fa fa-star-of-david"></i></li>



                                                                <li><i class="fa fa-star-of-david"></i></li>



                                                            </ul>



                                                        </div>



                                                    </td>



                                                </tr>



                                            </tbody>



                                        </table>



                                    </div>



                                    <h2>Write a review</h2>



                                    <div class="form-group required">



                                        <div class="col-sm-12 p-0">



                                            <label>Your Email <span class="required">*</span></label>



                                            <input class="review-input" type="email" name="con_email" id="con_email" required>



                                        </div>



                                    </div>



                                    <div class="form-group required second-child">



                                        <div class="col-sm-12 p-0">



                                            <label class="control-label">Share your opinion</label>



                                            <textarea class="review-textarea" name="con_message" id="con_message"></textarea>



                                            <div class="help-block"><span class="text-danger">Note:</span> HTML is not



                                                translated!</div>



                                        </div>



                                    </div>



                                    <div class="form-group last-child required">



                                        <div class="col-sm-12 p-0">



                                            <div class="your-opinion">



                                                <label>Your Rating</label>



                                                <span>



                                                    <select class="star-rating">



                                                        <option value="1">1</option>



                                                        <option value="2">2</option>



                                                        <option value="3">3</option>



                                                        <option value="4">4</option>



                                                        <option value="5">5</option>



                                                    </select>



                                                </span>



                                            </div>



                                        </div>



                                        <div class="hiraola-btn-ps_right">



                                            <a href="javascript:void(0)" class="hiraola-btn hiraola-btn_dark">Continue</a>



                                        </div>



                                    </div>



                                </form>



                            </div>



                        </div>



                    </div>



                </div>



            </div>



        </div>



    </div>



</div>



<div class="hiraola-product_area hiraola-product_area-2 section-space_add">



    <div class="container">



        <div class="row">



            <div class="col-lg-12">







                <div class="hiraola-section_title">



                    <h4>Related Products</h4>



                </div>







            </div>



            <div class="col-lg-12">



                <div class="hiraola-product_slider-3">



                    <?php







                    $related_products = "SELECT * FROM `product_page` WHERE collection_id=$show_product_data[id] AND `status`=0";



                    $related_products_run = $conn->query($related_products);



                    if ($related_products_run) {



                        if (mysqli_num_rows($related_products_run) > 0) {







                            while ($data_related_products = mysqli_fetch_assoc($related_products_run)) { ?>







                                <div class="slide-item">



                                    <div class="single_product">



                                        <div class="product-img mb-3">



                                            <a href="product/<?php echo $data_related_products['url_handler'] ?>">



                                                <img class="primary-img" src="./admin/assets/images/product_images/<?php echo $data_related_products['product_img'] ?>" alt="Hiraola's Product Image">



                                                <img class="secondary-img" src="./admin/assets/images/product_images/<?php echo $data_related_products['product_img2'] ?>" alt="Hiraola's Product Image">



                                            </a>



                                            <span class="sticker-2">Sale</span>



                                            <div class="add-actions">







                                            </div>



                                        </div>



                                        <div class="hiraola-product_content">



                                            <div class="product-desc_info">



                                                <h6><a class="product-name" href="productid/<?php echo $data_related_product['url_handler'] ?>"><?php echo $data_related_products['product_name'] ?></a></h6>



                                                <div class="price-box">



                                                    <span class="new-price">&#8377;<?php echo $data_related_products['price']; ?></span>



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
                        }
                    }



















                    ?>



                </div>



            </div>



        </div>



    </div>



</div>



<script>
    function show_indicatore() {



        document.getElementById("cart-indicator-row").style.display = 'flex';











    }
</script>



<?php







include './footer.php';



?>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>




</body>











</html>