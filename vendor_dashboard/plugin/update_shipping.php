<?php
session_start();
require("../../include/conn.php");//this is connection file 

if(isset($_POST["shipping_btn"])){
$shipping_value=mysqli_real_escape_string($conn,$_POST["shipping_value"]);//cat name  name 







$main_categories_query=mysqli_query($conn,"update delivery_setting 
set  shipping_amount='".$shipping_value."' 
 where vendor_id='".$_SESSION["vendor_id"]."'") or die(mysqli_error($conn));


if ($main_categories_query) {
	# code...
	?>
<script type="text/javascript">
	window.location.href="../shipping_policy.php?msg=Shipping Charges successfully addedd";
</script>


<?php }


}

?>