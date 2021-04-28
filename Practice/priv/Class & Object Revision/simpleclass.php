<?php
    class Phone{
        public $brand, $price;

        public function __construct($b, $p){
            $this->brand = $b;
            $this->price = $p;
        }

        public function describe(){
            print "<br>This phone is $this->brand and Price is $this->price";
        }

        public function __destruct()
        {
            print "<br>$this->brand";
        }
    }

    $redmi3s = new Phone("xioami", 6999);
    $redmi3s->describe();

    $redmi1s = new Phone("xvkjbvdk", 699);
    $redmi1s->describe();
    ?>

