<?php
Interface Brand {
	function nameBrand() :string;
}
Interface isMaintenance {
	function maintenance() :bool;
}
Interface Guarante {
	function getGuarante() : string;
}

Interface Car extends Guarante {
	function drive() :void;
	function getTire() :int;
}

class Avanza implements Car, Brand, isMaintenance {
	public function drive() :void {
		echo "Avanza is running now" .PHP_EOL;
	}

	public function getTire() :int {
		return 4;
	}
	public function getGuarante() :string {
		return "4 Years";
	}
	public function maintenance() : bool {
		return true;
	}
	public function nameBrand() :string {
		return "Toyota";
	}
}
