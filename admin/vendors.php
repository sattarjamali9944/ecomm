<?php
session_start();
require("../include/conn.php");
if(isset($_SESSION["admin_id"])){

?>


<!doctype html>
<html lang="en">

<head>
	<title>Vendors</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, vendor-scalable=0">
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
	<script src="assets/vendor/jquery/jquery.min.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<?php
		require("header.php");//header file 
		
		?>
		
		
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Vendors</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Vendors</h3>
								</div>
								<div class="panel-body">
									<?php


$query=mysqli_query($conn,"select * from vendor") or
								die(mysqli_error($conn));
								
								$count=mysqli_num_rows($query);
								if($count > 0){	?>
								<table class="table">
								<thead>
								<th>Id</th>
								<th>vendor Name</th>
								<th>phone</th>
								<th>email</th>
								<th>Image</th>
								<th>Active/Deactive</th>
								</thead>
								
								<?php
								while($fetch=mysqli_fetch_array($query)){
                                $vendor_id=$fetch["vendor_id"];//vendor id 
                                $vendor_name=$fetch["vendor_first_name"];//vendor_name
								$vendor_email=$fetch["vendor_email"];//vendor email
								$vendor_phone=$fetch["vendor_phone"];//vendor_phone
								$vendor_image=$fetch["vendor_logo"];//vendor_image
								$status=$fetch["vendor_status"];//vendor satatus Active and Deactive
								
									?>
<tbody>
<tr>
<td><?php echo $vendor_id;?></td>
<td><?php echo $vendor_name;?></td>
<td>&nbsp;<?php echo $vendor_phone;?></td>
<td><?php echo $vendor_email;?></td>
<?php

if($vendor_image==""){
	
	?>
	<td><img src="main_category_images/no.png" style="height:50px; width:50px;"></td>
<?php 	
}
else
{?>
<td><img src="plugin/vendor_images/<?php echo $vendor_image;?>" style="height:50px; width:50px;"></td>
<?php
}
?>

<td>
<script>
$(document).ready(function(){
$("#change<?php echo $vendor_id;?>").change(function(){

var vendor_data=$("#change<?php echo $vendor_id;?>").val();
					 $.ajax({
            type: "POST",
            url: "vendor_active_deactive_ajax.php",
            data: {vendor_data:vendor_data},
            //dataType: "JSON",
            success: function(data) {
           
				$("#result<?php echo $vendor_id;?>").html(data);
             
   		           
   		    
   		    
            },
            error: function(err) {
          
            }
        });
						
	
});	
	
	
});

</script>

<div id="result<?php echo $vendor_id;?>"></div>
<select class="form-control" id="change<?php echo $vendor_id;?>">

<option value="">Choos Status</option>
<option value="ActiveX<?php echo $vendor_id;?>" <?php if($status=="Active")
{echo "selected=selected";}?>>Active</option>
<option value="DeactiveX<?php echo $vendor_id;?>" <?php if($status=="Deactive")
{echo "selected=selected";}?>>Deactive</option>
</select></td>

</tr>
</tbody>

<?php
								}
								?>
								
				</table>				
								<?php
								}

?>
								</div>
							</div>
							<!-- END BASIC TABLE -->
						</div>
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