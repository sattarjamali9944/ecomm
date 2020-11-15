<?php
require("../../include/conn.php");//this is connection file 
if(isset($_POST["cat_btn"])){
$cat_name=mysqli_real_escape_string($conn,$_POST["cat_name"]);//cat name  name 

$icon=mysqli_real_escape_string($conn,$_POST["icon_text"]);//icon



$name=time().$_FILES["image"]["name"];//this is name of image
$format=explode('.',$name);

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
INSERT INTO `main_catogories` (`cat_id`, `cat_name`, `icon`,`cat_image`) 
VALUES (NULL, '".$cat_name."', '".$icon."','".$name."')") or die(mysqli_error($conn));


if ($main_categories_query) {
	# code...
	?>
<script type="text/javascript">
	window.location.href="../add_main_category.php?msg=main catogory is successfully addedd";
</script>


<?php }


		 }
}//end of if button cose


	}
}

?>