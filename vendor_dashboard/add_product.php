<?php
session_start();
require("../include/conn.php");
if(isset($_SESSION["vendor_id"]) && isset($_SESSION["token"])){

?>


<!doctype html>
<html lang="en">

<head>
	<title>Add Products</title>
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
					<h3 class="page-title">Add Main Categories</h3>
					<div class="row">
						<div class="col-md-12">
							<!-- BASIC TABLE -->
							<div class="panel">
								
								<div class="panel-body">
<script>
						$(document).ready(function(){
					
					     $("#change_main_cat").change(function(){	
             						 
						var main_cat_id=$("#change_main_cat").val();
					 $.ajax({
            type: "POST",
            url: "subcat_ajax.php",
            data: {main_cat_id:main_cat_id},
            //dataType: "JSON",
            success: function(data) {
           $("#cart").html(data);
				$("#result").html(data);
             
   		           
   		    
   		    
            },
            error: function(err) {
          
            }
        });
						 
						 });
						 });
					</script>	 
<div class="row">
<div class="col-sm-12" style="float:left;">
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
<h1>Add Product Form</h1>

<form action="plugin/add_propuct.php" method="post" enctype="multipart/form-data">
 
 <div class="form-group">
<label>Choose Main Category</label>
<?php 

$get_single_category=mysqli_query($conn,"SELECT * FROM main_catogories") or die(mysqli_error($conn));//main category 
$count_categories=mysqli_num_rows($get_single_category);//count of categories 
if($count_categories > 0){//if count  greater than 0 
?>
<select name="main_cat" class="form-control"

id="change_main_cat"
>
<?php
	
	while($fetch=mysqli_fetch_array($get_single_category)){//start while loop here
	$cat_id=$fetch["cat_id"];//cat id 
	$cat_name=$fetch["cat_name"];//cat name 
	$cat_icon=$fetch["icon"];//icon
	$cat_image=$fetch["cat_image"];
?>
<option value="<?php echo $cat_id;?>"><?php echo $cat_name;?></option>

<?php
	}//end of while loop
}//end of file if
?>

</select>

</div>
 <div class="form-group" id="result">
 </div>
<div class="form-group" id="result2">
 </div>
 
 <div class="form-group">
<label>Product Name</label>
<input type="text" name="pro_name" class="form-control" placeholder="Product Name">
</div>
 <div class="form-group">
<label>Product Description</label>
<textarea name="description" class="form-control"></textarea>
</div>
 <div class="form-group">
<label>Sale/Discount</label>
<input type="text" name="sale" class="form-control" placeholder="Discount">
</div>
 <div class="form-group">
<label>Price</label>
<input type="text" name="price" class="form-control" placeholder="Price">
</div>
<?php
$get_single_delivery=mysqli_query($conn,"SELECT * FROM add_delivery_category") or die(mysqli_error($conn));//delivery query
$count_cities=mysqli_num_rows($get_single_delivery);//count of delivery 
if($count_cities > 0){//if count  greater than 0
?>
<div class="form-group">

<label>Delivery Weight(for delivery charges)</label>
<select class="form-control" name="delivery_cat_id">
<?php
	
	while($fetch=mysqli_fetch_array($get_single_delivery)){
	$delivery_id=$fetch["delivery_cat_id"];//delivery id 
	$delivery_name=$fetch["delivery_cat_name"];//delivery name 
	?>
<option value="<?php echo $delivery_id?>"><?php echo $delivery_name;?></option>

<?php
	}//end of while loop

?>
</select>
</div>
<?php
}

?>

<div class="user-image mb-3 text-center">
        <div class="imgGallery" style="float:left;"> 
          <!-- Image preview -->
        </div>
      </div>

 <div class="form-group" style="clear:both;">
<label>Image</label>
 <input type="file" name="fileUpload[]" class="custom-file-input" 
 id="chooseFile" multiple>
        <label class="custom-file-label" for="chooseFile">Select file</label>
      
</div>
 <div class="form-group">
<input type="submit" name="btn" class="btn btn-primary">
</div>
</form>
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
	
  <script>
    $(function() {
    // Multiple images preview with JavaScript
    var multiImgPreview = function(input, imgPreviewPlaceholder) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder)
					.css({"width": "100px", "height": "100px",
					"border-radius":"100px"}).addClass("fa fa-close");
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

      $('#chooseFile').on('change', function() {
        multiImgPreview(this, 'div.imgGallery');
      });
    });    
  </script>

  
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