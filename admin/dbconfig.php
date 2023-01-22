<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "kridha_fashion";
//connection create
$conn = new mysqli($servername, $username, $password, $db_name);

//check Connection 
if ($conn->connect_error) {
    die("connection Fail:" . $conn->connect_error);
} else {
    // echo "connection Sucessfull";
}
