<?php
	
$data = ["Hello", "Bye", 10, true, 20.56, "Thanks!"];

$data[]   = "This";
$data[10] = "Is";
$data[]   = "A";
$data[]   = "Test";
$data[]   = 9;

foreach($data as $key=>$value){
    print  $key.'='.$value.'<br>';
}

?>
