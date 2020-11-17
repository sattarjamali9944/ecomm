<?php
session_start();
require("../include/conn.php");
if(isset($_SESSION["admin_id"])){

?>


<!doctype html>
<html lang="en">

<head>
	<title>Add Delivert Categories </title>
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
					<h3 class="page-title">Add 
					Delivert Categories</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								
								<div class="panel-body">
									<?php
if(isset($_GET["msg"])){
	?>

<div class="alert alert-success">

	<?php  echo $_GET["msg"];//if data is successfully addedd then this data is show
	?>
	

</div>
<?php }

?>
<div class="row">
<div class="col-sm-5" style="float:left;">
<h1>Add Delivery Categories</h1>
<form method="post" action="plugin/add_delivery_cat.php" enctype="multipart/form-data" >
 <div class="form-group">
<label>Category  Name</label>
<input type="text" name="cat_name" class="form-control" placeholder="Deilivery Category Name">
</div>
<input type="submit" name="delivery_cat_btn" value="Save" class="form-control" class="btn btn-primary">	
</form>
</div>

<div class="col-sm-5" style="float:left;">
<?php 
require("delete_delivery.php");//delete delivery file 
$get_single_delivery=mysqli_query($conn,"SELECT * FROM add_delivery_category") or die(mysqli_error($conn));//delivery query
$count_cities=mysqli_num_rows($get_single_delivery);//count of delivery 
if($count_cities > 0){//if count  greater than 0 
?>
<table class="table table-border">
	<thead><th>#</th>

     <th>Delivery Type  Name</th>
	 <th>Edit </th>
     <th>Delete </th>


	</thead>
	<tbody>
	<?php
	
	while($fetch=mysqli_fetch_array($get_single_delivery)){
	$delivery_id=$fetch["delivery_cat_id"];//delivery id 
	$delivery_name=$fetch["delivery_cat_name"];//delivery name 
	?>
		<tr>
			<td><?php echo $delivery_id;?></td>
			<td><?php echo $delivery_name;?></td>
			
			<td><a href="edit_delivery.php?edit_id=<?php
			echo $delivery_id;?>" class="btn btn-success">Edit</td>
			<td><a href="add_delivery_cat.php?del_id=<?php
			echo $delivery_id;
			?>" class="btn btn-danger">Delete</button></td>
			
		</tr>
<?php

	}//end of while loop

?>

	</tbody>
	<tfoot></tfoot>


</table>
<?php
}//end of count if 

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