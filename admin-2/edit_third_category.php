<?php
require("../include/conn.php")


?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit  Third Categories</title>
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
Edit  Third Category

</h1>
</div>

<div class="col-sm-5" style="float:left;">
 <?php 
// require("delete_third_cat.php");//this file have delete code of third cat
$get_single_thirdcategory=mysqli_query($conn,"SELECT * FROM third_level_category

where third_cat_id='".mysqli_real_escape_string($conn,$_GET['edit_id'])."'

") or 
die(mysqli_error($conn));//main category 
$count_thirdcategories=mysqli_num_rows($get_single_thirdcategory);//count of categories 





if($count_thirdcategories > 0){//if count  greater than 0
	
	
	while($fetch=mysqli_fetch_array($get_single_thirdcategory)){
	$third_cat_id=$fetch["third_cat_id"];//sub_cat id 
	$third_name=$fetch["third_catname"];//cat name 
	$sub_cat_idtwo=$fetch["sub_cat_id"];//icon
	
?> 

<form method="post" action="plugin/edit_third_category.php">
 <div class="form-group">
 <input type="hidden" name="third_cat_id" value="<?php echo $third_cat_id?>"
<label>Choose Sub Category</label>
<?php 
$get_main_category=mysqli_query($conn,"SELECT * FROM sub_catogory") or die(mysqli_error($conn));//main category 
 $count_categories=mysqli_num_rows($get_main_category);//count of categories ?>
<select  name="main_cat_id" class="form-control">
<?php

if($count_categories > 0){//if count  greater than 0 
while($fetch=mysqli_fetch_array($get_main_category)){
	$sub_cat_id=$fetch["sub_cat_id"];//cat id 
	$sub_catname=$fetch["sub_catname"];//cat id 
	
?>
<option value="<?php echo $sub_cat_id;?>" 
<?php if($sub_cat_id==$sub_cat_idtwo){echo "selected=selected";}?>>
<?php echo $sub_catname;?>
</option>
<?php 
} //end of while 
}//end  of if 

?>
</select>


</div>
<div class="form-group">
<label>Third Cat Name</label>
<input type="text" name="cat_name" class="form-control" value='<?php echo $third_name;?>' placeholder="Enter Third Cat">
</div>

</br>

<input type="submit" name="third_cat_btn" class="form-control" class="btn btn-primary">
	
</form>
</div>
<?php
}
}

?>

</div>
</body>
</html>