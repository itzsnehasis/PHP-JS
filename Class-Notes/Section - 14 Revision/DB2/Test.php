<?php

for($i=1; $i<=120; $i++)
	print "<br>$i Hello, I am ". $_SERVER['PHP_SELF'];

//Dont have any output before header.

header("Location: https://google.com");