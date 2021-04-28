<?php

session_start();

$db = new MySQLi("localhost", "root", "", "a_monginis");

//Security!

foreach ($_POST as $key => $value) {
	if(!is_array($value))
		$_POST[$key] = addslashes($value);
}

foreach ($_GET as $key => $value) {
	$_GET[$key] = addslashes($value);
}
