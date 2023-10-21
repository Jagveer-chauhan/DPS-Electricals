<?php
include 'common.php';

if(!isset($_SESSION['user'])){
    header('Location:login.php');
}

?>
