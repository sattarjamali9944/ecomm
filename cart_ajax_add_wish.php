<?php
//this is add to cart through ajax and here we get the product id and quantity
session_start();
$_SESSION["user_id"];//this hot code of user id suppose here user id one 
$total=0;
require("include/conn.php");//this is connection file here we connect our database.
$wish_id=$_POST["wish_id"];//this is product id 
$already_in_session=mysqli_query($conn,"select * from wishlist where user_id='".$_SESSION["user_id"]."' and
product_id='".$wish_id."'")or die(mysqli_error($conn));//count the number of rows 
$count_already_in_list=mysqli_num_rows($already_in_session);
if($count_already_in_list > 0){//set for alert when the list is alreday in whishlist
?>
<script>alert("alert this product is already in list");</script>
<?php  }
else{
$wish_query=mysqli_query($conn,"INSERT INTO `wishlist` (`wishlist_id`, `user_id`, `product_id`) 
VALUES (NULL, '".$_SESSION['user_id']."', '".$wish_id."')")or die(mysqli_error($conn));
}

$total_wishlist_qty=mysqli_query($conn,"select * from wishlist where user_id='".$_SESSION["user_id"]."'")or 
die(mysqli_error($conn));
echo $wcount_qty=mysqli_num_rows($total_wishlist_qty);
?>