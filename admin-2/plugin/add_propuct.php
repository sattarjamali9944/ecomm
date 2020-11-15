<?php
require("../../include/conn.php");//this is connection file 
$product_name=mysqli_real_escape_string($conn,$_POST["pro_name"]);//product name 
$description=mysqli_real_escape_string($conn,$_POST["description"]);//this is description
$price=$_POST["price"];//this is price
$name=time().$_FILES["image"]["name"];//this is name of image
$format=explode('.',$name);

if($format[1]=="jpg" || $format[1]=="png" || $format[1]=="gif"){
	$upload="product_images";
	if(!is_dir($upload)){
	 mkdir($upload);
	}
	
	if ($_FILES["image"]["size"] > 500000) {
	echo "Sorry, your file is too large.";
	}
	else{
	 if(move_uploaded_file($_FILES["image"]["tmp_name"],$upload."/".$name))
		 {
$insert_product=mysqli_query($conn,"
        INSERT INTO `products` (`pro_id`, 
		`pro_name`, 
		`pro_des`,
		`pro_price`,
		`pro_image`) 
		VALUES (NULL, '".$product_name."', '".$description."', 
		'".$price."', '".$name."')") or 
		die(mysqli_error($conn));
		?>
		<script>
		
		window.location.href="../add_product.php?msg=data is successfully inserted";
		
		</script>
		
		
		
		<?php
		 }//end of if move uploaded file
	}//end of else if  

}//end of if format variable 

?>