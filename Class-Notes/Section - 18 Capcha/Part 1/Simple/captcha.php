<?php

$im = imagecreatetruecolor(200, 30);
$red    = imagecolorallocate($im, 055, 65, 0);

$text = 'Testing...';
$font = '1.ttf';

imagettftext($im, 87,0, 100, 100, $red, $font, $text);

header("Content-type: image/jpeg");
imagejpeg($im);
?>
