<?php
require("../include/conn.php");//

?>
<!DOCTYPE html>
<html>
<head>
	<title>View  product </title>
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
<h1>View Products</h1>
<?php


$query=mysqli_query($conn,"select * from products") or
								die(mysqli_error($conn));
								
								$count=mysqli_num_rows($query);
								if($count > 0){	?>
								<table class="table">
								<thead>
								<th>Id</th>
								<th>product Name</th>
								<th>price</th>
								<th>Description</th>
								<th>Image</th>
								</thead>
								
								<?php
								while($fetch=mysqli_fetch_array($query)){
                                $product_id=$fetch["pro_id"];
                                $product_name=$fetch["pro_name"];
								$product_des=$fetch["pro_des"];
								$product_price=$fetch["pro_price"];
								$product_image=$fetch["pro_image"];
								
									?>
<tbody>
<tr>
<td><?php echo $product_id;?></td>
<td><?php echo $product_name;?></td>
<td><?php 

$set=mysqli_query($conn,"SELECT * FROM set_currency
") or die(mysqli_error($conn));//main category 
$count_currencies=mysqli_num_rows($set);//count of categories 
if($count_currencies > 0){//if count  greater than 0 

	
	while($fetch=mysqli_fetch_array($set)){
	$currency_id=$fetch["currency_id"];//cat id 
	echo $currency_name=$fetch["currecy_sign"];//cat name 
	
	}
}
?>&nbsp;<?php echo $product_price;?></td>
<td><?php echo $product_des;?></td>
<td><img src="plugin/product_images/<?php echo $product_image;?>" style="height:50px; width:50px;"></td>


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