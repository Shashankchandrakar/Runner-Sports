<?php
session_start();
unset($_SESSION['login']);

$_SESSION['logout']=true;
unset($_SESSION['fname']);
unset($_SEESION['lname']);
unset($_SESSION['lname']);
unset($_SESSION['email']);
header("Location:index.php");
?>

