<?php
session_start();
//print_r($_POST);
if(isset($_SESSION['session_cart'])) {
	$cart = $_SESSION['session_cart']; // 1=>10
}
else
 	$cart = [];

if(isset($_POST['quantity']) && isset($_POST['pid'])) {
	$pid      = $_POST['pid'];  //2 =>100
	$quantity = $_POST['quantity'];

	$cart[$pid] = $quantity; 
}

if(isset($_GET['del_id'])) {
	$del_id = $_GET['del_id'];
	unset($cart[$del_id]);
}

$_SESSION['session_cart'] = $cart;  // 1 => 10  2=>100
//print_r($_SESSION);

header("location:viewcart.php");
?>