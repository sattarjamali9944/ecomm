<?php
session_start();
require("../include/conn.php");
error_reporting(0);
if(isset($_SESSION["vendor_id"]) && isset($_SESSION["token"])){
?>
<!doctype html>
<html lang="en">

<head>
	<title>Profile</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
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
		<?php
		
		require("header.php");
		
		?>
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							
															<?php


$update_query=mysqli_query($conn,"select * from vendor  
where vendor_id='".$_SESSION['vendor_id']."'") or die(mysqli_error($conn));
if($fetch_data=mysqli_fetch_array($update_query)){

$first_name=$fetch_data["vendor_first_name"];
$last_name=$fetch_data["vendor_first_name"];
$vendor_ntn_number=$fetch_data["vendor_ntn_number"];
$vendor_company_name=$fetch_data["vendor_company_name"];
$vendor_cnic=$fetch_data["vendor_cnic"];
$company_address=$fetch_data["vendor_address"];
$personal_address=$fetch_data["vendor_personal_address"];
$email=$fetch_data["vendor_email"];
$phone=$fetch_data["vendor_phone"];

?>
											
							
							
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
									   <?php

if($user_image==""){
	
	?>
	<img src="main_category_images/no.png" class="img-circle" style="height:50px; width:50px;">
<?php 	
}
else
{?>
<img src="plugin/user_images/<?php echo $user_image;?>" class="img-circle" style="height:50px; width:50px;">
<?php
}
?>
										
										<h3 class="name"><?php
										
										echo $first_name;
										
										?></h3>
									</div>
									
								</div>
								
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										
										<ul class="list-unstyled list-justify">
										
											<li>Mobile <span><?php echo $phone;?></span></li>
											<li>Email <span><?php echo $email;?></span></li>
													</ul>
									</div>
									
									
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<h4 class="heading">My Profile</h4>
								<!-- AWARDS -->
								
			
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div>
                            <strong><?php echo $company_name;?></strong>
                        </div>
                        <div>First  Name:<?php echo $first_name?></div>
                        <div>Last  Name:<?php echo $last_name?></div>
						
                        <div>My Company Address:<?php echo $company_address;?></div>
                        <div>My Personal  Address:<?php echo $personal_address;?></div>
                        
						<div>Email: <?php echo $email;?></div>
                        <div>Phone: <?php echo $phone;?></div>
                    </div>
                 
                  
                </div>

             <?php
}
			 ?>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
<?php
}
else{
	
	header("location:index.php");
	
}
?>