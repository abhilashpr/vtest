<?php
include '../configlogin.php';
if(isset($_POST)){

// ini_set('display_errors', 1);
	$case=$_POST['action'];

	switch ($case) {
  case 'login':

   $username=$_POST['username'];
   $password=$_POST['password'];

   $sql = "SELECT * FROM admins where username='$username' AND password ='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
 $row = $result->fetch_row();

 session_start();
$_SESSION['username'] = $row[1];
$_SESSION['role'] = 'admin';


 echo json_encode(1);

} else {
 echo json_encode(0);
}




    break;
 
  default:
    echo 'Unknown submit.';
    break;
}

}


 ?>