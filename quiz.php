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
     <div class="question ml-sm-5 pl-sm-5 pt-2">
        <div class="py-2 h5"><b>Click "START" button to start your Quiz </b></div>
        <div class="ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3" id="options">
            <label class="options">Quiz Have 10 Question , when you click one of then option , then next question will be appear<span class="checkmark"></span></label>

             <label class="options">You Don't reload the page After  Quiz start <span class="checkmark"></span></label>
             <label class="options">We don't have a HISTORY section right now so ,so please check result carefully <span class="checkmark"></span></label>
             <label class="options">No Time Limit <span class="checkmark"></span></label>
             <label class="options">No Negative mark, every right answer you get 1 mark <span class="checkmark"></span></label>
        </div>
    </div>
    <div class="d-flex align-items-center pt-3">
       
        <div class="ml-auto mr-sm-5">
            <button class="btn btn-success" onclick="getfirstquestion();">START</button>
        </div>
    </div>
</div>
<input type="hidden" id="quizcode"  name="quizcode" value="<?php echo  date("Ymd").rand(11,999); ?>" >
<input type="hidden" id="quizid" name="quizid" value="<?php echo  $_GET['id']; ?>" >
<input type="hidden" id="limit" name="limit" value="0" >
<div id="secondsection" style="display:none" >
 <div class="question ml-sm-5 pl-sm-5 pt-2" id="qstndiv">
        
        
            
            
        
    
</div>

</div>
</body>
</html>



<script type="text/javascript">
$(document).ready(function(){
    qstncount=0;

});



    function getfirstquestion(){

        if(qstncount<10){

$("#firstsection").hide();
$("#secondsection").show();
qstncount+=1;
quizid=$("#quizid").val();
limit=$("#limit").val();
quizcode=$("#quizcode").val();

if(qstncount<=4){
quizlevel=1;
}else if(qstncount<=7 && qstncount>4){
quizlevel=2;
}else{
    quizlevel=3;
}

if(qstncount==4 || qstncount==7 || qstncount==10){
    $("#limit").val(0);
}else{

       $("#limit").val(parseInt(limit)+1);
}

 Data={"action":"GetQuestionBySubject","limit":limit,"qstncount":qstncount,"quizidtopic":quizid,"quizlevel":quizlevel,"quizcode":quizcode};
   $.ajax({
      url: '<?php echo $MAINROOT; ?>Api.php',
      type: 'POST',
      data:Data ,
      success: function(response) {
        var jsonObject = JSON.parse(response);
        if(jsonObject==null){
           $("#qstndiv").empty();

        }else{
            id=jsonObject.id;
            qstn=jsonObject.title;
            ptn1=jsonObject.option1;
            ptn2=jsonObject.option2;
            ptn3=jsonObject.option3;
            ptn4=jsonObject.option4;


          $("#qstndiv").html("<input type='hidden' value='"+id+"' id='questionid' name='questionid' ><div class='py-2' h5><b>"+qstn+"</b></div><div class='ml-md-3 ml-sm-3 pl-md-5 pt-sm-0 pt-3' id='options'><label onclick='opp(1)' class='options opt'>"+ptn1+"<span class='heckmark'></span></label><label onclick='opp(2)' class='options opt'>"+ptn2+"<span class='heckmark'></span></label><label onclick='opp(3)' class='options opt'>"+ptn3+"<span class='heckmark'></span></label><label onclick='opp(4)' class='options opt'>"+ptn4+"<span class='heckmark'></span></label></div></div>");


        }


      },
       beforeSend: function() {
      $("#qstndiv").empty();
    },
      error: function(xhr, status, error) {
        console.error('Error sending data:', error);
      }
    });

}else{
    $("#qstndiv").empty();
    $("#qstndiv").html("<div>Completed ..! <a href='<?php echo MAINROOT; ?>result.php?code="+quizcode+"'>View Result</a></div>")

}



    }

  
function opp(opn){
qstnid=$("#questionid").val();
quizcode=$("#quizcode").val();

Data={"questionid":qstnid,"option":opn,"action":"savequiz","quizcode":quizcode};
 $.ajax({
       url: '<?php echo $MAINROOT; ?>Api.php',
      type: 'POST',
      data: Data,
      success: function(response) {
       

      },
      error: function(xhr, status, error) {
        console.error('Error sending data:', error);
      }
    });



    
getfirstquestion();




}

</script>
