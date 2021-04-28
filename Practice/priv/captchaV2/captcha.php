<?php
  session_start();
  header("Content-type: image/jpeg");
  $im                   = imagecreatetruecolor(300,90);
  $text                 = $_SESSION['captcha'] =  getCode(6);

  for ($i=0; $i < strlen($text) ; $i++) {
    $color = imagecolorallocate($im, rand(10,255),rand(10,255),rand(10,255));
    $font  = "D:/Software/Xampp/htdocs/Practice/captchaV2/Fonts/3.ttf";
    imagettftext($im, 40,rand(-30,30),50+$i*30,60, $color, $font, $text[$i]);
    imagesetthickness($im,rand(1,3));
    imageline($im, rand(0,300),rand(0,90), rand(0,300)*2,rand(0,90)*2, $color);
  }
  imagejpeg($im);

  function getCode($length){
    $code = "";
    for ($i = 0; $i < $length ; $i++) {
      $code =  $code.rand(0,9);
    }
    return $code ;
  }
?>
