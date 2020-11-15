<?php
require("../include/conn.php");//

?>
<!DOCTYPE html>
<html>
<head>
	<title>View User  </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" 
crossorigin="anonymous">
</head>
<body>
<div class="container">
</br>
    </br>

	<div class="row" style="position:relative; top:-20px;">
	<?php require("sidebar.php");?>
	</div>
	</br>

<?php
if(isset($_GET["msg"])){?>
<div class="alert alert-success">
<?php
	echo $_GET["msg"];//if data is successfully addedd then this data is show
	
	


?>

</div>
<?php
}

?>
<h1>View Users</h1>
<?php


$query=mysqli_query($conn,"select * from users") or
								die(mysqli_error($conn));
								
								$count=mysqli_num_rows($query);
								if($count > 0){	?>
								<table class="table">
								<thead>
								<th>Id</th>
								<th>user Name</th>
								<th>phone</th>
								<th>email</th>
								<th>Image</th>
								</thead>
								
								<?php
								while($fetch=mysqli_fetch_array($query)){
                                $user_id=$fetch["user_id"];
                                $user_name=$fetch["user_name"];
								$user_email=$fetch["user_email"];
								$user_phone=$fetch["user_phone"];
								$user_image=$fetch["user_image"];
								
									?>
<tbody>
<tr>
<td><?php echo $user_id;?></td>
<td><?php echo $user_name;?></td>
<td>&nbsp;<?php echo $user_phone;?></td>
<td><?php echo $user_email;?></td>
<?php

if($user_image==""){
	
	?>
	<td><img src="main_category_images/no.png" style="height:50px; width:50px;"></td>
<?php 	
}
else
{?>
<td><img src="plugin/user_images/<?php echo $user_image;?>" style="height:50px; width:50px;"></td>
<?php
}
?>

</tr>
</tbody>

<?php
								}
								?>
								
				</table>				
								<?php
								}

?>
									
</div>
</body>
</html>