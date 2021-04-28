<?php

$im  = imagecreatefromjpeg("noise.jpg");
$red = imagecolorallocate($im, rand(0,100), rand(0,100), rand(0,100));

$text = rand(11111,99999);
$font = 'Fonts/'.rand(1,7).'.ttf';

imagettftext($im, 40, 0, 60, 54, $red, $font, $text);

header("Content-type: image/jpeg");
imagejpeg($im);
?>