<?php

$im  = imagecreatetruecolor(200, 40);

$text = rand(0,9). chr(rand(65,90)).rand(0,9). chr(rand(65,90)).rand(0,9);



for($i=0; $i<strlen($text); $i++) {
	$color = imagecolorallocate($im, rand(10,255), rand(10,255), rand(10,255));
	
	//$font = rand(1,3). ".ttf";
	//$font = "C:/Xampp/htdocs/Captcha/Better/1.ttf";
	
	$font = "/Volumes/D/WWW/1PM/Captcha/Better/".rand(1,3).".ttf";

	imagettftext($im, 20, rand(-20,20), 40+$i*30, 34, $color, $font, $text[$i]);
}

header("Content-type: image/jpeg");
imagejpeg($im);
?>