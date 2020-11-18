<?php 
session_start();
require("../include/conn.php");
if(isset($_SESSION["admin_id"])){
$product_data=$_POST["product_data"];
$check=explode("X",$product_data);
$status=$check[0];
$product_id=$check[1];

$update_user=mysqli_query($conn,"update products set status='".$status."'
where pro_id='".$product_id."'

")or die(mysqli_error($conn));

?>

<script>
alert("product status is changed....");
</script>
<div class="alert alert-success">
Product Status is successfully changed
</div>
<?php
}

?>