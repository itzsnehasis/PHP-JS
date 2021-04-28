<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
        @mkdir("files");
        $tmp       = explode(".", $_FILES['myfile']['name']);
        $extension = strtolower(trim(end($tmp)));
        if ($extension == "jpg" || $extension == "jpeg" || $extension == "gif" || $extension == "png") {
          $file = "files/".$_FILES['myfile']['name'];
          copy($_FILES['myfile']['tmp_name'],$file);
          header("location: index.php");
        }
        else
          print "Invalid File Type";
    ?>
  </body>
</html>
