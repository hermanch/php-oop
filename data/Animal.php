<?php
namespace Animal;

abstract class Animal{
	public string $name;
	public function __construct(string $name){
		$this->name = $name;
	}

	abstract public function run();
}

class Cat Extends Animal{
	public function run(){
		echo "$this->name is running" .PHP_EOL;
	}
}
