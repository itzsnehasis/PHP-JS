<?php
  $im    =  imagecreatetruecolor(400,90);
  $text  =  getCode(8);
  for ($i = 0; $i <  strlen($text); $i++) {
      $font  =  "D:/Software/Xampp/htdocs/Fonts/".rand(4,3).".ttf";
      $color = imagecolorallocate($im, rand(10,255),rand(10,255), rand(10,255));
      imagettftext($im, 40, rand(-30,30), 35+$i*40, 60, $color, $font, $text[$i]);
      imagesetthickness($im,rand(1,4));
      imageline($im, rand(0,290), rand(0,90), rand(0,290)*2, rand(0,90)*2, $color);
  }
  header("Content-type: image/jpeg");
  imagejpeg($im);

  function getCode($length){
    $code = "";
    for($i = 0; $i < $length; $i++){
      $type = rand(1,3);

      if($type == 1) $code =  $code.chr(rand(65,90));
      if($type == 2) $code =  $code.rand(0,9);
      if($type == 3) $code =  $code.chr(rand(97,122));
    }

    return $code;

  }
?>
