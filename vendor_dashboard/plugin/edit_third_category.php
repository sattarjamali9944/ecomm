<?php
require("../../include/conn.php");//this is connection file 
if(isset($_POST["third_cat_btn"])){
$third_cat_id=mysqli_real_escape_string($conn,$_POST["third_cat_id"]);
$main_cat_id=mysqli_real_escape_string($conn,$_POST["main_cat_id"]);//main_cat_id 

$cat_name=mysqli_real_escape_string($conn,$_POST["cat_name"]);//cat Name





$sub_categories_query=mysqli_query($conn,"
update `third_level_category` set 

 `sub_cat_id`='".$main_cat_id."', 
 `third_catname`='".$cat_name."'
 where `third_cat_id`='".$third_cat_id."'
 
 ") or die(mysqli_error($conn));


if ($sub_categories_query) {
	# code...
	?>
<script type="text/javascript">
	window.location.href="../add_third_category.php?msg=Third category is successfully updated";
</script>


<?php }



}//end of if button cose





?>