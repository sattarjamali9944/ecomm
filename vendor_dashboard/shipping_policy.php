<?php
session_start();
require("../include/conn.php");
if(isset($_SESSION["vendor_id"]) || isset($_SESSION["token"])){
?>
<!doctype html>
<html lang="en">

<head>
	<title>Shipping Policy</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<script src="assets/vendor/jquery/jquery.min.js"></script>
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<?php
		require("header.php");//header file 
		
		?>
		
		
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Shipping/Delivery Policy</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								
								<div class="panel-body">
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

<?php

$already_shipping_charges=mysqli_query($conn,"select * from  deal_in_city
inner join city on deal_in_city.city_id=city.city_id
where vendor_id='".$_SESSION['vendor_id']."' and  status='Yes'
")or die(mysqli_error($conn));
$count_shipping=mysqli_num_rows($already_shipping_charges);
if($count_shipping > 0){
?>	
	<h1>Add Shipping Charges</h1>
<?php 	
while($fetch_shipping=mysqli_fetch_array($already_shipping_charges))
{

$deal_in_city_id=$fetch_shipping["deal_in_city_id"];
$city_name=$fetch_shipping["city_name"];
$city_id=$fetch_shipping["city_id"];
?>	
<div class="row">
<div class="col-sm-12" style="float:left;">


<?php

$already_in_delivery_setting=mysqli_query($conn,"select * from delivery_setting
where city_id='".$city_id."' and vendor_id='".$_SESSION['vendor_id']."'
") or die(mysqli_error($conn));
$count_delivery_setting=mysqli_num_rows($already_in_delivery_setting);

?>

<form method="post" action="plugin/update_shipping.php" enctype="multipart/form-data" >

<script>
$(document).ready(function(){
$("#heavy_value<?php echo $deal_in_city_id;?>").change(function(){

var city_id=$("#city_id<?php echo $city_id;?>").val();
var heavy=$("#heavy_value<?php echo $deal_in_city_id;?>").val();
$.ajax({
            type:"POST",
            url:"set_delivery_setting_ajax.php",
            data:{city_id:city_id,heavy:heavy},
            
            success: function(data) {
           
				$("#resulth<?php echo $city_id;?>").html(data);
            },
            error: function(err) {
          }
        });
		});	
$("#normal_value<?php echo $deal_in_city_id;?>").change(function(){

var city_id=$("#city_id<?php echo $city_id;?>").val();
var normal=$("#normal_value<?php echo $deal_in_city_id;?>").val();

$.ajax({
            type:"POST",
            url:"set_delivery_setting_ajax.php",
            data:{city_id:city_id,normal:normal},
            
            success: function(data) {
           
				$("#resultn<?php echo $city_id;?>").html(data);
            },
            error: function(err) {
          
            }
        });
						
	
});

$("#hand_carry_value<?php echo $deal_in_city_id;?>").change(function(){
var city_id=$("#city_id<?php echo $city_id;?>").val();
var hand_carry_value=$("#hand_carry_value<?php echo $deal_in_city_id;?>").val();

$.ajax({
            type:"POST",
            url:"set_delivery_setting_ajax.php",
            data:{city_id:city_id,hand_carry_value:hand_carry_value},
            
            success: function(data) {
           
				$("#resulthc<?php echo $city_id;?>").html(data);
            },
            error: function(err) {
          
            }
        });
						
	
});

	
	
});

</script>
<?php


if($count_delivery_setting > 0){
if($fetch_data=mysqli_fetch_array($already_in_delivery_setting)){	
  $heavy_charges=$fetch_data["heavy_amount_charges"];
  $medium_charges=$fetch_data["medium_amount_charges"];
  $hand_carry_charges=$fetch_data["hand_carry_amount_charges"];
  ?>
  
  <div class="col-sm-2">
 <div class="form-group">
 <input type="hidden" id="city_id<?php echo $city_id;?>" value="<?php echo $city_id;?>" >
<label>City</label>
<input type="text" class="form-control" value="<?php echo $city_name;?>" disabled>

</div>
</div>
 
<div class="col-sm-3">
 <div class="form-group">
<label>Heavy Product Charges</label>
<input type="text" name="shipping_value" id="heavy_value<?php echo $deal_in_city_id;?>" 
value="<?php echo $heavy_charges;?>"

max="5"  class="form-control" placeholder="100">
<div id="resulth<?php echo $city_id;?>"></div>
</div>
</div>
<div class="col-sm-3">
 <div class="form-group">
<label>Normal Level Product Charges</label>
<input type="text" id="normal_value<?php echo $deal_in_city_id;?>" max="5"  
class="form-control" value="<?php echo $medium_charges;?>" placeholder="100">
<div id="resultn<?php echo $city_id;?>"></div>
</div>
</div>
<div class="col-sm-3">
 <div class="form-group">
<label>Hand Carry Product Charges</label>
<input type="text" id="hand_carry_value<?php echo $deal_in_city_id;?>" max="5" 
value="<?php echo $hand_carry_charges;?>"

 class="form-control" placeholder="100">
<div id="resulthc<?php echo $city_id;?>"></div>
</div>
</div>
  
  
  
  <?php 
}//end of fetch data s	
}//end of count delivery setting
else{
?>

 <div class="col-sm-2">
 <div class="form-group">
 <input type="hidden" id="city_id<?php echo $city_id;?>" value="<?php echo $city_id;?>" >
<label>City</label>
<input type="text" class="form-control" value="<?php echo $city_name;?>" disabled>

</div>
</div>
 
<div class="col-sm-3">
 <div class="form-group">
<label>Heavy Product Charges</label>
<input type="text" name="shipping_value" id="heavy_value<?php echo $deal_in_city_id;?>" max="5"  class="form-control" placeholder="100">
<div id="resulth<?php echo $city_id;?>"></div>
</div>
</div>
<div class="col-sm-3">
 <div class="form-group">
<label>Normal Level Product Charges</label>
<input type="text" id="normal_value<?php echo $deal_in_city_id;?>" max="5"  class="form-control" placeholder="100">
<div id="resultn<?php echo $city_id;?>"></div>
</div>
</div>
<div class="col-sm-3">
 <div class="form-group">
<label>Hand Carry Product Charges</label>
<input type="text" id="hand_carry_value<?php echo $deal_in_city_id;?>" max="5"  class="form-control" placeholder="100">
<div id="resulthc<?php echo $city_id;?>"></div>
</div>
</div>


<?php
}

?>

	
</form>
</div>
</div>
<?php	
}

?>



<?php
}
?>

							
							</div>
							<!-- END BASIC TABLE -->
						</div>
						</div>
						</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
</body>

</html>
<?php
}
else{
	
	header("location:index.php");
	
}
?>