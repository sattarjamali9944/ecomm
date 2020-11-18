<?php
require("../../include/conn.php");//this is connection file 
if(isset($_POST["cat_btn"])){
$currency_name=mysqli_real_escape_string($conn,$_POST["set_currency"]);//cat name  name 
$main_categories_query=mysqli_query($conn,"
INSERT INTO `set_currency` (`currency_id`, `currecy_sign`) 
VALUES (NULL, '".$currency_name."')") or die(mysqli_error($conn));


if ($main_categories_query) {
	# code...
	?>
<script type="text/javascript">
	window.location.href="../currency_setting.php?msg=Currency Sign  is successfully addedd";
</script>


<?php }
}
