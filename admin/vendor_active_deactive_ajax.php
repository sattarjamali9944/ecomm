<?php 
session_start();
require("../include/conn.php");
if(isset($_SESSION["admin_id"])){
$user_data=$_POST["vendor_data"];
$check=explode("X",$user_data);
$status=$check[0];
$vendor_id=$check[1];

$update_user=mysqli_query($conn,"update vendor set vendor_status='".$status."'
where vendor_id='".$vendor_id."'

")or die(mysqli_error($conn));

?>

<script>
alert("Vendor status is changed....");
</script>
<div class="alert alert-success">
Vendor Status is successfully changed
</div>
<?php
}

?>