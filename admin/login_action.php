<?php
include 'common.php';
include '../connection.php';

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password =  $_POST['password'];

    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) === 1) {

      $row = mysqli_fetch_assoc($result);

      $row['username'] === $username && $row['password'] === $password; 
        $_SESSION['user'] = $username;
        header('Location: index.php');
       
    }else {
      // echo '<script>alert("Invalid Credentials");window.location.href="login.php";</script>';
    }
}
?>


