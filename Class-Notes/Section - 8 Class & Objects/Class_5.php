<?php
class Shoe
{
	public $brand, $price;

	function describe() {
		print "<HR>Hello from $this->brand Shoe, buy me for Rs. $this->price";
	}

	function setValues($b, $p) {
		$this->brand = $b;
		$this->price = $p;
	}
}

$adidas = new Shoe;
$adidas->setValues("Adidas", 3999);
$adidas->describe();

$nike   = new Shoe;
$nike->setValues("Nike", 4999);
$nike->describe();
