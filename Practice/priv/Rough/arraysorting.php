<?php
    $array = [10, 99, 1, 89, 75, 12, 36];
    for($i=0; $i<count($array); $i++){
        for($j=$i+1; $j<count($array); $j++){
            if($array[$i]>$array[$j]){
                $temp      = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    foreach($array as $element){
        print $element." "; 
    }
?>