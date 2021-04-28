<?php

print "<HR>Name: ". $_FILES['myfile']['name'];
print "<HR>Type: ". $_FILES['myfile']['type'];
print "<HR>Size: ". $_FILES['myfile']['size'];
print "<HR>Tmp Location: ". $_FILES['myfile']['tmp_name'];

@mkdir("files");

copy($_FILES['myfile']['tmp_name'], "files/".$_FILES['myfile']['name']);