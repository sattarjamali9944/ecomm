<?php
if(isset($_GET['del_id']))
{//delete city id 
     $sql = "DELETE FROM  add_delivery_category WHERE delivery_cat_id=".$_GET['del_id'];
     mysqli_query($conn,$sql)or die(mysqli_error($conn));
	 ?>
       <div class="alert alert-danger">	 
	 <?php echo 'Delivery category is deleted successfully.';?>
	 </div>
<?php 
}
?>