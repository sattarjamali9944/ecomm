<?php
require("../../include/conn.php");//this is connection file 
if(isset($_POST["city_btn"])){
$city_name=mysqli_real_escape_string($conn,$_POST["city_name"]);//cat name  name 



$add_city=mysqli_query($conn,"
INSERT INTO `city` (`city_id`, `city_name`) 
VALUES (NULL, '".$city_name."')") or die(mysqli_error($conn));


if($add_city){
	# code...
	?>
<script type="text/javascript">
	window.location.href="../add_city.php?msg=City is successfully Added";
</script>
<?php 
}//add city of setted
}//if button is pressed 

?>