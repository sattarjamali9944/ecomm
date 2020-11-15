<?php
require("../../include/conn.php");//this is connection file 
if(isset($_POST["cat_btn"])){
$sub_cat_id=mysqli_real_escape_string($conn,$_POST['sub_cat_id']);
$main_cat_id=mysqli_real_escape_string($conn,$_POST["main_cat_id"]);//main_cat_id
 

$cat_name=mysqli_real_escape_string($conn,$_POST["cat_name"]);//cat Name

$name=time().$_FILES["image"]["name"];//this is name of image
$format=explode('.',$name);

if($format[1]=="jpg" || $format[1]=="png" || $format[1]=="gif"){
	$upload="../sub_category_images";
	if(!is_dir($upload)){
	 mkdir($upload);
	}
	
	if ($_FILES["image"]["size"] > 500000) {
	echo "Sorry, your file is too large.";
	}
	else{
	 if(move_uploaded_file($_FILES["image"]["tmp_name"],$upload."/".$name))
		 {
$sub_categories_query=mysqli_query($conn,"
update sub_catogory
 set 
 `cat_id`='".$main_cat_id."', 
 `sub_catname`='".$cat_name."',
 `sub_image`='".$name."'
 
 where `sub_cat_id`='".$sub_cat_id."' 
 ") or die(mysqli_error($conn));


if ($sub_categories_query) {
	# code...
	?>
<script type="text/javascript">
	window.location.href="../add_sub_category.php?msg=sub catogory is successfully updated";
</script>


<?php 
    }
	}
	}
}
else{
$sub_categories_query=mysqli_query($conn,"
update sub_catogory
 set 
 `cat_id`='".$main_cat_id."', 
 `sub_catname`='".$cat_name."'
 where `sub_cat_id`='".$sub_cat_id."' 
 ") or die(mysqli_error($conn));


if ($sub_categories_query) {
	# code...
	?>
<script type="text/javascript">
	window.location.href="../add_sub_category.php?msg=sub catogory is successfully updated";
</script>


<?php }



}//end of if button cose


}


?>