<?php
require("../../include/conn.php");//this is connection file 
if(isset($_POST["city_btn"])){
$city_name=mysqli_real_escape_string($conn,$_POST["city_name"]);//city  name 
$city_id=mysqli_real_escape_string($conn,$_POST["city_id"]);//city if 

$update_city=mysqli_query($conn,"
update  city set 
`city_name`='".$city_name."'


where `city_id`='".$city_id."'"
)or die(mysqli_error($conn));

if($update_city) {
	# code...
	?>
<script type="text/javascript">
	window.location.href="../add_city.php?msg=City is successfully updated";
</script>


<?php }

	}
	
?>