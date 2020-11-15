<?php
session_start();
require("include/conn.php");
$email=$_POST['registeremail'];
$name=$_POST['registername'];
$pass=$_POST['registerpass'];
$date=date("d-M-Y");

if($name=="" && $email=="" && $pass==""){
	
	echo "<font color='red'> All Field must be required</font>";
	
	
}
else{
	$already_email_is=mysqli_query($conn,"select * from users where user_email='".$email."'") or
	die(mysqli_error($conn));
	$number_of_row=mysqli_num_rows($already_email_is);
	if($number_of_row > 0){
		echo "<font color='red'> Email is already available </font>";
	
		
	}
	else{
	
$query=mysqli_query($conn,"
INSERT INTO `users` (`user_id`, `user_name`, `user_email`, 
`user_pass`, `user_phone`,
 `user_image`, `user_registration_date`) VALUES (NULL, '".$name."', '".$email."', '".$pass."', '', '',
 '".$date."')")or 
 die(mysqli_error($con));
 
 $get_session_id=mysqli_query($conn,"select * from users where user_email='".$email."'") or
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
}
}

?>