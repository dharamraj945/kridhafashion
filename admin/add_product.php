<?php

include './header.php';



?>



<!-- ./ header -->





<!-- content -->

<div class="content">

    <div class="row">



        <div class="col-md-8">

            <h5 class="mb-4">Add Products</h5>

            <form action="./manage-files/product_manage.php" method="post" enctype="multipart/form-data">

                <div class="card">

                    <div class="card-body">



                        <div class="mb-3">

                            <label for="formGroupExampleInput" class="form-label">Product Name</label>

                            <input name="product_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Product Name" required>

                        </div>

                        <label for="" class="form-label">Descreption</label>



                        <div id="text-editor" class="mb-3">





                            <textarea name="product_descreption" class="mb-3" name="editor1" id="editor"></textarea>









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

                            <input name="product_cmpr_price" type="number" class="form-control" id="formGroupExampleInput" placeholder="Compare Price" required>

                        </div>

                        <div class="mb-3">

                            <label for="formGroupExampleInput" class="form-label">Meta-Title</label>

                            <input name="product_meta_title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Meta Title" required>

                        </div>

                        <div class="mb-3">

                            <label for="formGroupExampleInput" class="form-label">Meta-Description</label>

                            <input name="product_meta_description" type="text" class="form-control" id="formGroupExampleInput" placeholder="Meta Description" required>

                        </div>



                        <div class="mb-3">

                            <label for="formGroupExampleInput" class="form-label">Status</label>

                            <select class="form-control" name="product_status" id="">



                                <option value="0">Active</option>

                                <option value="1">Draft</option>

                            </select>

                        </div>



                        <div class="collapse show mt-4">



                            <button name="submit-add_product" class="btn btn-primary">Submit</button>

                        </div>



                    </div>

                </div>

        </div>

        <div class="col-md-4">

            <h5 class="mb-4">Product-category</h5>

            <div class="card mb-4">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#keywordsCollapseExample" role="button">

                        <div>Price</div>

                        <div class="bi bi-chevron-down"></div>

                    </div>


                    <div class="collapse show mt-4" id="keywordsCollapseExample">

                        <div class="input-group">

                            <input name="product_price" type="number" class="form-control" placeholder="Price" required>



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



                            <select class="form-control" name="product_cat" id="cat_id">

                                <option value="-1">SELECT CATEGORY</option>

                                <?php





                                $select_cat = "SELECT * FROM `collection_page`";

                                $select_cat_run = $conn->query($select_cat);



                                if ($select_cat_run) {



                                    if (mysqli_num_rows($select_cat_run) > 0) {



                                        while ($data_category = mysqli_fetch_assoc($select_cat_run)) { ?>

                                            <option value="<?php echo $data_category['id'] ?>"><?php echo $data_category['Category_Name'] ?></option>







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



            <div class="card">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#priceCollapseExample" role="button">

                        <div>Product Image 1</div>

                        <div class="bi bi-chevron-down"></div>

                    </div>

                    <div class="collapse show mt-4" id="priceCollapseExample">

                        <input class="form-control btn btn-primary" type="file" name="product_img" id="">



                    </div>

                </div>

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center" data-bs-toggle="collapse" aria-expanded="true" data-bs-target="#priceCollapseExample" role="button">

                        <div>Product Image 2</div>

                        <div class="bi bi-chevron-down"></div>

                    </div>

                    <div class="collapse show mt-4" id="priceCollapseExample">

                        <input class="form-control btn btn-primary" type="file" name="product_img2" id="">



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