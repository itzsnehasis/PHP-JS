<?php
session_start();
include "lib/connection.php";

//1 Insert into Customer Table
$sql = "INSERT INTO `customers` (`cust_id`, `cust_name`, `cust_email`, `cust_phone`, `cust_address`, `password`) VALUES (NULL, '$_POST[cust_name]', '$_POST[cust_email]', '$_POST[cust_phone]', '$_POST[cust_address]', 'password')";
$db->query($sql);

//2 Fetch Customer Id
	$cust_id = $db->insert_id ;  // last inserted id
	print $cust_id;
//3 Insert Into Order table
	$date = time();

$sql = "INSERT INTO `orders` (`order_id`, `cust_id`, `date`, `payment_info`, `delivery_name`, `delivery_phone`, `delivery_address`, `status`) VALUES (NULL, '2', '$date', '$_POST[payment_info]', '$_POST[delivery_name]', '$_POST[delivery_phone]', '$_POST[delivery_address]', 'new')" ;
$db->query($sql);

//4// Fetch Order Id
	$order_id = $db->insert_id;

//5//Same as ViewCart(Line 22 to 26)
	foreach($_SESSION['session_cart'] as $pid=>$quantity) {

	$sql = "SELECT * FROM `products` WHERE `id` = '$pid'";
	$res = $db->query($sql);
	$row = $res->fetch_array();

	//6// Insert Into CartItems
	$sql = "INSERT INTO `cartitems` (`id`, `order_id`, `pid`, `quantity`, `product_name`, `product_price`) VALUES (NULL, '$order_id', '$pid', '$quantity', '$row[name]', '$row[price]')";

	$db->query($sql);
}

//8// Show Some Message

if($_POST['payment_info']=="COD") {
	print "<h1>Thank You For Your Order</h1>";
}

// Session Clear
unset($_SESSION['session_cart']);










?>