<?php
$hello = new class("Hanasa") {
	var string $name ;

	function __construct($name){
		$this->name = $name;
	}
	function sayHello(){
		echo "hello $this->name" .PHP_EOL;
	}
};
$hello->sayHello();
