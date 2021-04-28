<?php
    include "connection.php";
    $eid = $_GET['eid'];
    $name = $_GET['name'];
    $contact = $_GET['contact'];
    $gender = $_GET['gender'];
    $course = $_GET['course'];
    //print "changing .. $eid, $name, $contact, $gender, $course";
    $sql = "UPDATE `student2` SET `name`='$name', `contact`='$contact', `gender`='$gender', `course`='$course' WHERE `id` = '$eid'";
    $res = $db->query($sql);
    include "./listing.php";
?>