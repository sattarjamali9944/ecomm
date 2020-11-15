<?php
//this file is made for ajax cart system and this file for update quantity
require("include/conn.php");//connection file 
$cart_id=$_POST["cart_id"];
$cart_change=$_POST["cart_change"];


$update=mysqli_query($conn,"update cart set qty='".$cart_change."' where cart_id='".$cart_id."'")
 or die(mysqli_error($conn));//aja
 
 

?>