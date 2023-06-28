<?php

define("MAINROOT","http://localhost/onlineqz/");

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "onlineqz";

$con = new mysqli($servername, $username, $password,$database);

if ($con->connect_error) {
  die("Connection failed: " . $conn->connect_error);exit();
}


?>