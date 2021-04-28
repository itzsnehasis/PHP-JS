<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      @mkdir("files");
      $file = "files/".$_FILES['myfile']['name'];
      copy($_FILES['myfile']['tmp_name'],$file);
      //print $_FILES['myfile']['tmp_name'];
      header("location: index.php");
    ?>
  </body>
</html>
