<?php
session_start();
require("../include/conn.php");
if(isset($_SESSION["admin_id"])){

?>


<!doctype html>
<html lang="en">

<head>
	<title>Edit Sub Categories</title>
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
					<h3 class="page-title">Edit Sub  Categories</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
							
								<div class="panel-body">
									<?php
if(isset($_GET["msg"])){
	?>

<div class="alert alert-success">

	<?php  echo $_GET["msg"];//if data is successfully Editedd then this data is show
	?>
	

</div>
<?php }

?>
<div class="row">
<div class="col-sm-12">
<h1>
Edit  Sub Categories

</h1>
</div>

<div class="col-sm-5" style="float:left;">
<?php $get_single_subcategory=mysqli_query($conn,"SELECT * FROM sub_catogory

where sub_cat_id='".mysqli_real_escape_string($conn,$_GET['edit_id'])."'

") or die(mysqli_error($conn));//main category 
$count_subcategories=mysqli_num_rows($get_single_subcategory);//count of categories 





if($count_subcategories > 0){//if count  greater than 0 

	while($fetch=mysqli_fetch_array($get_single_subcategory)){
	$sub_cat_id=$fetch["sub_cat_id"];//sub_cat id 
	$sub_catname=$fetch["sub_catname"];//cat name 
	$cat_id_two=$fetch["cat_id"];//icon
	
?>


<form method="post" action="plugin/edit_sub_category.php" enctype="multipart/form-data">
 <div class="form-group">
 <input type="hidden" name="sub_cat_id" value="<?php echo $sub_cat_id;?>">
<label>Main Sub Category</label>
<?php 
$get_main_category=mysqli_query($conn,"SELECT * FROM main_catogories") or die(mysqli_error($conn));//main category 
 $count_categories=mysqli_num_rows($get_main_category);//count of categories ?>
<select  name="main_cat_id" class="form-control">
<?php

if($count_categories > 0){//if count  greater than 0 
while($fetch=mysqli_fetch_array($get_main_category)){
	$cat_id=$fetch["cat_id"];//cat id 
	$cat_name=$fetch["cat_name"];//cat id 
	
?>
<option value="<?php echo $cat_id;?>" <?php if($cat_id==$cat_id_two){echo "selected=selected";}?>>
<?php echo $cat_name;?>
</option>
<?php 
} //end of while 
}//end  of if 

?>
</select>


</div>
<div class="form-group">
<label>Sub Category Name</label>
<input type="text" name="cat_name" value="<?php echo $sub_catname;?>" class="form-control">
</div>


<div class="form-group">
<label>Image Of Sub Category</label>
<input type="file" name="image" class="form-control" placeholder="Icon Name">
</div>
<input type="submit" name="cat_btn" class="form-control" class="btn btn-primary">
	
</form>
<?php
}
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