<?php
session_start();
unset($_SESSION['usertocken']);
unset($_SESSION['role']);
header("Location:index.php");

 ?>