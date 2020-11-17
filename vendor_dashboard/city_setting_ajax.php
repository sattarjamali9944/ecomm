<?php 
session_start();
require("../include/conn.php");
if(isset($_SESSION["vendor_id"]) && isset($_SESSION["token"])){
$city_data=$_POST["city_data"];
$check=explode("X",$city_data);
$status=$check[1];
$city_id=$check[0];

$already_staus_have=mysqli_query($conn,"select * from deal_in_city where 

city_id='".$city_id."' and vendor_id='".$_SESSION['vendor_id']."'

")or die(mysqli_error($conn));
$count=mysqli_num_rows($already_staus_have);

if($count > 0){
	$update=mysqli_query($conn,"update deal_in_city set status='".$status."'
	 where vendor_id='".$_SESSION['vendor_id']."'
	")or 
	die(mysqli_error($conn));
  ?>
  
<script>
alert("City deal  status is Updated");
</script>
<div class="alert alert-success">
City  Status is successfully Updated
</div>


	<?php 
}
else{

$query=mysqli_query($conn,"INSERT INTO `deal_in_city`
 (`deal_in_city_id`, `city_id`, `vendor_id`,`status`)
 VALUES (NULL, '".$city_id."', '".$_SESSION['vendor_id']."',
 '".$status."')")or die(mysqli_error($conn));

?>

<script>
alert("City deal  status is addedd");
</script>
<div class="alert alert-success">
City  Status is successfully Addedd
</div>

<?php
}
}//end of file 
?>