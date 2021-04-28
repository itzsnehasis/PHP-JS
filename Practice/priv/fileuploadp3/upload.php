<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    @mkdir("files");
    $temp      = explode(".", $_FILES['myfile']['name']);
    $extension = strtolower(trim(end($temp)));

      if ($extension == "jpg" || $extension == "jpeg" || $extension == "gif" || $extension == "png") {
        $file = "files/".$_POST['name'];
        copy($_FILES['myfile']['tmp_name'], $file);
        $db   =  new MySQLi("localhost", "root", "", "pictures");
        $sql  = "INSERT INTO `pictures` (`id`, `path`) VALUES('0','$file')";
        $db->query($sql);
        header("location: index.php");
      }
      else
        print "Invalid File Type";
    ?>
  </body>
</html>
