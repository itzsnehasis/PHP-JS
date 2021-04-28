<?php
@mkdir("files");

$db = new MySQLi("localhost", "root", NULL, "1PM");

//Validate Extension
$tmp = explode(".", $_FILES['myfile']['name']);
$ext = strtolower(trim(end($tmp)));

if($ext == "jpg" || $ext == "jpeg" || $ext == "gif" || $ext == "png" ) {

	$new_file = "files/".time()."_".$_FILES['myfile']['name'];
	copy($_FILES['myfile']['tmp_name'], $new_file);


	$sql = "INSERT INTO `Pictures` (`title`, `path`) VALUES ('$_POST[title]', '$new_file') ";
	$db->query($sql);
	header("Location: index.php");

} else {
	print "<HR>Sorry, Invalid File Type!!!";
}