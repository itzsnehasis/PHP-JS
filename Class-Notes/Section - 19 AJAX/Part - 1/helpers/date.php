<?php

$db = new MySQLi("localhost", "root", NULL, "a_monginis");

$sql = "SELECT * FROM products WHERE `name` LIKE '%$_GET[key]%' ";
$res = $db->query($sql);
while($row = $res->fetch_array()) {

	print "<HR> $row[id], $row[name], $row[price]";

}
?>