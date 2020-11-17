<?php
if(isset($_GET['del_id']))
{//delete city id 
     $sql = "DELETE FROM city  WHERE city_id=".$_GET['del_id'];
     mysqli_query($conn,$sql)or die(mysqli_error($conn));
	 ?>
       <div class="alert alert-danger">	 
	 <?php echo 'City is deleted successfully.';?>
	 </div>
<?php 
}
?>