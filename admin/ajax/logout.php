<?php 
ini_set('display_errors', 1);

 include '../config.php';
 session_start();

 unset($_SESSION['username']);
 unset($_SESSION['role']);
header("Location: ".ROOT);
?>