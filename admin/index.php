<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OnlineTest | Admin </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
   
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									
                                    <h4 class="text-center mb-4">Login Now</h4>
                                    <form  id="loginform" class="form-valide-with-icon needs-validation"  method="POST" novalidate>
                                        <div class="mb-3">
                                            <label class="text-label form-label" for="validationCustomUsername">Username</label>
                                            <div class="input-group">
												<span class="input-group-text"> <i class="fa fa-user"></i> </span>
                                                <input type="text" name="username" class="form-control  border-left-end" id="validationCustomUsername" placeholder="Username" >
												<input type="hidden" name="action" value="login">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="text-label form-label" for="dz-password">Password</label>
                                            <div class="input-group transparent-append">
												<span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                                                <input name="password" type="password" class="form-control" id="dz-password" placeholder="Password" >
												<span class="input-group-text show-pass  border-left-end"> 
													<i class="fa fa-eye-slash"></i>
													<i class="fa fa-eye"></i>
												</span>
                                                
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               
                                            </div>
                                            
                                        </div>
                                       <p id="msg" style="color:red"></p>
                                        <button type="submit"  class="btn btn-primary btn-block btnsave"   >Submit</button>
                                     </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
	<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>

</body>

<script type="text/javascript">
    $('.btnsave').click(function(event){
     event.preventDefault();
  var formData = $('#loginform').serializeArray();
   $.ajax({
      url: 'ajax/loginAjax.php',
      type: 'POST',
      data: formData,
      success: function(response) {
        var jsonObject = JSON.parse(response);

        if(jsonObject==1){
            window.location.href = "dashboard.php";

        }else{
            $("#msg").text("Invalid Username or Password");
        }

      },
      error: function(xhr, status, error) {
        console.error('Error sending data:', error);
      }
    });

});
</script>




</html>