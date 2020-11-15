<?php
require("../include/conn.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Main Categories</title>
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
	</br>
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
<h1>Edit  Main Category</h1>
<?php 
require("delete_main_cat.php");//this file have delete code of third cat
$get_single_category=mysqli_query($conn,"SELECT * FROM main_catogories

where cat_id='".mysqli_real_escape_string($conn,$_GET["edit_id"])."'

") or die(mysqli_error($conn));//main category 
$count_categories=mysqli_num_rows($get_single_category);//count of categories 





if($count_categories > 0){//if count  greater than 0 

	
	while($fetch=mysqli_fetch_array($get_single_category)){
	$cat_id=$fetch["cat_id"];//cat id 
	$cat_name=$fetch["cat_name"];//cat name 
	$cat_icon=$fetch["icon"];//icon
	$cat_image=$fetch["cat_image"];
	
?>
<form method="post" action="plugin/edit_main_category.php" enctype="multipart/form-data">
 <div class="form-group">
<label>Main Category  Name</label>
<input type="hidden" name="cat_id" value="<?php echo $cat_id;?>">

<input type="text" name="cat_name" class="form-control" value="<?php echo $cat_name;?>" placeholder="Category Name">
</div>
<div class="form-group">
<label>Icon Url/Text</label>
<input type="text" name="icon_text" value="<?php echo $cat_icon;?>" class="form-control" placeholder="Icon Name">
</div>

<div class="form-group">
<label>Image Of Main Category</label>
<td><img src="main_category_images/<?php echo $cat_image?>" style="width:50px; hieght:50px;"></td>
			
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
</div>
<div>
</div>
</body>
</html>