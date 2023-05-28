<?php 
session_start();
if($_SESSION['student']){
    unset($_SESSION['student']);
    unset($_SESSION['logged_in']);
    header('location:index.php');
}
?>