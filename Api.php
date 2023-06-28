<?php 
include 'mainconfig.php';
include 'checkaccess.php';


if(isset($_POST)){

$action=$_POST['action'];
if(!empty($action)){


switch ($action) {
  case 'GetAllSubjects':
  			$sql = "SELECT * FROM topics";

			$result = $con->query($sql);

			if ($result->num_rows > 0) {
			 $res=[];
			 while($row = $result->fetch_assoc()){

			 	$temp=array(
					"id"=>$row['id'],
					"title"=>$row['title'],
			 	);
			 	array_push($res, $temp);
			 }
			} else {
			$res=null;
			}
			echo json_encode($res);



    break;


 case 'GetQuestionBySubject':
 			$limit=$_POST['limit'];
 			$qstncount=$_POST['qstncount'];
 			$quizidtopic=$_POST['quizidtopic'];
 			$quizlevel=$_POST['quizlevel'];

  			$sql = "SELECT * FROM quiz_questions where question_level=$quizlevel AND topic=$quizidtopic ORDER BY 'DESC' LIMIT $limit,1";
			
			$result = $con->query($sql);
			if ($result->num_rows > 0) {
				$res = $result->fetch_assoc();

			} else {
			$res=null;
			}
			echo json_encode($res);



    break;



   case 'savequiz':
// ini_set('display_errors', 1);

 			$questionid=$_POST['questionid'];
 			$option=$_POST['option'];
 			$quizcode=$_POST['quizcode'];
 			$usertocken=$_SESSION['usertocken'];

 			  $sql = "INSERT INTO atn_quiz (quize_code,user_tocken,qstn_id,attended_option) VALUES ('$quizcode','$usertocken',$questionid,$option)";
if ($con->query($sql) === TRUE) {


}

			echo json_encode(0);



    break;
 
  default:
    echo 'Unknown submit.';
    break;
}









}else{
	echo "Action Missed";
}





}else{
	echo "invalid call";
}



?>