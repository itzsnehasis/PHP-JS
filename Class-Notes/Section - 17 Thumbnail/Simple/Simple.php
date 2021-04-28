<?php

$file = "pics/Wallpaper.jpg";

$source = imagecreatefromjpeg($file);
$thumb  = imagecreatetruecolor(100, 60);

$width  = imagesx($source );
$height = imagesy($source);

imagecopyresampled($thumb, $source,  0,0,  0,0,  100, 60, $width, $height);

imagejpeg($thumb, "thumb.jpg");

?>
<A HREF = "pics/Wallpaper.jpg"><IMG SRC = "thumb.jpg"></A>