<?php
session_start();
require("../include/conn.php");
error_reporting(0);
if(isset($_SESSION["vendor_id"]) && isset($_SESSION["token"])){
?>
<!doctype html>
<html lang="en">

<head>
	<title>Order Detail</title>
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
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<?php
		
		require("header.php");
		
		?>
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							
															<?php


$orders_detail=mysqli_query($conn,"select * from products 
inner join orders on products.pro_id=orders.product_id 
inner join users on users.user_id=orders.buyer_id
where products.vendor_id='".$_SESSION["vendor_id"]."'
and orders.order_id='".mysqli_real_escape_string($conn,$_GET["order_id"])."' 


") or
								die(mysqli_error($conn));
				 $count=mysqli_num_rows($orders_detail);
								if($count > 0){	
			
								while($fetch=mysqli_fetch_array($orders_detail)){
                                $order_id=$fetch["order_id"];//user id
								$order_random_id=$fetch["unique_id"];
                                $product_id=$fetch["product_id"];//product id 
                                $product_name=$fetch["pro_name"];//product name 
                                $product_random_id=$fetch["product_random_id"]; //product random nam 								
                                $buyer_name=$fetch["user_name"];//buyer id 							
								$buyer_phone=$fetch["user_phone"];
								$buyer_email=$fetch["user_email"];
								$image=$fetch["user_image"];
                                $qty=$fetch["order_qty"];//qty 
								$order_date=$fetch["order_date"];//order date
								$status=$fetch["order_status"];//order status pending ,confirm and deliverd
								
									?>			
											
							
							
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
									   <?php

if($user_image==""){
	
	?>
	<img src="main_category_images/no.png" class="img-circle" style="height:50px; width:50px;">
<?php 	
}
else
{?>
<img src="plugin/user_images/<?php echo $user_image;?>" class="img-circle" style="height:50px; width:50px;">
<?php
}
?>
										
										<h3 class="name"><?php
										
										echo $buyer_name;
										
										?></h3>
									</div>
									
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
										
											<li>Mobile <span><?php echo $buyer_phone;?></span></li>
											<li>Email <span><?php echo $buyer_email;?></span></li>
													</ul>
									</div>
									
									
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<h4 class="heading">Order Detail</h4>
								<!-- AWARDS -->
								<?php
			
			$get_billing_information=mysqli_query($conn,"select * from billing_address where
			
			unique_id='".$order_random_id."'
			")or die(mysqli_query($conn));
			
			$count=mysqli_num_rows($get_billing_information);
			if($count >0){
				if($fetch_billing=mysqli_fetch_array($get_billing_information)){
				$first_name=$fetch_billing["first_name"];
$last_name=$fetch_billing["last_name"];
$company_name=$fetch_billing["company_name"];
$country=$fetch_billing["country"];
$address=$fetch_billing["address"];

$city=$fetch_billing["city"];
$state=$fetch_billing["state"];
$zip=$fetch_billing["postal_code"];
$phone=$fetch_billing["phone"];
$email=$fetch_billing["email"];	
					
			?>
			
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div>
                            <strong><?php echo $company_name;?></strong>
                        </div>
                        <div>Full Name:<?php echo $first_name.$last_name;?></div>
                        <div>Address:<?php echo $address;?></div>
                        <div>Email: <?php echo $email;?></div>
                        <div>Phone: <?php echo $phone;?></div>
                    </div>
                 
                    <div class="col-sm-6">
                      
                        
                        <div>Country: <?php echo $country;?></div>
						<div>City: <?php echo $city;?></div>
                        <div>State: <?php echo $state;?></div>
                      
                        
                    </div>
                </div>

                <div class="table-responsive-sm">
				
				<?php
				
				
				$get_order_info=mysqli_query($conn,"SELECT * from products inner join orders on 
				products.pro_id=orders.product_id where products.vendor_id='".$_SESSION['vendor_id']."'
				
				and orders.unique_id='".$order_random_id."'
				")or die(mysqli_error($conn));
				
				$count=mysqli_num_rows($get_order_info);
				if($count > 0){
					
				?>
				
				<div class="row">
				<div class="col-sm-12">
				<div class="table table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Pro Id</th>
                                <th>Pro Name</th>
                                
                                <th >Unit Cost</th>
                                <th >Qty</th>
                                <th>Total</th>
                            </tr>
                        </thead>
						   <tbody>
						<?php
							$total=0;
							if($fetch_cart_product=mysqli_fetch_array($get_order_info)){
								
								
								$product_id=$fetch_cart_product["pro_id"];
								$product_name=$fetch_cart_product["pro_name"];
								$product_price=$fetch_cart_product["pro_price"];
								$product_qty=$fetch_cart_product["order_qty"];
								
								
								
							
							
							?>
                     
                            <tr>
                                <td><?php echo $product_id;?></td>
                                <td><?php echo $product_name;?></td>
                                

                                <td >
								
								<?php 

$set=mysqli_query($conn,"SELECT * FROM set_currency
") or die(mysqli_error($conn));//set currency query 
$count_currencies=mysqli_num_rows($set);//count of categories 
if($count_currencies > 0){//if count  greater than 0 

	
	while($fetch=mysqli_fetch_array($set)){
	$currency_id=$fetch["currency_id"];//cat id 
	echo $currency_name=$fetch["currecy_sign"];//cat name 
	
	}
}
?>&nbsp;
								<?php echo $product_price;?></td>
                                <td >
								
									
								
								<?php echo $product_qty;?></td>
                                <td ><?php 

$set=mysqli_query($conn,"SELECT * FROM set_currency
") or die(mysqli_error($conn));//set currency query 
$count_currencies=mysqli_num_rows($set);//count of categories 
if($count_currencies > 0){//if count  greater than 0 

	
	while($fetch=mysqli_fetch_array($set)){
	$currency_id=$fetch["currency_id"];//cat id 
	echo $currency_name=$fetch["currecy_sign"];//cat name 
	
	}
}
?> &nbsp;<?php echo $product_price*$product_qty;
$total+=$product_price*$product_qty;
								?></td>
                            </tr>
                           
                            <?php 
							}
							
							?>
                            
                        </tbody>
                    </table>
					</div>
					</div>
                </div>
                <div class="row">
                    

                    <div class="col-lg-12 col-sm-12 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td>
                                        <strong>Subtotal</strong>
                                    </td>
                                    <td><?php 

$set=mysqli_query($conn,"SELECT * FROM set_currency
") or die(mysqli_error($conn));//set currency query 
$count_currencies=mysqli_num_rows($set);//count of categories 
if($count_currencies > 0){//if count  greater than 0 

	
	while($fetch=mysqli_fetch_array($set)){
	$currency_id=$fetch["currency_id"];//cat id 
	echo $currency_name=$fetch["currecy_sign"];//cat name 
	
	}
}
?>&nbsp;<?php echo $total;?></td>
                                </tr>
                                <tr>
                                    <td >
                                        <strong>Shipping Charges</strong>
                                    </td>
                                    <td ><?php
												
								$delivery_status=mysqli_query($conn,"select * from  delivery_setting limit 0,1") or 
								die(mysqli_error($conn));//this is shipping query price				
												
								$count=mysqli_num_rows($delivery_status);				
								if($count > 0 ){
								if($fetch=mysqli_fetch_array($delivery_status)){
									
								echo $shipping_price=$fetch["shipping_amount"];	
									
									
								}	
									
								}				
												?></td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <strong>Total</strong>
                                    </td>
                                    <td>
                                        <strong><?php 

$set=mysqli_query($conn,"SELECT * FROM set_currency
") or die(mysqli_error($conn));//set currency query 
$count_currencies=mysqli_num_rows($set);//count of categories 
if($count_currencies > 0){//if count  greater than 0 

	
	while($fetch=mysqli_fetch_array($set)){
	$currency_id=$fetch["currency_id"];//cat id 
	echo $currency_name=$fetch["currecy_sign"];//cat name 
	
	}
}
?><?php echo $shipping_price+$total;?></strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
				<?php 
				
				}//end of if order
				}//end of fetch if 
			} //end of count if 
	?>
					<?php
					}//end of while loop
					}//end of count if 
					
					?>		
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
	<script src="assets/vendor/jquery/jquery.min.js"></script>
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