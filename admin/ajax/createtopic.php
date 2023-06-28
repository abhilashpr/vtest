<?php 
 session_start();
 include '../config.php';
// ini_set('display_errors', 1);
if(isset($_POST['savetopic'])){
 $title=$_POST['title'];

 $sql = "INSERT INTO topics (title) VALUES ('$title')";
if ($conn->query($sql) === TRUE) {

$_SESSION['flash_message'] = "Added Successfully";
header("Location: ".ROOT."addTopic.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


}

?>