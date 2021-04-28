<?php
$im  = imagecreatefromjpeg("noise.jpg");
$text = getRandomCode(rand(3,8));

for($i=0; $i<strlen($text); $i++) {

	//$font  =  "C:\Windows\Fonts/".rand(4,3).".ttf";
	$font  =  "C:\Windows\Fonts/BASKVILL.TTF";
	$color = imagecolorallocate($im, rand(0,100), rand(0,100), rand(0,100));

	imagettftext($im, 40, rand(-30,30), 60+$i*30, 54, $color, $font, $text[$i]);
	imagesetthickness($im, rand(1,5));

	$line_x1 = rand(0,200);
	$line_y1 = rand(0,75);
	$line_x2 = $line_x1+rand(0,200);
	$line_y2 = $line_y1+rand(0,75);

	imageline($im, $line_x1,$line_y1, $line_x2, $line_y2, $color);
}
header("Content-type: image/jpeg");
imagejpeg($im);

function getRandomCode($length)
{
	$code = "";
	for($i=1; $i<=$length; $i++) {

		$rand = rand(1,3);
		if($rand==1) $code .= rand(0,9);
		if($rand==2) $code .= chr(rand(65,90));
		if($rand==3) $code .= chr(rand(97,122));
	}
	return $code;
}

?>
