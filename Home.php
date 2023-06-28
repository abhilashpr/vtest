<?php
include './checkaccess.php';
include './mainconfig.php';



 ?>

 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Test |Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Hi,User</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="<?php echo MAINROOT; ?>logout.php">Logout</a></li>
     
    </ul>
  </div>
</nav>
  
<div class="container">
  <h3>Welcome To Online Quiz </h3>
  <p>Please Choose one Topic to start Your quiz</p>
  <div class="row" id="subdiv">

  	<div class="col-lg-3">
  		 <div class="card bg-success text-white">
    <div class="card-body">Basic card  <a style="float: right;" class="btn btn-danger">Start</a></div>

  </div>
  	</div>

    


  	
  </div>
</div>

</body>
</html>
<script>
$(document).ready(function(){
  Data={"action":"GetAllSubjects"};
   $.ajax({
      url: '<?php echo $MAINROOT; ?>Api.php',
      type: 'POST',
      data:Data ,
      success: function(response) {
        var jsonObject = JSON.parse(response);

        if(jsonObject==null){

          $("#subdiv").html("<div class='col-lg-3'><div class='card bg-success text-white'><div class='card-body'>No Subjects To Display</div></div></div>");

        }else{

          $(jsonObject).each(function(index, element) {

                html="<div class='col-lg-3'><div class='card bg-success text-white'><div class='card-body'>"+element.title+"<a href='<?php echo MAINROOT; ?>quiz.php?id="+element.id+"' style='float: right;'' class='btn btn-danger'>Start</a></div></div></div>";
 $('#subdiv').append(html);
});
        }


      },
       beforeSend: function() {
      $("#subdiv").empty();
    },
      error: function(xhr, status, error) {
        console.error('Error sending data:', error);
      }
    });
});
</script>
