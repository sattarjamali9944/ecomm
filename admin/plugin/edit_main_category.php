<?php
require("../../include/conn.php");//this is connection file 
if(isset($_POST["cat_btn"])){
$cat_name=mysqli_real_escape_string($conn,$_POST["cat_name"]);//cat  name 
$icon=mysqli_real_escape_string($conn,$_POST["icon_text"]);//icon
$cat_id=mysqli_real_escape_string($conn,$_POST["cat_id"]);//cat if 




$name=time().$_FILES["image"]["name"];//this is name of image
$format=explode('.',$name);
if($name!=""){
if($format[1]=="jpg" || $format[1]=="png" || $format[1]=="gif"){
	$upload="../main_category_images";
	if(!is_dir($upload)){
	 mkdir($upload);
	}
	
	if ($_FILES["image"]["size"] > 500000) {
	echo "Sorry, your file is too large.";
	}
	else{
	 if(move_uploaded_file($_FILES["image"]["tmp_name"],$upload."/".$name))
		 {


$main_categories_query=mysqli_query($conn,"
update  main_catogories set 
 `cat_name`='".$cat_name."',
`icon`='".$icon."',

`cat_image`='".$name."'

where `cat_id`='".$cat_id."'"
)or die(mysqli_error($conn));

if($main_categories_query) {
	# code...
	?>
<script type="text/javascript">
	window.location.href="../add_main_category.php?msg=main catogory is successfully updated";
</script>


<?php }

	}
	}

}//end of if button cose
}
else{
	
	$main_categories_query=mysqli_query($conn,"
update  main_catogories set 
 `cat_name`='".$cat_name."',
`icon`='".$icon."'



where `cat_id`='".$cat_id."'"
)or die(mysqli_error($conn));

if($main_categories_query) {
	# code...
	?>
<script type="text/javascript">
	window.location.href="../add_main_category.php?msg=main catogory is successfully updated";
</script>

	
	
	<?php
	
}
}
}

?>