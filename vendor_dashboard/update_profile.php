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
					<h3 class="page-title">Update Your Profile</h3>
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

<?php


$update_query=mysqli_query($conn,"select * from vendor  
where vendor_id='".$_SESSION['vendor_id']."'") or die(mysqli_error($conn));
if($fetch_data=mysqli_fetch_array($update_query)){

$first_name=$fetch_data["vendor_first_name"];
$last_name=$fetch_data["vendor_first_name"];
$vendor_ntn_number=$fetch_data["vendor_ntn_number"];
$vendor_company_name=$fetch_data["vendor_company_name"];
$vendor_cnic=$fetch_data["vendor_cnic"];
$company_address=$fetch_data["vendor_address"];
$personal_address=$fetch_data["vendor_personal_address"];
$email=$fetch_data["vendor_email"];
$phone=$fetch_data["vendor_phone"];

?>

<form action="../admin/plugin/update_vendor_registration.php" method="post"
						enctype="multipart/form-data"
						>
		                	<div class="row">
							<div class="col-lg-2"></div>
		                		<div class="col-lg-8">
		                			<h2 class="checkout-title">Update Your Profile</h2><!-- End .checkout-title -->
		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>First Name *</label>
		                <input type="text" class="form-control" name="first_name"
						placeholder="First Name" value="<?php echo $first_name;?>" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Last Name *</label>
		 <input type="text" name="last_name" placeholder="Last Name" value="<?php echo $last_name;?>" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->
										    <div class="row">
                                            <div class="col-sm-6">
	            						<label>Company Name / Vendor Name</label>
	            						<input type="text" name="company_name" 
										Placeholder="Company Name" value="<?php echo $vendor_company_name;?>" class="form-control">
                                         </div>
										 <div class="col-sm-6">
										 <label>NTN Number</label>
										 <input type="text" name="ntn" class="form-control" value="<?php echo $vendor_ntn_number;?>" Placeholder="You NTN Number">
										 
										 </div>
										 </div>
	            						<label>CNIC*</label>
	            						<input type="text" class="form-control" name="cnic" value="<?php echo $vendor_cnic;?>" Placeholder="123465789" required>

	            						<label>Company address / Vendor Address*</label>
	            						<input type="text" name="company_address" class="form-control" 
										placeholder="House number and Street name" value="<?php echo $company_address?>" required>
	            							<label>Personal address *</label>
										<input type="text" name="personal_address" class="form-control" 
										placeholder="Appartments, suite, unit etc ..." 
										value="<?php echo $personal_address;?>" required>

	            						

		                					
		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Email address *</label>
	        							<input type="email" name='email' 
										Placeholder="example@gmail.com" class="form-control"
                                     value="<?php echo $email;?>"
										required>
	</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Phone *</label>
		                						<input type="tel" name="phone" placeholder="Phone"
												value="<?php echo $phone;?>" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->
										<div class="row">
                                    <div class="col-sm-12">
									<div class="user-image mb-3 text-center">
        <div class="imgGallery" style="float:left;"> 
          <!-- Image preview -->
        </div>
      </div>
	  <div style="clear:both;">
<label>Image</label>
 <input type="file" name="fileUpload[]" class="form-control" 
 id="chooseFile" multiple>
        
      
</div>
</div>
	                					
	        							<!--<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="checkout-create-acc">
											<label class="custom-control-label" for="checkout-create-acc">Create an account?</label>
										</div><!-- End .custom-checkbox -->

										<!--<div class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input" id="checkout-diff-address">
											<label class="custom-control-label" for="checkout-diff-address">Ship to a different address?</label>
										</div><!-- End .custom-checkbox -->

	                					<!--<label>Order notes (optional)</label>
	        							<textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
		                		         -->
										 </br>
										 <div class="row">
										 <div class="col-lg-12">&nbsp;</div>
										 </div>
										 <div class="row">
										 <div class="col-lg-4">&nbsp;</div>
										 <div class="col-lg-4">
										 <button type="submit" name="billing-btn"
									class="btn btn-outline-primary-2 btn-order btn-block">
									Update Profile</button>
									</div>
									<div class="col-lg-4"></div>
									</div>
								</div><!-- End .col-lg-9 -->
		                		<div class="col-lg-2"></div>
		                	
	          </div><!-- End .row -->
            			</form>
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