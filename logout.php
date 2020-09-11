<?php
session_start();
$_SESSION['roll']="";
$_SESSION['fname'] =""; 
$_SESSION['lname'] =""; 
$_SESSION['year'] =""; 
$_SESSION['password'] =""; 
session_destroy();
header('location:login.php');
?>