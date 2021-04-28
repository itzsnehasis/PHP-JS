<?php
    session_start();
    foreach($_SESSION['cart'] as $pid=>$quantity){
        if($pid == $_GET['id'])
            unset($_SESSION['cart'][$pid]);
    }
    header("location: viewcart.php");
?>