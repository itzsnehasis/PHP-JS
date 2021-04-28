<?php
    if(strlen($_GET['keyword'])<1){
        die();
    }
    $db  = new mysqli("localhost", "root", NULL, "school");
    $sql = "SELECT * FROM `student` WHERE `name` LIKE '%$_GET[keyword]%'" ;
    $res = $db->query($sql);
    while($row = $res->fetch_array()){
        print $row['name'].'<br>';
    }
?>