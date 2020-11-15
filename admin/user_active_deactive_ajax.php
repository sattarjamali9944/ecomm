<?php 
session_start();
require("../include/conn.php");
if(isset($_SESSION["admin_id"])){
$user_data=$_POST["user_data"];
$check=explode("X",$user_data);
$status=$check[0];
$user_id=$check[1];

$update_user=mysqli_query($conn,"update users set user_status='".$status."'
where user_id='".$user_id."'

")or die(mysqli_error($conn));

?>

<script>
alert("user status is changed....");
</script>
<div class="alert alert-success">
user Status is successfully changed
</div>
<?php
}

?>