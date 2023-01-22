<?php

include 'dbconfig.php';



session_start();



if (!isset($_SESSION['user_auth'])) {

    echo "<script>

    window.location.href='./login.php';

    

    </script>";
}



?>



<!doctype html>

<html lang="en">







<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> DiscountMafia </title>



    <!-- Favicon -->

    <link rel="shortcut icon" href="./assets/logos/favicon.png" />



    <!-- Google fonts -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com/">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&amp;display=swap" rel="stylesheet">



    <!-- Bootstrap icons -->

    <link rel="stylesheet" href="./dist/icons/bootstrap-icons-1.4.0/bootstrap-icons.min.css" type="text/css">

    <!-- Bootstrap Docs -->

    <link rel="stylesheet" href="./dist/css/bootstrap-docs.css" type="text/css">



    <!-- Slick -->

    <link rel="stylesheet" href="./libs/slick/slick.css" type="text/css">



    <!-- Main style file -->

    <link rel="stylesheet" href="./dist/css/app.min.css" type="text/css">



    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>



    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>





</head>



<body>



    <!-- preloader -->

    <div class="preloader">

        <img src="./assets//logos/inkloading.gif" alt="logo">



    </div>

    <!-- ./ preloader -->



    <!-- sidebars -->



    <!-- notifications sidebar -->

    <div class="sidebar" id="notifications">

        <div class="sidebar-header d-block align-items-end">

            <div class="align-items-center d-flex justify-content-between py-4">

                Notifications

                <button data-sidebar-close>

                    <i class="bi bi-arrow-right"></i>

                </button>

            </div>

            <ul class="nav nav-pills">

                <li class="nav-item">

                    <a class="nav-link active nav-link-notify" data-bs-toggle="tab" href="#activities">Activities</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" data-bs-toggle="tab" href="#notes">Notes</a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" data-bs-toggle="tab" href="#alerts">Alerts</a>

                </li>

            </ul>

        </div>

        <div class="sidebar-content">

            <div class="tab-content">

                <div class="tab-pane active" id="activities">

                    <div class="tab-pane-body">

                        <ul class="list-group list-group-flush">

                            <li class="px-0 list-group-item">

                                <a href="#" class="d-flex">

                                    <div class="flex-shrink-0">

                                        <figure class="avatar avatar-info me-3">

                                            <span class="avatar-text rounded-circle">

                                                <i class="bi bi-person"></i>

                                            </span>

                                        </figure>

                                    </div>

                                    <div class="flex-grow-1">

                                        <p class="mb-0 fw-bold d-flex justify-content-between">

                                            You joined a group

                                        </p>

                                        <span class="text-muted small">

                                            <i class="bi bi-clock me-1"></i> Today

                                        </span>

                                    </div>

                                </a>

                            </li>

                            <li class="px-0 list-group-item">

                                <a href="#" class="d-flex">

                                    <div class="flex-shrink-0">

                                        <figure class="avatar avatar-warning me-3">

                                            <span class="avatar-text rounded-circle">

                                                <i class="bi bi-hdd"></i>

                                            </span>

                                        </figure>

                                    </div>

                                    <div class="flex-grow-1">

                                        <p class="mb-0 fw-bold d-flex justify-content-between">

                                            Storage is running low!

                                        </p>

                                        <span class="text-muted small">

                                            <i class="bi bi-clock me-1"></i> Today

                                        </span>

                                    </div>

                                </a>

                            </li>

                            <li class="px-0 list-group-item">

                                <a href="#" class="d-flex">

                                    <div class="flex-shrink-0">

                                        <figure class="avatar avatar-secondary me-3">

                                            <span class="avatar-text rounded-circle">

                                                <i class="bi bi-file-text"></i>

                                            </span>

                                        </figure>

                                    </div>

                                    <div class="flex-grow-1">

                                        <p class="mb-0 d-flex justify-content-between">

                                            1 person sent a file

                                        </p>

                                        <span class="text-muted small">

                                            <i class="bi bi-clock me-1"></i> Yesterday

                                        </span>

                                    </div>

                                </a>

                            </li>

                            <li class="px-0 list-group-item">

                                <a href="#" class="d-flex">

                                    <div class="flex-shrink-0">

                                        <figure class="avatar avatar-success me-3">

                                            <span class="avatar-text rounded-circle">

                                                <i class="bi bi-download"></i>

                                            </span>

                                        </figure>

                                    </div>

                                    <div class="flex-grow-1">

                                        <p class="mb-0 d-flex justify-content-between">

                                            Reports ready to download

                                        </p>

                                        <span class="text-muted small">

                                            <i class="bi bi-clock me-1"></i> Yesterday

                                        </span>

                                    </div>

                                </a>

                            </li>

                            <li class="px-0 list-group-item">

                                <a href="#" class="d-flex">

                                    <div class="flex-shrink-0">

                                        <figure class="avatar avatar-info me-3">

                                            <span class="avatar-text rounded-circle">

                                                <i class="bi bi-lock"></i>

                                            </span>

                                        </figure>

                                    </div>

                                    <div class="flex-grow-1">

                                        <p class="mb-0 d-flex justify-content-between">

                                            2 steps verification

                                        </p>

                                        <span class="text-muted small">

                                            <i class="bi bi-clock me-1"></i> 20 min ago

                                        </span>

                                    </div>

                                </a>

                            </li>

                        </ul>

                    </div>

                    <div class="tab-pane-footer">

                        <a href="#" class="btn btn-success">

                            <i class="bi bi-check2 me-2"></i> Make All Read

                        </a>

                        <a href="#" class="btn btn-danger ms-2">

                            <i class="bi bi-trash me-2"></i> Delete all

                        </a>

                    </div>

                </div>

                <div class="tab-pane" id="notes">

                    <div class="tab-pane-body">

                        <ul class="list-group list-group-flush">

                            <li class="px-0 list-group-item">

                                <p class="mb-0 fw-bold text-success d-flex justify-content-between">

                                    This month's report will be prepared.

                                </p>

                                <span class="text-muted small">

                                    <i class="bi bi-clock me-1"></i> Today

                                </span>

                                <div class="mt-2">

                                    <a href="#">Edit</a>

                                    <a href="#" class="text-danger ms-2">Delete</a>

                                </div>

                            </li>

                            <li class="px-0 list-group-item">

                                <p class="mb-0 fw-bold text-success d-flex justify-content-between">

                                    An email will be sent to the customer.

                                </p>

                                <span class="text-muted small">

                                    <i class="bi bi-clock me-1"></i> Today

                                </span>

                                <div class="mt-2">

                                    <a href="#">Edit</a>

                                    <a href="#" class="text-danger ms-2">Delete</a>

                                </div>

                            </li>

                            <li class="px-0 list-group-item">

                                <p class="mb-0 d-flex justify-content-between">

                                    The meeting will be held.

                                </p>

                                <span class="text-muted small">

                                    <i class="bi bi-clock me-1"></i> Yesterday

                                </span>

                                <div class="mt-2">

                                    <a href="#">Edit</a>

                                    <a href="#" class="text-danger ms-2">Delete</a>

                                </div>

                            </li>

                            <li class="px-0 list-group-item">

                                <p class="mb-0 fw-bold text-success d-flex justify-content-between">

                                    Conversation with users.

                                </p>

                                <span class="text-muted small">

                                    <i class="bi bi-clock me-1"></i> Yesterday

                                </span>

                                <div class="mt-2">

                                    <a href="#">Edit</a>

                                    <a href="#" class="text-danger ms-2">Delete</a>

                                </div>

                            </li>

                            <li class="px-0 list-group-item">

                                <p class="mb-0 fw-bold text-warning d-flex justify-content-between">

                                    Payment refund will be made to the customer.

                                </p>

                                <span class="text-muted small">

                                    <i class="bi bi-clock me-1"></i> 20 min ago

                                </span>

                                <div class="mt-2">

                                    <a href="#">Edit</a>

                                    <a href="#" class="text-danger ms-2">Delete</a>

                                </div>

                            </li>

                            <li class="px-0 list-group-item">

                                <p class="mb-0 d-flex justify-content-between">

                                    Payment form will be activated.

                                </p>

                                <span class="text-muted small">

                                    <i class="bi bi-clock me-1"></i> 20 min ago

                                </span>

                                <div class="mt-2">

                                    <a href="#">Edit</a>

                                    <a href="#" class="text-danger ms-2">Delete</a>

                                </div>

                            </li>

                        </ul>

                    </div>

                    <div class="tab-pane-footer">

                        <a href="#" class="btn btn-primary btn-block">

                            <i class="bi bi-plus me-2"></i> Add Notes

                        </a>

                    </div>

                </div>

                <div class="tab-pane" id="alerts">

                    <div class="tab-pane-body">

                        <ul class="list-group list-group-flush">

                            <li class="px-0 list-group-item d-flex">

                                <div class="flex-shrink-0">

                                    <figure class="avatar avatar-warning me-3">

                                        <span class="avatar-text rounded-circle">

                                            <i class="bi bi-lock"></i>

                                        </span>

                                    </figure>

                                </div>

                                <div class="flex-grow-1">

                                    <p class="mb-0 fw-bold d-flex justify-content-between">

                                        Signed in with a different device.

                                    </p>

                                    <span class="text-muted small">

                                        <i class="bi bi-clock me-1"></i> Yesterday

                                    </span>

                                </div>

                            </li>

                            <li class="px-0 list-group-item d-flex">

                                <div class="flex-shrink-0">

                                    <figure class="avatar avatar-warning me-3">

                                        <span class="avatar-text fw-bold rounded-circle">

                                            <i class="bi bi-file-text"></i>

                                        </span>

                                    </figure>

                                </div>

                                <div class="flex-grow-1">

                                    <p class="mb-0 fw-bold d-flex justify-content-between">

                                        Your billing information is not active.

                                    </p>

                                    <span class="text-muted small">

                                        <i class="bi bi-clock me-1"></i> Yesterday

                                    </span>

                                </div>

                            </li>

                            <li class="px-0 list-group-item d-flex">

                                <div class="flex-shrink-0">

                                    <figure class="avatar avatar-warning me-3">

                                        <span class="avatar-text rounded-circle">

                                            <i class="bi bi-person"></i>

                                        </span>

                                    </figure>

                                </div>

                                <div class="flex-grow-1">

                                    <p class="mb-0 d-flex justify-content-between">

                                        Your subscription has expired.

                                    </p>

                                    <span class="text-muted small">

                                        <i class="bi bi-clock me-1"></i> Today

                                    </span>

                                </div>

                            </li>

                            <li class="px-0 list-group-item d-flex">

                                <div class="flex-shrink-0">

                                    <figure class="avatar avatar-warning me-3">

                                        <span class="avatar-text rounded-circle">

                                            <i class="bi bi-hdd"></i>

                                        </span>

                                    </figure>

                                </div>

                                <div class="flex-grow-1">

                                    <p class="mb-0 d-flex justify-content-between">

                                        Your storage space is running low

                                    </p>

                                    <span class="text-muted small">

                                        <i class="bi bi-clock me-1"></i> Today

                                    </span>

                                </div>

                            </li>

                        </ul>

                    </div>

                    <div class="tab-pane-footer">

                        <a href="#" class="btn btn-success">

                            <i class="bi bi-check2 me-2"></i> Make All Read

                        </a>

                        <a href="#" class="btn btn-danger ms-2">

                            <i class="bi bi-trash me-2"></i> Delete all

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!-- ./ notifications sidebar -->



    <!-- settings sidebar -->



    <!-- ./ settings sidebar -->



    <!-- search sidebar -->

    <div class="sidebar" id="search">

        <div class="sidebar-header">

            Search

            <button data-sidebar-close>

                <i class="bi bi-arrow-right"></i>

            </button>

        </div>

        <div class="sidebar-content">

            <form class="mb-4">

                <div class="input-group mb-3">

                    <input type="text" class="form-control" placeholder="Search" aria-describedby="button-search-addon">

                    <button class="btn btn-outline-light" type="button" id="button-search-addon">

                        <i class="bi bi-search"></i>

                    </button>

                </div>

            </form>

            <h6 class="mb-3">Last searched</h6>

            <div class="mb-4">

                <div class="d-flex align-items-center mb-3">

                    <a href="#" class="avatar avatar-sm me-3">

                        <span class="avatar-text rounded-circle">

                            <i class="bi bi-search"></i>

                        </span>

                    </a>

                    <a href="#" class="flex-fill">Reports for 2021</a>

                    <a href="#" class="btn text-danger btn-sm" data-bs-toggle="tooltip" title="Remove">

                        <i class="bi bi-x"></i>

                    </a>

                </div>

                <div class="d-flex align-items-center mb-3">

                    <a href="#" class="avatar avatar-sm me-3">

                        <span class="avatar-text rounded-circle">

                            <i class="bi bi-search"></i>

                        </span>

                    </a>

                    <a href="#" class="flex-fill">Current users</a>

                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">

                        <i class="bi bi-x"></i>

                    </a>

                </div>

                <div class="d-flex align-items-center mb-3">

                    <a href="#" class="avatar avatar-sm me-3">

                        <span class="avatar-text rounded-circle">

                            <i class="bi bi-search"></i>

                        </span>

                    </a>

                    <a href="#" class="flex-fill">Meeting notes</a>

                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">

                        <i class="bi bi-x"></i>

                    </a>

                </div>

            </div>

            <h6 class="mb-3">Recently viewed</h6>

            <div class="mb-4">

                <div class="d-flex align-items-center mb-3">

                    <a href="#" class="avatar avatar-secondary avatar-sm me-3">

                        <span class="avatar-text rounded-circle">

                            <i class="bi bi-check-circle"></i>

                        </span>

                    </a>

                    <a href="#" class="flex-fill">Todo list</a>

                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">

                        <i class="bi bi-x"></i>

                    </a>

                </div>

                <div class="d-flex align-items-center mb-3">

                    <a href="#" class="avatar avatar-warning avatar-sm me-3">

                        <span class="avatar-text rounded-circle">

                            <i class="bi bi-wallet2"></i>

                        </span>

                    </a>

                    <a href="#" class="flex-fill">Pricing table</a>

                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">

                        <i class="bi bi-x"></i>

                    </a>

                </div>

                <div class="d-flex align-items-center mb-3">

                    <a href="#" class="avatar avatar-info avatar-sm me-3">

                        <span class="avatar-text rounded-circle">

                            <i class="bi bi-gear"></i>

                        </span>

                    </a>

                    <a href="#" class="flex-fill">Settings</a>

                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">

                        <i class="bi bi-x"></i>

                    </a>

                </div>

                <div class="d-flex align-items-center mb-3">

                    <a href="#" class="avatar avatar-success avatar-sm me-3">

                        <span class="avatar-text rounded-circle">

                            <i class="bi bi-person-circle"></i>

                        </span>

                    </a>

                    <a href="#" class="flex-fill">Users</a>

                    <a href="#" class="btn" data-bs-toggle="tooltip" title="Remove">

                        <i class="bi bi-x"></i>

                    </a>

                </div>

            </div>

        </div>

        <div class="sidebar-action">

            <a href="#" class="btn btn-danger">All Clear</a>

        </div>

    </div>

    <!-- ./ search sidebar -->



    <!-- ./ sidebars -->



    <!-- menu -->

    <div class="menu">

        <div class="menu-header">

            <a href="index.php" class="menu-header-logo">
                <h1> <strong> <span style="color: #b76e79;"> KRIDHA </span> <span style="color:#d52742"> FASHION </span> </strong></h1>

                <!-- <img style=" width:200px!important" src="../assets/images/menu/logo/4.png" alt="logo"> -->

            </a>

            <a href="index.php" class="btn btn-sm menu-close-btn">

                <i class="bi bi-x"></i>

            </a>

        </div>

        <div class="menu-body">

            <div class="dropdown">

                <a href="#" class="d-flex align-items-center" data-bs-toggle="dropdown">

                    <div class="avatar me-3">

                        <img src="./assets/logos/default_logo.png" class="rounded-circle" alt="image">

                    </div>

                    <div>

                        <div class="fw-bold">Admin</div>

                        <small class="text-muted">Owner</small>

                    </div>

                </a>

                <div class="dropdown-menu dropdown-menu-end">

                    <a href="#" class="dropdown-item d-flex align-items-center">

                        <i class="bi bi-person dropdown-item-icon"></i> Profile

                    </a>

                    <a href="#" class="dropdown-item d-flex align-items-center">

                        <i class="bi bi-envelope dropdown-item-icon"></i> Inbox

                    </a>

                    <a href="#" class="dropdown-item d-flex align-items-center">

                        <i class="bi bi-gear dropdown-item-icon"></i> Settings

                    </a>

                    <a href="login.php" class="dropdown-item d-flex align-items-center text-danger" target="_blank">

                        <form action="#" method="post">

                            <i class="bi bi-box-arrow-right dropdown-item-icon"></i>

                            <button type="submit" name="logout" class=" btn btn-primary ">Logout</button>

                        </form>

                    </a>

                </div>

            </div>

            <?php

            if (isset($_POST['logout'])) {



                session_unset();

                session_destroy();

                echo "<script>

                window.location.href='login.php';

                

                </script>";
            }



            ?>

            <ul>

                <li class=" menu-divider">E-Commerce</li>

                <li>

                    <a class="active" href="index.php">

                        <span class="nav-link-icon">

                            <i class="bi bi-bar-chart"></i>

                        </span>

                        <span>Dashboard</span>

                    </a>

                </li>

                <li>

                    <a href="#">

                        <span class="nav-link-icon">

                            <i class="bi bi-receipt"></i>

                        </span>

                        <span>Orders</span>

                    </a>

                    <ul>

                        <li>

                            <a href="orders.php">Orders </a>

                        </li>



                    </ul>

                </li>

                <li>

                    <a href="#">

                        <span class="nav-link-icon">

                            <i class="bi bi-truck"></i>

                        </span>

                        <span>Products</span>

                    </a>

                    <ul>

                        <li>

                            <a href="product-list.php">View Products</a>

                        </li>



                    </ul>

                </li>



                <li>

                    <a href="./customers.php">

                        <span class="nav-link-icon">

                            <i class="bi bi-person-badge"></i>

                        </span>

                        <span>Customers</span>

                    </a>

                </li>

                <li>

                    <a href="#">

                        <span class="nav-link-icon">

                            <i class="bi bi-receipt"></i>

                        </span>

                        <span>Categorys</span>

                    </a>

                    <ul>

                        <li>

                            <a href="add_category.php">Add New Category</a>

                        </li>



                    </ul>

                </li>
                <li>

                    <a href="./discount_code.php">

                        <span class="nav-link-icon">

                            <i class="bi bi-person-badge"></i>

                        </span>

                        <span>Discount Code</span>

                    </a>

                </li>



                <!-- <li class="menu-divider">Pages</li>

                <li>

                    <a href="#">

                        <span class="nav-link-icon">

                            <i class="bi bi-person"></i>

                        </span>

                        <span>Profile</span>

                    </a>

                    <ul>

                        <li>

                            <a href="profile-posts.php">Post</a>

                        </li>

                        <li>

                            <a href="profile-connections.php">Connections</a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="#">

                        <span class="nav-link-icon">

                            <i class="bi bi-person-circle"></i>

                        </span>

                        <span>Users</span>

                    </a>

                    <ul>

                        <li><a href="user-list.php">List View</a></li>

                        <li><a href="user-grid.php">Grid View</a></li>

                    </ul>

                </li>

                <li>

                    <a href="#">

                        <span class="nav-link-icon">

                            <i class="bi bi-lock"></i>

                        </span>

                        <span>Authentication</span>

                    </a>

                    <ul>

                        <li>

                            <a href="login.php" target="_blank">Login</a>

                        </li>

                        <li>

                            <a href="register.php" target="_blank">Register</a>

                        </li>

                        <li>

                            <a href="reset-password.php" target="_blank">Reset Password</a>

                        </li>

                        <li>

                            <a href="lock-screen.php" target="_blank">Lock Screen</a>

                        </li>

                        <li>

                            <a href="account-verified.php" target="_blank">Account Verified</a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="#">

                        <span class="nav-link-icon">

                            <i class="bi bi-exclamation-octagon"></i>

                        </span>

                        <span>Error Pages</span>

                    </a>

                    <ul>

                        <li>

                            <a href="404.php" target="_blank">404</a>

                        </li>

                        <li>

                            <a href="access-denied.php">Access Denied</a>

                        </li>

                        <li>

                            <a href="under-construction.php" target="_blank">Under Construction</a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="settings.php">

                        <span class="nav-link-icon">

                            <i class="bi bi-gear"></i>

                        </span>

                        <span>Settings</span>

                    </a>

                </li>

                <li>

                    <a href="pricing-table.php">

                        <span class="nav-link-icon">

                            <i class="bi bi-wallet2"></i>

                        </span>

                        <span>Pricing Table</span>

                        <span class="badge bg-success ms-auto">New</span>

                    </a>

                </li>

                <li>

                    <a href="search-page.php">

                        <span class="nav-link-icon">

                            <i class="bi bi-search"></i>

                        </span>

                        <span>Search Page</span>

                    </a>

                </li>

                <li>

                    <a href="faq.php">

                        <span class="nav-link-icon">

                            <i class="bi bi-question-circle"></i>

                        </span>

                        <span>FAQ</span>

                    </a>

                </li>

                <li class="menu-divider">User Interface</li>

                <li>

                    <a href="#" target="_blank">

                        <span class="nav-link-icon">

                            <i class="bi bi-file-earmark-text"></i>

                        </span>

                        <span>Components</span>

                    </a>

                    <ul>

                        <li>

                            <a href="accordion.php">Accordion</a>

                        </li>

                        <li>

                            <a href="alert.php">Alerts</a>

                        </li>

                        <li>

                            <a href="badge.php">Badge</a>

                        </li>

                        <li>

                            <a href="breadcrumb.php">Breadcrumb</a>

                        </li>

                        <li>

                            <a href="buttons.php">Buttons</a>

                        </li>

                        <li>

                            <a href="button-group.php">Button Group</a>

                        </li>

                        <li>

                            <a href="card.php">Card</a>

                        </li>

                        <li>

                            <a href="card-masonry.php">Card Masonry</a>

                        </li>

                        <li>

                            <a href="carousel.php">Carousel</a>

                        </li>

                        <li>

                            <a href="collapse.php">Collapse</a>

                        </li>

                        <li>

                            <a href="dropdown.php">Dropdowns</a>

                        </li>

                        <li>

                            <a href="list-group.php">List Group</a>

                        </li>

                        <li>

                            <a href="modal.php">Modal</a>

                        </li>

                        <li>

                            <a href="navs-tabs.php">Navs and Tabs</a>

                        </li>

                        <li>

                            <a href="pagination.php">Pagination</a>

                        </li>

                        <li>

                            <a href="popovers.php">Popovers</a>

                        </li>

                        <li>

                            <a href="progress.php">Progress</a>

                        </li>

                        <li>

                            <a href="spinners.php">Spinners</a>

                        </li>

                        <li>

                            <a href="toasts.php">Toasts</a>

                        </li>

                        <li>

                            <a href="tables.php">

                                <span>Tables</span>

                            </a>

                        </li>

                        <li>

                            <a href="tooltip.php">Tooltip</a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="#" target="_blank">

                        <span class="nav-link-icon">

                            <i class="bi bi-file-earmark-text"></i>

                        </span>

                        <span>Forms</span>

                    </a>

                    <ul>

                        <li>

                            <a href="#">

                                <span>Form Elements</span>

                            </a>

                            <ul>

                                <li>

                                    <a href="forms.php">Overview</a>

                                </li>

                                <li>

                                    <a href="form-control.php">Form Controls</a>

                                </li>

                                <li>

                                    <a href="select.php">Select</a>

                                </li>

                                <li>

                                    <a href="checks-radios.php">Checks and Radios</a>

                                </li>

                                <li>

                                    <a href="range.php">Range</a>

                                </li>

                                <li>

                                    <a href="input-group.php">Input Group</a>

                                </li>

                                <li>

                                    <a href="floating-label.php">Floating Label</a>

                                </li>

                                <li>

                                    <a href="forms-layout.php">Form Layout</a>

                                </li>

                                <li>

                                    <a href="form-validation.php">Validation</a>

                                </li>

                            </ul>

                        </li>

                        <li>

                            <a href="form-wizard.php">

                                <span>Wizard</span>

                            </a>

                        </li>

                        <li>

                            <a href="form-repeater.php">

                                <span>Repeater</span>

                            </a>

                        </li>

                        <li>

                            <a href="file-upload.php">

                                <span>File Upload</span>

                            </a>

                        </li>

                        <li>

                            <a href="ckeditor.php">

                                <span>CKEditor</span>

                            </a>

                        </li>

                        <li>

                            <a href="range-slider.php">

                                <span>Range Slider</span>

                            </a>

                        </li>

                        <li>

                            <a href="select2.php">

                                <span>Select2</span>

                            </a>

                        </li>

                        <li>

                            <a href="tags-input.php">

                                <span>Tags Input</span>

                            </a>

                        </li>

                        <li>

                            <a href="input-mask.php">

                                <span>Input Mask</span>

                            </a>

                        </li>

                        <li>

                            <a href="datepicker.php">

                                <span>Datepicker</span>

                            </a>

                        </li>

                        <li>

                            <a href="clockpicker.php">

                                <span>Clock Picker</span>

                            </a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="#">

                        <span class="nav-link-icon">

                            <i class="bi bi-heart"></i>

                        </span>

                        <span>Content</span>

                    </a>

                    <ul>

                        <li>

                            <a href="typography.php">

                                <span>Typography</span>

                            </a>

                        </li>

                        <li>

                            <a href="images.php">

                                <span>Images</span>

                            </a>

                        </li>

                        <li>

                            <a href="figures.php">

                                <span>Figures</span>

                            </a>

                        </li>

                        <li>

                            <a href="avatar.php">

                                <span>Avatar</span>

                            </a>

                        </li>

                        <li>

                            <a href="icons.php">

                                <span>Icons</span>

                            </a>

                        </li>

                        <li>

                            <a href="colors.php">

                                <span>Colors</span>

                            </a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="#">

                        <span class="nav-link-icon">

                            <i class="bi bi-bar-chart"></i>

                        </span>

                        <span>Charts</span>

                    </a>

                    <ul>

                        <li>

                            <a href="apexchart.php">Apex Chart</a>

                        </li>

                        <li>

                            <a href="chartjs.php">Chartjs</a>

                        </li>

                        <li>

                            <a href="justgage.php">Justgage</a>

                        </li>

                        <li>

                            <a href="morsis.php">Morsis</a>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="#">

                        <span class="nav-link-icon">

                            <i class="bi bi-paperclip"></i>

                        </span>

                        <span>Extensions</span>

                    </a>

                    <ul>

                        <li>

                            <a href="vector-map.php">

                                <span>Vector Map</span>

                            </a>

                        </li>

                        <li>

                            <a href="datatable.php">

                                <span>Datatable</span>

                            </a>

                        </li>

                        <li>

                            <a href="sweet-alert.php">Sweet Alert</a>

                        </li>

                        <li>

                            <a href="lightbox.php">Lightbox</a>

                        </li>

                        <li>

                            <a href="introjs.php">Introjs</a>

                        </li>

                        <li>

                            <a href="nestable.php">Nestable</a>

                        </li>

                        <li>

                            <a href="rating.php">Rating</a>

                        </li>

                        <li>

                            <a href="code-highlighter.php">Code Highlighter</a>

                        </li>

                    </ul>

                </li>

                <li class="menu-divider">Other</li>

                <li>

                    <a href="#">

                        <span class="nav-link-icon">

                            <i class="bi bi-list"></i>

                        </span>

                        <span>Menu Item</span>

                    </a>

                    <ul>

                        <li><a href="#">Menu Item 1</a></li>

                        <li>

                            <a href="#">Menu Item 2</a>

                            <ul>

                                <li>

                                    <a href="#">Menu Item 2.1</a>

                                </li>

                                <li>

                                    <a href="#">Menu Item 2.2</a>

                                </li>

                            </ul>

                        </li>

                    </ul>

                </li>

                <li>

                    <a href="#" class="disabled">

                        <span class="nav-link-icon">

                            <i class="bi bi-hand-index-thumb"></i>

                        </span>

                        <span>Disabled</span>

                    </a>

                </li> -->

            </ul>

        </div>

    </div>

    <!-- ./  menu -->



    <!-- layout-wrapper -->

    <div class="layout-wrapper">



        <!-- header -->

        <div class="header">

            <div class="menu-toggle-btn">

                <!-- Menu close button for mobile devices -->

                <a href="#">

                    <i class="bi bi-list"></i>

                </a>

            </div>

            <!-- Logo -->

            <a href="index.php" class="logo">
                <h1>KRIDHA FASHION</h1>

                <!-- <img width="100" src="../assets/images/menu/logo/4.png" alt="logo"> -->

            </a>

            <!-- ./ Logo -->

            <div class="page-title">Overview</div>

            <form class="search-form">

                <div class="input-group">

                    <button class="btn btn-outline-light" type="button" id="button-addon1">

                        <i class="bi bi-search"></i>

                    </button>

                    <input type="text" class="form-control" placeholder="Search..." aria-label="Example text with button addon" aria-describedby="button-addon1">

                    <a href="#" class="btn btn-outline-light close-header-search-bar">

                        <i class="bi bi-x"></i>

                    </a>

                </div>

            </form>

            <div class="header-bar ms-auto">

                <ul class="navbar-nav justify-content-end">



                    <li class="nav-item ms-3">

                        <button onclick="window.location.href='add_product.php';" class="btn btn-primary btn-icon">

                            <i class="bi bi-plus-circle"></i> Add Product

                        </button>

                    </li>

                </ul>

            </div>

            <!-- Header mobile buttons -->

            <div class="header-mobile-buttons">

                <a href="#" class="search-bar-btn">

                    <i class="bi bi-search"></i>

                </a>

                <a href="#" class="actions-btn">

                    <i class="bi bi-three-dots"></i>

                </a>

            </div>

            <!-- ./ Header mobile buttons -->

        </div>

        <!-- ./ header -->