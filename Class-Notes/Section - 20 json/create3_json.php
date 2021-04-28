<?php
  $db =new mySQLi("localhost","root","","fresh");

  $sql = "SELECT * FROM `ms`";
  $res = $db->query($sql);
while ($row= $res->fetch_array()) {
  $rows[] = [
          "roll"=>$row['roll'],
          "name"=>$row['name'],
          "marks"=>$row['marks']
        ];
}

$json = json_encode(array("product"=>$rows));

$handle = fopen("create.json", "w");
          fwrite($handle,$json);
print "hoiagacha!!!";
 ?>
