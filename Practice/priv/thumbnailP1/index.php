<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $file   = "img/IMG_20201230_080250.jpg";
      $source =  imagecreatefromjpeg($file);
      $thumb  =  imagecreatetruecolor(100,100);

      $width  = imagesx($source);
      $height = imagesy($source);

      imagecopyresampled($thumb, $source, 0,0, 0,0, 100,100, $width,$height);
      imagejpeg($thumb, "thumbimg/thumb.jpg");
    ?>
    <img src = "thumbimg/thumb.jpg">
  </body>
</html>
