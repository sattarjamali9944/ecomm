<?php
session_start();//session start from here 
require("../include/conn.php");//connection file 
//error_reporting(0);
$city_id=$_POST["city_id"];
$_SESSION["vendor_id"];
@$heavy=$_POST["heavy"];
@$normal=$_POST["normal"];
@$hand_carry_value=$_POST["hand_carry_value"];
$already_delivery_setted=mysqli_query($conn,"select * from delivery_setting

where vendor_id='".$_SESSION["vendor_id"]."' and city_id='".$city_id."'

")
or die(mysqli_error($conn));

$count=mysqli_num_rows($already_delivery_setted);
if($count > 0){
	



	if(isset($heavy) && (!empty($heavy))){
		
if(is_numeric($heavy)){		
$query=mysqli_query($conn,
"Update `delivery_setting` 
set `heavy_amount_charges`='".$heavy."' 
where 
	`vendor_id`='".$_SESSION['vendor_id']."' and 
	`city_id`='".$city_id."'")or die(mysqli_error($conn));
}
else{
	?>
	<div class="alert alert-danger">
	Enter Only Number
	</div>
	<?php 
}
	
}

if(isset($normal)&& (!empty($normal))){
	if(is_numeric($normal)){	
	$query=mysqli_query($conn,
"Update `delivery_setting` 
set `medium_amount_charges`='".$normal."' 
where 
	`vendor_id`='".$_SESSION['vendor_id']."' and 
	`city_id`='".$city_id."'")or die(mysqli_error($conn));
	}
	else{
	?>
	<div class="alert alert-danger">
	Enter Only Number
	</div>
	<?php 
}
}
if(isset($hand_carry_value) && !empty($hand_carry_value)){
	if(is_numeric($hand_carry_value)){
$query=mysqli_query($conn,
"Update `delivery_setting` 
set `hand_carry_amount_charges`='".$hand_carry_value."' 
where 
	`vendor_id`='".$_SESSION['vendor_id']."' and 
	`city_id`='".$city_id."'")or die(mysqli_error($conn));
}
	else{
	?>
	<div class="alert alert-danger">
	Enter Only Number
	</div>
	<?php 
}
	
}	
	
	
}//end of count if 

else{
	
if(isset($heavy) && (!empty($heavy))){
	if(is_numeric($heavy)){
$query=mysqli_query($conn,"INSERT INTO `delivery_setting` 
(`delivery_setting_id`, `vendor_id`, `city_id`, 
`heavy_amount_charges`, `medium_amount_charges`, `hand_carry_amount_charges`) 
	VALUES (NULL, '".$_SESSION['vendor_id']."', '".$city_id."', '".$heavy."', '', '')")or die(mysqli_error($conn));
}

	else{
	?>
	<div class="alert alert-danger">
	Enter Only Number
	</div>
	<?php 
}
}
	
if(isset($normal)&& (!empty($normal))){
	if(is_numeric($normal)){
$query=mysqli_query($conn,"INSERT INTO `delivery_setting` 
(`delivery_setting_id`, `vendor_id`, `city_id`, 
`heavy_amount_charges`, `medium_amount_charges`, `hand_carry_amount_charges`) 
	VALUES (NULL, '".$_SESSION['vendor_id']."', '".$city_id."', '', '".$normal."', '')")or 
	die(mysqli_error($conn));
}

	else{
	?>
	<div class="alert alert-danger">
	Enter Only Number
	</div>
	<?php 
}
}
if(isset($hand_carry_value) && !empty($hand_carry_value)){
	if(is_numeric($normal)){
$query=mysqli_query($conn,"INSERT INTO `delivery_setting` 
(`delivery_setting_id`, `vendor_id`, `city_id`, 
`heavy_amount_charges`, `medium_amount_charges`, `hand_carry_amount_charges`) 
	VALUES (NULL, '".$_SESSION['vendor_id']."', '".$city_id."', '', '', '".$hand_carry_value."')")or
	die(mysqli_error($conn));
}
	else{
	?>
	<div class="alert alert-danger">
	Enter Only Number
	</div>
	<?php 
}	
}
}






?>