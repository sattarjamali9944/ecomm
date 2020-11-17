<?php
require("../../include/conn.php");//this is connection file 
if(isset($_POST["delivery_btn"])){
$delivery_cat_name=mysqli_real_escape_string($conn,$_POST["cat_name"]);//delivery_cat  name 
$delivery_cat_id=mysqli_real_escape_string($conn,$_POST["cat_id"]);//delivery_cat if 

$update_delivery_cat=mysqli_query($conn,"
update  add_delivery_category set 
`delivery_cat_name`='".$delivery_cat_name."'


where `delivery_cat_id`='".$delivery_cat_id."'"
)or die(mysqli_error($conn));

if($update_delivery_cat) {
	# code...
	?>
<script type="text/javascript">
	window.location.href="../add_delivery_cat.php?msg=delivery category is successfully updated";
</script>


<?php }

	}
	
?>