<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scal=1.0">
    <title>student</title>
    <link rel="stylesheet" href="./master.css">
  </head>
  <body>
    <div class = "left"></div>
    <table class = "table_style" cellspacing = 15px>
        <tr>
          <td>Roll</td>
          <td>Name</td>
          <td>Marks</td>
        </tr>
      <?php
        include "connect.php";
        $sql = "SELECT * FROM `student`";
        $res = $db->query($sql);
        while ($row = $res->fetch_array()) {
          print "
          <tr>
            <td>$row[roll]</td>
            <td>$row[name]</td>
            <td>$row[marks]</td>
          </tr>
          ";
        }
      ?>
    </table>
    <div class = "right"></div>
    <a href = "insert.php" class = "insert_button">+</a>
  </body>
</html>
