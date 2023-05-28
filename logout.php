<?php 
session_start();
if($_SESSION['admin']){
    unset($_SESSION['admin']);
    unset($_SESSION['logged_in']);

    header('location:index.php');
}
?>