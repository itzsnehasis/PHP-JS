<?php
    include "./connection.php";
    if(isset($_POST['submit'])){
        $sql = "INSERT INTO `reg`(`id`, `name`, `email`, `address`, `password`) VALUES (NULL, '$_POST[name]', '$_POST[email]', '$_POST[address]', '$_POST[password]')";
        $db->query($sql);
        header("location: login.php");
    }
?>