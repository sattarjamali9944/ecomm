<?php
if(isset($_GET['del_id']))
{
     $sql = "DELETE FROM main_catogories  WHERE cat_id=".$_GET['del_id'];
     mysqli_query($conn,$sql)or die(mysqli_error($conn));
	 ?>
       <div class="alert alert-danger">	 
	 <?php echo 'Deleted successfully.';?>
	 </div>
<?php 
}
?>