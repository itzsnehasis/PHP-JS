<?php

class Phone 
{
	private $brand, $price, $memory;

	public function Phone($b, $p, $m) {  //Constructor
		$this->brand  = $b;
		$this->price  = $p;
		$this->memory = $m;
	}

	public function describe() {
		print "<HR> Hello, I am a $this->brand Phone, my Price is $this->price for a $this->memory GB Model";
	}
}

$moto = new Phone("Motorola", 12000, 32);
$moto->describe();