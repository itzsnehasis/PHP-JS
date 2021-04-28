<?php

$im = imagecreatetruecolor(200, 30);
$red    = imagecolorallocate($im, 255, 0, 0);

$text = 'Testing...';
$font = '1.ttf';

imagettftext($im, 20, 0, 40, 24, $red, $font, $text);

header("Content-type: image/jpeg");
imagejpeg($im);
?>