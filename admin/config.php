<?php
session_start();
if(empty($_SESSION['username'])){
echo "Need To Login";exit();
}
$servername = "localhost";
$username = "root";
$password = "";
$database = "onlineqz";

$conn = new mysqli($servername, $username, $password,$database);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);exit();
}

define('ROOT', "http://localhost/onlineqz/admin/");

?>