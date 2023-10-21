<?php
    // $servername = "localhost";
    // $database = "u654105001_dps";
    // $username = "u654105001_rootuser";
    // $password = "Dpselectricals@123";
    $servername = "localhost";
    $database = "dps";
    $username = "root";
    $password = "";

    // Create connection

    $conn = mysqli_connect($servername, $username, $password, $database);


    // Check connection

    if (!$conn) {

        die("Connection failed: " . mysqli_connect_error());

    }
    // echo "Connected successfully";
?>