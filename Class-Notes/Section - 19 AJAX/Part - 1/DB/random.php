<?php


$db = new MySQLi("localhost", "root", NULL, "Company");

$sql = "SELECT * FROM `JobSeekers` WHERE `fullname` LIKE '%$_GET[keyword]%'  OR `city` LIKE '%$_GET[keyword]%' LIMIT 0,10";
$res = $db->query($sql);
while($row = $res->fetch_object()) {

	print "<HR>$row->id, ".setColor($row->fullname).", ".setColor($row->city);
}

function setColor($str)
{
	$k = $_GET['keyword'];
	return str_ireplace($k, "<SPAN STYLE = \"background: pink;\">$k</SPAN>", $str); 
}

