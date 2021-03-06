<?php
   session_start();
   error_reporting(0);
   require("include/conn.php");//database connection file 
   if(isset($_SESSION["guest_id"])){//isset random number
    $_SESSION["guest_id"];   
   }//isset random id 
   else{//else random id 
   $rand=mt_rand(0,123456789);
  $_SESSION["guest_id"]=$rand;
   }
   
   
   
   
   
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>hscode - Index Page</title>
      <meta name="keywords" content="HTML5 Template">
      <meta name="description" content="hscode - Bootstrap eCommerce Template">
      <meta name="author" content="p-themes">
      <!-- Favicon -->
      <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
      <link rel="manifest" href="assets/images/icons/site.html">
      <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
      <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
      <meta name="apple-mobile-web-app-title" content="hscode">
      <meta name="application-name" content="hscode">
      <meta name="msapplication-TileColor" content="#cc9966">
      <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
      <meta name="theme-color" content="#ffffff">
      <link rel="stylesheet" href="assets/vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css">
      <!-- Plugins CSS File -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/plugins/jquery.countdown.css">
      <!-- Main CSS File -->
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/skins/skin-demo-14.css">
      <link rel="stylesheet" href="assets/css/demos/demo-14.css">
      <script src="assets/js/jquery.min.js"></script>
      <script src="js/jquery.js"></script>
      <!--<script src="js/custom.js"></script>-->
      <script>
         $(document).ready(function(){
         
         $("#login").click(function(){
         
         
         				var email=$("#singin-email").val();
         				var pass=$("#singin-password").val();
         				 $.ajax({
                                type: "POST",
                               url: "login-ajax.php",
                               data: {email:email,pass:pass},
                               success: function(data) {
                               $("#sign-in").html(data);
                    
          		
                   },
                   error: function(err) {
         		
                 
                   }
                });
         					
         				 });
         				 
         $("#register-btn").click(function(){
         	
         var registername=$("#registername").val();
         var registeremail=$("#registeremail").val();
         var registerpass=$("#registerpassword").val();	
         
         
         $.ajax({
                                type: "POST",
                               url: "register-ajax.php",
                               data: {registername:registername,registeremail:registeremail,registerpass:registerpass},
                               success: function(data) {
                               $("#register-in").html(data);
                    
          		
                   },
                   error: function(err) {
         		
                 
                   }
                });
         				
         	
         });				 
         				 
         
         });
         
         
         
      </script>
   </head>
   <body>
      <div class="page-wrapper">
         <?php
            require("include/header.php");//this is header navigation file 
            
            
            ?>
         <main class="main">
            <div class="mb-lg-2"></div>
            <!-- End .mb-lg-2 -->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-9 col-xxl-8 offset-lg-3 offset-xxl-2">
                     <div class="intro-slider-container slider-container-ratio mb-2">
                        <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
                           "nav": false, 
                           "dots": true
                           }'>
                           <div class="intro-slide">
                              <figure class="slide-image">
                                 <picture>
                                    <source media="(max-width: 480px)" srcset="assets/images/demos/demo-14/slider/slide-1-480w.jpg">
                                    <img src="assets/images/demos/demo-14/slider/slide-1.jpg" alt="Image Desc">
                                 </picture>
                              </figure>
                              <!-- End .slide-image -->
                              <div class="intro-content">
                                 <h3 class="intro-subtitle">New Arrivals</h3>
                                 <!-- End .h3 intro-subtitle -->
                                 <h1 class="intro-title text-white">
                                    The New Way <br>To Buy Furniture
                                 </h1>
                                 <!-- End .intro-title -->
                                 <div class="intro-text text-white">
                                    Spring Collections 2019
                                 </div>
                                 <!-- End .intro-text -->
                                 <a href="category.html" class="btn btn-primary">
                                 <span>Discover Now</span>
                                 <i class="icon-long-arrow-right"></i>
                                 </a>
                              </div>
                              <!-- End .intro-content -->
                           </div>
                           <!-- End .intro-slide -->
                           <div class="intro-slide">
                              <figure class="slide-image">
                                 <picture>
                                    <source media="(max-width: 480px)" srcset="assets/images/demos/demo-14/slider/slide-2-480w.jpg">
                                    <img src="assets/images/demos/demo-14/slider/slide-2.jpg" alt="Image Desc">
                                 </picture>
                              </figure>
                              <!-- End .slide-image -->
                              <div class="intro-content">
                                 <h3 class="intro-subtitle">Hottest Deals</h3>
                                 <!-- End .h3 intro-subtitle -->
                                 <h1 class="intro-title">
                                    <span>Wherever You Go</span> <br>DJI Mavic 2 Pro
                                 </h1>
                                 <!-- End .intro-title -->
                                 <div class="intro-price">
                                    <sup>from</sup>
                                    <span>
                                    $1,948<sup>.99</sup>
                                    </span>
                                 </div>
                                 <!-- End .intro-price -->
                                 <a href="category.html" class="btn btn-primary">
                                 <span>Discover Here</span>
                                 <i class="icon-long-arrow-right"></i>
                                 </a>
                              </div>
                              <!-- End .intro-content -->
                           </div>
                           <!-- End .intro-slide -->
                           <div class="intro-slide">
                              <figure class="slide-image">
                                 <picture>
                                    <source media="(max-width: 480px)" srcset="assets/images/demos/demo-14/slider/slide-3-480w.jpg">
                                    <img src="assets/images/demos/demo-14/slider/slide-3.jpg" alt="Image Desc">
                                 </picture>
                              </figure>
                              <!-- End .slide-image -->
                              <div class="intro-content">
                                 <h3 class="intro-subtitle">Limited Quantities</h3>
                                 <!-- End .h3 intro-subtitle -->
                                 <h1 class="intro-title">
                                    Refresh Your <br>Wardrobe
                                 </h1>
                                 <!-- End .intro-title -->
                                 <div class="intro-text">
                                    Summer Collection 2019
                                 </div>
                                 <!-- End .intro-text -->
                                 <a href="category.html" class="btn btn-primary">
                                 <span>Discover Now</span>
                                 <i class="icon-long-arrow-right"></i>
                                 </a>
                              </div>
                              <!-- End .intro-content -->
                           </div>
                           <!-- End .intro-slide -->
                        </div>
                        <!-- End .intro-slider owl-carousel owl-simple -->
                        <span class="slider-loader"></span><!-- End .slider-loader -->
                     </div>
                     <!-- End .intro-slider-container -->
                  </div>
                  <!-- End .col-xl-9 col-xxl-10 -->
                  <div class="col-xl-3 col-xxl-2 d-none d-xxl-block">
                     <div class="banner banner-overlay  banner-content-stretch ">
                        <a href="#">
                        <img src="assets/images/demos/demo-14/banners/banner-1.png" alt="Banner img desc">
                        </a>
                        <div class="banner-content text-right">
                           <div class="price text-center">
                              <sup class="text-white">from</sup>
                              <span class="text-white">
                              <strong>$199</strong><sup class="text-white">,99</sup>
                              </span>
                           </div>
                           <a href="#" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
                        </div>
                        <!-- End .banner-content -->
                     </div>
                     <!-- End .banner banner-overlay -->
                  </div>
                  <!-- End .col-xl-3 col-xxl-2 -->
               </div>
               <!-- End .row -->
            </div>
            <!-- End .container-fluid -->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-9 col-xxl-10">
                     <div class="row">
                        <div class="col-lg-12 col-xxl-4-5col">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="banner banner-overlay">
                                    <a href="#">
                                    <img src="assets/images/demos/demo-14/banners/banner-2.jpg" alt="Banner img desc">
                                    </a>
                                    <div class="banner-content">
                                       <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Hottest Deals</a></h4>
                                       <!-- End .banner-subtitle -->
                                       <h3 class="banner-title text-white"><a href="#">Detox And Beautify <br>For Spring <br><span>Up To  20% Off</span></a></h3>
                                       <!-- End .banner-title -->
                                       <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                    </div>
                                    <!-- End .banner-content -->
                                 </div>
                                 <!-- End .banner -->
                              </div>
                              <!-- End .col-md-6 -->
                              <div class="col-md-6">
                                 <div class="banner banner-overlay">
                                    <a href="#">
                                    <img src="assets/images/demos/demo-14/banners/banner-3.png" alt="Banner img desc">
                                    </a>
                                    <div class="banner-content">
                                       <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Deal of the Day</a></h4>
                                       <!-- End .banner-subtitle -->
                                       <h3 class="banner-title text-white"><a href="#">Headphones <br><span>Up To 30% Off</span></a></h3>
                                       <!-- End .banner-title -->
                                       <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                    </div>
                                    <!-- End .banner-content -->
                                 </div>
                                 <!-- End .banner banner-overlay -->
                              </div>
                              <!-- End .col-md-6 -->
                           </div>
                           <!-- End .row -->
                        </div>
                        <!-- End .col-lg-3 col-xxl-4-5col -->
                        <div class="col-12 col-xxl-5col d-none d-xxl-block">
                           <div class="banner banner-overlay">
                              <a href="#">
                              <img src="assets/images/demos/demo-14/banners/banner-4.jpg" alt="Banner img desc">
                              </a>
                              <div class="banner-content">
                                 <h4 class="banner-subtitle text-white"><a href="#">Clearance</a></h4>
                                 <!-- End .banner-subtitle -->
                                 <h3 class="banner-title text-white"><a href="#">Seating and Tables Clearance</a></h3>
                                 <!-- End .banner-title -->
                                 <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                              </div>
                              <!-- End .banner-content -->
                           </div>
                           <!-- End .banner banner-overlay -->
                        </div>
                        <!-- End .col-lg-3 col-xxl-2 -->
                     </div>
                     <!-- End .row -->
                     <div class="mb-3"></div>
                     <!-- End .mb-3 -->
                     <div class="owl-carousel owl-simple brands-carousel" data-toggle="owl" 
                        data-owl-options='{
                        "nav": false, 
                        "dots": false,
                        "margin": 20,
                        "loop": false,
                        "responsive": {
                        "0": {
                        "items":2
                        },
                        "420": {
                        "items":3
                        },
                        "600": {
                        "items":4
                        },
                        "900": {
                        "items":5
                        },
                        "1600": {
                        "items":6,
                        "nav": true
                        }
                        }
                        }'>
                        <a href="#" class="brand">
                        <img src="assets/images/brands/1.png" alt="Brand Name">
                        </a>
                        <a href="#" class="brand">
                        <img src="assets/images/brands/2.png" alt="Brand Name">
                        </a>
                        <a href="#" class="brand">
                        <img src="assets/images/brands/3.png" alt="Brand Name">
                        </a>
                        <a href="#" class="brand">
                        <img src="assets/images/brands/4.png" alt="Brand Name">
                        </a>
                        <a href="#" class="brand">
                        <img src="assets/images/brands/5.png" alt="Brand Name">
                        </a>
                        <a href="#" class="brand">
                        <img src="assets/images/brands/6.png" alt="Brand Name">
                        </a>
                        <a href="#" class="brand">
                        <img src="assets/images/brands/7.png" alt="Brand Name">
                        </a>
                     </div>
                     <!-- End .owl-carousel -->
                     <div class="mb-5"></div>
                     <!-- End .mb-5 -->
                     <div class="bg-lighter trending-products">
                        <div class="heading heading-flex mb-3">
                           <div class="heading-left">
                              <h2 class="title">Trending Today</h2>
                              <!-- End .title -->
                           </div>
                           <!-- End .heading-left -->
                           <div class="heading-right">
                              <ul class="nav nav-pills justify-content-center" role="tablist">
                                 <li class="nav-item">
                                    <a class="nav-link active" id="trending-all-link" data-toggle="tab"
                                       href="#trending-all-tab" role="tab" aria-controls="trending-all-tab" aria-selected="true">All</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="trending-elec-link" data-toggle="tab" href="#trending-elec-tab" role="tab" aria-controls="trending-elec-tab" aria-selected="false">Electronics</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="trending-furn-link" data-toggle="tab" href="#trending-furn-tab" role="tab" aria-controls="trending-furn-tab" aria-selected="false">Furniture</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="trending-cloth-link" data-toggle="tab" href="#trending-cloth-tab" role="tab" aria-controls="trending-cloth-tab" aria-selected="false">Clothes</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link" id="trending-acc-link" data-toggle="tab" href="#trending-acc-tab" role="tab" aria-controls="trending-acc-tab" aria-selected="false">Accessories</a>
                                 </li>
                              </ul>
                           </div>
                           <!-- End .heading-right -->
                        </div>
                        <!-- End .heading -->
                        <div class="tab-content tab-content-carousel">
                           <div class="tab-pane p-0 fade show active" id="trending-all-tab" role="tabpanel" aria-labelledby="trending-all-link">
                              <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                 data-owl-options='{
                                 "nav": false, 
                                 "dots": true,
                                 "margin": 20,
                                 "loop": false,
                                 "responsive": {
                                 "0": {
                                 "items":1
                                 },
                                 "480": {
                                 "items":2
                                 },
                                 "768": {
                                 "items":3
                                 },
                                 "992": {
                                 "items":4
                                 },
                                 "1200": {
                                 "items":3,
                                 "nav": true
                                 },
                                 "1600": {
                                 "items":5,
                                 "nav": true
                                 }
                                 }
                                 }'>
                                 <?php
                                    require("include/conn.php");//connection file =
                                    
                                    
                                    
                                    $query=mysqli_query($conn,"SELECT * FROM products 
                                    INNER JOIN main_catogories ON 
                                    main_catogories.cat_id = products.cat_id INNER JOIN 
                                    sub_catogory ON products.sub_catid = sub_catogory.sub_cat_id
                                    INNER JOIN third_level_category ON 
                                    products.third_cat_id = third_level_category.third_cat_id") or
                                    die(mysqli_error($conn));
                                    
                                    $count=mysqli_num_rows($query);
                                    if($count > 0){	
                                    while($fetch=mysqli_fetch_array($query)){
                                    $product_id=$fetch["pro_id"];
                                    $cat_name=$fetch["cat_name"];
                                    $product_random_id=$fetch["product_random_id"];
                                    $product_name=$fetch["pro_name"];
                                    $product_des=$fetch["pro_des"];
                                    $product_price=$fetch["pro_price"];
                                    $product_image=$fetch["pro_image"];
                                    $sale=$fetch["sale"];
                                    ?>	
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-sale">Sale
                                       &nbsp;<?php echo $sale;?>%
                                       </span>
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
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="admin/plugin/product_images/<?php echo $product_image;?>"
                                          alt="<?php echo $product_name;?>" style="height:196px; width:196px;" class="product-image">
                                       </a>
                                       <?php
                                          }//end of while loop of count images
                                          }//end of if statement
                                          
                                          ?>								
                                       <div class="product-action-vertical">
                                          <script>
                                             $(document).ready(function(){
                                             $("#add-wishlist<?php echo $product_id;?>").click(function(){
                                             var wish_id=$("#wish_id<?php echo $product_id;?>").val();
                                                $.ajax({
                                                               type: "POST",
                                                               url: "cart_ajax_add_wish.php",
                                                               data: {wish_id:wish_id},
                                                               success: function(data) {
                                                               $("#wish").html(data);
                                                    
                                             
                                                   },
                                                   error: function(err) {
                                             
                                                 
                                                   }
                                               });
                                             	
                                             });
                                                               });						
                                             	
                                             	
                                          </script>
                                          <input type="hidden" id="wish_id<?php echo $product_id;?>" value="<?php echo $product_id;?>" >			
                                          <a href="javascript:void(0);" id="add-wishlist<?php echo $product_id;?>" 
                                             class="btn-product-icon btn-wishlist" title="Add to wishlist">
                                          <span>add to wishlist</span></a>
                                        
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          
                                          <script>
                                             $(document).ready(function(){
                                             
                                                               $("#add-cart<?php echo $product_id;?>").click(function(){	
                                                                  var product_id=$("#product_id<?php echo $product_id;?>").val();
                                                   var quantity=$("#quantity<?php echo $product_id;?>").val();
                                                       $.ajax({
                                                   type: "POST",
                                                   url: "cart_ajax_add_cart.php",
                                                   data: {product_id:product_id,quantity:quantity},
                                               
                                                   success: function(data) {
                                                  
                                             $("#cart").html(data);
                                                    
                                             
                                                   },
                                                   error: function(err) {
                                             
                                                 
                                                   }
                                               });
                                                          						 
                                             });
                                                 
                                             });
                                          </script>		
                                          <input type="hidden" id="product_id<?php echo $product_id;?>" 
                                             value="<?php echo $product_id;?>" >
                                          <input type="hidden" id="quantity<?php echo $product_id;?>" value="1">
                                          <button id="add-cart<?php echo $product_id;?>" href="javascript:void(0);" 
                                             class="btn-product btn-cart" 
                                             title="Add to cart">
                                          <span >add to cart</span></button>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                          <?php
                                             echo $cat_name;
                                             ?></a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title">
                                          <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                          <?php echo $product_name;?></a>
                                       </h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          <span class="new-price">
                                          <?php 
                                             $set=mysqli_query($conn,"SELECT * FROM set_currency
                                             ") or die(mysqli_error($conn));//set currency query 
                                             $count_currencies=mysqli_num_rows($set);//count of curreny row 
                                             if($count_currencies > 0){//if count  greater than 0 
                                             
                                             	
                                             	while($fetch=mysqli_fetch_array($set)){
                                             	$currency_id=$fetch["currency_id"];//currency_id  
                                             	echo $currency_name=$fetch["currecy_sign"];//currency sign 
                                             	
                                             	}
                                             }
                                             ?>
                                          <?php
                                             echo $product_price;
                                             ?></span>
                                          <span class="old-price">Was $290.00</span>
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 100%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 2 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <?php
                                    }//end of while loop 
                                    }//end of if condition 
                                       
                                       ?>
                              </div>
                              <!-- End .owl-carousel -->
                           </div>
                           <!-- .End .tab-pane -->
                           <div class="tab-pane p-0 fade" id="trending-elec-tab" role="tabpanel" aria-labelledby="trending-elec-link">
                              <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                 data-owl-options='{
                                 "nav": false, 
                                 "dots": true,
                                 "margin": 20,
                                 "loop": false,
                                 "responsive": {
                                 "0": {
                                 "items":1
                                 },
                                 "480": {
                                 "items":2
                                 },
                                 "768": {
                                 "items":3
                                 },
                                 "992": {
                                 "items":4
                                 },
                                 "1200": {
                                 "items":3,
                                 "nav": true
                                 },
                                 "1600": {
                                 "items":5,
                                 "nav": true
                                 }
                                 }
                                 }'>
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Furniture</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Can 2-Seater Sofa frame charcoal</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          $3,050.00
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 60%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 8 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                       <div class="product-nav product-nav-dots">
                                          <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                          <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                                       </div>
                                       <!-- End .product-nav -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-4.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Clothes</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Tan suede biker jacket</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          $240.00
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 80%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 4 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-sale">Sale</span>
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-1.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Furniture</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Butler Stool Ladder</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          <span class="new-price">$251.99</span>
                                          <span class="old-price">Was $290.00</span>
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 100%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 2 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-sale">Sale</span>
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div>
                                       <!-- End .product-countdown -->
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Electronics</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Bose - SoundSport wireless headphones</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          <span class="new-price">$179.99</span>
                                          <span class="old-price">Was $199.00</span>
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 100%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 4 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                       <div class="product-nav product-nav-dots">
                                          <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                          <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                          <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                       </div>
                                       <!-- End .product-nav -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-top">Top</span>
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Laptops</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">MacBook Pro 13" Display, i5</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          $1,199.99
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 100%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 4 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-top">Top</span>
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Electronics</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          $1,699.99
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 80%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 10 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                              </div>
                              <!-- End .owl-carousel -->
                           </div>
                           <!-- .End .tab-pane -->
                           <div class="tab-pane p-0 fade" id="trending-furn-tab" role="tabpanel" aria-labelledby="trending-furn-link">
                              <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                 data-owl-options='{
                                 "nav": false, 
                                 "dots": true,
                                 "margin": 20,
                                 "loop": false,
                                 "responsive": {
                                 "0": {
                                 "items":1
                                 },
                                 "480": {
                                 "items":2
                                 },
                                 "768": {
                                 "items":3
                                 },
                                 "992": {
                                 "items":4
                                 },
                                 "1200": {
                                 "items":3,
                                 "nav": true
                                 },
                                 "1600": {
                                 "items":5,
                                 "nav": true
                                 }
                                 }
                                 }'>
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-top">Top</span>
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Laptops</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">MacBook Pro 13" Display, i5</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          $1,199.99
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 100%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 4 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-sale">Sale</span>
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div>
                                       <!-- End .product-countdown -->
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Electronics</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Bose - SoundSport wireless headphones</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          <span class="new-price">$179.99</span>
                                          <span class="old-price">Was $199.00</span>
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 100%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 4 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                       <div class="product-nav product-nav-dots">
                                          <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                          <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                          <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                       </div>
                                       <!-- End .product-nav -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Furniture</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Can 2-Seater Sofa frame charcoal</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          $3,050.00
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 60%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 8 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                       <div class="product-nav product-nav-dots">
                                          <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                          <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                                       </div>
                                       <!-- End .product-nav -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-sale">Sale</span>
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-1.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Furniture</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Butler Stool Ladder</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          <span class="new-price">$251.99</span>
                                          <span class="old-price">Was $290.00</span>
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 100%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 2 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-top">Top</span>
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Electronics</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          $1,699.99
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 80%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 10 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-4.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Clothes</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Tan suede biker jacket</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          $240.00
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 80%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 4 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                              </div>
                              <!-- End .owl-carousel -->
                           </div>
                           <!-- .End .tab-pane -->
                           <div class="tab-pane p-0 fade" id="trending-cloth-tab" role="tabpanel" aria-labelledby="trending-cloth-link">
                              <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                 data-owl-options='{
                                 "nav": false, 
                                 "dots": true,
                                 "margin": 20,
                                 "loop": false,
                                 "responsive": {
                                 "0": {
                                 "items":1
                                 },
                                 "480": {
                                 "items":2
                                 },
                                 "768": {
                                 "items":3
                                 },
                                 "992": {
                                 "items":4
                                 },
                                 "1200": {
                                 "items":3,
                                 "nav": true
                                 },
                                 "1600": {
                                 "items":5,
                                 "nav": true
                                 }
                                 }
                                 }'>
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-sale">Sale</span>
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-1.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Furniture</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Butler Stool Ladder</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          <span class="new-price">$251.99</span>
                                          <span class="old-price">Was $290.00</span>
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 100%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 2 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-top">Top</span>
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Electronics</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          $1,699.99
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 80%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 10 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-top">Top</span>
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Laptops</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">MacBook Pro 13" Display, i5</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          $1,199.99
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 100%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 4 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-sale">Sale</span>
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div>
                                       <!-- End .product-countdown -->
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Electronics</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Bose - SoundSport wireless headphones</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          <span class="new-price">$179.99</span>
                                          <span class="old-price">Was $199.00</span>
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 100%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 4 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                       <div class="product-nav product-nav-dots">
                                          <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                          <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                          <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                       </div>
                                       <!-- End .product-nav -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Furniture</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Can 2-Seater Sofa frame charcoal</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          $3,050.00
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 60%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 8 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                       <div class="product-nav product-nav-dots">
                                          <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                          <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                                       </div>
                                       <!-- End .product-nav -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                              </div>
                              <!-- End .owl-carousel -->
                           </div>
                           <!-- .End .tab-pane -->
                           <div class="tab-pane p-0 fade" id="trending-acc-tab" role="tabpanel" aria-labelledby="trending-acc-link">
                              <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                                 data-owl-options='{
                                 "nav": false, 
                                 "dots": true,
                                 "margin": 20,
                                 "loop": false,
                                 "responsive": {
                                 "0": {
                                 "items":1
                                 },
                                 "480": {
                                 "items":2
                                 },
                                 "768": {
                                 "items":3
                                 },
                                 "992": {
                                 "items":4
                                 },
                                 "1200": {
                                 "items":3,
                                 "nav": true
                                 },
                                 "1600": {
                                 "items":5,
                                 "nav": true
                                 }
                                 }
                                 }'>
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-4.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Clothes</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Tan suede biker jacket</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          $240.00
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 80%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 4 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Furniture</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Can 2-Seater Sofa frame charcoal</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          $3,050.00
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 60%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 8 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                       <div class="product-nav product-nav-dots">
                                          <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                                          <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                                       </div>
                                       <!-- End .product-nav -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-sale">Sale</span>
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div>
                                       <!-- End .product-countdown -->
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Electronics</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Bose - SoundSport wireless headphones</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          <span class="new-price">$179.99</span>
                                          <span class="old-price">Was $199.00</span>
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 100%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 4 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                       <div class="product-nav product-nav-dots">
                                          <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                                          <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                                          <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                       </div>
                                       <!-- End .product-nav -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-top">Top</span>
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Electronics</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          $1,699.99
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 80%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 10 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                                 <div class="product text-center">
                                    <figure class="product-media">
                                       <span class="product-label label-top">Top</span>
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="assets/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                                       </a>
                                       <div class="product-action-vertical">
                                          <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                          <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                          <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                       </div>
                                       <!-- End .product-action -->
                                    </figure>
                                    <!-- End .product-media -->
                                    <div class="product-body">
                                       <div class="product-cat">
                                          <a href="#">Laptops</a>
                                       </div>
                                       <!-- End .product-cat -->
                                       <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">MacBook Pro 13" Display, i5</a></h3>
                                       <!-- End .product-title -->
                                       <div class="product-price">
                                          $1,199.99
                                       </div>
                                       <!-- End .product-price -->
                                       <div class="ratings-container">
                                          <div class="ratings">
                                             <div class="ratings-val" style="width: 100%;"></div>
                                             <!-- End .ratings-val -->
                                          </div>
                                          <!-- End .ratings -->
                                          <span class="ratings-text">( 4 Reviews )</span>
                                       </div>
                                       <!-- End .rating-container -->
                                    </div>
                                    <!-- End .product-body -->
                                 </div>
                                 <!-- End .product -->
                              </div>
                              <!-- End .owl-carousel -->
                           </div>
                           <!-- .End .tab-pane -->
                        </div>
                        <!-- End .tab-content -->
                     </div>
                     <!-- End .bg-lighter -->
                     <div class="mb-5"></div>
                     <!-- End .mb-5 -->
                     <div class="row cat-banner-row electronics">
                        <div class="col-xl-3 col-xxl-4">
                           <div class="cat-banner row no-gutters">
                              <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="background-image: url(assets/images/demos/demo-14/banners/banner-bg-1.jpg);">
                                 <div class="banner-list-content">
                                    <h2><a href="#">Electronics</a></h2>
                                    <ul>
                                       <li><a href="#">Cell Phones</a></li>
                                       <li><a href="#">Computers</a></li>
                                       <li><a href="#">TV & Video</a></li>
                                       <li><a href="#">Smart Home</a></li>
                                       <li><a href="#">Audi</a></li>
                                       <li><a href="#">Home Audio & Theater</a></li>
                                       <li class="list-all-link"><a href="#">See All Departments</a></li>
                                    </ul>
                                 </div>
                                 <!-- End .banner-list-content -->
                              </div>
                              <!-- End .col-sm-6 -->
                              <div class="col-sm-6 col-xl-12 col-xxl-6">
                                 <div class="banner banner-overlay">
                                    <a href="#">
                                    <img src="assets/images/demos/demo-14/banners/banner-5.jpg" alt="Banner img desc">
                                    </a>
                                    <div class="banner-content">
                                       <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4>
                                       <!-- End .banner-subtitle -->
                                       <h3 class="banner-title text-white"><a href="#">Canon EOS <br>Mega Sale <br><span>Up To 20% Off</span></a></h3>
                                       <!-- End .banner-title -->
                                       <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                    </div>
                                    <!-- End .banner-content -->
                                 </div>
                                 <!-- End .banner -->
                              </div>
                              <!-- End .col-sm-6 -->
                           </div>
                           <!-- End .cat-banner -->
                        </div>
                        <!-- End .col-xl-3 -->
                        <div class="col-xl-9 col-xxl-8">
                           <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                              data-owl-options='{
                              "nav": true, 
                              "dots": false,
                              "margin": 20,
                              "loop": false,
                              "responsive": {
                              "0": {
                              "items":2
                              },
                              "480": {
                              "items":2
                              },
                              "768": {
                              "items":3
                              },
                              "992": {
                              "items":4
                              },
                              "1200": {
                              "items":3
                              },
                              "1600": {
                              "items":4
                              }
                              }
                              }'>
							  
							  <?php
                                    require("include/conn.php");//connection file =
                                    
                                    
                                    
                                    $query=mysqli_query($conn,"SELECT * FROM products 
                                    INNER JOIN main_catogories ON 
                                    main_catogories.cat_id = products.cat_id INNER JOIN 
                                    sub_catogory ON products.sub_catid = sub_catogory.sub_cat_id
                                    INNER JOIN third_level_category ON 
                                    products.third_cat_id = third_level_category.third_cat_id
									
									where products.sale > 0 and products.sale<=20
									
									") or
                                    die(mysqli_error($conn));
                                    
                                    $count=mysqli_num_rows($query);
                                    if($count > 0){	
                                    while($fetch=mysqli_fetch_array($query)){
                                    $product_id=$fetch["pro_id"];
                                    $cat_name=$fetch["cat_name"];
                                    $product_random_id=$fetch["product_random_id"];
                                    $product_name=$fetch["pro_name"];
                                    $product_des=$fetch["pro_des"];
                                    $product_price=$fetch["pro_price"];
                                    $product_image=$fetch["pro_image"];
                                    $sale=$fetch["sale"];
                                    ?> 
							  
                              <div class="product text-center">
                                 <figure class="product-media">
                                    <span class="product-label label-top">
									Sale <?php echo $sale."%";?>
									
									</span>
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
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="admin/plugin/product_images/<?php echo $product_image;?>"
                                          alt="<?php echo $product_name;?>" style="height:196px; width:196px;" class="product-image">
                                       </a>
                                       <?php
                                          }//end of while loop of count images
                                          }//end of if statement
                                          
                                          ?>
                                   <div class="product-action-vertical">
                                          <script>
                                             $(document).ready(function(){
                                             $("#add-wishlist-twenty<?php echo $product_id;?>").click(function(){
                                             var wish_id=$("#wish_id<?php echo $product_id;?>").val();
                                                $.ajax({
                                                               type: "POST",
                                                               url: "cart_ajax_add_wish.php",
                                                               data: {wish_id:wish_id},
                                                               success: function(data) {
                                                               $("#wish").html(data);
                                                    
                                             
                                                   },
                                                   error: function(err) {
                                             
                                                 
                                                   }
                                               });
                                             	
                                             });
                                                               });						
                                             	
                                             	
                                          </script>
                                          <input type="hidden" 
										  id="wish_id<?php echo $product_id;?>" 
										  value="<?php echo $product_id;?>" >			
                                          <a href="javascript:void(0);" 
										  id="add-wishlist-twenty<?php echo $product_id;?>" 
                                             class="btn-product-icon btn-wishlist" title="Add to wishlist">
                                          <span>add to wishlist</span></a>
                                        
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          
                                          <script>
                                             $(document).ready(function(){
                                             
                                                               $("#add-cart-twenty<?php echo $product_id;?>").click(function(){	
                                                                  var product_id=$("#product_id<?php echo $product_id;?>").val();
                                                   var quantity=$("#quantity<?php echo $product_id;?>").val();
                                                       $.ajax({
                                                   type: "POST",
                                                   url: "cart_ajax_add_cart.php",
                                                   data: {product_id:product_id,quantity:quantity},
                                               
                                                   success: function(data) {
                                                  
                                             $("#cart").html(data);
                                                    
                                             
                                                   },
                                                   error: function(err) {
                                             
                                                 
                                                   }
                                               });
                                                          						 
                                             });
                                                 
                                             });
                                          </script>		
                                          <input type="hidden" id="product_id<?php echo $product_id;?>" 
                                             value="<?php echo $product_id;?>" >
                                          <input type="hidden" id="quantity<?php echo $product_id;?>" value="1">
                                          <button id="add-cart-twenty<?php echo $product_id;?>" href="javascript:void(0);" 
                                             class="btn-product btn-cart" 
                                             title="Add to cart">
                                          <span >add to cart</span></button>
                                       </div>
                                       <!-- End .product-action -->

                                    <!-- End .product-action -->
                                 </figure>
                                 <!-- End .product-media -->
                                 <div class="product-body">
                                    <div class="product-cat">
                                       <a href="#"><?php echo $cat_name;?></a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">
									<?php echo $product_name;?></a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                <?php 
                                             $set=mysqli_query($conn,"SELECT * FROM set_currency
                                             ") or die(mysqli_error($conn));//set currency query 
                                             $count_currencies=mysqli_num_rows($set);//count of curreny row 
                                             if($count_currencies > 0){//if count  greater than 0 
                                             
                                             	
                                             	while($fetch=mysqli_fetch_array($set)){
                                             	$currency_id=$fetch["currency_id"];//currency_id  
                                             	echo $currency_name=$fetch["currecy_sign"];//currency sign 
                                             	
                                             	}
                                             }
                                             ?>
                                          <?php
                                             echo $product_price;
                                             ?>
                                    </div>
                                    <!-- End .product-price -->
                                    <div class="ratings-container">
                                       <div class="ratings">
                                          <div class="ratings-val" style="width: 100%;"></div>
                                          <!-- End .ratings-val -->
                                       </div>
                                       <!-- End .ratings -->
                                       <span class="ratings-text">( 4 Reviews )</span>
                                    </div>
                                    <!-- End .rating-container -->
                                 </div>
                                 <!-- End .product-body -->
                              </div>
                              <!-- End .product -->
							  
							  <?php
									}
									
									}
							  
							  ?>
							  
							  
                                                         </div>
                           <!-- End .owl-carousel -->
                        </div>
                        <!-- End .col-xl-9 -->
                     </div>
                     <!-- End .row cat-banner-row -->
                     <div class="mb-3"></div>
                     <!-- End .mb-3 -->
                     <div class="row cat-banner-row furniture">
                        <div class="col-xl-3 col-xxl-4">
                           <div class="cat-banner row no-gutters">
                              <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="background-image: url(assets/images/demos/demo-14/banners/banner-bg-2.jpg);">
                                 <div class="banner-list-content">
                                    <h2><a href="#">Furniture </a></h2>
                                    <ul>
                                       <li><a href="#">Bedroom </a></li>
                                       <li><a href="#">Office</a></li>
                                       <li><a href="#">Living Room</a></li>
                                       <li><a href="#">Kitchen & Dining</a></li>
                                       <li><a href="#">Decoration</a></li>
                                       <li><a href="#">Outdoor</a></li>
                                       <li class="list-all-link"><a href="#">See All Departments</a></li>
                                    </ul>
                                 </div>
                                 <!-- End .banner-list-content -->
                              </div>
                              <!-- End .col-sm-6 -->
                              <div class="col-sm-6 col-xl-12 col-xxl-6">
                                 <div class="banner banner-overlay">
                                    <a href="#">
                                    <img src="assets/images/demos/demo-14/banners/banner-6.jpg" alt="Banner img desc">
                                    </a>
                                    <div class="banner-content">
                                       <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4>
                                       <!-- End .banner-subtitle -->
                                       <h3 class="banner-title text-white"><a href="#">Furniture Sets <br><span>Up To 30% Off</span></a></h3>
                                       <!-- End .banner-title -->
                                       <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                    </div>
                                    <!-- End .banner-content -->
                                 </div>
                                 <!-- End .banner -->
                              </div>
                              <!-- End .col-sm-6 -->
                           </div>
                           <!-- End .cat-banner -->
                        </div>
                        <!-- End .col-xl-3 -->
                        <div class="col-xl-9 col-xxl-8">
                           <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                              data-owl-options='{
                              "nav": true, 
                              "dots": false,
                              "margin": 20,
                              "loop": false,
                              "responsive": {
                              "0": {
                              "items":2
                              },
                              "480": {
                              "items":2
                              },
                              "768": {
                              "items":3
                              },
                              "992": {
                              "items":4
                              },
                              "1200": {
                              "items":3
                              },
                              "1600": {
                              "items":4
                              }
                              }
                              }'>
                             <?php
                                    require("include/conn.php");//connection file =
                                    
                                    
                                    
                                    $query=mysqli_query($conn,"SELECT * FROM products 
                                    INNER JOIN main_catogories ON 
                                    main_catogories.cat_id = products.cat_id INNER JOIN 
                                    sub_catogory ON products.sub_catid = sub_catogory.sub_cat_id
                                    INNER JOIN third_level_category ON 
                                    products.third_cat_id = third_level_category.third_cat_id
									
									where products.sale > 20 and products.sale<=30
									
									") or
                                    die(mysqli_error($conn));
                                    
                                    $count=mysqli_num_rows($query);
                                    if($count > 0){	
                                    while($fetch=mysqli_fetch_array($query)){
                                    $product_id=$fetch["pro_id"];
                                    $cat_name=$fetch["cat_name"];
                                    $product_random_id=$fetch["product_random_id"];
                                    $product_name=$fetch["pro_name"];
                                    $product_des=$fetch["pro_des"];
                                    $product_price=$fetch["pro_price"];
                                    $product_image=$fetch["pro_image"];
                                    $sale=$fetch["sale"];
                                    ?> 
							  
                              <div class="product text-center">
                                 <figure class="product-media">
                                    <span class="product-label label-top">
									Sale <?php echo $sale."%";?>
									
									</span>
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
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="admin/plugin/product_images/<?php echo $product_image;?>"
                                          alt="<?php echo $product_name;?>" style="height:196px; width:196px;" class="product-image">
                                       </a>
                                       <?php
                                          }//end of while loop of count images
                                          }//end of if statement
                                          
                                          ?>
                                   <div class="product-action-vertical">
                                          <script>
                                             $(document).ready(function(){
                                             $("#add-wishlist-thirty<?php echo $product_id;?>").click(function(){
                                             var wish_id=$("#wish_id<?php echo $product_id;?>").val();
                                                $.ajax({
                                                               type: "POST",
                                                               url: "cart_ajax_add_wish.php",
                                                               data: {wish_id:wish_id},
                                                               success: function(data) {
                                                               $("#wish").html(data);
                                                    
                                             
                                                   },
                                                   error: function(err) {
                                             
                                                 
                                                   }
                                               });
                                             	
                                             });
                                                               });						
                                             	
                                             	
                                          </script>
                                          <input type="hidden" 
										  id="wish_id<?php echo $product_id;?>" 
										  value="<?php echo $product_id;?>" >			
                                          <a href="javascript:void(0);" 
										  id="add-wishlist-thirty<?php echo $product_id;?>" 
                                             class="btn-product-icon btn-wishlist" title="Add to wishlist">
                                          <span>add to wishlist</span></a>
                                        
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          
                                          <script>
                                             $(document).ready(function(){
                                             
                                                               $("#add-cart-thirty<?php echo $product_id;?>").click(function(){	
                                                                  var product_id=$("#product_id<?php echo $product_id;?>").val();
                                                   var quantity=$("#quantity<?php echo $product_id;?>").val();
                                                       $.ajax({
                                                   type: "POST",
                                                   url: "cart_ajax_add_cart.php",
                                                   data: {product_id:product_id,quantity:quantity},
                                               
                                                   success: function(data) {
                                                  
                                             $("#cart").html(data);
                                                    
                                             
                                                   },
                                                   error: function(err) {
                                             
                                                 
                                                   }
                                               });
                                                          						 
                                             });
                                                 
                                             });
                                          </script>		
                                          <input type="hidden" id="product_id<?php echo $product_id;?>" 
                                             value="<?php echo $product_id;?>" >
                                          <input type="hidden" id="quantity<?php echo $product_id;?>" value="1">
                                          <button id="add-cart-thirty<?php echo $product_id;?>" href="javascript:void(0);" 
                                             class="btn-product btn-cart" 
                                             title="Add to cart">
                                          <span >add to cart</span></button>
                                       </div>
                                       <!-- End .product-action -->

                                    <!-- End .product-action -->
                                 </figure>
                                 <!-- End .product-media -->
                                 <div class="product-body">
                                    <div class="product-cat">
                                       <a href="#"><?php echo $cat_name;?></a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">
									<?php echo $product_name;?></a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                <?php 
                                             $set=mysqli_query($conn,"SELECT * FROM set_currency
                                             ") or die(mysqli_error($conn));//set currency query 
                                             $count_currencies=mysqli_num_rows($set);//count of curreny row 
                                             if($count_currencies > 0){//if count  greater than 0 
                                             
                                             	
                                             	while($fetch=mysqli_fetch_array($set)){
                                             	$currency_id=$fetch["currency_id"];//currency_id  
                                             	echo $currency_name=$fetch["currecy_sign"];//currency sign 
                                             	
                                             	}
                                             }
                                             ?>
                                          <?php
                                             echo $product_price;
                                             ?>
                                    </div>
                                    <!-- End .product-price -->
                                    <div class="ratings-container">
                                       <div class="ratings">
                                          <div class="ratings-val" style="width: 100%;"></div>
                                          <!-- End .ratings-val -->
                                       </div>
                                       <!-- End .ratings -->
                                       <span class="ratings-text">( 4 Reviews )</span>
                                    </div>
                                    <!-- End .rating-container -->
                                 </div>
                                 <!-- End .product-body -->
                              </div>
                              <!-- End .product -->
							  
							  <?php
									}
									
									}
							  
							  ?> <!-- End .product -->
                              
                           </div>
                           <!-- End .owl-carousel -->
                        </div>
                        <!-- End .col-xl-9 -->
                     </div>
                     <!-- End .row cat-banner-row -->
                     <div class="mb-3"></div>
                     <!-- End .mb-3 -->
                     <div class="row">
                        <div class="col-md-6">
                           <div class="banner banner-overlay">
                              <a href="#">
                              <img src="assets/images/demos/demo-14/banners/banner-7.jpg" alt="Banner img desc">
                              </a>
                              <div class="banner-content">
                                 <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Spring Sale is Coming</a></h4>
                                 <!-- End .banner-subtitle -->
                                 <h3 class="banner-title text-white"><a href="#">Floral T-shirts and Vests  <br><span>Spring Sale</span></a></h3>
                                 <!-- End .banner-title -->
                                 <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                              </div>
                              <!-- End .banner-content -->
                           </div>
                           <!-- End .banner -->
                        </div>
                        <!-- End .col-md-6 -->
                        <div class="col-md-6">
                           <div class="banner banner-overlay">
                              <a href="#">
                              <img src="assets/images/demos/demo-14/banners/banner-8.jpg" alt="Banner img desc">
                              </a>
                              <div class="banner-content">
                                 <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="#">Amazing Value</a></h4>
                                 <!-- End .banner-subtitle -->
                                 <h3 class="banner-title text-white"><a href="#">Upgrade and Save <br><span>On The Latest Apple Devices</span></a></h3>
                                 <!-- End .banner-title -->
                                 <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                              </div>
                              <!-- End .banner-content -->
                           </div>
                           <!-- End .banner banner-overlay -->
                        </div>
                        <!-- End .col-md-6 -->
                     </div>
                     <!-- End .row -->
                     <div class="mb-3"></div>
                     <!-- End .mb-3 -->
                     <div class="row cat-banner-row clothing">
                        <div class="col-xl-3 col-xxl-4">
                           <div class="cat-banner row no-gutters">
                              <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="background-image: url(assets/images/demos/demo-14/banners/banner-bg-3.jpg);">
                                 <div class="banner-list-content">
                                    <h2><a href="#">Clothing  </a></h2>
                                    <ul>
                                       <li><a href="#">Best Sellers</a></li>
                                       <li><a href="#">Trending</a></li>
                                       <li><a href="#">Women</a></li>
                                       <li><a href="#">Man</a></li>
                                       <li><a href="#">Shoes</a></li>
                                       <li><a href="#">Accessories</a></li>
                                       <li class="list-all-link"><a href="#">See All Departments</a></li>
                                    </ul>
                                 </div>
                                 <!-- End .banner-list-content -->
                              </div>
                              <!-- End .col-sm-6 -->
                              <div class="col-sm-6 col-xl-12 col-xxl-6">
                                 <div class="banner banner-overlay">
                                    <a href="#">
                                    <img src="assets/images/demos/demo-14/banners/banner-9.jpg" alt="Banner img desc">
                                    </a>
                                    <div class="banner-content">
                                       <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4>
                                       <!-- End .banner-subtitle -->
                                       <h3 class="banner-title text-white"><a href="#">Clearance <br>Outerwear<br><span>Up To 70% Off</span></a></h3>
                                       <!-- End .banner-title -->
                                       <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                    </div>
                                    <!-- End .banner-content -->
                                 </div>
                                 <!-- End .banner -->
                              </div>
                              <!-- End .col-sm-6 -->
                           </div>
                           <!-- End .cat-banner -->
                        </div>
                        <!-- End .col-xl-3 -->
                        <div class="col-xl-9 col-xxl-8">
                           <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                              data-owl-options='{
                              "nav": true, 
                              "dots": false,
                              "margin": 20,
                              "loop": false,
                              "responsive": {
                              "0": {
                              "items":2
                              },
                              "480": {
                              "items":2
                              },
                              "768": {
                              "items":3
                              },
                              "992": {
                              "items":4
                              },
                              "1200": {
                              "items":3
                              },
                              "1600": {
                              "items":4
                              }
                              }
                              }'>
                              <?php
                                    require("include/conn.php");//connection file =
                                    
                                    
                                    
                                    $query=mysqli_query($conn,"SELECT * FROM products 
                                    INNER JOIN main_catogories ON 
                                    main_catogories.cat_id = products.cat_id INNER JOIN 
                                    sub_catogory ON products.sub_catid = sub_catogory.sub_cat_id
                                    INNER JOIN third_level_category ON 
                                    products.third_cat_id = third_level_category.third_cat_id
									
									where  products.sale>=70
									
									") or
                                    die(mysqli_error($conn));
                                    
                                    $count=mysqli_num_rows($query);
                                    if($count > 0){	
                                    while($fetch=mysqli_fetch_array($query)){
                                    $product_id=$fetch["pro_id"];
                                    $cat_name=$fetch["cat_name"];
                                    $product_random_id=$fetch["product_random_id"];
                                    $product_name=$fetch["pro_name"];
                                    $product_des=$fetch["pro_des"];
                                    $product_price=$fetch["pro_price"];
                                    $product_image=$fetch["pro_image"];
                                    $sale=$fetch["sale"];
                                    ?> 
							  
                              <div class="product text-center">
                                 <figure class="product-media">
                                    <span class="product-label label-top">
									Sale <?php echo $sale."%";?>
									
									</span>
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
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="admin/plugin/product_images/<?php echo $product_image;?>"
                                          alt="<?php echo $product_name;?>" style="height:196px; width:196px;" class="product-image">
                                       </a>
                                       <?php
                                          }//end of while loop of count images
                                          }//end of if statement
                                          
                                          ?>
                                   <div class="product-action-vertical">
                                          <script>
                                             $(document).ready(function(){
                                             $("#add-wishlist-thirty<?php echo $product_id;?>").click(function(){
                                             var wish_id=$("#wish_id<?php echo $product_id;?>").val();
                                                $.ajax({
                                                               type: "POST",
                                                               url: "cart_ajax_add_wish.php",
                                                               data: {wish_id:wish_id},
                                                               success: function(data) {
                                                               $("#wish").html(data);
                                                    
                                             
                                                   },
                                                   error: function(err) {
                                             
                                                 
                                                   }
                                               });
                                             	
                                             });
                                                               });						
                                             	
                                             	
                                          </script>
                                          <input type="hidden" 
										  id="wish_id<?php echo $product_id;?>" 
										  value="<?php echo $product_id;?>" >			
                                          <a href="javascript:void(0);" 
										  id="add-wishlist-thirty<?php echo $product_id;?>" 
                                             class="btn-product-icon btn-wishlist" title="Add to wishlist">
                                          <span>add to wishlist</span></a>
                                        
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          
                                          <script>
                                             $(document).ready(function(){
                                             
                                                               $("#add-cart-thirty<?php echo $product_id;?>").click(function(){	
                                                                  var product_id=$("#product_id<?php echo $product_id;?>").val();
                                                   var quantity=$("#quantity<?php echo $product_id;?>").val();
                                                       $.ajax({
                                                   type: "POST",
                                                   url: "cart_ajax_add_cart.php",
                                                   data: {product_id:product_id,quantity:quantity},
                                               
                                                   success: function(data) {
                                                  
                                             $("#cart").html(data);
                                                    
                                             
                                                   },
                                                   error: function(err) {
                                             
                                                 
                                                   }
                                               });
                                                          						 
                                             });
                                                 
                                             });
                                          </script>		
                                          <input type="hidden" id="product_id<?php echo $product_id;?>" 
                                             value="<?php echo $product_id;?>" >
                                          <input type="hidden" id="quantity<?php echo $product_id;?>" value="1">
                                          <button id="add-cart-thirty<?php echo $product_id;?>" href="javascript:void(0);" 
                                             class="btn-product btn-cart" 
                                             title="Add to cart">
                                          <span >add to cart</span></button>
                                       </div>
                                       <!-- End .product-action -->

                                    <!-- End .product-action -->
                                 </figure>
                                 <!-- End .product-media -->
                                 <div class="product-body">
                                    <div class="product-cat">
                                       <a href="#"><?php echo $cat_name;?></a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">
									<?php echo $product_name;?></a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                <?php 
                                             $set=mysqli_query($conn,"SELECT * FROM set_currency
                                             ") or die(mysqli_error($conn));//set currency query 
                                             $count_currencies=mysqli_num_rows($set);//count of curreny row 
                                             if($count_currencies > 0){//if count  greater than 0 
                                             
                                             	
                                             	while($fetch=mysqli_fetch_array($set)){
                                             	$currency_id=$fetch["currency_id"];//currency_id  
                                             	echo $currency_name=$fetch["currecy_sign"];//currency sign 
                                             	
                                             	}
                                             }
                                             ?>
                                          <?php
                                             echo $product_price;
                                             ?>
                                    </div>
                                    <!-- End .product-price -->
                                    <div class="ratings-container">
                                       <div class="ratings">
                                          <div class="ratings-val" style="width: 100%;"></div>
                                          <!-- End .ratings-val -->
                                       </div>
                                       <!-- End .ratings -->
                                       <span class="ratings-text">( 4 Reviews )</span>
                                    </div>
                                    <!-- End .rating-container -->
                                 </div>
                                 <!-- End .product-body -->
                              </div>
                              <!-- End .product -->
							  
							  <?php
									}
									
									}
							  
							  ?> <!-- End .product -->
                           </div>
                           <!-- End .owl-carousel -->
                        </div>
                        <!-- End .col-xl-9 -->
                     </div>
                     <!-- End .row cat-banner-row -->
                     <div class="mb-3"></div>
                     <!-- End .mb-3 -->
                     <div class="row cat-banner-row cooking">
                        <div class="col-xl-3 col-xxl-4">
                           <div class="cat-banner row no-gutters">
                              <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="background-image: url(assets/images/demos/demo-14/banners/banner-bg-4.jpg);">
                                 <div class="banner-list-content">
                                    <h2><a href="#">Cooking </a></h2>
                                    <ul>
                                       <li><a href="#">Cookware</a></li>
                                       <li><a href="#">Dinnerware</a></li>
                                       <li><a href="#">Cups</a></li>
                                       <li><a href="#">Microwaves</a></li>
                                       <li><a href="#">Toasters</a></li>
                                       <li><a href="#">Coffee Makers</a></li>
                                       <li class="list-all-link"><a href="#">See All Departments</a></li>
                                    </ul>
                                 </div>
                                 <!-- End .banner-list-content -->
                              </div>
                              <!-- End .col-sm-6 -->
                              <div class="col-sm-6 col-xl-12 col-xxl-6">
                                 <div class="banner banner-overlay">
                                    <a href="#">
                                    <img src="assets/images/demos/demo-14/banners/banner-10.jpg" alt="Banner img desc">
                                    </a>
                                    <div class="banner-content">
                                       <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4>
                                       <!-- End .banner-subtitle -->
                                       <h3 class="banner-title text-white"><a href="#">Cooking <br>Appliances <br><span>Up To 30% Off</span></a></h3>
                                       <!-- End .banner-title -->
                                       <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                    </div>
                                    <!-- End .banner-content -->
                                 </div>
                                 <!-- End .banner -->
                              </div>
                              <!-- End .col-sm-6 -->
                           </div>
                           <!-- End .cat-banner -->
                        </div>
                        <!-- End .col-xl-3 -->
                        <div class="col-xl-9 col-xxl-8">
                           <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" 
                              data-owl-options='{
                              "nav": true, 
                              "dots": false,
                              "margin": 20,
                              "loop": false,
                              "responsive": {
                              "0": {
                              "items":2
                              },
                              "480": {
                              "items":2
                              },
                              "768": {
                              "items":3
                              },
                              "992": {
                              "items":4
                              },
                              "1200": {
                              "items":3
                              },
                              "1600": {
                              "items":4
                              }
                              }
                              }'>
                             <?php
                                    require("include/conn.php");//connection file =
                                    
                                    
                                    
                                    $query=mysqli_query($conn,"SELECT * FROM products 
                                    INNER JOIN main_catogories ON 
                                    main_catogories.cat_id = products.cat_id INNER JOIN 
                                    sub_catogory ON products.sub_catid = sub_catogory.sub_cat_id
                                    INNER JOIN third_level_category ON 
                                    products.third_cat_id = third_level_category.third_cat_id
									
									where products.sale > 20 and products.sale<=30
									
									") or
                                    die(mysqli_error($conn));
                                    
                                    $count=mysqli_num_rows($query);
                                    if($count > 0){	
                                    while($fetch=mysqli_fetch_array($query)){
                                    $product_id=$fetch["pro_id"];
                                    $cat_name=$fetch["cat_name"];
                                    $product_random_id=$fetch["product_random_id"];
                                    $product_name=$fetch["pro_name"];
                                    $product_des=$fetch["pro_des"];
                                    $product_price=$fetch["pro_price"];
                                    $product_image=$fetch["pro_image"];
                                    $sale=$fetch["sale"];
                                    ?> 
							  
                              <div class="product text-center">
                                 <figure class="product-media">
                                    <span class="product-label label-top">
									Sale <?php echo $sale."%";?>
									
									</span>
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
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="admin/plugin/product_images/<?php echo $product_image;?>"
                                          alt="<?php echo $product_name;?>" style="height:196px; width:196px;" class="product-image">
                                       </a>
                                       <?php
                                          }//end of while loop of count images
                                          }//end of if statement
                                          
                                          ?>
                                   <div class="product-action-vertical">
                                          <script>
                                             $(document).ready(function(){
                                             $("#add-wishlist-thirty-second<?php echo $product_id;?>").click(function(){
                                             var wish_id=$("#wish_id<?php echo $product_id;?>").val();
                                                $.ajax({
                                                               type: "POST",
                                                               url: "cart_ajax_add_wish.php",
                                                               data: {wish_id:wish_id},
                                                               success: function(data) {
                                                               $("#wish").html(data);
                                                    
                                             
                                                   },
                                                   error: function(err) {
                                             
                                                 
                                                   }
                                               });
                                             	
                                             });
                                                               });						
                                             	
                                             	
                                          </script>
                                          <input type="hidden" 
										  id="wish_id<?php echo $product_id;?>" 
										  value="<?php echo $product_id;?>" >			
                                          <a href="javascript:void(0);" 
										  id="add-wishlist-thirty-second<?php echo $product_id;?>" 
                                             class="btn-product-icon btn-wishlist" title="Add to wishlist">
                                          <span>add to wishlist</span></a>
                                        
                                       </div>
                                       <!-- End .product-action-vertical -->
                                       <div class="product-action">
                                          
                                          <script>
                                             $(document).ready(function(){
                                             
                                                               $("#add-cart-thirty-second<?php echo $product_id;?>").click(function(){	
                                                                  var product_id=$("#product_id<?php echo $product_id;?>").val();
                                                   var quantity=$("#quantity<?php echo $product_id;?>").val();
                                                       $.ajax({
                                                   type: "POST",
                                                   url: "cart_ajax_add_cart.php",
                                                   data: {product_id:product_id,quantity:quantity},
                                               
                                                   success: function(data) {
                                                  
                                             $("#cart").html(data);
                                                    
                                             
                                                   },
                                                   error: function(err) {
                                             
                                                 
                                                   }
                                               });
                                                          						 
                                             });
                                                 
                                             });
                                          </script>		
                                          <input type="hidden" id="product_id<?php echo $product_id;?>" 
                                             value="<?php echo $product_id;?>" >
                                          <input type="hidden" id="quantity<?php echo $product_id;?>" value="1">
                                          <button id="add-cart-thirty-second<?php echo $product_id;?>" href="javascript:void(0);" 
                                             class="btn-product btn-cart" 
                                             title="Add to cart">
                                          <span >add to cart</span></button>
                                       </div>
                                       <!-- End .product-action -->

                                    <!-- End .product-action -->
                                 </figure>
                                 <!-- End .product-media -->
                                 <div class="product-body">
                                    <div class="product-cat">
                                       <a href="#"><?php echo $cat_name;?></a>
                                    </div>
                                    <!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">
									<?php echo $product_name;?></a></h3>
                                    <!-- End .product-title -->
                                    <div class="product-price">
                                <?php 
                                             $set=mysqli_query($conn,"SELECT * FROM set_currency
                                             ") or die(mysqli_error($conn));//set currency query 
                                             $count_currencies=mysqli_num_rows($set);//count of curreny row 
                                             if($count_currencies > 0){//if count  greater than 0 
                                             
                                             	
                                             	while($fetch=mysqli_fetch_array($set)){
                                             	$currency_id=$fetch["currency_id"];//currency_id  
                                             	echo $currency_name=$fetch["currecy_sign"];//currency sign 
                                             	
                                             	}
                                             }
                                             ?>
                                          <?php
                                             echo $product_price;
                                             ?>
                                    </div>
                                    <!-- End .product-price -->
                                    <div class="ratings-container">
                                       <div class="ratings">
                                          <div class="ratings-val" style="width: 100%;"></div>
                                          <!-- End .ratings-val -->
                                       </div>
                                       <!-- End .ratings -->
                                       <span class="ratings-text">( 4 Reviews )</span>
                                    </div>
                                    <!-- End .rating-container -->
                                 </div>
                                 <!-- End .product-body -->
                              </div>
                              <!-- End .product -->
							  
							  <?php
									}
									
									}
							  
							  ?> <!-- End .product --> <!-- End .product -->
                              
                           </div>
                           <!-- End .owl-carousel -->
                        </div>
                        <!-- End .col-xl-9 -->
                     </div>
                     <!-- End .row cat-banner-row -->
                     <div class="mb-3"></div>
                     <!-- End .mb-3 -->
                     <div class="icon-boxes-container">
                        <div class="container-fluid">
                           <div class="row">
                              <div class="col-sm-6 col-lg-3">
                                 <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                    <i class="icon-rocket"></i>
                                    </span>
                                    <div class="icon-box-content">
                                       <h3 class="icon-box-title">Free Shipping</h3>
                                       <!-- End .icon-box-title -->
                                       <p>Orders $50 or more</p>
                                    </div>
                                    <!-- End .icon-box-content -->
                                 </div>
                                 <!-- End .icon-box -->
                              </div>
                              <!-- End .col-sm-6 col-lg-3 -->
                              <div class="col-sm-6 col-lg-3">
                                 <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                    <i class="icon-rotate-left"></i>
                                    </span>
                                    <div class="icon-box-content">
                                       <h3 class="icon-box-title">Free Returns</h3>
                                       <!-- End .icon-box-title -->
                                       <p>Within 30 days</p>
                                    </div>
                                    <!-- End .icon-box-content -->
                                 </div>
                                 <!-- End .icon-box -->
                              </div>
                              <!-- End .col-sm-6 col-lg-3 -->
                              <div class="col-sm-6 col-lg-3">
                                 <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                    <i class="icon-info-circle"></i>
                                    </span>
                                    <div class="icon-box-content">
                                       <h3 class="icon-box-title">Get 20% Off 1 Item</h3>
                                       <!-- End .icon-box-title -->
                                       <p>When you sign up</p>
                                    </div>
                                    <!-- End .icon-box-content -->
                                 </div>
                                 <!-- End .icon-box -->
                              </div>
                              <!-- End .col-sm-6 col-lg-3 -->
                              <div class="col-sm-6 col-lg-3">
                                 <div class="icon-box icon-box-side">
                                    <span class="icon-box-icon text-dark">
                                    <i class="icon-life-ring"></i>
                                    </span>
                                    <div class="icon-box-content">
                                       <h3 class="icon-box-title">We Support</h3>
                                       <!-- End .icon-box-title -->
                                       <p>24/7 amazing services</p>
                                    </div>
                                    <!-- End .icon-box-content -->
                                 </div>
                                 <!-- End .icon-box -->
                              </div>
                              <!-- End .col-sm-6 col-lg-3 -->
                           </div>
                           <!-- End .row -->
                        </div>
                        <!-- End .container-fluid -->
                     </div>
                     <!-- End .icon-boxes-container -->
                     <div class="mb-5"></div>
                     <!-- End .mb-5 -->
                  </div>
                  <!-- End .col-lg-9 col-xxl-10 -->
                  <aside class="col-xl-3 col-xxl-2 order-xl-first">
                     <div class="sidebar sidebar-home">
                        <div class="row">
                           <div class="col-sm-6 col-xl-12">
                              <div class="widget widget-banner">
                                 <div class="banner banner-overlay">
                                    <a href="#">
                                    <img src="assets/images/demos/demo-14/banners/banner-11.jpg" alt="Banner img desc">
                                    </a>
                                    <div class="banner-content banner-content-top banner-content-right text-right">
                                       <h3 class="banner-title text-white"><a href="#">Maximum Comfort <span>Sofas -20% Off</span></a></h3>
                                       <!-- End .banner-title -->
                                       <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                    </div>
                                    <!-- End .banner-content -->
                                 </div>
                                 <!-- End .banner banner-overlay -->
                              </div>
                              <!-- End .widget widget-banner -->
                           </div>
                           <!-- End .col-sm-6 col-xl-12 -->
                           <div class="col-sm-6 col-xl-12 mb-2">
                              <div class="widget widget-products">
                                 <h4 class="widget-title"><span>Bestsellers</span></h4>
                                 <!-- End .widget-title -->
                                 <div class="products">
