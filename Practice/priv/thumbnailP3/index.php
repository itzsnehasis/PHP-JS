<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function makeThumb($file_name, $thumb_img_name, $max_thumb_width = 200, $max_thumb_height = 200){
        //Image validation
        $tmp                =  explode(".", $file_name);
        $ext                =  strtolower(trim(end($tmp)));

        $file               = "img/".$file_name;

        if     ($ext == "jpg" || $ext == "jpeg")
          $source           =  imagecreatefromjpeg($file);
        elseif ($ext == "png")
          $source           =  imagecreatefrompng($file);
        elseif ($ext == "gif")
          $source           =  imagecreatefromgif($file);
        else
          die("Invalid");

        $width              =  imagesx($source);
        $height             =  imagesy($source);

        $scale              = min($max_thumb_width/$width, $max_thumb_height/$height);
        $thumb_width        = $scale*$width;
        $thumb_height       = $scale*$height;
        $thumb              = imagecreatetruecolor($thumb_width,$thumb_height);

        imagecopyresampled($thumb,$source, 0,0, 0,0, $thumb_width,$thumb_height, $width,$height);
        imagejpeg($thumb, "thumbimg/".$thumb_img_name);
      }
      makeThumb("wall.jpg",                "t1.jpg");
      makeThumb("0855.png",                "t2.jpg");
      makeThumb("IMG_20201230_080250.jpg", "t3.jpg");
    ?>
    <a href = "img/wall.jpg"><img                src = "thumbimg/t1.jpg"></a>
    <a href = "img/0855.png"><img                src = "thumbimg/t2.jpg"></a>
    <a href = "img/IMG_20201230_080250.jpg"><img src = "thumbimg/t3.jpg"></a>
  </body>
</html>
