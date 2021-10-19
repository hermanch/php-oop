<?php
class UIDesigner {
	var string $name;
	var string $skill;

	function sayHalo($name){
		echo "Halo $name, nama saya $this->name, saya seorang $this->skill.". PHP_EOL;
	}
}

class FEDev extends UIDesigner {

}

 ?>
