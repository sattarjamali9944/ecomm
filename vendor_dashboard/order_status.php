<?php 
session_start();
require("../include/conn.php");
if(isset($_SESSION["vendor_id"]) && isset($_SESSION["token"])){
$order_data=$_POST["order_data"];
$check=explode("X",$order_data);
$status=$check[0];
$order_id=$check[1];

$update_user=mysqli_query($conn,"update orders set order_status='".$status."'
where order_id='".$order_id."'

")or die(mysqli_error($conn));

?>

<script>
alert("order status is changed....");
</script>
<div class="alert alert-success">
Odere status is successfully changed...
</div>
<?php
}

?>