<?php
                                    require("include/conn.php");//connection file =
                                    
                                    
                                    
                                    $query=mysqli_query($conn,"SELECT * FROM products 
                                    INNER JOIN main_catogories ON 
                                    main_catogories.cat_id = products.cat_id INNER JOIN 
                                    sub_catogory ON products.sub_catid = sub_catogory.sub_cat_id
                                    INNER JOIN third_level_category ON 
                                    products.third_cat_id = third_level_category.third_cat_id
									
									where products.role='bestseller'
									
									") or
                                    die(mysqli_error($conn));
                                    
                                    $count=mysqli_num_rows($query);
                                    if($count > 0){	
                                    while($fetch=mysqli_fetch_array($query)){
                                    $product_id=$fetch["pro_id"];
                                    $cat_name=$fetch["cat_name"];
                                    $product_random_id=$fetch["product_random_id"];
                                    $product_name=$fetch["pro_name"];
                                    $product_des=$fetch["pro_des"];
                                    $product_price=$fetch["pro_price"];
                                    $product_image=$fetch["pro_image"];
                                    $sale=$fetch["sale"];
                                    ?>
								   <div class="product product-sm">
                                       <figure class="product-media">
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
                                       <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                       <img src="admin/plugin/product_images/<?php echo $product_image;?>"
                                          alt="<?php echo $product_name;?>" style="height:70px; width:70px;" class="product-image">
                                       </a>
                                       <?php
                                          }//end of while loop of count images
                                          }//end of if statement
                                          
                                          ?>
                                       </figure>
                                       <div class="product-body">
                                          <h5 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">
										  <?php echo $product_name;?>
										  
										  </a></h5>
                                          <!-- End .product-title -->
                                          <div class="product-price">
										   <?php 
                                             $set=mysqli_query($conn,"SELECT * FROM set_currency
                                             ") or die(mysqli_error($conn));//set currency query 
                                             $count_currencies=mysqli_num_rows($set);//count of curreny row 
                                             if($count_currencies > 0){//if count  greater than 0 
                                             
                                             	
                                             	while($fetch=mysqli_fetch_array($set)){
                                             	$currency_id=$fetch["currency_id"];//currency_id  
                                             	echo $currency_name=$fetch["currecy_sign"];//currency sign 
                                             	
                                             	}
                                             }
                                             ?>
                                            <?php echo $product_price;?>
                                          </div>
                                          <!-- End .product-price -->
                                       </div>
                                       <!-- End .product-body -->
                                    </div>
								<?php
									}//
									}//
								
								?>	
                                    <!-- End .product product-sm -->
                                   
                                 </div>
                                 <!-- End .products -->
                              </div>
                              <!-- End .widget widget-products -->
                           </div>
                           <!-- End .col-sm-6 col-xl-12 -->
                           <div class="col-12">
                              <div class="widget widget-deals">
                                 <h4 class="widget-title"><span>Special Offer</span></h4>
                                 <!-- End .widget-title -->
                                 <div class="row">
                                    <div class="col-sm-6 col-xl-12">
                                       <div class="product text-center">
                                          <figure class="product-media">
                                             <span class="product-label label-sale">Deal of the week</span>
                                             <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                             <img src="assets/images/demos/demo-14/products/deals/product-1.jpg" alt="Product image" class="product-image">
                                             </a>
                                             <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                             </div>
                                             <!-- End .product-action-vertical -->
                                             <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                             </div>
                                             <!-- End .product-action -->
                                          </figure>
                                          <!-- End .product-media -->
                                          <div class="product-body">
                                             <div class="product-cat">
                                                <a href="#">Audio</a>
                                             </div>
                                             <!-- End .product-cat -->
                                             <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Bose SoundLink Micro speaker</a></h3>
                                             <!-- End .product-title -->
                                             <div class="product-price">
                                                <span class="new-price">$99.99</span>
                                                <span class="old-price">Was $110.99</span>
                                             </div>
                                             <!-- End .product-price -->
                                             <div class="ratings-container">
                                                <div class="ratings">
                                                   <div class="ratings-val" style="width: 100%;"></div>
                                                   <!-- End .ratings-val -->
                                                </div>
                                                <!-- End .ratings -->
                                                <span class="ratings-text">( 4 Reviews )</span>
                                             </div>
                                             <!-- End .rating-container -->
                                             <div class="product-nav product-nav-dots">
                                                <a href="#" class="active" style="background: #f3815f;"><span class="sr-only">Color name</span></a>
                                                <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                             </div>
                                             <!-- End .product-nav -->
                                          </div>
                                          <!-- End .product-body -->
                                          <div class="product-countdown" data-until="+44h" data-relative="true" data-labels-short="true"></div>
                                          <!-- End .product-countdown -->
                                       </div>
                                       <!-- End .product -->
                                    </div>
                                    <!-- End .col-sm-6 col-xl-12 -->
                                    <div class="col-sm-6 col-xl-12">
                                       <div class="product text-center">
                                          <figure class="product-media">
                                             <span class="product-label label-sale">Deal of the week</span>
                                             <a href="product_detail.php?pro_id=<?php echo $product_id;?>">
                                             <img src="assets/images/demos/demo-14/products/deals/product-2.jpg" alt="Product image" class="product-image">
                                             </a>
                                             <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                             </div>
                                             <!-- End .product-action-vertical -->
                                             <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                             </div>
                                             <!-- End .product-action -->
                                          </figure>
                                          <!-- End .product-media -->
                                          <div class="product-body">
                                             <div class="product-cat">
                                                <a href="#">Cameras</a>
                                             </div>
                                             <!-- End .product-cat -->
                                             <h3 class="product-title"><a href="product_detail.php?pro_id=<?php echo $product_id;?>">GoPro HERO Session Waterproof HD Action Camera</a></h3>
                                             <!-- End .product-title -->
                                             <div class="product-price">
                                                <span class="new-price">$196.99</span>
                                                <span class="old-price">Was $210.99</span>
                                             </div>
                                             <!-- End .product-price -->
                                             <div class="ratings-container">
                                                <div class="ratings">
                                                   <div class="ratings-val" style="width: 100%;"></div>
                                                   <!-- End .ratings-val -->
                                                </div>
                                                <!-- End .ratings -->
                                                <span class="ratings-text">( 19 Reviews )</span>
                                             </div>
                                             <!-- End .rating-container -->
                                          </div>
                                          <!-- End .product-body -->
                                          <div class="product-countdown" data-until="+52h" data-relative="true" data-labels-short="true"></div>
                                          <!-- End .product-countdown -->
                                       </div>
                                       <!-- End .product -->
                                    </div>
                                    <!-- End .col-sm-6 col-xl-12 -->
                                 </div>
                                 <!-- End .row -->
                              </div>
                              <!-- End .widget widget-deals -->
                           </div>
                           <!-- End .col-sm-6 col-lg-xl -->
                           <div class="col-sm-6 col-xl-12">
                              <div class="widget widget-banner">
                                 <div class="banner banner-overlay">
                                    <a href="#">
                                    <img src="assets/images/demos/demo-14/banners/banner-12.jpg" alt="Banner img desc">
                                    </a>
                                    <div class="banner-content banner-content-top">
                                       <h3 class="banner-title text-white"><a href="#">Take Better Photos <br><span>With</span> Canon EOS <br><span>Up To 20% Off</span></a></h3>
                                       <!-- End .banner-title -->
                                       <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                    </div>
                                    <!-- End .banner-content -->
                                 </div>
                                 <!-- End .banner banner-overlay -->
                              </div>
                              <!-- End .widget widget-banner -->
                           </div>
                           <!-- End .col-sm-6 col-lg-12 -->
                           <div class="col-sm-6 col-xl-12">
                              <div class="widget widget-posts">
                                 <h4 class="widget-title"><span>Latest Blog Posts</span></h4>
                                 <!-- End .widget-title -->
                                 <div class="owl-carousel owl-simple" data-toggle="owl" 
                                    data-owl-options='{
                                    "nav":false, 
                                    "dots": true, 
                                    "loop": false,
                                    "autoHeight": true
                                    }'>
                                    <article class="entry">
                                       <figure class="entry-media">
                                          <a href="single.html">
                                          <img src="assets/images/demos/demo-14/blog/post-1.jpg" alt="image desc">
                                          </a>
                                       </figure>
                                       <!-- End .entry-media -->
                                       <div class="entry-body">
                                          <div class="entry-meta">
                                             <a href="#">Nov 22, 2018</a>, 0 Comments
                                          </div>
                                          <!-- End .entry-meta -->
                                          <h5 class="entry-title">
                                             <a href="single.html">Sed adipiscing ornare.</a>
                                          </h5>
                                          <!-- End .entry-title -->
                                          <div class="entry-content">
                                             <p>Lorem ipsum dolor consectetuer adipiscing elit. Phasellus hendrerit. Pelletesque aliquet nibh ...</p>
                                             <a href="single.html" class="read-more">Read More</a>
                                          </div>
                                          <!-- End .entry-content -->
                                       </div>
                                       <!-- End .entry-body -->
                                    </article>
                                    <!-- End .entry -->
                                    <article class="entry">
                                       <figure class="entry-media">
                                          <a href="single.html">
                                          <img src="assets/images/demos/demo-14/blog/post-2.jpg" alt="image desc">
                                          </a>
                                       </figure>
                                       <!-- End .entry-media -->
                                       <div class="entry-body">
                                          <div class="entry-meta">
                                             <a href="#">Nov 22, 2018</a>, 0 Comments
                                          </div>
                                          <!-- End .entry-meta -->
                                          <h5 class="entry-title">
                                             <a href="single.html">Vivamus vestibulum ntulla.</a>
                                          </h5>
                                          <!-- End .entry-title -->
                                          <div class="entry-content">
                                             <p>Phasellus hendrerit. Pelletesque aliquet nibh necurna In nisi neque, aliquet vel, dapibus id ... </p>
                                             <a href="single.html" class="read-more">Read More</a>
                                          </div>
                                          <!-- End .entry-content -->
                                       </div>
                                       <!-- End .entry-body -->
                                    </article>
                                    <!-- End .entry -->
                                    <article class="entry">
                                       <figure class="entry-media">
                                          <a href="single.html">
                                          <img src="assets/images/demos/demo-14/blog/post-3.jpg" alt="image desc">
                                          </a>
                                       </figure>
                                       <!-- End .entry-media -->
                                       <div class="entry-body">
                                          <div class="entry-meta">
                                             <a href="#">Nov 22, 2018</a>, 0 Comments
                                          </div>
                                          <!-- End .entry-meta -->
                                          <h5 class="entry-title">
                                             <a href="single.html">Praesent placerat risus.</a>
                                          </h5>
                                          <!-- End .entry-title -->
                                          <div class="entry-content">
                                             <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc ...</p>
                                             <a href="single.html" class="read-more">Read More</a>
                                          </div>
                                          <!-- End .entry-content -->
                                       </div>
                                       <!-- End .entry-body -->
                                    </article>
                                    <!-- End .entry -->
                                 </div>
                                 <!-- End .owl-carousel -->
                              </div>
                              <!-- End .widget widget-posts -->
                           </div>
                           <!-- End .col-sm-6 col-xl-12 -->
                        </div>
                        <!-- End .row -->
                     </div>
                     <!-- End .sidebar sidebar-home -->
                  </aside>
                  <!-- End .col-lg-3 col-xxl-2 -->
               </div>
               <!-- End .row -->
            </div>
            <!-- End .container-fluid -->
         </main>
         <!-- End .main -->
         <?php
            require("footer.php");
            
            ?>
      </div>
      <!-- End .page-wrapper -->
      <button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>
      <!-- Mobile Menu -->
      <div class="mobile-menu-overlay"></div>
      <!-- End .mobil-menu-overlay -->
      <div class="mobile-menu-container">
         <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="icon-close"></i></span>
            <form action="#" method="get" class="mobile-search">
               <label for="mobile-search" class="sr-only">Search</label>
               <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
               <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
            </form>
            <ul class="nav nav-pills-mobile" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="mobile-menu-link" data-toggle="tab" 
				  href="#mobile-menu-tab" role="tab" aria-controls="mobile-menu-tab" aria-selected="true">Menu</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="mobile-cats-link" data-toggle="tab" href="#mobile-cats-tab" role="tab" aria-controls="mobile-cats-tab" aria-selected="false">Categories</a>
               </li>
            </ul>
            <div class="tab-content">
               <div class="tab-pane fade show active" id="mobile-menu-tab" role="tabpanel" aria-labelledby="mobile-menu-link">
                  <nav class="mobile-nav">
                     <ul class="mobile-menu">
                        <li class="active">
                           <a href="index.html">Home</a>
                           <ul>
                              <li><a href="index-1.html">01 - furniture store</a></li>
                              <li><a href="index-2.html">02 - furniture store</a></li>
                              <li><a href="index-3.html">03 - electronic store</a></li>
                              <li><a href="index-4.html">04 - electronic store</a></li>
                              <li><a href="index-5.html">05 - fashion store</a></li>
                              <li><a href="index-6.html">06 - fashion store</a></li>
                              <li><a href="index-7.html">07 - fashion store</a></li>
                              <li><a href="index-8.html">08 - fashion store</a></li>
                              <li><a href="index-9.html">09 - fashion store</a></li>
                              <li><a href="index-10.html">10 - shoes store</a></li>
                              <li><a href="index-11.html">11 - furniture simple store</a></li>
                              <li><a href="index-12.html">12 - fashion simple store</a></li>
                              <li><a href="index-13.html">13 - market</a></li>
                              <li><a href="index-14.html">14 - market fullwidth</a></li>
                              <li><a href="index-15.html">15 - lookbook 1</a></li>
                              <li><a href="index-16.html">16 - lookbook 2</a></li>
                              <li><a href="index-17.html">17 - fashion store</a></li>
                              <li><a href="index-18.html">18 - fashion store (with sidebar)</a></li>
                              <li><a href="index-19.html">19 - games store</a></li>
                              <li><a href="index-20.html">20 - book store</a></li>
                              <li><a href="index-21.html">21 - sport store</a></li>
                              <li><a href="index-22.html">22 - tools store</a></li>
                              <li><a href="index-23.html">23 - fashion left navigation store</a></li>
                              <li><a href="index-24.html">24 - extreme sport store</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="category.html">Shop</a>
                           <ul>
                              <li><a href="category-list.html">Shop List</a></li>
                              <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                              <li><a href="category.html">Shop Grid 3 Columns</a></li>
                              <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                              <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                              <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                              <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                              <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                              <li><a href="cart.html">Cart</a></li>
                              <li><a href="checkout.html">Checkout</a></li>
                              <li><a href="wishlist.html">Wishlist</a></li>
                              <li><a href="#">Lookbook</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="product_detail.php?pro_id=<?php echo $product_id;?>" class="sf-with-ul">Product</a>
                           <ul>
                              <li><a href="product_detail.php?pro_id=<?php echo $product_id;?>">Default</a></li>
                              <li><a href="product-centered.html">Centered</a></li>
                              <li><a href="product_detail.php?pro_id=<?php echo $product_id;?>"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                              <li><a href="product-gallery.html">Gallery</a></li>
                              <li><a href="product-sticky.html">Sticky Info</a></li>
                              <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                              <li><a href="product-fullwidth.html">Full Width</a></li>
                              <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="#">Pages</a>
                           <ul>
                              <li>
                                 <a href="about.html">About</a>
                                 <ul>
                                    <li><a href="about.html">About 01</a></li>
                                    <li><a href="about-2.html">About 02</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="contact.html">Contact</a>
                                 <ul>
                                    <li><a href="contact.html">Contact 01</a></li>
                                    <li><a href="contact-2.html">Contact 02</a></li>
                                 </ul>
                              </li>
                              <li><a href="login.html">Login</a></li>
                              <li><a href="faq.html">FAQs</a></li>
                              <li><a href="404.html">Error 404</a></li>
                              <li><a href="coming-soon.html">Coming Soon</a></li>
                           </ul>
                        </li>
                        <li>
                           <a href="blog.html">Blog</a>
                           <ul>
                              <li><a href="blog.html">Classic</a></li>
                              <li><a href="blog-listing.html">Listing</a></li>
                              <li>
                                 <a href="#">Grid</a>
                                 <ul>
                                    <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                    <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                    <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                    <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="#">Masonry</a>
                                 <ul>
                                    <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                    <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                    <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                    <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="#">Mask</a>
                                 <ul>
                                    <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                    <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                 </ul>
                              </li>
                              <li>
                                 <a href="#">Single Post</a>
                                 <ul>
                                    <li><a href="single.html">Default with sidebar</a></li>
                                    <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                    <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                 </ul>
                              </li>
                           </ul>
                        </li>
                        <li>
                           <a href="elements-list.html">Elements</a>
                           <ul>
                              <li><a href="elements-products.html">Products</a></li>
                              <li><a href="elements-typography.html">Typography</a></li>
                              <li><a href="elements-titles.html">Titles</a></li>
                              <li><a href="elements-banners.html">Banners</a></li>
                              <li><a href="elements-product-category.html">Product Category</a></li>
                              <li><a href="elements-video-banners.html">Video Banners</a></li>
                              <li><a href="elements-buttons.html">Buttons</a></li>
                              <li><a href="elements-accordions.html">Accordions</a></li>
                              <li><a href="elements-tabs.html">Tabs</a></li>
                              <li><a href="elements-testimonials.html">Testimonials</a></li>
                              <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                              <li><a href="elements-portfolio.html">Portfolio</a></li>
                              <li><a href="elements-cta.html">Call to Action</a></li>
                              <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                           </ul>
                        </li>
                     </ul>
                  </nav>
                  <!-- End .mobile-nav -->
               </div>
               <!-- .End .tab-pane -->
               <div class="tab-pane fade" id="mobile-cats-tab" role="tabpanel" aria-labelledby="mobile-cats-link">
                  <nav class="mobile-cats-nav">
                     <ul class="mobile-cats-menu">
                        <li><a class="mobile-cats-lead" href="#">Daily offers</a></li>
                        <li><a class="mobile-cats-lead" href="#">Gift Ideas</a></li>
                        <li><a href="#">Beds</a></li>
                        <li><a href="#">Lighting</a></li>
                        <li><a href="#">Sofas & Sleeper sofas</a></li>
                        <li><a href="#">Storage</a></li>
                        <li><a href="#">Armchairs & Chaises</a></li>
                        <li><a href="#">Decoration </a></li>
                        <li><a href="#">Kitchen Cabinets</a></li>
                        <li><a href="#">Coffee & Tables</a></li>
                        <li><a href="#">Outdoor Furniture </a></li>
                     </ul>
                     <!-- End .mobile-cats-menu -->
                  </nav>
                  <!-- End .mobile-cats-nav -->
               </div>
               <!-- .End .tab-pane -->
            </div>
            <!-- End .tab-content -->
            <div class="social-icons">
               <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
               <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
               <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
               <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div>
            <!-- End .social-icons -->
         </div>
         <!-- End .mobile-menu-wrapper -->
      </div>
      <!-- End .mobile-menu-container -->
      <!-- Sign in / Register Modal -->
      <?php
	  
	  
	  require("login-model.php");//login model here 
	  
	  
	  ?>
	  
	  
	  <!-- End .modal -->
      <!--<div class="container newsletter-popup-container mfp-hide" id="newsletter-popup-form">
         <div class="row justify-content-center">
             <div class="col-10">
                 <div class="row no-gutters bg-white newsletter-popup-content">
                     <div class="col-xl-3-5col col-lg-7 banner-content-wrap">
                         <div class="banner-content text-center">
                             <img src="assets/images/popup/newsletter/logo.png" class="logo" alt="logo" width="60" height="15">
                             <h2 class="banner-title">get <span>25<light>%</light></span> off</h2>
                             <p>Subscribe to the hscode eCommerce newsletter to receive timely updates from your favorite products.</p>
                             <form action="#">
                                 <div class="input-group input-group-round">
                                     <input type="email" class="form-control form-control-white" placeholder="Your Email Address" aria-label="Email Adress" required>
                                     <div class="input-group-append">
                                         <button class="btn" type="submit"><span>go</span></button>
                                     </div><!-- .End .input-group-append -->
      <!--</div><!-- .End .input-group -->
      <!--</form>
         <div class="custom-control custom-checkbox">
             <input type="checkbox" class="custom-control-input" id="register-policy-2" required>
             <label class="custom-control-label" for="register-policy-2">Do not show this popup again</label>
         </div><!-- End .custom-checkbox -->
      <!---</div>
         </div>
         <div class="col-xl-2-5col col-lg-5 ">
             <img src="assets/images/popup/newsletter/img-1.jpg" class="newsletter-img" alt="newsletter">
         </div>
         </div>
         </div>
         </div>
         </div>
         <!-- Plugins JS File -->
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <script src="assets/js/jquery.hoverIntent.min.js"></script>
      <script src="assets/js/jquery.waypoints.min.js"></script>
      <script src="assets/js/superfish.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/bootstrap-input-spinner.js"></script>
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script src="assets/js/jquery.plugin.min.js"></script>
      <script src="assets/js/jquery.countdown.min.js"></script>
      <!-- Main JS File -->
      <script src="assets/js/main.js"></script>
      <script src="assets/js/demos/demo-14.js"></script>
   </body>
</html>