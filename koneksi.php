<?php
$con = mysqli_connect("localhost","root","","rooftop_car");


// check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MYSQL: " . mysqli_connect_errno();
    exit();
}