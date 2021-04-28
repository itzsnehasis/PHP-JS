<?php

$data = file_get_contents("Pic.png");

header("Content-type: image/png");
print $data;