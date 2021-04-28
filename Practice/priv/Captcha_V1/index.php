<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Captcha</title>
    <link rel = "stylesheet" href="./master.css">
  </head>
  <body>
    <?php
      $file     = "pics/".rand(1,7).".jpg";
      $source   = imagecreatefromjpeg($file);
      $height   = imagesy($source)."px";
      $width    = imagesx($source)."px";
      $tmp      = explode("/",$file);
      $tmpslash = $tmp[1];
      $tmpdot   = explode(".",$tmpslash);
      $fileName = $tmpdot[0];

      if($fileName == 1)
        $name = 'Fabio';
      if($fileName == 2)
        $name = 'Harry';
      if($fileName == 3)
        $name = 'Juice';
      if($fileName == 4)
        $name = 'Virat';
      if($fileName == 5)
        $name = 'Linus';
      if($fileName == 6)
        $name = 'Richard';
      if($fileName == 7)
        $name = 'Wiz';

      if($flag = false)
        print "<h1>You Havent Cleared Captcha</h1>";

      print"
        <div style = \"height: $height; width : $width; border: 5px solid black; \">
          <img src = \"$file\">
        </div>
        <div style = \"height : 20px; width: $width; border: 5px solid black; text-align: center; font-weight: bold;\">
          Type $name
        </div>

        <form action = verify.php method=post>
          <input type = text   name  = entcap placeholder = \"Type Here\" required>
          <input type = hidden name = name value = $name>
          <input type = submit value = submit>
        </form>
      ";
    ?>
  </body>
</html>
