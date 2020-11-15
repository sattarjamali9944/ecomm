<?php
session_start();
require("../../include/conn.php");//this is connection file 
if(isset($_POST["billing-btn"])){
	$date=date("d-M-Y");
	

if(isset($_SESSION["random_id"])){}
else{
		$random_id=mt_rand();
		
		$_SESSION["random_id"]=$random_id;
	
}	
	
$first_name=$_POST["first_name"];
$last_name=$_POST["last_name"];
$company_name=$_POST["company_name"];
$country=$_POST["country"];
$address_one=$_POST["address_one"];
$address_two=$_POST["address_two"];
$address=$address_one.$address_two;
$city=$_POST["city"];
$state=$_POST["state"];
$zip=$_POST["zip"];
$phone=$_POST["phone"];
$email=$_POST["email"];

$get_information_from_cart=mysqli_query($conn,"select * from cart where 
user_id='".$_SESSION["user_id"]."'")or die(mysqli_query($conn));//that query is get the information from cart and add it in order table
while($fetch_cart_data=mysqli_fetch_array($get_information_from_cart)){
 $cart_product_id=$fetch_cart_data["product_id"];
 $cart_quanity=$fetch_cart_data["qty"];
 
$orders=mysqli_query($conn,"INSERT INTO `orders` (`order_id`,`buyer_id`,`unique_id`,`product_id`, `order_qty`, 
`order_date`, `order_status`) 
VALUES (NULL,'".$_SESSION["user_id"]."','".$_SESSION["random_id"]."', '".$cart_product_id."', '".$cart_quanity."', '".$date."', '')")or die(mysqli_error($conn));//this query is add the cart informatin 
}
$insert_billing=mysqli_query($conn,"INSERT INTO `billing_address` 
(`billing_id`,`buyer_id`,`unique_id`,`first_name`,`last_name`, 
`company_name`, `address`, 
`country`, `city`, `state`, `postal_code`, `phone`, `email`) 
VALUES (NULL,'".$_SESSION["user_id"]."','".$_SESSION["random_id"]."', '".$first_name."', '".$last_name."', '".$company_name."',
 '".$address."', '".$country."', '".$city."', '".$state."', '".$zip."', '".$phone."', '".$email."')") or die(mysqli_error($conn));

?>

<script>
window.location.href="../../invoice.php";
</script>


<?php
}






?>