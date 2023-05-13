<?php 
session_start();
if($_SESSION['student']){
    unset($_SESSION['student']);
    header('location:index.php');
}
?>