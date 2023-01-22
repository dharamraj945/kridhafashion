<?php
include './dbconfig.php';
session_start();


?>

<!doctype html>

<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Discountmafia</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href=" ./assets/logos/favicon.png" />

    <!-- Themify icons -->
    <link rel="stylesheet" href=" ./dist/icons/themify-icons/themify-icons.css" type="text/css">

    <!-- Main style file -->
    <link rel="stylesheet" href=" ./dist/css/app.min.css" type="text/css">

</head>
<style>
    .auth {
        /* background-image: url("./assets/images/backgrounds/loginbg.jpg");
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center; */
        background-color: #ff7474;



    }
</style>

<body class="auth">

    <!-- begin::preloader-->
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <!-- end::preloader -->


    <!-- function for error -->
    <?php

    function error($data)
    { ?>


        <div class="alert alert-<?php echo $data[0]; ?>" role="alert">
            <?php
            echo $data[1];
            ?>
        </div>

    <?php }

    ?>

    <!-- end function for error -->
    <?php ?>




    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <div class="d-block d-lg-none text-center text-lg-start">
                                    <img width="120" src="./assets/logos/black-logo.png" alt="logo">
                                </div>

                                <div class="my-5 text-center text-lg-start">
                                    <h1 class="display-8">Sign In</h1>
                                    <p class="text-muted">Sign in to DiscountMafia to continue</p>
                                    <?php

                                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                                        if (isset($_POST['submit_login'])) {

                                            if ($_POST['username'] != "") {



                                                if ($_POST['password'] != "") {


                                                    $select_user_login = "SELECT * FROM `signuplogin` WHERE emailid='$_POST[username]' AND password='$_POST[password]'";
                                                    $query_run = $conn->query($select_user_login);

                                                    $num_rows = mysqli_num_rows($query_run);
                                                    $data_user = mysqli_fetch_assoc($query_run);

                                                    if ($num_rows == 1) {
                                                        if ($query_run) {

                                                            echo "<script>
                                                        
                                                                window.location.href='./index.php';
                                                                </script>";

                                                            $_SESSION['user_auth'] = $data_user['sno'];
                                                            $_SESSION['user_name'] = $data_user['name'];
                                                            $_SESSION['company'] = $data_user['companyname'];
                                                        } else {
                                                            echo "<script>
                                                        
                                                        alert('Bad Credential');
                                                        </script>";
                                                        }
                                                    } else {
                                                        $data = ["danger", "User Not Found"];
                                                        error($data);
                                                    }
                                                } else {
                                                    $data = ["danger", "Please Enter Your Password"];
                                                    error($data);
                                                }
                                            } else {

                                                $data = ["danger", "Please Enter Your username"];
                                                error($data);
                                            }
                                        }
                                    }

                                    ?>
                                </div>

                                <form class="mb-5" method="POST" action="#">
                                    <div class="mb-3">
                                        <input name="username" type="text" class="form-control" placeholder="Enter email">
                                    </div>
                                    <div class="mb-3">
                                        <input name="password" type="password" class="form-control" placeholder="Enter password">
                                    </div>
                                    <div class="text-center text-lg-start">
                                        <!-- <p class="small">Can't access your account? <a href="#">Reset your password now</a>.</p> -->
                                        <button type="submit" name="submit_login" class="btn btn-primary">Sign In</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div class="col d-none d-lg-flex border-start align-items-center justify-content-between flex-column text-center">
                        <div class="logo">
                            <img style="width:200px!important;" src=" ./assets/logos/black-logo.png" alt="logo">
                        </div>
                        <div>
                            <h3 class="fw-bold">Welcome to DiscountMafia!</h3>
                            <p class="lead my-5">If you don't have an account, would you like to register right now?</p>
                            <a href="#" class="btn btn-primary">Contact Devoloper</a>
                        </div>
                        <ul class="list-inline">

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Bundle scripts -->
    <script src=" ./libs/bundle.js"></script>

    <!-- Main Javascript file -->
    <script src=" ./dist/js/app.min.js"></script>
</body>


</html>