<?php

  class Simple {
    public $var1, $var2 ;

    public function add($var1, $var2){
      $this->sum = $var1+ $var2;
    }
  }

  $obj = new Simple;
  $obj->add(1,2);
  print $obj->sum;

?>
