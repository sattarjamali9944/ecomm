<?php
require("../include/conn.php")


?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Main Categories</title>
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
Add Sub Categories

</h1>
</div>

<div class="col-sm-5" style="float:left;">

<form method="post" action="plugin/add_sub_category.php" enctype="multipart/form-data">
 <div class="form-group">
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
<option value="<?php echo $cat_id;?>">
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
<input type="text" name="cat_name" class="form-control">
</div>
</br>
<div class="form-group">
<label>Image Of Sub Category</label>
<input type="file" name="image" class="form-control" placeholder="Icon Name">
</div>
<input type="submit" name="cat_btn" class="form-control" class="btn btn-primary">
	
</form>
</div>


<div class="col-sm-5" style="float:left;">
<?php 

require("delete_sub_cat.php");
$get_single_subcategory=mysqli_query($conn,"SELECT * FROM sub_catogory") or die(mysqli_error($conn));//main category 
$count_subcategories=mysqli_num_rows($get_single_subcategory);//count of categories 





if($count_subcategories > 0){//if count  greater than 0 
?>
<table class="table table-border">
	<thead><th>#</th>

     <th>Sub category</th>
	 <th>Image</th>
	 <th>Main Category</th>
	 
     <th>Edit </th>
     <th>Delete </th>


	</thead>
	<tbody>
	<?php
	
	while($fetch=mysqli_fetch_array($get_single_subcategory)){
	$sub_cat_id=$fetch["sub_cat_id"];//sub_cat id 
	$cat_name=$fetch["sub_catname"];//cat name 
	$cat_id=$fetch["cat_id"];//icon
	$sub_cat_image=$fetch["sub_image"];
?>
		<tr>
			<td><?php echo $sub_cat_id;?></td>
			<td><?php echo $cat_name;?></td>
			<td><?php 
			$get_single_category=mysqli_query($conn,"SELECT * FROM main_catogories
   where cat_id='".$cat_id."'


			") 
			or die(mysqli_error($conn));//main category 
			 $count_categories=mysqli_num_rows($get_single_category);//count of categories 


	while($fetch2=mysqli_fetch_array($get_single_category)){
   
	echo $cat_name=$fetch2["cat_name"];//cat name 
	}
?>
			
			
			
			</td>
			<?php
			if($sub_cat_image==""){
				?>
				<td><img src="sub_category_images/no.png" style="width:50px; hieght:50px;"></td>
			
			<?php }
			else{
			?>
			<td><img src="sub_category_images/<?php echo $sub_cat_image?>" style="width:50px; hieght:50px;"></td>
			<?php
			}
			?>
			<td><a href="edit_sub_category.php?edit_id=<?php echo
			 $sub_cat_id;
			?>" class="btn btn-success">Edit</td>
			<td><a href="add_sub_category.php?del_id=<?php
			echo $sub_cat_id;
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

?></div>
</div>
</div>
</body>
</html>