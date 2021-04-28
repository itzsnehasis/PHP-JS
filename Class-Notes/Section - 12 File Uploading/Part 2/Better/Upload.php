<?php
@mkdir("files");

//Validate Extension
$tmp = explode(".", $_FILES['myfile']['name']);
$ext = strtolower(trim(end($tmp)));

if($ext == "jpg" || $ext == "jpeg" || $ext == "gif" || $ext == "png" ) {

	$new_file = "files/".time()."_".$_FILES['myfile']['name'];
	copy($_FILES['myfile']['tmp_name'], $new_file);
	header("Location: index.php");

} else {
	print "<HR>Sorry, Invalid File Type!!!";
}