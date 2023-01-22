<?php


include './header.php'; ?>






<div class="content">
    <div id="demo">

    </div>

    <!-- Button trigger modal -->

    <!-- Modal -->

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Create Discount Coupon</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="continer">

                        <div class="row">

                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3">


                                        <script>
                                            function genrate_code() {

                                                const date = new Date();
                                                let var1 = date.getDate();

                                                // genrate text randome

                                                let var2 = ["A", "B", "C", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
                                                const random1 = var2[Math.floor(Math.random() * var2.length)]




                                                console.log(random1);




                                                document.getElementById('discount_code').value = "AKDH5484D48DFSD";



                                            }
                                        </script>


                                        <div style="display: flex; justify-content: space-between;">
                                            <label for="formGroupExampleInput" class="form-label">Discount Code</label>
                                            <span> <button onclick="genrate_code()" style="padding-top:1px; padding-bottom:1px;" class="btn btn-secondary">Genrate Code</button></span>


                                        </div>
                                        <input id="discount_code" value="" name="couponcode" type="text" class="form-control" placeholder="Coupon Code" required="">
                                    </div>
                                    <div class="mb-3">

                                        <label for="formGroupExampleInput" class="form-label">Coupon Amount</label>

                                        <input value="" name="" type="text" class="form-control" id="formGroupExampleInput" placeholder="Use Limit Per Customer" required="">

                                    </div>
                                    <div class="mb-3">

                                        <label for="formGroupExampleInput" class="form-label">Use Limit</label>

                                        <input value="" name="" type="text" class="form-control" id="formGroupExampleInput" placeholder="Use Limit Per Customer" required="">

                                    </div>
                                    <div class="mb-3">

                                        <label for="formGroupExampleInput" class="form-label"> Coupon Use </label>
                                        <div>
                                            <select class="form-control" name="" id="">
                                                <option value="0">For All Users</option>
                                                <option value="1"> Only for 1 User</option>

                                            </select>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>





    <div class="mb-4">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="./index.php">
                        <i class="bi bi-globe2 small me-2"></i> Dashboard
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Discount Code</li>
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
                        <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Create Discount
                        </a>

                        <!-- <a href="#" class="dropdown-item">Another action</a>
                        <a href="#" class="dropdown-item">Something else here</a> -->
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        $('#myModal').on('shown.bs.modal', function() {
            $('#myInput').trigger('focus')
        })
    </script>
    <div class="table-responsive" tabindex="1" style="overflow: hidden; outline: none;">

        <table class="table table-custom table-lg mb-0" id="orders">
            <thead>
                <tr>


                    <th>#Sno</th>
                    <th>Discount Code</th>
                    <th>Coupon Amt.</th>
                    <th>Created Date</th>
                    <th>Use Limit</th>

                    <th>Status</th>
                    <!-- <th class="text-end">Actions</th> -->
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td>
                        <a href="order-detail.php?details=1000">#01</a>
                    </td>
                    <td>ABCHDHFOHDHF5</td>
                    <td>2022-12-20 09:24:54</td>
                    <td>
                        25-12-2022
                    </td>
                    <td>1</td>

                    <td>
                        <span class="badge bg-primary">Processing</span>
                    </td>


                </tr>


            </tbody>
        </table>
    </div>
    <nav class="mt-4" aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">»</span>
                </a>
            </li>
        </ul>
    </nav>

</div>







<?php include './footer.php'; ?>