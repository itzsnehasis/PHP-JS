<?php
    include "./connection.php";
    session_start();

    if(isset($_POST['submit'])){
        $sql    = "SELECT * FROM `reg` WHERE `email` = '$_POST[email]' AND `password` = '$_POST[password]'";
        $res    = $db->query($sql);
        $count  = mysqli_num_rows($res);
        
        if($count > 0){
            $row = $res->fetch_array();
            $_SESSION['userid'] = $row['id'];
            header("location: profile.php");
        }

        else
           header("location: login.php");  
    }
?>