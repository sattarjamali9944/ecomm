<?php
require("../include/conn.php");
session_start();
if(isset($_SESSION["vendor_id"]) && isset($_SESSION["token"])){
?>


<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Change  Password  hs code </title>
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
								<a href="dashboard.php">
								<img src="assets/img/logo-dark.png" alt="Klorofil Logo">
								</a>
								
								</div>
								<p class="lead">Change  Password </p>
							</div>
							
							
							<?php
							
		if(isset($_POST["set_password_btn"])){					
        $token=$_POST["token"];//token 
		
		if($_SESSION["token"]==$token){
			
			 $enter_pass=$_POST["password"];//enter pass
             $c_password=$_POST["c_password"];
        if($enter_pass==$c_password){
			
		$update=mysqli_query($conn,"update vendor set 
		vendor_password='".$enter_pass."' where vendor_id='".$_SESSION['vendor_id']."'")or
		die(mysqli_error($conn));//set password here
		
        ?> 		
		<script>
		window.location.href="dashboard.php";
		
		</script>
			
			
			
			<?php
			
			
		}			
			
		}
		}
		?>				
							
							
							<form class="form-auth-small" action="#" method="post">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">
									Enter Password </label>
									<input type="hidden" name="token" 
									value="<?php echo $_SESSION["token"]?>">
			<input type="password" name="password" class="form-control" id="signin-email" 
									 placeholder="Enter Password" autocomplete="off">
								</div>
								
								
								
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">
									Confirmed Password
									
									</label>
									<input type="password" name="c_password" class="form-control" 
									id="signin-password"  autocomplete="off"
									placeholder="Confirmed Password">
								</div>
								
								<button type="submit" name="set_password_btn" 
								class="btn btn-primary btn-lg btn-block">
								Change Password
								
								</button>
								
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">Set Your Password be do not share this password to others </h1>
							
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
<?php

}//end of session id and token 
else{
	
	?>
	<script>
	window.location.href="index.php";
	</script>
	
	
	<?php
}

?>