<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action = "upload.php" method = "post" enctype = "multipart/form-data">
      <input type = "file"   name  = "myfile">
      <input type = "text"   name  = "name">
      <input type = "submit" value = "Upload">

      <?php
        $db     =  new MySQLi("localhost", "root", "", "pictures");
        $sql    = "SELECT * FROM `pictures`";
        $result = $db->query($sql);
        while ($row = $result->fetch_array()) {
          print "<img src = \"$row[path]\" width = 100>";
        }
      ?>
    </form>
  </body>
</html>



