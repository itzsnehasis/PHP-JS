<?php

$file = "pics/subcategory_cartoons.gif";

//Find Extension
$tmp = explode(".", $file);
$ext = trim(strtolower(end($tmp)));

if($ext=="jpg"||$ext=="jpeg")
	$source = imagecreatefromjpeg($file);
elseif ($ext=="png") 
	$source = imagecreatefrompng($file);
elseif ($ext=="gif")
	$source = imagecreatefromgif($file);
else
	die ("Invalid Image Extension");

$width  = imagesx($source );
$height = imagesy($source);

$MAX_THUMB_WIDTH  = 100;
$MAX_THUMB_HEIGHT = 100;

$scale = min($MAX_THUMB_WIDTH/$width, $MAX_THUMB_HEIGHT/$height);

$thumb_width  = $scale*$width;
$thumb_height = $scale*$height;
$thumb  = imagecreatetruecolor($thumb_width, $thumb_height);

imagecopyresampled($thumb, $source,  0,0,  0,0,  $thumb_width, $thumb_height, $width, $height);

imagejpeg($thumb, "thumb.jpg");

?>
<IMG SRC = "thumb.jpg">