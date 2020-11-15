<!DOCTYPE html>
<html>
<head>
	<title>Add product </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
crossorigin="anonymous">
</head>
<body>
<div class="container">
</br>
    </br>

	<div class="row" style="position:relative; top:-20px;">
	<?php require("sidebar.php");?>
	</div>
	</br>

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
<h1>Add Product Form</h1>

<form action="plugin/add_propuct.php" method="post" enctype="multipart/form-data">
 <div class="form-group">
<label>Product Name</label>
<input type="text" name="pro_name" class="form-control" placeholder="Product Name">
</div>
 <div class="form-group">
<label>Product Description</label>
<textarea name="description" class="form-control"></textarea>
</div>
 <div class="form-group">
<label>Price</label>
<input type="text" name="price" class="form-control" placeholder="Price">
</div>
 <div class="form-group">
<label>Image</label>
<input type="file" name="image" class="form-control">
</div>
 <div class="form-group">
<input type="submit" name="btn" class="btn btn-primary">
</div>
</form>
</div>
</body>
</html>