<?php
require("../include/conn.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Main Categories</title>
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
	</br>

<?php
if(isset($_GET["msg"])){
	?>

<div class="alert alert-success">

	<?php  echo $_GET["msg"];//if data is successfully addedd then this data is show
	?>
	

</div>
<?php }

?>
<div class="row">
<div class="col-sm-5" style="float:left;">
<h1>Set Currency</h1>


<?php 

$set=mysqli_query($conn,"SELECT * FROM set_currency
") or die(mysqli_error($conn));//main category 
$count_currencies=mysqli_num_rows($set);//count of categories 
if($count_currencies > 0){//if count  greater than 0 

	
	while($fetch=mysqli_fetch_array($set)){
	$currency_id=$fetch["currency_id"];//cat id 
	$currency_name=$fetch["currecy_sign"];//cat name 
	
	
?>


<form method="post" action="plugin/set_currency.php" enctype="multipart/form-data" >
 <div class="form-group">
 <input type="hidden" name="currency_id" value="<?php echo $currency_id;?>">
<label>Set Currency Sign </label>
<input type="text" name="set_currency" class="form-control" placeholder="like,$,PKR,RS" 
value="<?php echo $currency_name;?>">
</div>


<input type="submit" name="cat_btn" class="form-control" class="btn btn-primary" value="update currnecy">


	
</form>
<?php

}
}
else{
	?>
	<form method="post" action="plugin/add_currency.php" enctype="multipart/form-data">
 <div class="form-group">
<label>Add  Currency </label>
<input type="text" name="set_currency" class="form-control" placeholder="like,$,PKR,RS">
</div>


<input type="submit" name="cat_btn" class="form-control" class="btn btn-primary" value="Add Currency">


	
</form>
	<?php 
}
?>
</div>


<div>
</div>
</body>
</html>