<?php 
 session_start();
 include '../config.php';
// ini_set('display_errors', 1);
if(isset($_POST['saveqsnt'])){

$title=$_POST['title'];
$option1=$_POST['option1'];
$option2=$_POST['option2'];
$option3=$_POST['option3'];
$option4=$_POST['option4'];
$crtoption=$_POST['crtoption'];
$topic=$_POST['topic'];
$level=$_POST['level'];



 $sql = "INSERT INTO quiz_questions (title,option1,option2,option3,option4,right_answer,question_level,topic) VALUES ('$title','$option1','$option2','$option3','$option4',$crtoption,$level,$topic)";
if ($conn->query($sql) === TRUE) {

$_SESSION['flash_message'] = "Added Successfully";
header("Location: ".ROOT."addQuestions.php");

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


}

?>