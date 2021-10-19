<?php
class Product {
	protected string $name;
	protected int $price;

	public function __construct(string $name, int $price){
		$this->name = $name;
		$this->price = $price;
	}

	public function getProduct() {
		echo "The Product is $this->name and the price is $this->price".PHP_EOL ;
	}
}

class Item extends Product {

}

 ?>
