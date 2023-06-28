<?php
include './checkaccess.php';
include './mainconfig.php';



 ?>
  <!DOCTYPE html>
<html lang="en">
<head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="<?php echo MAINROOT; ?>qstn.css">
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
<div class="container mt-sm-5 my-1">
<div id="firstsection" >
<?php
$code= $_GET['code'];
$user_tocken=$_SESSION['usertocken'];
  $sql = "SELECT atn_quiz.*,quiz_questions.right_answer FROM atn_quiz JOIN quiz_questions ON quiz_questions.id=atn_quiz.qstn_id WHERE  quize_code='$code' AND user_tocken='$user_tocken'";
        $result = $con->query($sql);
        $totget=0;
            if ($result->num_rows > 0) {
             $res=[];
             while($row = $result->fetch_assoc()){
            $examcode=$row['quize_code'];
            $right_answer=$row['right_answer'];
            $attended_option=$row['attended_option'];
            if($attended_option==$right_answer){
$totget=$totget+1;
            }
               

             }
            } 
 ?>

     <div class="question ml-sm-5 pl-sm-5 pt-2">
        <div class="py-2 h5"><b>Exam Code :<?php echo $examcode; ?></b></div>
        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
            <label class="options">Total Number Of Questions : 10</label>
            <label class="options">Right Answers: <?php echo $totget; ?></label>
            <label class="options">Wrong Answers:<?php echo 10-$totget; ?></label>
            <label class="options">Total Mark: <?php echo $totget."/10"; ?></label>

        </div>
    </div>


    <div class="d-flex align-items-center pt-3">
       
        <div class="ml-auto mr-sm-5">
            <a href="<?php echo MAINROOT; ?>/Home.php" class="btn btn-success" >Go Back</a>
        </div>
    </div>
</div>

</body>
</html>



