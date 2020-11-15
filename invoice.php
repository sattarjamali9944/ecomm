<?php
session_start();//
require("include/conn.php");

$_SESSION["random_id"];







?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Invoice HS Code</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
</head>
<body>
    <div class="container">
        <div class="card">
            </br>
			<center>
			 <a href="index.php"><img  src="assets/images/demos/demo-14/logo.png"
			 
			 style="height:50px; width:100px;"
			 
			 ></a>
			 </center>
			 
			 </br>
			
			
			<div class="card-header">
                Invoice# 
                <strong><?php echo $_SESSION["random_id"];?></strong>
                <span class="float-right"> <strong>Status:</strong> Pending</span>

            </div>
			
			<?php
			
			$get_billing_information=mysqli_query($conn,"select * from billing_address where
			
			unique_id='".$_SESSION["random_id"]."'
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
                <div class="row mb-4">
                    <div class="col-sm-6">
                        <div>
                            <strong><?php echo $company_name;?></strong>
                        </div>
                        <div>Full Name:<?php echo $first_name.$last_name;?></div>
                        <div>Address:<?php echo $address;?></div>
                        <div>Email: <?php echo $email;?></div>
                        <div>Phone: <?php echo $phone;?></dv>
                    </div>
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
				products.pro_id=orders.product_id where orders.buyer_id='".$_SESSION['user_id']."'
				
				and orders.unique_id='".$_SESSION["random_id"]."'
				")or die(mysqli_error($conn));
				
				$count=mysqli_num_rows($get_order_info);
				if($count > 0){
					
				?>
				
				
				
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th class="center">Product Id</th>
                                <th>Product Name</th>
                                
                                <th class="right">Unit Cost</th>
                                <th class="center">Qty</th>
                                <th class="right">Total</th>
                            </tr>
                        </thead>
						   <tbody>
						<?php
							$total=0;
							while($fetch_cart_product=mysqli_fetch_array($get_order_info)){
								
								
								$product_id=$fetch_cart_product["pro_id"];
								$product_name=$fetch_cart_product["pro_name"];
								$product_price=$fetch_cart_product["pro_price"];
								$product_qty=$fetch_cart_product["order_qty"];
								
								
								
							
							
							?>
                     
                            <tr>
                                <td class="center"><?php echo $product_id;?></td>
                                <td class="left strong"><?php echo $product_name;?></td>
                                

                                <td class="right">
								
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
                                <td class="center">
								
									
								
								<?php echo $product_qty;?></td>
                                <td class="right"><?php 

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
                <div class="row">
                    <div class="col-lg-4 col-sm-5">

                    </div>

                    <div class="col-lg-4 col-sm-5 ml-auto">
                        <table class="table table-clear">
                            <tbody>
                                <tr>
                                    <td class="left">
                                        <strong>Subtotal</strong>
                                    </td>
                                    <td class="right"><?php 

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
                                    <td class="left">
                                        <strong>Shipping Charges</strong>
                                    </td>
                                    <td class="right"><?php
												
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
                                    <td class="left">
                                        <strong>Total</strong>
                                    </td>
                                    <td class="right">
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
</body>
</html>