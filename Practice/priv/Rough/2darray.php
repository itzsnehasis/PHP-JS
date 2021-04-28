<?php
    $array1     = ["snehasis", "swarna", "shovik"];
    $array2     = [10, 1, 22, 36];
    $array3     = ["kohli", "abd"];

    $mix        = [$array1, $array2, $array3];
    
    foreach($mix as $value){
        foreach($value as $element)
            print $element.' ';
        print '<br>';
    }
?>