<?php
  $im    = imagecreatetruecolor(200,90);
  $color = imagecolorallocate($im, 255,0,0);
  $text  = "Av4DF";
  $font  = "./font/1.ttf";
  imagettftext($im, 20, 0, 25 , 20, $color, $font, $text);
  header("content-type : image/jpg");
  imagejpeg($im);
?>
