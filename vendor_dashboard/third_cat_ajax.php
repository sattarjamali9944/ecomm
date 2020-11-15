<?php
require("../include/conn.php");

 $sub_cat_id=$_POST["sub_cat_id"];
?>
<label>Choose Sub  Category</label>
<?php 

$get_single_category=mysqli_query($conn,"SELECT * FROM third_level_category

where sub_cat_id='".$sub_cat_id."'
") or die(mysqli_error($conn));//main category 
$count_categories=mysqli_num_rows($get_single_category);//count of categories 
if($count_categories > 0){//if count  greater than 0 
?>
<select name="third_cat" class="form-control"


>
<?php
	
	while($fetch=mysqli_fetch_array($get_single_category)){//start while loop here
	$sub_cat_id=$fetch["sub_cat_id"];//sub cat id 
	$third_catname=$fetch["third_catname"];//subcat name 
	
?>
<option value="<?php echo $sub_cat_id;?>"><?php echo $third_catname;?></option>

<?php
	}//end of while loop
}//end of file if
?>

</select>