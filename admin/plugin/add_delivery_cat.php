<?php
require("../../include/conn.php");//this is connection file 
if(isset($_POST["delivery_cat_btn"])){
echo $delivery_cat_name=mysqli_real_escape_string($conn,$_POST["cat_name"]);//cat name  name 



$add_delivery_cat=mysqli_query($conn,"
INSERT INTO `add_delivery_category` (`delivery_cat_id`, `delivery_cat_name`) 
VALUES (NULL, '".$delivery_cat_name."')") or die(mysqli_error($conn));


if($add_delivery_cat){
	# code...
	?>
<script type="text/javascript">
	window.location.href="../add_delivery_cat.php?msg=delivery_cat is successfully Added";
</script>
<?php 
}//add delivery_cat of setted
}//if button is pressed 

?>