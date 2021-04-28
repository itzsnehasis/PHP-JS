<?php


$handle = fopen("https://www.flowersnfruits.com/public/templatefnf/image/mob_bk.jpg", "r");
$data = "";

while(!feof($handle)) {
	$data .= fread($handle, 1024);
}
fclose($handle);

header("Content-type: image/jpg");
print $data;


//Save Flower Locally!
$fp = fopen("MyFlower.jpg", "w");
fwrite($fp, $data);
fclose($fp);
