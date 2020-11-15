<?php
require("../include/conn.php");
session_start();

?>


<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login hs code </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center">
								<img src="assets/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">Login to your account</p>
							</div>
							
							
							<?php
							
		if(isset($_POST["login_btn"])){					

$email=$_POST['email'];
$pass=$_POST['password'];



$get_session_id=mysqli_query($conn,"select * from admin where admin_email='".$email."'

and admin_password='".$pass."'
") or
	die(mysqli_error($conn));
	$number_of_row=mysqli_num_rows($get_session_id);
	if($number_of_row > 0){
		if($fetch=mysqli_fetch_array($get_session_id)){
			
			$_SESSION["admin_id"]=$fetch["admin_id"];
			$_SESSION["admin_email"]=$fetch["admin_email"];
			
			?>
			
			<script>
			window.location.href="dashboard.php";
			</script>
			
		<?php }
	 }
	 
	 else{
		 
		 echo "<font color='red'> Email or password is wrong... </font>";
		 
	 }
		}
	 ?>
							
							
							
							<form class="form-auth-small" action="#" method="post">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">
									Email</label>
									<input type="email" name="email" class="form-control" id="signin-email" 
									 placeholder="Email">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" name="password" class="form-control" id="signin-password" value="thisisthepassword" placeholder="Password">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" name="login_btn" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">Forgot password?</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Free Bootstrap dashboard template</h1>
							<p>by The Develovers</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
