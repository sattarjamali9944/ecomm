<?php
//this is add to cart through ajax and here we get the product id and quantity
session_start();
$_SESSION["user_id"];//user id 
$total=0;
require("include/conn.php");//this is connection file here we connect our database.
$product_id=$_POST["product_id"];//this is product id 
$quantity=$_POST["quantity"];
$already_in_session=mysqli_query($conn,"select * from cart where user_id='".$_SESSION["user_id"]."' and
product_id='".$product_id."'")or die(mysqli_error($conn));
$count_already_in_list=mysqli_num_rows($already_in_session);
if($count_already_in_list > 0){
if($fetch_cart=mysqli_fetch_array($already_in_session)){
$qty=$fetch_cart["qty"];
$qty++;
$update_cart=mysqli_query($conn,"update cart set qty='".$qty."' where user_id='".$_SESSION['user_id']."' and product_id='".$product_id."'
")or die(mysqli_error($conn));}}
else{
$cart_query=mysqli_query($conn,"INSERT INTO `cart` (`cart_id`, `user_id`, `product_id`, `qty`) 
VALUES (NULL, '".$_SESSION['user_id']."', '".$product_id."', '".$quantity."');");
}
$total_qty=mysqli_query($conn,"select * from cart where user_id='".$_SESSION["user_id"]."'")or 
die(mysqli_error($conn));
$count_qty=mysqli_num_rows($total_qty);
if($count_qty > 0){
while($fetch_qty=mysqli_fetch_array($total_qty)){
$total+=$fetch_qty["qty"];}}
echo $total;

?>