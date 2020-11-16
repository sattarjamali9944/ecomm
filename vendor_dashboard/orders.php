<?php
session_start();
require("../include/conn.php");
error_reporting(0);
if(isset($_SESSION["vendor_id"]) && isset($_SESSION["token"])){
?>


<!doctype html>
<html lang="en">

<head>
	<title>Orders</title>
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
					<h3 class="page-title">Orders</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Orders</h3>
								</div>
								<div class="panel-body">
									<?php


$orders=mysqli_query($conn,"select * from products 
inner join orders on products.pro_id=orders.product_id 
inner join users on users.user_id=orders.buyer_id
where products.vendor_id='".$_SESSION["vendor_id"]."'") or
								die(mysqli_error($conn));
								
								$count=mysqli_num_rows($orders);
								if($count > 0){	?>
								<table class="table">
								<thead>
								<th>Id</th>
								<th>Buyer</th>
								<th>Procduct ID</th>
								<th>Product Name</th>
                                <th>Image</th>
														
								<th>Quantity</th>
								
								<th>Order Date</th>
								<th>Order Detail</th>
							
								<th>Order Status</th>
								</thead>
								
								<?php
								while($fetch=mysqli_fetch_array($orders)){
                                $order_id=$fetch["order_id"];//user id
                                $product_id=$fetch["product_id"];
                                $product_name=$fetch["pro_name"];
                                $product_random_id=$fetch["product_random_id"]; 								
                                $buyer_name=$fetch["user_name"];//buyer id 								
                                $qty=$fetch["order_qty"];//qty 
								$order_date=$fetch["order_date"];//order date
								$status=$fetch["order_status"];//order status pending ,confirm and deliverd
								
									?>
<tbody>
<tr>

<td><?php echo $order_id;?></td>
<td><?php echo $buyer_name;?></td>
<td><?php echo $product_id;?></td>
<td><?php echo $product_name;?></td>
<td>
<?php
$get_images=mysqli_query($conn,"select * from multiples_images
where product_random_id='".$product_random_id."' limit 1

") or 
die(mysqli_error($conn));
$count_images=mysqli_num_rows($get_images);
if($count_images){
while($fetch_images=mysqli_fetch_array($get_images)){
	$product_image=$fetch_images["image_name"];
?>
                                      
      
           <img src="../admin/plugin/product_images/<?php echo $product_image;?>"
				alt="<?php echo $product_name;?>" class="product-image" style="height:50px; width:50px;">
                                              
				<?php
				
                  }//end of while loop of count images
                  }//end of if statement
				
				?>	
</td>

<td><?php echo $qty;?></td>
<td>&nbsp;<?php echo $order_date;?></td>
<td><a href="order_detail.php?order_id=<?php echo $order_id;?>" class="btn btn-primary">
<i class="fa fa-eye"></i>
</a></td>

<td>
<script>
$(document).ready(function(){
$("#change<?php echo $order_id;?>").change(function(){

var order_data=$("#change<?php echo $order_id;?>").val();
					 $.ajax({
            type: "POST",
            url: "order_status.php",
            data: {order_data:order_data},
            //dataType: "JSON",
            success: function(data) {
           
				$("#result<?php echo $order_id;?>").html(data);
             
   		           
   		    
   		    
            },
            error: function(err) {
          
            }
        });
						
	
});	
	
	
});

</script>

<div id="result<?php echo $order_id;?>"></div>
<select class="form-control" id="change<?php echo $order_id;?>">

<option value="">Choos Status</option>
<option value="PendingX<?php echo $order_id;?>" <?php if($status=="Pending")
{echo "selected=selected";}?>>Pending</option>
<option value="ConfirmX<?php echo $order_id;?>" <?php if($status=="Confirm")
{echo "selected=selected";}?>>Confirm</option>
<option value="DeliveredX<?php echo $order_id;?>" <?php if($status=="Delivered")
{echo "selected=selected";}?>>Delivered</option>
</select></td>

</tr>
</tbody>

<?php
								}
								?>
								
				</table>				
								<?php
								}
	else{
		
		echo "<h2 style='color:red;'>No order  Record Found...</h2>";
		
	}							

?>
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