<?php
include './header.php';

?>


<!-- ./ header -->


<!-- content -->
<div class="content">
    <div class="row">
        <?php



        ?>
        <div class="col-md-8">
            <h5 class="mb-4">Add Category</h5>
            <form action="./manage-files/product_manage.php" method="POST" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Category Name</label>
                            <input name="category_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Category Name" required>
                        </div>
                        <label for="" class="form-label">Descreption</label>

                        <div id="text-editor">


                            <textarea rows="50" style="color:black;" name="product_desc" id="editor"></textarea>
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
                            <label for="formGroupExampleInput" class="form-label">Meta Title</label>
                            <input name="meta_title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Meta Title" required>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Meta Description</label>
                            <input name="meta_description" type="text" class="form-control" id="formGroupExampleInput" placeholder="Meta Description" required>
                        </div>



                    </div>
                </div>
        </div>

        <div class="mt-3">

            <button type="submit" name="add_category" class="btn btn-primary">Submit</button>
        </div>


    </div>
    </form>
</div>
<!-- ./ content -->

<!-- content-footer -->

<?php
include './footer.php';

?>

<!-- content-footer -->




</body>

<!-- Mirrored from vetra.laborasyon.com/demos/default/product-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 07:05:07 GMT -->

</html>