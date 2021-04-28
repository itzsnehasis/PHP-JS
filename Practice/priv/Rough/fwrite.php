<?php
    $data   = "hello World";
    $handle = fopen("myfile.txt", "w");
    fwrite($handle, $data);
    fclose($handle);
    print 'done';
?>