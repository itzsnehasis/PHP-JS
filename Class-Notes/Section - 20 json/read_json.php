<?php
  $file = file_get_contents("create.json");

  $json = json_decode($file);

foreach ($json->product as $value) {
  print "<br>$value->roll, $value->name, $value->marks";
}
 ?>
