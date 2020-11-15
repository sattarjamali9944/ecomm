<?php
session_start();
require("../include/conn.php");
if(isset($_SESSION["admin_id"])){

?>


<!doctype html>
<html lang="en">

<head>
	<title>Products</title>
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
					<h3 class="page-title">View Products</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								
								<div class="panel-body">
									<?php
if(isset($_GET["msg"])){?>
<div class="alert alert-success">
<?php
	echo $_GET["msg"];//if data is successfully addedd then this data is show
	
	


?>

</div>
<?php
}

?>
<h1>View Products</h1>
<?php


$query=mysqli_query($conn,"select * from products") or die(mysqli_error($conn));
								
								$count=mysqli_num_rows($query);
								if($count > 0){	?>
								<table class="table">
								<thead>
								<th>Id</th>
								<th>product Name</th>
								<th>price</th>
								<th>Description</th>
								<th>Image</th>
								<th>View</th>
								<th>Edit</th>
								<th>Delete</th>
								</thead>
								
								<?php
								while($fetch=mysqli_fetch_array($query)){
                                $product_id=$fetch["pro_id"];//product id 
								$product_random_id=$fetch["product_random_id"];
                                $product_name=$fetch["pro_name"];//pr
								$product_des=$fetch["pro_des"];
								$product_price=$fetch["pro_price"];
							
								
									?>
<tbody>
<tr>
<td><?php echo $product_id;?></td>
<td><?php echo $product_name;?></td>
<td><?php 

$set=mysqli_query($conn,"SELECT * FROM set_currency
") or die(mysqli_error($conn));//set currency query 
$count_currencies=mysqli_num_rows($set);//count number of currency 
if($count_currencies > 0){//if count currencies   greater than 0 

	
	while($fetch=mysqli_fetch_array($set)){//start while loop of currency
	$currency_id=$fetch["currency_id"];//currency id 
	echo $currency_name=$fetch["currecy_sign"];//currency Name 
	
	}
}
?>&nbsp;<?php echo $product_price;?></td>
<td><?php echo $product_des;?></td>
<td>

<?php
$get_images=mysqli_query($conn,"select * from multiples_images
where product_random_id='".$product_random_id."' limit 1

") or 
die(mysqli_error($conn));
$count_images=mysqli_num_rows($get_images);
if($count_images){
while($fetch_images=mysqli_fetch_array($get_images)){
	$product_image=$fetch_images["image_name"];
?>

<img src="plugin/product_images/<?php echo $product_image;?>" 
style="height:50px; width:50px;">

<?php
}//end of while loop
}//end of count if 
?>

</td>
<td><a href="view_detail.php?pro_id=<?php echo $product_id;?>" class="btn btn-primary"><i class="fa fa-eye"></i></a></td>
<td><a href="edit_product.php?pro_id=<?php echo $product_id;?>" class="btn btn-success"><i class="fa fa-pencil"></i></a></td>
<td><a href="delete_product.php?pro_id=<?php echo $product_id;?>" class="btn btn-danger"><i class="fa fa-trash"></i> </a></td>
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