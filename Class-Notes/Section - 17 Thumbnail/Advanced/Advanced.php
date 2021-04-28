<?php
function MakeThumb($file, $thumb_path, $MAX_THUMB_WIDTH = 100, $MAX_THUMB_HEIGHT = 100 )
{
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

	$scale = min($MAX_THUMB_WIDTH/$width, $MAX_THUMB_HEIGHT/$height);

	$thumb_width  = $scale*$width;
	$thumb_height = $scale*$height;
	$thumb  = imagecreatetruecolor($thumb_width, $thumb_height);

	imagecopyresampled($thumb, $source,  0,0,  0,0,  $thumb_width, $thumb_height, $width, $height);

	imagejpeg($thumb,  $thumb_path);
}

MakeThumb("pics/subcategory_cartoons.gif", "t1.jpg", 50,50);
MakeThumb("pics/Face.jpg",                 "t2.jpg", 100,100);
MakeThumb("pics/WideFace.jpg",             "t3.jpg", 150,150);
?>
<IMG SRC = "t1.jpg">
<IMG SRC = "t2.jpg">
<IMG SRC = "t3.jpg">
