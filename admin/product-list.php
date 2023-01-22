<?php
include './header.php';

?>

<!-- ./ header -->


<!-- content -->
<div class="content ">

    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex gap-4 align-items-center">
                        <div class="d-none d-md-flex">All Products</div>
                        <div class="d-md-flex gap-4 align-items-center">
                            <form class="mb-3 mb-md-0">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <select class="form-select">
                                            <option>Sort by</option>
                                            <option value="desc">Desc</option>
                                            <option value="asc">Asc</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select">
                                            <option value="10">10</option>
                                            <option value="20">20</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                            <option value="50">50</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-custom table-lg mb-0" id="products">
                    <thead>
                        <tr>

                            <th>ID</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>CATEGORY</th>
                            <th>Price</th>
                            <th>Status</th>

                            <th>Created At</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        $select_admin_product = "SELECT *  FROM `product_page` INNER JOIN `collection_page` on product_page.collection_id = collection_page.id";
                        $select_admin_product_run = $conn->query($select_admin_product);
                        if ($select_admin_product_run) {

                            if (mysqli_num_rows($select_admin_product_run) > 0) {

                                while ($data_admin_product_fetch = mysqli_fetch_assoc($select_admin_product_run)) { ?>
                                    <tr>

                                        <td>
                                            <a href="#">#1</a>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <img src="./assets/images/product_images/<?php echo $data_admin_product_fetch['product_img'] ?>" class="rounded" width="40" alt="...">
                                            </a>
                                        </td>
                                        <td><?php
                                            if (strlen($data_admin_product_fetch['product_name']) > 20) {
                                                echo  substr($data_admin_product_fetch['product_name'], 0, 30) . "...";
                                            } else {
                                                echo $data_admin_product_fetch['product_name'];
                                            }

                                            ?></td>
                                        <td>
                                            <span class=""><?php echo $data_admin_product_fetch['Category_Name'] ?></span>
                                        </td>
                                        <td> &#8377;<?php echo $data_admin_product_fetch['price']; ?></td>
                                        <td><?php

                                            if ($data_admin_product_fetch['status'] == 0) {
                                                echo ' <a style="color:green;" > <strong> Active</strong></a>';
                                            } else {
                                                echo ' <a style="color:#ff470d;" > <strong>Draft</strong></a>';
                                            }



                                            ?></td>
                                        <td><?php echo $data_admin_product_fetch['added_date']; ?></td>

                                        <td class="text-end">
                                            <div class="d-flex">
                                                <div class="dropdown ms-auto">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-floating" aria-haspopup="true" aria-expanded="false">
                                                        <i class="bi bi-three-dots"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a href="./product_edit.php?editid=<?php echo  $data_admin_product_fetch['productid'] ?>" class="dropdown-item">Edit</a>
                                                        <?php
                                                        if ($data_admin_product_fetch['status'] == 0) { ?>
                                                            <a href="../single-product.php?productid=<?php echo $data_admin_product_fetch["productid"] ?>  " class="dropdown-item" target="_blank">View </a>
                                                        <?php }
                                                        ?>

                                                        <?php
                                                        if ($data_admin_product_fetch['status'] == 0) { ?>

                                                            <form action="#" method="POST">
                                                                <input type="hidden" name="setdraft" value="1">
                                                                <input type="hidden" name="id" value="<?php echo $data_admin_product_fetch['productid'] ?>">

                                                                <button type="submit" name="update_status" class="dropdown-item text-primary">Set as Draft</button>
                                                            </form>

                                                        <?php    } else { ?>
                                                            <form action="#" method="POST">
                                                                <input type="hidden" name="setactive" value="0">
                                                                <input type="hidden" name="id" value="<?php echo $data_admin_product_fetch['productid'] ?>">

                                                                <button type="submit" name="update_status" class="dropdown-item text-success">Set as Active</button>
                                                            </form>

                                                        <?php    }

                                                        ?>
                                                        <?php
                                                        if (isset($_POST['update_status'])) {

                                                            if (isset($_POST['setactive'])) {
                                                                $update_data = 0;
                                                                $id = $_POST['id'];
                                                            } else {
                                                                $update_data = 1;
                                                                $id = $_POST['id'];
                                                            }


                                                            $status_update = "UPDATE `product_page` SET `status`=$update_data Where productid=$id ";
                                                            $status_update_run = $conn->query($status_update);
                                                            if ($status_update_run) {
                                                                echo "<script>window.location.href='./product-list.php';</script>";
                                                            }
                                                        }


                                                        ?>


                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                        <?php  }
                            }
                        }


                        ?>


                    </tbody>
                </table>
            </div>
            <nav class="mt-4" aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>

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