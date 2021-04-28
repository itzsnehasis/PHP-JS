<?php
$arr = ["Name"=>"swarna", "Eligibity"=>"Graduation"];
$a   = ["Place"=>"Indrapur", "Pin"=>"713405"];

$eq  = [$arr,$a];

$json = json_encode(array("CV"=>$eq));
print $json;
 ?>
