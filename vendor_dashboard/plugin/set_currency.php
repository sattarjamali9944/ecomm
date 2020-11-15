<?php
require("../../include/conn.php");//this is connection file 
if(isset($_POST["cat_btn"])){
$currency_name=mysqli_real_escape_string($conn,$_POST["set_currency"]);//cat name  name 
$currency_id=mysqli_real_escape_string($conn,$_POST["currency_id"]);//cat name  name 

$main_categories_query=mysqli_query($conn,"
update  `set_currency` set

`currecy_sign`='".$currency_name."'
where `currency_id`='".$currency_id."' 

") or die(mysqli_error($conn));


if ($main_categories_query) {
	# code...
	?>
<script type="text/javascript">
	window.location.href="../set_currency.php?msg=Currency Sign  is successfully addedd";
</script>


<?php }
}
