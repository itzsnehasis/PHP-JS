<?php
    $handle = fopen("myfile.txt", "r");
    $data   = '';
    while(!feof($handle)){
        $data = $data . fread($handle, 1024);
    }

    print $data;
?>