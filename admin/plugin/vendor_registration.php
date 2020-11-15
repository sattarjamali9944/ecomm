<?php
session_start();
require("../../include/conn.php");//this is connection file 
if(isset($_POST["billing-btn"])){
	
	$date=date("d-M-Y");
$first_name=mysqli_real_escape_string($conn,$_POST["first_name"]);
$last_name=mysqli_real_escape_string($conn,$_POST["last_name"]);
$company_name=mysqli_real_escape_string($conn,$_POST["company_name"]);
$ntn=mysqli_real_escape_string($conn,$_POST["ntn"]);
$cnic=mysqli_real_escape_string($conn,$_POST["cnic"]);
$company_address=mysqli_real_escape_string($conn,$_POST["company_address"]);
$personal_address=mysqli_real_escape_string($conn,$_POST["personal_address"]);
$phone=mysqli_real_escape_string($conn,$_POST["phone"]);
$email=mysqli_real_escape_string($conn,$_POST["email"]);
$insert_query_vendor=mysqli_query($conn,"INSERT INTO `vendor` 
(`vendor_id`, `vendor_first_name`, `vendor_last_name`, 
`vendor_ntn_number`,`vendor_company_name`,`vendor_cnic`,
 `vendor_address`, `vendor_personal_address`, `vendor_email`,
 `vendor_phone`,`vendor_status`, `uploadind_date`)
 VALUES (NULL, '".$first_name."', '".$last_name."',
 '".$ntn."','".$company_name."', '".$cnic."', 
 '".$company_address."', '".$personal_address."','".$email."',
 '".$phone."','', '".$date."')")or die(mysqli_error($conn));
if($insert_query_vendor > 0){
	
	$vendor=mysqli_query($conn,"select * from vendor where vendor_email='".$email."'")or 
	die(mysqli_error($conn));//this query is creating for session id 
	if($fetch=mysqli_fetch_array($vendor)){
	  $_SESSION["vendor_id"]=$fetch["vendor_id"];
	 $token=mt_rand(0,123456789);
	 $_SESSION["token"]=$token;
	 
	 
	 $uploadsDir = "../../vendor_images/";
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
`vendor_files` (`vendor_file_id`, `vendor_id`, `vendor_file_name`,`uploading_date`)
				VALUES (NULL,'".$_SESSION["vendor_id"]."',
				'".$random_name."','".$date."')")or die(mysqli_error($conn));	
					
					
					
					
				}
			}
	 
	 
	 
	 
	 
	 ?>
	 <script>
	 window.location.href='../../vendor_dashboard/dashboard.php';
	 
	 </script>
	 
	
	<?php }	
}
}
}
?>