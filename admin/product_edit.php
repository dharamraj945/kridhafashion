<?php

include './header.php';



?>



<!-- ./ header -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

<?php

$edit_product = "SELECT * FROM `product_page` INNER JOIN `collection_page` on product_page.collection_id = collection_page.id Where productid=$_REQUEST[editid]";

$edit_product_run = $conn->query($edit_product);

if (mysqli_num_rows($edit_product_run) > 0) {



    $edit_data_fetch = mysqli_fetch_assoc($edit_product_run);
}

?>

<!-- content -->

<div class="content">

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title" id="exampleModalLabel">Do You Really Want delete This Product</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                        <span aria-hidden="true">&times;</span>

                    </button>

                </div>

                <div class="modal-body">

                    You Can't Undo deleted Products !

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondarys" data-dismiss="modal">Close</button>

                    <form action="#" method="post">

                        <button name="delete_product" type=" button" class="btn btn-danger">Delete</button>

                    </form>

                    <?php

                    if (isset($_POST['delete_product'])) {



                        $delete_product = "DELETE FROM `product_page` WHERE productid=$_REQUEST[editid]";

                        $delete_product_run = $conn->query($delete_product);

                        if ($delete_product_run) {





                            unlink('./assets/images/product_images/' . $edit_data_fetch['product_img']);

                            unlink('./assets/images/product_images/' . $edit_data_fetch['product_img2']);

                            unlink('./assets/images/product_images/' . $edit_data_fetch['product_img3']);

                            unlink('./assets/images/product_images/' . $edit_data_fetch['product_img4']);



                            echo "<script>alert('Product deleted');

                            window.location.href='./product-list.php';</script>";
                        } else {

                            echo "<script>alert('an Error Occure');</script>";
                        }
                    }



                    ?>

                </div>

            </div>

        </div>

    </div>

    <div class="row">



        <div class="col-md-8">

            <h5 class="mb-4">Add Products</h5>

            <form action="./manage-files/product_manage.php" method="post" enctype="multipart/form-data">

                <div class="card">

                    <div class="card-body">



                        <div class="mb-3">

                            <label for="formGroupExampleInput" class="form-label">Product Name</label>

                            <input value="<?php echo $edit_data_fetch['product_name'] ?>" name="product_name_update" type="text" class="form-control" id="formGroupExampleInput" placeholder="Product Name" required>

                        </div>

                        <label for="" class="form-label">Descreption</label>



                        <div id="text-editor" class="mb-3">





                            <textarea name="product_descreption_update" class="mb-3" name="editor1" id="editor" value=""><?php echo $edit_data_fetch['product_desc'] ?></textarea>









                        </div>

                        <script>
                            ClassicEditor

                                .create(document.querySelector('#editor'))

                                .catch(error => {

                                    console.error(error);

                                });
                        </script>

                        <br>





                        <div class="mb-3">

                            <label for="formGroupExampleInput" class="form-label">Compare Price</label>

                            <input value="<?php echo $edit_data_fetch['Compare_price'] ?>" name="product_cmpr_price_update" type="number" class="form-control" id="formGroupExampleInput" placeholder="Compare Price" required>

                        </div>



                        <div class="mb-3">

                            <label for="formGroupExampleInput" class="form-label">Status</label>

                            <select class="form-control" name="product_status_update" id="">



                                <option <?php echo ($edit_data_fetch['status'] == 0) ? "selected" : ""; ?> value="0">Active</option>

                                <option <?php echo ($edit_data_fetch['status'] == 1) ? "selected" : ""; ?> value="1">Draft</option>

                            </select>

                        </div>



                        <div class="collapse show mt-4">



                            <button name="submit_update_product" class="btn btn-primary">Submit</button>

                        </div>



                    </div>

                </div>

        </div>

        <div class="col-md-4">

            <div class="mb-3  text-end">

                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">

                    Delete Product

                </button>



            </div>

            <h5 class="mb-4">Product-category</h5>

            <div class="card mb-4">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#keywordsCollapseExample" role="button">

                        <div>Price</div>

                        <div class="bi bi-chevron-down"></div>

                    </div>

                    <div class="collapse show mt-4" id="keywordsCollapseExample">

                        <div class="input-group">

                            <input value="<?php echo $edit_data_fetch['price'] ?>" name="product_price_update" type="number" class="form-control" placeholder="Price" required>

                            <input value="<?php echo $edit_data_fetch['productid'] ?>" name="prid" type="hidden" class="form-control" placeholder="Price" required>



                        </div>

                    </div>

                </div>

            </div>

            <div class="card mb-4">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#categoriesCollapseExample" role="button">

                        <div>Categories</div>

                        <div class="bi bi-chevron-down"></div>

                    </div>





                    <div class="collapse show mt-4" id="categoriesCollapseExample">

                        <div class="d-flex flex-column gap-3">



                            <select class="form-control" name="product_cat_update" id="cat_id">

                                <option value="-1">SELECT CATEGORY</option>

                                <?php





                                $select_cat = "SELECT * FROM `collection_page`";

                                $select_cat_run = $conn->query($select_cat);



                                if ($select_cat_run) {



                                    if (mysqli_num_rows($select_cat_run) > 0) {



                                        while ($data_category = mysqli_fetch_assoc($select_cat_run)) { ?>

                                            <option <?php echo ($data_category['id'] == $edit_data_fetch['collection_id']) ? "selected" : ""; ?> value="<?php echo $data_category['id'] ?>"><?php echo $data_category['Category_Name'] ?></option>







                                <?php   }
                                    }
                                } else {



                                    echo "<script>alert('fail')</script>";
                                }



                                ?>







                            </select>



                        </div>

                    </div>

                </div>

            </div>

            <div class="card mb-4">



            </div>

            <div class="card">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#priceCollapseExample" role="button">

                        <div>Product Image 1</div>

                        <div class="bi bi-chevron-down"></div>

                    </div>

                    <div class="collapse show mt-4 text-center" id="priceCollapseExample">

                        <img class="mb-3" width="150px" src="./assets/images/product_images/<?php echo $edit_data_fetch['product_img'] ?>" alt="">

                        <input value="<?php echo $edit_data_fetch['product_img'] ?>" class="form-control btn btn-primary" type="hidden" name="product_img_old" id="">

                        <input value="" class="form-control btn btn-primary" type="file" name="product_img_new" id="">



                    </div>

                </div>

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#priceCollapseExample" role="button">

                        <div>Product Image 2</div>

                        <div class="bi bi-chevron-down"></div>

                    </div>

                    <div class="collapse show mt-4 text-center" id="priceCollapseExample">

                        <img class="mb-3" width="150px" src="./assets/images/product_images/<?php echo $edit_data_fetch['product_img2'] ?>" alt="">

                        <input value="<?php echo $edit_data_fetch['product_img2'] ?>" class="form-control btn btn-primary" type="hidden" name="product_img_old2" id="">

                        <input value="" class="form-control btn btn-primary" type="file" name="product_img_new2" id="">



                    </div>

                </div>





            </div>



        </div>





        </form>



    </div>



</div>

<!-- ./ content -->



<!-- content-footer -->



<?php

include './footer.php';



?>



<!-- content-footer -->









<script>
    $(document).ready(function() {





        $('#cat_id').change(function() {

            var cat_id = $(this).val();

            var data = "";



            if (cat_id != "" && cat_id != '-1') {



                $.ajax({



                    url: "ajax.php",

                    type: "POST",

                    data: {

                        cat_id: cat_id

                    },

                    success: function(Dataload) {



                        data = Dataload;

                        document.getElementById('data_show').innerHTML = data;



                    }





                });



            }



        });





    });
</script>



</body>



<!-- Mirrored from vetra.laborasyon.com/demos/default/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 07:05:07 GMT -->



</html>