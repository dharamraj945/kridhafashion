<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>



<?php



include '../dbconfig.php';



if ($_SERVER['REQUEST_METHOD'] === 'POST') {







    if (isset($_POST['add_category'])) {





        if ($_POST['category_name'] != "") {







            if ($_POST['product_desc'] != "") {

                if ($_POST['meta_title'] != "") {

                    if ($_POST['meta_description'] != "") {

                        $url_handler = strtolower($_POST['category_name']);
                        $url_handler = str_replace(" ", "-", $url_handler);
                        $url_handler = str_replace(")", "-", $url_handler);
                        $url_handler = str_replace("(", "-", $url_handler);








                        $query_run = "INSERT INTO `collection_page`( `Category_Name`, `Category_Desc`,`collection_url_handler`,`cat_meta_title`,`cat_meta_description`) VALUES ('$_POST[category_name]','$_POST[product_desc]','$url_handler','$_POST[meta_title]','$_POST[meta_description]')";




                        $query_fire = $conn->query($query_run);



                        if ($query_fire) {



                            echo "<script>alert('Category Added');
                            window.location.href='../add_category.php';</script>";
                        } else {
                            echo "<script>alert('An Error Occure');
        
                            // history.back(-1);

        
                                </script>";
                        }
                    } else {

                        echo "<script>alert('Meta Description Cannot Blank');
                        history.back(-1);
                        </script>";
                    }
                } else {


                    echo "<script>alert('Meta Title Cannot Blank');
                    history.back(-1);
                    </script>";
                }
            } else {

                echo "<script>alert('Write Descreption name');

                 history.back(-1);

                </script>";
            }
        } else {

            echo "<script>alert('Enter Category name');

            history.back(-1);


            </script>";
        }
    }



    if (isset($_POST['submit-add_product'])) {





        $random1 = rand(100000, 1000000);

        $random2 = rand(200000, 2000000);



        $date_time = date("jYhisA");







        $product_name = $_POST['product_name'];

        $product_des = $_POST['product_descreption'];

        $product_cmpr_price = $_POST['product_cmpr_price'];

        $product_status = $_POST['product_status'];

        $product_cat = $_POST['product_cat'];





        $product_price = $_POST['product_price'];

        $product_img1 = $date_time . $random1 . $_FILES['product_img']['name'];

        $product_img2 = $date_time . $random2 . $_FILES['product_img2']['name'];









        if ($product_name != "") {



            if ($product_price != "") {





                if ($product_cat != -1) {







                    if ($product_img1 != "") {







                        // product Image 1

                        $file_type = $_FILES['product_img']['type'];

                        $file_tmp = $_FILES['product_img']['tmp_name'];

                        $file_size = $_FILES['product_img']['size'];





                        // product Image 1

                        $file_typ2 = $_FILES['product_img2']['type'];

                        $file_tmp2 = $_FILES['product_img2']['tmp_name'];

                        $file_size2 = $_FILES['product_img2']['size'];











                        move_uploaded_file($file_tmp, ".././assets/images/product_images/" . $product_img1);

                        move_uploaded_file($file_tmp2, ".././assets/images/product_images/" . $product_img2);


                        $url_handler_product = strtolower($product_name);
                        $url_handler_product = str_replace(" ", "-", $url_handler_product);
                        $url_handler_product = str_replace(")", "-", $url_handler_product);
                        $url_handler_product = str_replace("(", "-", $url_handler_product);
                        $url_handler_product = str_replace("&", "-", $url_handler_product);


                        $insert_product = "INSERT INTO `product_page`(`product_name`, `Compare_price`, `price`, `product_img`,`product_img2`,`collection_id`, `product_desc`,`url_handler`,`product_meta_title`,`product_meta_description`, `status`) VALUES ('$product_name','$product_cmpr_price','$product_price','$product_img1','$product_img2','$product_cat','$product_des','$url_handler_product','$_POST[product_meta_title]','$_POST[product_meta_description]','$product_status')";


                        $insert_product_run = $conn->query($insert_product);

                        if ($insert_product_run) {

                            echo "<script>alert('New Product Added');

                            window.location.href='../add_product.php';

                            </script>";
                        } else {

                            echo "<script>alert('Fail To Add Product');

                            // window.location.href='../add_product.php';

                            </script>";
                        }
                    } else {

                        echo "<script>alert('Please Add Product Images');

                            window.location.href='../add_product.php';

                            </script>";
                    }
                } else {

                    echo "<script>alert('Select Product Category');

                    window.location.href='../add_product.php';

                    </script>";
                }
            } else {

                echo "<script>alert('Price Cannot Blank');

                window.location.href='../add_product.php';

                </script>";
            }
        } else {

            echo "<script>alert('Enter Category Name');

            window.location.href='../add_product.php';

            </script>";
        }
    } else {



        if (isset($_POST['submit_update_product'])) {



            $random1 = rand(100000, 1000000);

            $random2 = rand(200000, 2000000);



            $date_time = date("jYhisA");







            $product_name = $_POST['product_name_update'];

            $product_des = $_POST['product_descreption_update'];

            $product_cmpr_price = $_POST['product_cmpr_price_update'];

            $product_status = $_POST['product_status_update'];

            $product_cat = $_POST['product_cat_update'];

            $catalog_url = $_POST['catalog_url'];





            $product_price = $_POST['product_price_update'];

            $product_pric = $_POST['product_price_update'];

            $id = $_POST['prid'];





            $product_img1 = $_FILES['product_img_new']['name'];

            $product_img2 = $_FILES['product_img_new2']['name'];





            if ($product_img1 != "") {

                $product_img1 = $date_time . $random1 . $product_img1;

                $file_type = $_FILES['product_img_new']['type'];

                $file_tmp = $_FILES['product_img_new']['tmp_name'];

                $file_size = $_FILES['product_img_new']['size'];

                move_uploaded_file($file_tmp, ".././assets/images/product_images/" . $product_img1);

                unlink('.././assets/images/product_images/' . $_POST['product_img_old']);
            } else {

                $product_img1 = $_POST['product_img_old'];
            }





            if ($product_img2 != "") {

                $product_img2 = $date_time . $random2 . $product_img2;

                $file_typ2 = $_FILES['product_img_new2']['type'];

                $file_tmp2 = $_FILES['product_img_new2']['tmp_name'];

                $file_size2 = $_FILES['product_img_new2']['size'];

                move_uploaded_file($file_tmp2, ".././assets/images/product_images/" . $product_img2);

                unlink('.././assets/images/product_images/' . $_POST['product_img_old2']);
            } else {

                $product_img2 = $_POST['product_img_old2'];
            }

















            if ($product_name != "") {



                if ($product_price != "") {





                    if ($product_cat != -1) {







                        if ($product_img1 != "") {

















                            $update_product = "UPDATE `product_page` SET `product_name`='$product_name',`Compare_price`='$product_cmpr_price',`price`=' $product_price',`product_img`='$product_img1',`product_img2`='$product_img2',`collection_id`='$product_cat',`sub_category_id`='',`product_desc`='$product_des',`catalog_url`='N/A',`status`='$product_status' WHERE productid=  $id";

                            $update_product_run = $conn->query($update_product);

                            if ($update_product_run) {

                                echo "<script>alert(' Product Updated');

                                window.location.href='../product_edit.php?editid=$id';

                                </script>";
                            } else {

                                echo "<script>alert('Fail To Add Product');

                                window.location.href='../product_edit.php?editid=$id';

                                </script>";
                            }
                        } else {

                            echo "<script>alert('Please Add Product Images');

                                window.location.href='../product_edit.php?editid=$id';

                                </script>";
                        }
                    } else {

                        echo "<script>alert('Select Product Category');

                        window.location.href='../product_edit.php?editid=$id';

                        </script>";
                    }
                } else {

                    echo "<script>alert('Price Cannot Blank');

                    window.location.href='../product_edit.php?editid=$id';

                    </script>";
                }
            } else {

                echo "<script>alert('Enter Category Name');

                window.location.href='../product_edit.php?editid=$id';

                </script>";
            }
        }
    }
}
