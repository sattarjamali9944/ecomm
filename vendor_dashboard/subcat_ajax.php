
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script>
						$(document).ready(function(){
					
					     $("#sub_catid").change(function(){	
             						 
						var sub_cat_id=$("#sub_catid").val();
					 $.ajax({
            type: "POST",
            url: "third_cat_ajax.php",
            data: {sub_cat_id:sub_cat_id},
            //dataType: "JSON",
            success: function(data) {
           $("#cart").html(data);
				$("#result2").html(data);
             
   		           
   		    
   		    
            },
            error: function(err) {
          
            }
        });
						 
						 });
						 });
					</script>

<?php
require("../include/conn.php");

 $main_cat_id=$_POST["main_cat_id"];
?>
<label>Choose Sub  Category</label>
<?php 

$get_single_category=mysqli_query($conn,"SELECT * FROM sub_catogory

where cat_id='".$main_cat_id."'
") or die(mysqli_error($conn));//main category 
$count_categories=mysqli_num_rows($get_single_category);//count of categories 
if($count_categories > 0){//if count  greater than 0 
?>
<select name="sub_cat" class="form-control"

id="sub_catid"
>
<?php
	
	while($fetch=mysqli_fetch_array($get_single_category)){//start while loop here
	$cat_id=$fetch["sub_cat_id"];//sub cat id 
	$sub_catname=$fetch["sub_catname"];//subcat name 
	
?>
<option value="<?php echo $cat_id;?>"><?php echo $sub_catname;?></option>

<?php
	}//end of while loop
}//end of file if
?>

</select>