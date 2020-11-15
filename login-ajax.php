<?php
session_start();
require("include/conn.php");
$email=$_POST['email'];
$pass=$_POST['pass'];



$get_session_id=mysqli_query($conn,"select * from users where user_email='".$email."'

and user_pass='".$pass."'
") or
	die(mysqli_error($conn));
	$number_of_row=mysqli_num_rows($get_session_id);
	if($number_of_row > 0){
		if($fetch=mysqli_fetch_array($get_session_id)){
			
			$_SESSION["user_id"]=$fetch["user_id"];
			$_SESSION["user_name"]=$fetch["user_name"];
			
			?>
			
			<script>
			window.location.href="index.php";
			</script>
			
		<?php }
	 }
	 
	 else{
		 
		 echo "<font color='red'> Email or password is wrong... </font>";
		 
	 }
	 
	 ?>






