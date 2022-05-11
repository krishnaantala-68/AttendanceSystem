<?php
session_start();
if(!isset($_SESSION["username"]) && $_SESSION["username"]==null){
	header("location:login.php");
}
$username= $_SESSION["username"];
?>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/jquery.min.js"></script>
	<style>
</style>
</head>
<script>
$(document).ready(function () {
    $("body").hover(function reload(){
        $("#reload").load("reload.php");
    });
    $("body").ready().reload();
});
</script>
<body>
	<?php include("nav.php"); ?>
	<div class="container">
		<br>
		<div class="row">
			<div class="col-sm-12">
				<div class="text-white bg-primary">
					<div class="card-header">
						<h3>
							<?php //echo "Welcome, ".$_SESSION["first_name"];?>
                            <?php echo "Welcome to Attendance Portal"; ?>
						</h3>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-sm-12">
				<div class="text-white bg-primary">
					<div class="card-header"> <h5> Attendance Records </h5> </div>
					<div class="card-body"  id="reload">
                    
                    </div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>