<?php

include 'header.php';

?>

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
                <li class="breadcrumb-item active" aria-current="page">Orders</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="d-md-flex gap-4 align-items-center">
                <div class="d-none d-md-flex">All Orders</div>
                <div class="d-md-flex gap-4 align-items-center">
                    <form class="mb-3 mb-md-0">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option>Sort by</option>
                                    <option value="desc">Desc</option>
                                    <option value="asc">Asc</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select">
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button class="btn btn-outline-light" type="button">
                                        <i class="bi bi-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="dropdown ms-auto">
                    <a href="#" data-bs-toggle="dropdown" class="btn btn-primary dropdown-toggle" aria-haspopup="true" aria-expanded="false">Actions</a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="#" class="dropdown-item">Action</a>
                        <a href="#" class="dropdown-item">Another action</a>
                        <a href="#" class="dropdown-item">Something else here</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-custom table-lg mb-0" id="orders">
            <thead>
                <tr>


                    <th>#OrderID</th>
                    <th>Customer</th>
                    <th>Date</th>
                    <th>Method</th>
                    <th>Iteam</th>
                    <th>Total</th>
                    <th>Status</th>
                    <!-- <th class="text-end">Actions</th> -->
                </tr>
            </thead>
            <tbody>
                <?php

                $admin_order_view = "SELECT * FROM `orders` INNER JOIN `customers` on orders.customer_id=customers.id GROUP BY order_id";


                $admin_order_view_run = $conn->query($admin_order_view);
                if ($admin_order_view_run) {
                    if (mysqli_num_rows($admin_order_view_run) > 0) {

                        while ($data_admin_orders = mysqli_fetch_assoc($admin_order_view_run)) {



                ?>

                            <a href="dsdsd">
                                <tr>
                                    <a href="">
                                        <td>
                                            <a href="order-detail.php?details=<?php echo $data_admin_orders['order_id'] ?>">#<?php echo $data_admin_orders['order_id'] ?></a>
                                        </td>
                                        <td><?php echo  $data_admin_orders['first_name'] . " " . $data_admin_orders['last_name']; ?></td>
                                        <td><?php echo $data_admin_orders['server_date']; ?></td>
                                        <td>
                                            <span class="badge 
                                
                                <?php
                                if ($data_admin_orders['order_method'] == 'Online Payment') {
                                    echo "bg-success";
                                } else {
                                    echo "bg-primary";
                                }

                                ?>
                                
                                ">
                                                <?php echo $data_admin_orders['order_method']; ?>

                                            </span>


                                        </td>
                                        <td><?php echo $data_admin_orders['order_iteams']; ?></td>

                                        <td>₹ <?php

                                                echo   $data_admin_orders['order_iteams'] * $data_admin_orders['order_price'] ?>

                                        </td>
                                        <td>
                                            <span class="badge bg-primary">Processing</span>
                                        </td>


                                </tr>
                            </a>


                <?php      }
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
<!-- ./ content -->

<!-- content-footer -->

<?php
include 'footer.php';

?>

</body>

<!-- Mirrored from vetra.laborasyon.com/demos/default/orders.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Nov 2022 07:05:06 GMT -->

</html>