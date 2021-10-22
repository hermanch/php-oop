<?php
trait Lower {
	function A(){
		echo "a".PHP_EOL;
	}
	function B(){
		echo "b".PHP_EOL;
	}
}

trait Upper {
	function A(){
		echo "A".PHP_EOL;
	}
	function B(){
		echo "B".PHP_EOL;
	}
}

class Font {
	use Lower, Upper {
		Lower::A insteadof Upper;
		Upper::B insteadof Lower;
	}
}

$font = new Font();
$font->A();
$font->B();
