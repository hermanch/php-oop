<?php
class UIDesigner {
	var string $name;
	var string $skill;

	function __construct(string $name, string $skill){
		$this->name = $name;
		$this->skill = $skill;
	}

	function sayHalo($name){
		echo "Halo $name, nama saya $this->name, saya seorang $this->skill.". PHP_EOL;
	}
}

class FEDev extends UIDesigner {
	public function __construct(string $name){
		parent::__construct($name, "Front-end");
	}

	function sayHalo($name){
		echo "Halo $name, saya $this->name, nanti saya akan berkomukasi dengan kamu." .PHP_EOL;
	}

}

 ?>
