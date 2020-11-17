<?php
session_start();
require("../include/conn.php");
if(isset($_SESSION["vendor_id"]) && isset($_SESSION['token'])){

?>


<!doctype html>
<html lang="en">

<head>
	<title>City Setting</title>
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
					<h3 class="page-title">City Setting </h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								
								<div class="panel-body">
									
<div class="row">
<div class="col-sm-8" style="float:left;">

<table class="table">
<thead>
<th>City Name</th>
<th>Are you deal in this city?</th>
</thead>
<tbody>
<?php 

$get_single_city=mysqli_query($conn,"SELECT * FROM city") or die(mysqli_error($conn));//city query
$count_cities=mysqli_num_rows($get_single_city);//count of city 
if($count_cities > 0){//if count  greater than 0 

	
	while($fetch=mysqli_fetch_array($get_single_city)){
	$city_id=$fetch["city_id"];//city id 
	$city_name=$fetch["city_name"];//city name 
	?>

<form method="post" action="plugin/add_city.php" enctype="multipart/form-data" >
 <div class="row">
 <tr>
 <td>
<input type="text" name="city_name" value="<?php echo $city_name;?>" class="form-control" disabled>
</td>
<td>
<script>
$(document).ready(function(){
$("#changedeal<?php echo $city_id;?>").change(function(){

var city_data=$("#changedeal<?php echo $city_id;?>").val();
					 $.ajax({
            type: "POST",
            url: "city_setting_ajax.php",
            data: {city_data:city_data},
            //dataType: "JSON",
            success: function(data) {
           
				$("#result<?php echo $city_id;?>").html(data);
             
   		           
   		    
   		    
            },
            error: function(err) {
          
            }
        });
						
	
});	
	
	
});

</script>

<div id="result<?php echo $city_id;?>"></div>
<?php
$already_staus_have=mysqli_query($conn,"select * from deal_in_city where 

city_id='".$city_id."' and vendor_id='".$_SESSION['vendor_id']."'

")or die(mysqli_error($conn));
$count=mysqli_num_rows($already_staus_have);
if($count > 0){
if($city_fetch=mysqli_fetch_array($already_staus_have)){
	$status=$city_fetch["status"];
}

}
if($count==0){$status="";}


?>
 <select class="form-control" id="changedeal<?php echo $city_id;?>">
<option value="choose option">Choose Option</option>
<option value="<?php echo $city_id;?>XNo" <?php if($status=="No"){echo "selected=selected";}?>>No</option>
<option value="<?php echo $city_id;?>XYes" <?php if($status=="Yes"){echo "selected=selected";}?>>Yes</option>

</select>
</td>
</tr>
</div>
</form>

<?php

}
}

?>
</tbody>
</table>

</div>



								</div>
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