<?php
    $name    = $_POST['name'];
    $contact = $_POST['contact'];
    $gender  = $_POST['gender'];
    $course  = $_POST['course'];

    /*print $name;
    print '<br>';
    print $contact;
    print '<br>';
    print $gender;
    print '<br>';
    print $course;*/  
    $db  = new mysqli("localhost", "root", NULL, "school");
    $sql = "INSERT INTO `student2` (`id`, `name`, `contact`, `gender`, `course`) VALUES (NULL, '$name', '$contact', '$gender', '$course');";
    $res = $db->query($sql);
    header("location: listing.php");

?>