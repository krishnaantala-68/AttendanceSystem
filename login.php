<?PHP
session_start();
if(isset($_SESSION["username"])){
	header("location:index.php");
}
?>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" />
	<script src="js/jquery.min.js" ></script>
	<style>
		.err{
			color:red;
		}
	</style>

</head>
<body>
	<div class="container ">
		<button type="button" class="btn btn-primary btn-lg btn-block">Library Management</button>
		<br>
		<div class="card border-primary mb-9" >
			<div class="card-header">Login Form 
				<div class="err" id="error">
					- Username must be email address</br>
					- Password must be of 6 to 16 in length
				</div>
			</div>
			<div class="card-body">
				
				<form action="validateuser.php" method="post" id="loginform">
					<fieldset>
						<div class="form-group ">
							<label for="staticEmail">Username</label>			
							<input type="text" class="form-control" name="username" id="username" placeholder="email@example.com" value="avichovatiya@gmail.com">
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" id="password" name="password" aria-describedby="password" placeholder="Enter Password" value="123456">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-primary">Reset</button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
        $(function(){
			$('#error').hide();
           var error_email = false;
           var error_password = false;

           $("#username").keyup(function() {
              check_email();
           });
           $("#password").keyup(function() {
              check_password();
           });
  
		   function check_email() {
              var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
              var email = $("#username").val();
              if (pattern.test(email) && email !== '') {
                 $("#username").css("border-bottom","2px solid #34F458");
				 $('#error').hide();
              } else {
                 $("#username").css("border-bottom","2px solid #F90A0A");
                 error_email = true;
				 $('#error').show();
              }
           }
  
           function check_password() {
              var password_length = $("#password").val().length;
              if (password_length < 6) {
				  $("#password").css("border-bottom","2px solid #F90A0A");
				  error_password = true;
				  $('#error').show();
				} else {
					$("#password").css("border-bottom","2px solid #34F458");
					$('#error').hide();
				}
           }
  
           $("#registration_form").submit(function() {
              error_email = false;
              error_password = false;
  
              check_email();
              check_password();
  
              if (error_email == false && error_password == false ) {
                 return true;
              } else {
                 alert("Please Fill the form Correctly");
                 return false;
              }
           });
        });
     </script>
    

</body>
</html>