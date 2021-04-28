<?php
    $a = '123.45xy';
    print gettype($a).'<hr>';
    $b = (double) $a;
    print $b.gettype($b);
    $c = (int) $a;
    print $c;
?>