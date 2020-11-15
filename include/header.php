<?php

require("include/conn.php");


?>

<header class="header header-14">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a>
                    </div><!-- End .header-left -->

                    <div class="header-right">

                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul class="menus">
                                    <li>
                                        <div class="header-dropdown">
                                            <a href="#">USD</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">Eur</a></li>
                                                    <li><a href="#">Usd</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div><!-- End .header-dropdown -->
                                    </li>
                                    <li>   
                                        <div class="header-dropdown">
                                            <a href="#">Engligh</a>
                                            <div class="header-menu">
                                                <ul>
                                                    <li><a href="#">English</a></li>
                                                    <li><a href="#">French</a></li>
                                                    <li><a href="#">Spanish</a></li>
                                                </ul>
                                            </div><!-- End .header-menu -->
                                        </div><!-- End .header-dropdown -->
                                    </li>
                                    <li class="login">
									<?php
									
									if(isset($_SESSION["user_id"])){
									?>
									<a href="profile.php" data-toggle="modal">Hello
									
									<?php echo $_SESSION['user_name'];?>
									
									</a>
                                    
									<?php }
									
									else{
									?>
									
                                        <a href="#signin-modal" data-toggle="modal">
										Sign in / Sign up</a>
                                    <?php
									}
									?>
									
									</li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-auto col-lg-3 col-xl-3 col-xxl-2">
                            <button class="mobile-menu-toggler">
                                <span class="sr-only">Toggle mobile menu</span>
                                <i class="icon-bars"></i>
                            </button>
                            <a href="index.html" class="logo">
                                <img src="assets/images/demos/demo-14/logo.png" alt="hscode Logo" width="105" height="25">
                            </a>
                        </div><!-- End .col-xl-3 col-xxl-2 -->
                    
                        <div class="col col-lg-9 col-xl-9 col-xxl-10 header-middle-right">
                            <div class="row">
                                <div class="col-lg-8 col-xxl-4-5col d-none d-lg-block">
                                    <div class="header-search header-search-extended header-search-visible header-search-no-radius">
                                        <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                                        <form action="#" method="get">
                                            <div class="header-search-wrapper search-wrapper-wide">

                                                <div class="select-custom">
                                                    <select id="cat" name="cat">
                                                        <option value="">All Departments</option>
                                                        <option value="1">Fashion</option>
                                                        <option value="2">- Women</option>
                                                        <option value="3">- Men</option>
                                                        <option value="4">- Jewellery</option>
                                                        <option value="5">- Kids Fashion</option>
                                                        <option value="6">Electronics</option>
                                                        <option value="7">- Smart TVs</option>
                                                        <option value="8">- Cameras</option>
                                                        <option value="9">- Games</option>
                                                        <option value="10">Home &amp; Garden</option>
                                                        <option value="11">Motors</option>
                                                        <option value="12">- Cars and Trucks</option>
                                                        <option value="15">- Boats</option>
                                                        <option value="16">- Auto Tools &amp; Supplies</option>
                                                    </select>
                                                </div><!-- End .select-custom -->
                                                <label for="q" class="sr-only">Search</label>
                                                <input type="search" class="form-control" 
												name="q" id="q" placeholder="Search product ..." required>

                                                <button class="btn btn-primary" type="submit">
												<i class="icon-search"></i></button>
                                            </div><!-- End .header-search-wrapper -->
                                        </form>
                                    </div><!-- End .header-search -->
                                </div><!-- End .col-xxl-4-5col -->

                                <div class="col-lg-4 col-xxl-5col d-flex justify-content-end align-items-center">
                                    <div class="header-dropdown-link">
                                        <div class="dropdown compare-dropdown">
                                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                                                <i class="icon-random"></i>
                                                <span class="compare-txt">Compare</span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="compare-products">
                                                    <li class="compare-product">
                                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                        <h4 class="compare-product-title"><a href="product-extended.html">Blue Night Dress</a></h4>
                                                    </li>
                                                    <li class="compare-product">
                                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                        <h4 class="compare-product-title"><a href="product-extended.html">White Long Skirt</a></h4>
                                                    </li>
                                                </ul>

                                                <div class="compare-actions">
                                                    <a href="#" class="action-link">Clear All</a>
                                                    <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
                                                </div>
                                            </div><!-- End .dropdown-menu -->
                                        </div><!-- End .compare-dropdown -->

                                        <a href="wishlist.html" class="wishlist-link">
                                            <i class="icon-heart-o"></i>
                                            <span class="wishlist-count"
											id="wish"
											
											>
											<?php $total_wishlist_qty=mysqli_query($conn,
											"select * from wishlist where 
											user_id='".$_SESSION["user_id"]."'")or 
die(mysqli_error($conn));
echo $wcount_qty=mysqli_num_rows($total_wishlist_qty);?></span>
                                            <span class="wishlist-txt">Wishlist</span>
                                        </a>

                                        <div class="dropdown cart-dropdown">
                                            <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                                <i class="icon-shopping-cart"></i>
                                                <span class="cart-count" id="cart">
												
												<?php
//this is add to cart through ajax and here we get the product id and quantity

$total=0;
//this is connection file here we connect our database.


$total_qty=mysqli_query($conn,"select * from cart where user_id='".$_SESSION["user_id"]."'")or 
die(mysqli_error($conn));
$count_qty=mysqli_num_rows($total_qty);

if($count_qty > 0){
	
while($fetch_qty=mysqli_fetch_array($total_qty)){
	
     $total+=$fetch_qty["qty"];	
	
           }	
	
	
              }
                        echo $total;



?>
												
												</span>
                                                <span class="cart-txt">Cart</span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right">
                                                <div class="dropdown-cart-products">
                                     <?php
									 $total_cart_price=0;
									 $cart=mysqli_query($conn,"               
									select * from cart inner join products on cart.product_id=products.pro_id 
									where cart.user_id='".$_SESSION['user_id']."'")
									or
									die(mysqli_query($conn));

                                    $count=mysqli_num_rows($cart);
									  if($count > 0){
										 while($cart_products=mysqli_fetch_array($cart)){ 
										 
										 $product_id=$cart_products["pro_id"];
                                $product_name=$cart_products["pro_name"];
								$product_des=$cart_products["pro_des"];
								$product_price=$cart_products["pro_price"];
								
								$qty=$cart_products["qty"];
										  
                                         ?>									
													<div class="product">
                                                        <div class="product-cart-details">
                                                            <h4 class="product-title">
                     <a href="<?php echo $procuct_price;?>"><?php echo $product_name;?></a>
                                                            </h4>

                                                            <span class="cart-product-info">
                                                 <span class="cart-product-qty"><?php echo $qty;?></span>
                                                                x <?php 

$set=mysqli_query($conn,"SELECT * FROM set_currency
") or die(mysqli_error($conn));//main category 
$count_currencies=mysqli_num_rows($set);//count of categories 
if($count_currencies > 0){//if count  greater than 0 

	
	while($fetch=mysqli_fetch_array($set)){
	$currency_id=$fetch["currency_id"];//cat id 
	echo $currency_name=$fetch["currecy_sign"];//cat name 
	
	}
}?> &nbsp;&nbsp;<?php echo $product_price;?>
                                                            </span>
                                                        </div><!-- End .product-cart-details -->

                                                        <figure class="product-image-container">
                                                            <a href="product-extended.html" class="product-image">
                                                                <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                                            </a>
                                                        </figure>
                                                        <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                                    </div><!-- End .product -->

                                                    <?php
$total_cart_price+=$qty*$product_price;										


										}//end of while loop
									                }//end of if 
													
													?></div><!-- End .cart-product -->

                                                <div class="dropdown-cart-total">
                                                    <span>Total</span>

                                                    <span class="cart-total-price"><?php
													
													echo $total_cart_price;
													
													?></span>
                                                </div><!-- End .dropdown-cart-total -->

                                                <div class="dropdown-cart-action">
                                                    <a href="cart.php" class="btn btn-primary">View Cart</a>
                                                    <a href="checkout.php" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                                                </div><!-- End .dropdown-cart-total -->
                                            </div><!-- End .dropdown-menu -->
                                        </div><!-- End .cart-dropdown -->
                                    </div>
                                </div><!-- End .col-xxl-5col -->
                            </div><!-- End .row -->
                        </div><!-- End .col-xl-9 col-xxl-10 -->
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-auto col-lg-3 col-xl-3 col-xxl-2 header-left">
                            <div class="dropdown category-dropdown show is-on" data-visible="true">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                                    Browse Categories
                                </a>

                                <div class="dropdown-menu show">
                                    <nav class="side-nav">
                                        <ul class="menu-vertical sf-arrows">
										
										<?php 
$get_single_category=mysqli_query($conn,"SELECT * FROM main_catogories limit 0,1") or
 die(mysqli_error($conn));//main category 
$count_categories=mysqli_num_rows($get_single_category);//count of categories ?>

<?php

if($count_categories > 0){//if count  greater than 0 
while($fetch=mysqli_fetch_array($get_single_category)){
	$cat_id=$fetch["cat_id"];//cat id 
	$cat_name=$fetch["cat_name"];//cat name 
	$cat_icon=$fetch["icon"];
	$cat_image=$fetch["cat_image"];
	
?>
										
                                            <li class="megamenu-container">
                                                <a class="sf-with-ul" href="#"><i class="<?php
												echo $cat_icon;
												
												?>"></i><?php
												
												echo $cat_name;
												
												?></a>

                                                <div class="megamenu">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-8">
                                                            <div class="menu-col">
                                                                <div class="row">
																
																
															<?php
															
						$get_subcategory_limit_two=mysqli_query($conn,"select * from sub_catogory
						
						where cat_id='".$cat_id."' limit 0,2
						
						")or die(mysqli_error($conn));
															
															
															?>	
                                                                    <div class="col-md-6">
                                                                        
															<?php
										$count_two_subcategory=mysqli_num_rows($get_subcategory_limit_two);
															
										if($count_two_subcategory > 0){	
										while($fetch_subcategory=mysqli_fetch_array($get_subcategory_limit_two)){
											
											$sub_cat_id=$fetch_subcategory["sub_cat_id"];//sub cat id 
											$sub_cat_name=$fetch_subcategory["sub_catname"];
											
											
															?>			
																		<div class="menu-title"><?php
																		
																		echo $sub_cat_name;
																		?></div>
                                                                        <ul>
                                                 
												 <?php 
								$get_third_cat=mysqli_query($conn,"SELECT * FROM `third_level_category`
								where sub_cat_id='".$sub_cat_id."'  limit 0,5"
								)or die(mysqli_error($conn));
												 
							$count_third_cat=mysqli_num_rows($get_third_cat);
                            if($count_third_cat > 0){
							while($fetch_third_cat=mysqli_fetch_array($get_third_cat)){

					         $third_catname=$fetch_third_cat["third_catname"];			
												 ?>
												 <li><a href="#"><?php echo $third_catname;?></a></li>
                                                                           
                                                                           
                                 <?php
							}
							}
								 ?>                                       </ul>

										     <?php
										}
										
										}
												  
												  ?>                      
                                                                    </div><!-- End .col-md-6 -->
                                                                   <?php
															
						$get_subcategory_limit_four=mysqli_query($conn,"select * from sub_catogory
						
						where cat_id='".$cat_id."' limit 2,4
						
						")or die(mysqli_error($conn));
															
															
															?>	
                                                                    <div class="col-md-6">
																	<?php
										$count_four_subcategory=mysqli_num_rows($get_subcategory_limit_four);
															
										if($count_four_subcategory > 0){	
										while($fetch_subcategory=mysqli_fetch_array($get_subcategory_limit_four)){
											
											$sub_cat_id=$fetch_subcategory["sub_cat_id"];//sub cat id 
											$sub_cat_name=$fetch_subcategory["sub_catname"];
											
											
															?>		
                                                                        <div class="menu-title"><?php
																			echo $sub_cat_name;
																		?></div>
                                                                        <ul>
                                                                          <?php 
								$get_third_cat=mysqli_query($conn,"SELECT * FROM `third_level_category`
								where sub_cat_id='".$sub_cat_id."'  limit 0,5"
								)or die(mysqli_error($conn));
												 
							$count_third_cat=mysqli_num_rows($get_third_cat);
                            if($count_third_cat > 0){
							while($fetch_third_cat=mysqli_fetch_array($get_third_cat)){

					         $third_catname=$fetch_third_cat["third_catname"];			
												 ?>
												 <li><a href="#"><?php echo $third_catname;?></a></li>
                                                                           
                                                                           
                                 <?php
							}
							}
								 ?>         
                                                                        </ul>
                                                        <?php 
										                 }
										                 }
														
														?>
                                                                        
                                                                    </div><!-- End .col-md-6 -->
                                                                </div><!-- End .row -->
                                                            </div>
                                                        </div><!-- End .col-md-8 -->

                                                        <div class="col-md-4">
                                                            <div class="banner banner-overlay">
                                                                <a href="category.html" class="banner banner-menu">
                                                        <img src="admin/main_category_images/<?php echo $cat_image;?>"
																	alt="Banner">
                                                                </a>
                                                            </div><!-- End .banner banner-overlay -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->
                                                </div>
                                            </li>
                                           

<?php }

}?>























<!-- *****************************************************************-->

										   <?php 
$get_single_category=mysqli_query($conn,"SELECT * FROM main_catogories limit 1,1") or die(mysqli_error($conn));//main category 
$count_categories=mysqli_num_rows($get_single_category);//count of categories ?>

<?php

if($count_categories > 0){//if count  greater than 0 
while($fetch=mysqli_fetch_array($get_single_category)){
	$cat_id=$fetch["cat_id"];//cat id 
	$cat_name=$fetch["cat_name"];//cat name 
	$cat_icon=$fetch["icon"];
    $cat_image_second=$fetch["cat_image"];
	
?>
										
                                            <li class="megamenu-container">
                                                <a class="sf-with-ul" href="#"><i class="<?php
												echo $cat_icon;
												
												?>"></i><?php
												
												echo $cat_name;
												
												?></a>

                                                <div class="megamenu">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-8">
                                                            <div class="menu-col">
                                                                <div class="row">
																
																
															<?php
															
						$get_subcategory_limit_two=mysqli_query($conn,"select * from sub_catogory
						
						where cat_id='".$cat_id."' limit 0,2
						
						")or die(mysqli_error($conn));
															
															
															?>	
                                                                    <div class="col-md-6">
                                                                        
															<?php
										$count_two_subcategory=mysqli_num_rows($get_subcategory_limit_two);
															
										if($count_two_subcategory > 0){	
										while($fetch_subcategory=mysqli_fetch_array($get_subcategory_limit_two)){
											
											$sub_cat_id=$fetch_subcategory["sub_cat_id"];//sub cat id 
											$sub_cat_name=$fetch_subcategory["sub_catname"];
											
											
															?>			
																		<div class="menu-title"><?php
																		
																		echo $sub_cat_name;
																		?></div>
                                                                        <ul>
                                                 
												 <?php 
								$get_third_cat=mysqli_query($conn,"SELECT * FROM `third_level_category`
								where sub_cat_id='".$sub_cat_id."'  limit 0,5"
								)or die(mysqli_error($conn));
												 
							$count_third_cat=mysqli_num_rows($get_third_cat);
                            if($count_third_cat > 0){
							while($fetch_third_cat=mysqli_fetch_array($get_third_cat)){

					         $third_catname=$fetch_third_cat["third_catname"];			
												 ?>
												 <li><a href="#"><?php echo $third_catname;?></a></li>
                                                                           
                                                                           
                                 <?php
							}
							}
								 ?>                                       </ul>

										     <?php
										}
										
										}
												  
												  ?>                      
                                                                    </div><!-- End .col-md-6 -->
                                                                   <?php
															
						$get_subcategory_limit_four=mysqli_query($conn,"select * from sub_catogory
						
						where cat_id='".$cat_id."' limit 2,4
						
						")or die(mysqli_error($conn));
															
															
															?>	
                                                                    <div class="col-md-6">
																	<?php
										$count_four_subcategory=mysqli_num_rows($get_subcategory_limit_four);
															
										if($count_four_subcategory > 0){	
										while($fetch_subcategory=mysqli_fetch_array($get_subcategory_limit_four)){
											
											$sub_cat_id=$fetch_subcategory["sub_cat_id"];//sub cat id 
											$sub_cat_name=$fetch_subcategory["sub_catname"];
											
											
															?>		
                                                                        <div class="menu-title"><?php
																			echo $sub_cat_name;
																		?></div>
                                                                        <ul>
                                                                          <?php 
								$get_third_cat=mysqli_query($conn,"SELECT * FROM `third_level_category`
								where sub_cat_id='".$sub_cat_id."'  limit 0,5"
								)or die(mysqli_error($conn));
												 
							$count_third_cat=mysqli_num_rows($get_third_cat);
                            if($count_third_cat > 0){
							while($fetch_third_cat=mysqli_fetch_array($get_third_cat)){

					         $third_catname=$fetch_third_cat["third_catname"];			
												 ?>
												 <li><a href="#"><?php echo $third_catname;?></a></li>
                                                                           
                                                                           
                                 <?php
							}
							}
								 ?>         
                                                                        </ul>
                                                        <?php 
										                 }
										                 }
														
														?>
                                                                        
                                                                    </div><!-- End .col-md-6 -->
                                                                </div><!-- End .row -->
                                                            </div>
                                                        </div><!-- End .col-md-8 -->
														<?php
                                                       }
													   }
														
														?>

                                                        <div class="col-md-4">
                                                            <div class="banner banner-overlay">
                                                                <a href="category.html" class="banner banner-menu">
                   <img src="admin/main_category_images/<?php echo $cat_image_second;?>"
				   alt="Banner" style="height:40em;"> 
                                                                </a>
                                                            </div><!-- End .banner banner-overlay -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->
                                                </div>
                                            </li>
										<li class="megamenu-container">	
								 <?php 
$get_single_category=mysqli_query($conn,"SELECT * FROM main_catogories limit 2,1") or die(mysqli_error($conn));//main category 
$count_categories=mysqli_num_rows($get_single_category);//count of categories ?>

<?php

if($count_categories > 0){//if count  greater than 0 
while($fetch=mysqli_fetch_array($get_single_category)){
	 $cat_id=$fetch["cat_id"];//cat id 
	$cat_name=$fetch["cat_name"];//cat name 
	$cat_icon=$fetch["icon"];
	$three_image=$fetch["cat_image"];
?>			
                                            
                                                <a class="sf-with-ul" href="#"><i class="<?php echo $cat_icon;?>"></i>
												<?php
												echo $cat_name;
												
												?>
												</a>
												 <div class="megamenu">
                                                    <div class="menu-col">
                                                        <div class="row">
<?php
															
						$get_subcategory_limit_two=mysqli_query($conn,"select * from sub_catogory
						
						where cat_id='".$cat_id."' limit 0,3
						
						")or die(mysqli_error($conn));
						
						
										 $count_two_subcategory=mysqli_num_rows($get_subcategory_limit_two);
															
										if($count_two_subcategory > 0){	
										while($fetch_subcategory=mysqli_fetch_array($get_subcategory_limit_two)){
											
											$sub_cat_id=$fetch_subcategory["sub_cat_id"];//sub cat id 
											$sub_cat_name=$fetch_subcategory["sub_catname"];
											
											
															?>	
                                               
														
														
						
						
					
                                                            <div class="col-md-4">
                                                                <div class="menu-title"><?php echo $sub_cat_name;?></div>
                                                                <ul>
                                                                   <?php 
								$get_third_cat=mysqli_query($conn,"SELECT * FROM `third_level_category`
								where sub_cat_id='".$sub_cat_id."'  limit 0,5"
								)or die(mysqli_error($conn));
												 
							$count_third_cat=mysqli_num_rows($get_third_cat);
                            if($count_third_cat > 0){
							while($fetch_third_cat=mysqli_fetch_array($get_third_cat)){

					         $third_catname=$fetch_third_cat["third_catname"];			
												 ?>
												 <li><a href="#"><?php echo $third_catname;?></a></li>
                                                                           
                                                                           
                                 <?php
							}
							}
								 ?>         
                                                                    
                                                                </ul>
                                                            </div><!-- End .col-md-4 -->
										
                                                           <!-- End .col-md-4 -->

                                                            <?php }
										}
										
										?>
                                                        </div><!-- End .row -->

                                                        <div class="row menu-banners">
                                                            <div class="col-md-4">
                                                                <div class="banner">
                                                                    <a href="#">
                                                                        <img src="assets/images/demos/demo-13/menu/1.jpg" alt="image">
                                                                    </a>
                                                                </div><!-- End .banner -->
                                                            </div><!-- End .col-md-4 -->

                                                            <div class="col-md-4">
                                                                <div class="banner">
                                                                    <a href="#">
                                                                        <img src="assets/images/demos/demo-13/menu/2.jpg" alt="image">
                                                                    </a>
                                                                </div><!-- End .banner -->
                                                            </div><!-- End .col-md-4 -->

                                                            <div class="col-md-4">
                                                                <div class="banner">
                                                                    <a href="#">
                                                                        <img src="assets/images/demos/demo-13/menu/3.jpg" alt="image">
                                                                    </a>
                                                                </div><!-- End .banner -->
                                                            </div><!-- End .col-md-4 -->
                                                        </div><!-- End .row -->
														<?php
                                                 }
												 }
											
											
											
											?>
                                                    </div>
                                                </div>
                                           
											
											 </li>
											 <?php 
$get_single_category=mysqli_query($conn,"SELECT * FROM main_catogories limit 3,1") or die(mysqli_error($conn));//main category 
$count_categories=mysqli_num_rows($get_single_category);//count of categories ?>

<?php

if($count_categories > 0){//if count  greater than 0 
while($fetch=mysqli_fetch_array($get_single_category)){
	$cat_id=$fetch["cat_id"];//cat id 
	$cat_name=$fetch["cat_name"];//cat name 
	$cat_icon=$fetch["icon"];
	$four_image=$fetch["cat_image"];
?>			
                                            <li class="megamenu-container">
                                                <a class="sf-with-ul" href="#"><i class="<?php echo $cat_icon;?>"></i><?php echo $cat_name;?></a>

                                                <div class="megamenu">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-8">
                                                            <div class="menu-col">
                                                                <div class="row">
                                                                    
																	<?php
															
						$get_subcategory_limit_two=mysqli_query($conn,"select * from sub_catogory
						
						where cat_id='".$cat_id."' limit 0,2
						
						")or die(mysqli_error($conn));
						
						
										$count_two_subcategory=mysqli_num_rows($get_subcategory_limit_two);
															
										if($count_two_subcategory > 0){	
										while($fetch_subcategory=mysqli_fetch_array($get_subcategory_limit_two)){
											
											$sub_cat_id=$fetch_subcategory["sub_cat_id"];//sub cat id 
											$sub_cat_name=$fetch_subcategory["sub_catname"];
											
											
															?>	
																	<div class="col-md-6">
                                                                        <div class="menu-title">
																		<?php echo $sub_cat_name;?>
																		
																		</div>
                                                                        <ul>
                                                                           <?php 
								$get_third_cat=mysqli_query($conn,"SELECT * FROM `third_level_category`
								where sub_cat_id='".$sub_cat_id."'  limit 0,5"
								)or die(mysqli_error($conn));
												 
							$count_third_cat=mysqli_num_rows($get_third_cat);
                            if($count_third_cat > 0){
							while($fetch_third_cat=mysqli_fetch_array($get_third_cat)){

					         $third_catname=$fetch_third_cat["third_catname"];			
												 ?>
												 <li><a href="#"><?php echo $third_catname;?></a></li>
                                                                           
                                                                           
                                 <?php
							}
							}
								 ?>         
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->
																	
										<?php }
										
										}?>
                                                                  </div> 
                                                            </div>
                                                        </div><!-- End .col-md-8 -->

                                                        <div class="col-md-4">
                                                            <div class="banner banner-overlay">
                                                                <a href="category.html" class="banner banner-menu">
                          <img src="admin/main_category_images/<?php echo $four_image;?>" 
																	alt="Banner">
                                                                </a>
                                                            </div><!-- End .banner banner-overlay -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->

                                                    <div class="menu-col menu-brands">
                                                        <div class="row">
                                                            <!--<div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/1.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <!--<div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/2.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <!--<div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/3.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <!--<div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/4.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <!--<div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/5.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <!--<div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/6.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .menu-brands -->
                                                </div>
                                            </li>
                                            
											<?php
											
                                              }
											  }
											
											
											?>
											
									<?php 
$get_single_category=mysqli_query($conn,"SELECT * FROM main_catogories where
 role='single_level_cat'") or die(mysqli_error($conn));//main category 
$count_categories=mysqli_num_rows($get_single_category);//count of categories ?>

<?php

if($count_categories > 0){//if count  greater than 0 
while($fetch=mysqli_fetch_array($get_single_category)){
	$cat_id=$fetch["cat_id"];//cat id 
	$cat_name=$fetch["cat_name"];//cat name 
	$cat_icon=$fetch["icon"];
	
?>

										  <li><a href="#"><i class="<?php echo $cat_icon;?>"></i><?php echo $cat_name;?></a></li>
										  
										  <?php
                                           }//end of while loop single categories
                                           }
										  
										  
										  ?>
                                            
                                        </ul><!-- End .menu-vertical -->
                                    </nav><!-- End .side-nav -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .category-dropdown -->
                        </div><!-- End .col-xl-3 col-xxl-2 -->

                        <div class="col col-lg-6 col-xl-6 col-xxl-8 header-center">
                            <nav class="main-nav">
                                <ul class="menu sf-arrows">
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="about.html">About</a></li>

                                    <li class="">
                                        <a href="category-fullwidth.html">Shop</a>
                                    </li>
                                    <li class="">
                                        <a href="product-extended.html">Product</a>
                                    </li>
                                  
                                    
                                    <li>
                                        <a href="#" class="sf-with-ul">Pages</a>

                                        <ul>
    <li><a href="product-category-fullwidth.html">Categories</a></li>
                                        <li><a href="login.html">Login</a></li>                                            <li><a href="faq.html">FAQs</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>

                                </ul><!-- End .menu -->
                            </nav><!-- End .main-nav -->
                        </div><!-- End .col-xl-9 col-xxl-10 -->

                        <div class="col col-lg-3 col-xl-3 col-xxl-2 header-right">
                            <i class="la la-lightbulb-o"></i><p>Clearance Up to 30% Off</span></p>
                        </div>
                    </div><!-- End .row -->
                </div><!-- End .container-fluid -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->
