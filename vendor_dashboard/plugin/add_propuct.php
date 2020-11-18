<?php
require("../../include/conn.php");//this is connection file 
session_start();
if(isset($_SESSION["vendor_id"])&& $_SESSION["token"]){


if(!isset($_SESSION["product_random_id"])){
	
	
$product_random_id=mt_rand();
	
$_SESSION["product_random_id"]=$product_random_id;	
	
}
$product_name=mysqli_real_escape_string($conn,$_POST["pro_name"]);//product name 
$description=mysqli_real_escape_string($conn,$_POST["description"]);//this is description
$price=mysqli_real_escape_string($conn,$_POST["price"]);//this is price
$delivery_cat_id=mysqli_real_escape_string($conn,$_POST['delivery_cat_id']);
$main_cat=mysqli_real_escape_string($conn,$_POST["main_cat"]);//main category
$sub_cat=mysqli_real_escape_string($conn,$_POST["sub_cat"]);//sub category
$third_cat=mysqli_real_escape_string($conn,$_POST["third_cat"]);//third category
$sale=mysqli_real_escape_string($conn,$_POST["sale"]);
$date=date("d-M-Y");

$uploadsDir = "../../admin/plugin/product_images/";
        $allowedFileType = array('jpg','png','jpeg');
        
        // Velidate if files exist
        if (!empty(array_filter($_FILES['fileUpload']['name']))) {
            
            // Loop through file items
            foreach($_FILES['fileUpload']['name'] as $id=>$val){
                // Get files upload path
                $fileName        = $_FILES['fileUpload']['name'][$id];
                $tempLocation    = $_FILES['fileUpload']['tmp_name'][$id];
                $targetFilePath  = $uploadsDir . time().$fileName;
                $fileType        = strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
                $uploadDate      = date('Y-m-d H:i:s');
                $uploadOk = 1;
                $random_name=time().$fileName;
                if(in_array($fileType, $allowedFileType)){
                        if(move_uploaded_file($tempLocation, $targetFilePath)){
                            $sqlVal = "('".$random_name."', '".$uploadDate."')";
                        } else {
                            $response = array(
                                "status" => "alert-danger",
                                "message" => "File coud not be uploaded."
                            );
                        }
                    
                } else {
                    $response = array(
                        "status" => "alert-danger",
                        "message" => "Only .jpg, .jpeg and .png file formats allowed."
                    );
                }
                // Add into MySQL database
                if(!empty($sqlVal)) {
					
				$insert_images=mysqli_query($conn,"INSERT INTO 
`multiples_images` (`image_id`, `product_random_id`, `image_name`)
				VALUES (NULL,'".$_SESSION["product_random_id"]."',
				'".$random_name."')")or die(mysqli_error($conn));	
					
					
					
					
				}
			}
$insert_product=mysqli_query($conn,"
        INSERT INTO `products` (`pro_id`, 
		
		`vendor_id`, 
		`product_random_id`,
		`cat_id`, 
		`sub_catid`,
		`third_cat_id`,
		
		`pro_name`, 
		`pro_des`,
		`pro_price`,
		`delivery_cat_id`,
		`sale`,
		`uploading_date`
		) 
		VALUES (NULL,
        '".$_SESSION['vendor_id']."',		
		'".$_SESSION["product_random_id"]."',
		'".$main_cat."',
		'".$sub_cat."',
		'".$third_cat."',
		'".$product_name."', 
		'".$description."', 
		'".$price."',
        '".$delivery_cat_id."',		
		'".$sale."',
		'".$date."'
		)") or 
		die(mysqli_error($conn));
		unset($_SESSION["product_random_id"]);
		?>
		<script>
		window.location.href="../add_product.php?msg=data is successfully inserted";
		</script>
		<?php
		 }//end of if move uploaded file
	
}//end of session vendor id and token id 
?>