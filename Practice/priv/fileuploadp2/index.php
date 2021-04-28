<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action = "upload.php" method="post" enctype = "multipart/form-data">
      <input type = "file"   name = "myfile">
      <input type = "submit" value = "Upload">
      <br>
      <hr>
      <?php
        $handle = @opendir("files");
        while ($file = @readdir($handle)) {
          if($file == "." || $file == "..")
            continue;

            print "<img src = \"files/$file\" width = 100>";
        }
      ?>
    </form>
  </body>
</html>
