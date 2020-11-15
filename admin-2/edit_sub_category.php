<?php
require("../include/conn.php")


?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit  Main Categories</title>
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
<div class="container">
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
</div>
</body>
</html>